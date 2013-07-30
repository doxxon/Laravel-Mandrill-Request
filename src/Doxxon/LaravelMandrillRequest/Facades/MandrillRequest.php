<?php namespace Doxxon\LaravelMandrillRequest\Facades;

use Illuminate\Support\Facades\Facade;

class MandrillRequest extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mandrillrequest'; }

}