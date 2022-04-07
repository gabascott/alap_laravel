<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bejegyzes extends Model
{
    use HasFactory;

    public function tevekenyseg(){
        return $this->hasOne(tevekenyseg::class, 'tevekenyseg_id');
    }
}
