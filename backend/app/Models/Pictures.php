<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pictures extends Model
{
    protected $fillable = ['name', 'file'];    
    protected $hidden = [];

    public function categories(): HasMany
    {
        return $this->hasMany(Categories::class);
    }

    public function psjuncts(): BelongsTo
    {
        return $this->belongsTo(Psjuncts::class);
    }
}