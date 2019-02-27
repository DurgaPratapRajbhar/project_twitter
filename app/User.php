<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

  public function identities() {
   return $this->hasMany('App\SocialIdentity');
}
  
}
