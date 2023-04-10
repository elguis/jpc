<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Circonscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    public function circonscription()
    {
        return $this->belongsTo(Circonscription::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    protected $fillable = ['name', 'sexe', 'fonction', 'phone', 'circonscription_id', 'user_id'];
}
