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

use MyCLabs\Enum\Enum;

/**
 * Class CommentStatus
 *
 * @method static CommentStatus INACTIVE()
 * @method static CommentStatus ACTIVE()
 * @method static CommentStatus SPAM()
 * @method static CommentStatus FLAGGED()
 * @method static CommentStatus DELETED()
 */
final class CommentStatus extends Enum
{
    const INACTIVE = 0;
    const ACTIVE   = 1;
    const SPAM     = 2;
    const FLAGGED  = 3;
    const DELETED  = 4;
}