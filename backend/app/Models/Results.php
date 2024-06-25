<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Results extends Model
{
    protected $fillable = ['score','players_id','categories_id'];    
    protected $hidden = [];

    public function players(): HasOne
    {
        return $this->hasOne(Players::class);
    }

    public function categories(): HasOne
    {
        return $this->hasOne(Categories::class);
    }
}