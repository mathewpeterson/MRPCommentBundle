<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MRP\Bundle\MRPCommentBundle\Event;

use MyCLabs\Enum\Enum;

/**
 * Class ThreadEvents
 *
 * @method static ThreadEvents PRE_PERSIST()
 * @method static ThreadEvents CREATE()
 * @method static ThreadEvents UPDATE()
 * @method static ThreadEvents DELETE()
 */
final class ThreadEvents extends Enum
{
    const PRE_PERSIST = 'mrp.mrp_comment_bundle.thread.pre_persist';
    const CREATE      = 'mrp.mrp_comment_bundle.thread.create';
    const UPDATE      = 'mrp.mrp_comment_bundle.thread.update';
    const DELETE      = 'mrp.mrp_comment_bundle.thread.delete';
}