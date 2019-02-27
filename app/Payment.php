<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

class Payment1 extends Facade
{
     public  static   function getFacadeAccessor() { return 'payment'; }
}
