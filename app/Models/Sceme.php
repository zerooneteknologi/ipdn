<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sceme extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [''];

    /**
     * scope filter statuts active sceme
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('sceme_status', 1);
    }

    /**
     * scope filter searching sceme
     */
    public function scopeSearch(Builder $query, $search): void
    {
        $query->when(
            $search ?? false,
            fn($query, $search) => $query
                ->where('sceme_name', 'LIKE', "%$search%")
                ->orWhere('sceme_detail', 'LIKE', "%$search%")
        );
    }
}
