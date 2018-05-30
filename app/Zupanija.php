<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @author Mrvic
 */
class Zupanija extends Model
{
  // nepotrebno ako oristimo php artisan make:model Zupanija -m  
  protected $table = 'zupanijas'; 
  
    public function mjesto()
    {
        return $this->hasMany('App\Mjesto');
    }
}
