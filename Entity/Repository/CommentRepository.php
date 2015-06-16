<?php
/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MRP\Bundle\MRPCommentBundle\Entity\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;
use MRP\Bundle\MRPCommentBundle\Entity\Thread;
use MRP\Bundle\MRPCommentBundle\Exception\Thread\ThreadObjectNotSupported;
use MRP\Bundle\MRPCommentBundle\Model\Repository\CommentRepositoryInterface;
use MRP\Bundle\MRPCommentBundle\Model\ThreadInterface;

class CommentRepository extends EntityRepository implements CommentRepositoryInterface
{
    /**
     * @param ThreadInterface $thread
     *
     * @return ArrayCollection
     */
    public function findByThread(ThreadInterface $thread)
    {
        if (!$thread instanceof Thread) {
            throw new ThreadObjectNotSupported($thread);
        }

        return $this->findBy(['thread' => $thread]);
    }
}
