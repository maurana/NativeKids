<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Psjuncts extends Model
{
    protected $fillable = ['pictures_id','sounds_id', 'categories_id'];    
    protected $hidden = [];

    public function pictures(): HasOne
    {
        return $this->hasOne(Players::class);
    }

    public function sounds(): HasOne
    {
        return $this->hasOne(Categories::class);
    }
}