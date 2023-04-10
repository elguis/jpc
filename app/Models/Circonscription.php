<?php

namespace App\Models;

use App\Models\Member;
use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Circonscription extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
