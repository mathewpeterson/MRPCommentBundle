<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('*.twig')
    ->in(__DIR__)
;

return Symfony\CS\Config\Symfony23Config::create()
    ->finder($finder)
;