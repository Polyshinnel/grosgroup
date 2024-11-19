<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Works extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function worksImages(): HasMany
    {
        return $this->hasMany(WorksImages::class, 'id', 'works_id');
    }
}
