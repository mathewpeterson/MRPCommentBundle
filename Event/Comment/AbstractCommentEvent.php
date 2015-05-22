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
use Symfony\Component\EventDispatcher\Event;

/**
 * Class AbstractCommentEvent
 */
abstract class AbstractCommentEvent extends Event implements CommentEventInterface
{
    /**
     * @var CommentInterface
     */
    protected $comment;

    /**
     * @var bool
     */
    protected $abortPersistence;

    /**
     * @param CommentInterface $comment
     */
    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return CommentInterface
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return null
     */
    public function abortPersistence()
    {
        $this->abortPersistence = true;
    }

    /**
     * @return bool
     */
    public function isPersistenceAborted()
    {
        return $this->abortPersistence;
    }
}