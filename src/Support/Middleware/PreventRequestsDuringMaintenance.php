<?php

namespace Support\Middleware;

class PreventRequestsDuringMaintenance extends \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
