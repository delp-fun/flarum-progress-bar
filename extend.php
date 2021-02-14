<?php

namespace ClarkWinkelmann\ComicSans;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/resources/less/forum/extension.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBcodes->addCustom(
                '[pbar]{TEXT}[/pbar]',
                '<progress id="progressBar" max="100" value="{TEXT}">'
            );
        })
];
