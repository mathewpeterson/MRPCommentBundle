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
 * Class CommentEvents.
 *
 * @method static CommentEvents PRE_PERSIST()
 * @method static CommentEvents CREATE()
 * @method static CommentEvents UPDATE()
 * @method static CommentEvents FLAG()
 * @method static CommentEvents DELETE()
 */
final class CommentEvents extends Enum
{
    const PRE_PERSIST = 'mrp.mrp_comment_bundle.comment.pre_persist';
    const CREATE = 'mrp.mrp_comment_bundle.comment.create';
    const UPDATE = 'mrp.mrp_comment_bundle.comment.update';
    const FLAG = 'mrp.mrp_comment_bundle.comment.flag';
    const DELETE = 'mrp.mrp_comment_bundle.comment.delete';
}
