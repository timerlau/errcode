<?php

namespace Timerlau\Errcode\Facades;
use Illuminate\Support\Facades\Facade;

class Errcode extends Facade {
    
    protected static function getFacadeAccessor()
    { 
        return 'errcode'; 
    }
}