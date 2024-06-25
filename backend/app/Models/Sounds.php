<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sounds extends Model
{
    protected $fillable = ['name', 'file'];    
    protected $hidden = [];

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class);
    }

    public function psjuncts(): BelongsToMany
    {
        return $this->belongsToMany(Psjuncts::class);
    }
}