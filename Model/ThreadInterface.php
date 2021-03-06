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
 * Interface ThreadInterface.
 */
interface ThreadInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id);

    /**
     * @return ThreadTypeInterface
     */
    public function getThreadType();

    /**
     * @param ThreadTypeInterface $threadType
     *
     * @return self
     */
    public function setThreadType(ThreadTypeInterface $threadType);

    /**
     * @return mixed
     */
    public function getThreadTypeId();

    /**
     * @param CommentableObjectInterface $object
     *
     * @return self
     */
    public function setThreadTypeId(CommentableObjectInterface $object);

    /**
     * @return \DateTime
     */
    public function getCreated();

    /**
     * @param \DateTime $created
     *
     * @return mixed
     */
    public function setCreated(\DateTime $created);

    /**
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * @param \DateTime $updated
     *
     * @return mixed
     */
    public function setUpdated(\DateTime $updated);
}
