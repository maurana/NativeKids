<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categories extends Model
{
    protected $fillable = ['name'];    
    protected $hidden = [];

    public function results(): BelongsTo
    {
        return $this->belongsTo(Results::class);
    }

    public function pictures(): BelongsTo
    {
        return $this->belongsTo(Pictures::class);
    }

    public function sounds(): BelongsTo
    {
        return $this->belongsTo(Sounds::class);
    }

    public function psjuncts(): BelongsTo
    {
        return $this->belongsTo(Psjuncts::class);
    }
}