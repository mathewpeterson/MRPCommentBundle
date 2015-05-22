<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MRP\Bundle\MRPCommentBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectRepository;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class AbstractCommentManager implements CommentManagerInterface
{
    /**
     * @var string
     */
    protected $commentClass;

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
     * @return CommentInterface
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param ThreadInterface $thread
     *
     * @return ArrayCollection
     */
    public function findAllByThread(ThreadInterface $thread)
    {
        return $this->repository->findBy(['thread' => $thread]);
    }

    /**
     * @param ThreadInterface $thread
     * @param CommentInterface $parentComment
     *
     * @return CommentInterface
     */
    public function create(ThreadInterface $thread, CommentInterface $parentComment)
    {
        /** @var CommentInterface $comment */
        $comment = new $this->commentClass();
        $comment->setThread($thread);

        if (!$parentComment) {
            $comment->setParent($parentComment);
        }

        return $comment;
    }

    /**
     * @param CommentInterface $comment
     *
     * @return null
     */
    abstract public function save(CommentInterface $comment);

    /**
     * @param CommentInterface $comment
     *
     * @return null
     */
    abstract public function delete(CommentInterface $comment);

    /**
     * @param CommentInterface $comment
     *
     * @return boolean
     */
    public function flag(CommentInterface $comment)
    {
        $comment->setStatus(CommentStatus::FLAGGED());

        return $this->save($comment);
    }
}