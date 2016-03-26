<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
*
*vehicle model
*
*/
class Vehicle extends Model
{
    use SoftDeletes; 

   	protected $softDelete = true;//enabling the softdelete to true 

    protected $table = 'vehicle'; //table name
}
