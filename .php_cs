<?php

/**
 * This file is part of MRPCommentBundle.
 *
 * (c) Mathew Peterson <mathewpeterson@me.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('*.twig')
    ->in(__DIR__)
;

return Symfony\CS\Config\Symfony23Config::create()
    ->finder($finder)
;