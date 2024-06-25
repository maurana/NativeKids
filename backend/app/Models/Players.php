<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Players extends Model
{
    protected $fillable = ['name'];    
    protected $hidden = [];

    public function results(): BelongsTo
    {
        return $this->belongsTo(Results::class);
    }
}