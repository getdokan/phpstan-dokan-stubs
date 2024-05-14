<?php

return \StubsGenerator\Finder::create()
    ->in( array(
        'source/dokan-lite',
    ) )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/dokan-lite'])
            ->files()
            ->depth('< 1')
            ->path('dokan.php')
    )
    // ->notPath('customizer')
    // ->notPath('debug')
    ->sortByName(true)
;
