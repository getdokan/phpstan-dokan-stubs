<?php

return \StubsGenerator\Finder::create()
    ->in( array(
        'source/dokan',
    ) )
    ->notPath('customizer')
    ->notPath('debug')
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['source/dokan'])
            ->files()
            ->depth('< 1')
            ->path('dokan.php')
    )
    ->sortByName(true)
;
