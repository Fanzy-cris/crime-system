<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliceStation extends Model
{
    use HasFactory;
    public function town(){
        return $this->belongsTo(Town::class);
    }


    public function complaints(){
        return $this->hasMany(Complaints::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }




}
