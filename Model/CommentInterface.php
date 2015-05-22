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

/**
 * Interface CommentInterface
 */
interface CommentInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return ThreadInterface
     */
    public function getThread();

    /**
     * @param ThreadInterface $thread
     *
     * @return self
     */
    public function setThread(ThreadInterface $thread);

    /**
     * @return AuthorInterface
     */
    public function getAuthor();

    /**
     * @param AuthorInterface $author
     *
     * @return self
     */
    public function setAuthor(AuthorInterface $author = null);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param $body
     *
     * @return self
     */
    public function setBody($body);

    /**
     * @return CommentInterface|null
     */
    public function getParent();

    /**
     * @param CommentInterface $comment
     *
     * @return self
     */
    public function setParent(CommentInterface $comment = null);

    /**
     * @return \DateTime
     */
    public function getCreated();

    /**
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created);

    /**
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * @param \DateTime $updated
     *
     * @return self
     */
    public function setUpdated(\DateTime $updated);

    /**
     * @return CommentStatus
     */
    public function getStatus();

    /**
     * @param CommentStatus $status
     *
     * @return self
     */
    public function setStatus(CommentStatus $status);
}