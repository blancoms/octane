<?php

namespace Laravel\Octane;

use Upscale\Swoole\Blackfire\Profiler;

final class SwooleBlackfireFactory
{
    /**
     * Create a new swoole blackfire profiler.
     *
     * @return Profiler
     */
    public static function profiler(): Profiler
    {
        return new Profiler();
    }

}
