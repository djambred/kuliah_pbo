<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'type',
    ];

    public function foods(): HasMany
    {
        return $this->hasMany(Food::class);
    }

    public function drinks(): HasMany
    {
        return $this->hasMany(Drink::class);
    }
}
