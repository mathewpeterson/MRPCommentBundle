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

/**
 * Interface CommentManagerInterface
 */
interface CommentManagerInterface
{
    /**
     * @param $id
     * @return CommentInterface
     */
    public function find($id);

    /**
     * @param ThreadInterface $thread
     *
     * @return ArrayCollection
     */
    public function findAllByThread(ThreadInterface $thread);

    /**
     * @param ThreadInterface $thread
     * @param CommentInterface $parentComment
     *
     * @return CommentInterface
     */
    public function create(ThreadInterface $thread, CommentInterface $parentComment);

    /**
     * @param CommentInterface $comment
     *
     * @return null
     */
    public function save(CommentInterface $comment);

    /**
     * @param CommentInterface $comment
     *
     * @return null
     */
    public function delete(CommentInterface $comment);

    /**
     * @param CommentInterface $comment
     *
     * @return boolean
     */
    public function flag(CommentInterface $comment);
}