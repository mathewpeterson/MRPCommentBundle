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
 * Interface ThreadManagerInterface
 */
interface ThreadManagerInterface
{
    /**
     * @param $id
     *
     * @return ThreadInterface
     */
    public function create($id);

    /**
     * @param $id
     *
     * @return ThreadInterface
     */
    public function find($id);

    /**
     * @param ThreadInterface $thread
     *
     * @return null
     */
    public function save(ThreadInterface $thread);
}