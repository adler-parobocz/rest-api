<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
}
