<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MRP\Bundle\MRPCommentBundle\Exception\Thread;

/**
 * Class ThreadNotFoundException.
 */
class ThreadNotFoundException extends AbstractThreadException
{
    /**
     * @var
     */
    protected $threadId;

    /**
     * @param string $threadId
     */
    public function __construct($threadId)
    {
        $this->threadId = $threadId;

        parent::__construct('The thread you were looking for was not found.', 404);
    }

    /**
     * @return string
     */
    public function getThreadId()
    {
        return $this->threadId;
    }
}
