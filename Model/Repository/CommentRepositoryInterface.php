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
use MRP\Bundle\MRPCommentBundle\Model\CommentInterface;
use MRP\Bundle\MRPCommentBundle\Model\ThreadInterface;

/**
 * Interface CommentRepositoryInterface
 */
interface CommentRepositoryInterface
{
    /**
     * @param $id
     *
     * @return CommentInterface
     */
    public function find($id);

    /**
     * @param ThreadInterface $thread
     *
     * @return ArrayCollection
     */
    public function findByThread(ThreadInterface $thread);
}