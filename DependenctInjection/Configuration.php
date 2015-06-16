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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder->root('mrp_comment')
            ->children()

                ->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->end()

                ->arrayNode('classes')->isRequired()
                    ->children()
                        ->arrayNode('model')->isRequired()
                            ->children()
                                ->scalarNode('thread')->isRequired()->end()
                                ->scalarNode('thread_repository')->isRequired()->end()
                                ->scalarNode('thread_manager')->isRequired()->end()
                                ->scalarNode('comment')->isRequired()->end()
                                ->scalarNode('comment_repository')->isRequired()->end()
                                ->scalarNode('comment_manager')->isRequired()->end()
                            ->end()
                    ->end()
            ->end()
        ;
    }
}
