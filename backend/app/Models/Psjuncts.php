<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Psjuncts extends Model
{
    protected $fillable = ['pictures_id','sounds_id', 'categories_id'];    
    protected $hidden = [];

    public function pictures(): HasMany
    {
        return $this->hasMany(Players::class);
    }

    public function sounds(): HasMany
    {
        return $this->hasMany(Categories::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class);
    }
}