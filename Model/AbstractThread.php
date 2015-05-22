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
 * Class AbstractThread
 */
abstract class AbstractThread implements ThreadInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var ThreadTypeInterface
     */
    protected $threadType;

    /**
     * @var int
     */
    protected $threadTypeId;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return ThreadInterface
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ThreadTypeInterface
     */
    public function getThreadType()
    {
        return $this->threadType;
    }

    /**
     * @param ThreadTypeInterface $threadType
     *
     * @return ThreadInterface
     */
    public function setThreadType(ThreadTypeInterface $threadType)
    {
        $this->threadType = $threadType;

        return $this;
    }

    /**
     * @return int
     */
    public function getThreadTypeId()
    {
        return $this->threadTypeId;
    }

    /**
     * @param CommentableObjectInterface $commentableObject
     *
     * @return ThreadInterface
     */
    public function setThreadTypeId(CommentableObjectInterface $commentableObject)
    {
        $this->threadTypeId = $commentableObject->getId();

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
     * @return ThreadInterface
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     *
     * @return ThreadInterface
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;

        return $this;
    }
}