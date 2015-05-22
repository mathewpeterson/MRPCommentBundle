<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MRP\Bundle\MRPCommentBundle\Model\Manager;

use Doctrine\Common\Persistence\ObjectRepository;
use MRP\Bundle\MRPCommentBundle\Model\ThreadInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class AbstractThreadManager.
 */
abstract class AbstractThreadManager implements ThreadManagerInterface
{
    /**
     * @var string
     */
    protected $threadClass;

    /**
     * @var ObjectRepository
     */
    protected $repository;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param $id
     *
     * @return ThreadInterface
     */
    public function create($id)
    {
        /** @var ThreadInterface $thread */
        $thread = new $this->threadClass();

        $thread->setId($id);

        return $thread;
    }

    /**
     * @param $id
     *
     * @return ThreadInterface
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param ThreadInterface $thread
     */
    abstract public function save(ThreadInterface $thread);
}
