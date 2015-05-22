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
 * Class AbstractComment.
 */
abstract class AbstractComment implements CommentInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var ThreadInterface
     */
    protected $thread;

    /**
     * @var AuthorInterface
     */
    protected $author;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var CommentInterface
     */
    protected $parent;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var\DateTime
     */
    protected $updated;

    /**
     * @var int
     */
    protected $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ThreadInterface
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param ThreadInterface $thread
     *
     * @return CommentInterface
     */
    public function setThread(ThreadInterface $thread)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * @return AuthorInterface
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param AuthorInterface $author
     *
     * @return CommentInterface
     */
    public function setAuthor(AuthorInterface $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return CommentInterface
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return CommentInterface
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param CommentInterface $parent
     *
     * @return CommentInterface
     */
    public function setParent(CommentInterface $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     *
     * @return CommentInterface
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     *
     * @return CommentInterface
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return CommentStatus
     */
    public function getStatus()
    {
        return new CommentStatus($this->status);
    }

    /**
     * @param CommentStatus $status
     *
     * @return CommentInterface
     */
    public function setStatus(CommentStatus $status)
    {
        $this->status = (int) $status->getValue();

        return $this;
    }
}
