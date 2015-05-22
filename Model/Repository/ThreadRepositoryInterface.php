<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MRP\Bundle\MRPCommentBundle\Model\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use MRP\Bundle\MRPCommentBundle\Model\ThreadInterface;
use MRP\Bundle\MRPCommentBundle\Model\ThreadTypeInterface;

/**
 * Interface ThreadRepositoryInterface
 */
interface ThreadRepositoryInterface
{
    /**
     * @return ThreadInterface
     */
    public function find($id);

    /**
     * @param ThreadTypeInterface $threadType
     * @return ArrayCollection
     */
    public function findByThreadType(ThreadTypeInterface $threadType);
}