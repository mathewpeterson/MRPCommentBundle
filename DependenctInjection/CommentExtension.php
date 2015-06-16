<?php
/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MRP\Bundle\MRPCommentBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class CommentExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $configs An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     *
     * @api
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (!in_array($config['db_driver'], ['orm', 'mongodb'])) {
            throw new \InvalidArgumentException(sprintf('Invalid mrp_comment.db_driver: %s', $config['db_driver']));
        }

        if ('orm' === $config['db_config']) {
            $thread_class = '';
            $thread_repository = '';
            $thread_manager = '';
        } else { //if ('mongodb' === $config['db_config'])

        }

        $this->setParameter($container, 'class.model.thread', '');
    }

    protected function setParameter(ContainerBuilder $container, $key, $value)
    {
        $container->setParameter(sprintf('mrp_comment.%s', $key), $value);
    }
}
