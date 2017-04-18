<?php namespace Karim88\Docusign\Facades;

use Illuminate\Support\Facades\Facade;

class Docusign extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docusign';
    }
}