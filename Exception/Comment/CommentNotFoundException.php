<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MRP\Bundle\MRPCommentBundle\Exception\Comment;

/**
 * Class CommentNotFoundException
 */
class CommentNotFoundException extends AbstractCommentException
{
    /**
     * @var string
     */
    protected $commentId;

    /**
     * @param string $commentId
     */
    public function __construct($commentId)
    {
        $this->commentId = $commentId;
        parent::__construct('The comment you are looking for was not found.', 404);
    }

    /**
     * @return string
     */
    public function getCommentId()
    {
        return $this->commentId;
    }
}