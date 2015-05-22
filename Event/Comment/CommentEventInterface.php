<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MRP\Bundle\MRPCommentBundle\Event\Comment;

use MRP\Bundle\MRPCommentBundle\Model\CommentInterface;

/**
 * Interface CommentEventInterface.
 */
interface CommentEventInterface
{
    /**
     * @return CommentInterface
     */
    public function getComment();

    /**
     */
    public function abortPersistence();

    /**
     * @return bool
     */
    public function isPersistenceAborted();
}
