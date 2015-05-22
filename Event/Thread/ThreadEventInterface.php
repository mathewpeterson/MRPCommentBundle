<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MRP\Bundle\MRPCommentBundle\Event\Thread;

use MRP\Bundle\MRPCommentBundle\Model\ThreadInterface;

/**
 * Class ThreadEventInterface
 */
interface ThreadEventInterface
{
    /**
     * @return ThreadInterface
     */
    public function getThread();
}