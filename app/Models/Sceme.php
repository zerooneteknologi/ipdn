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

    public function scopeFilter(Builder $query, array $filter): void
    {
        // $query->when($filter['sceme_sortir'] ?? false, function (
        //     $query,
        //     $filter
        // ) {
        //     if ($filter == 1) {
        //         return $query->latst()->get();
        //     }
        //     if ($filter == 2) {
        //         return $query->oldest()->get();
        //     }
        //     if ($filter == 3) {
        //         return $query->orderBy('sceme_name')->get();
        //     }
        // });

        $query->when(
            $filter['sceme_bnsp'] ?? false,
            fn($query, $filter) => $query->where('sceme_bnsp', $filter)
        );

        // $query->when($filter['sceme_bnsp'] ?? false, function (
        //     $query,
        //     $filter
        // ) {
        //     if ($filter == 1) {
        //         return $query->where('sceme_bnsp', $filter);
        //     }

        //     if ($filter == 2) {
        //         return $query->where('sceme_bnsp', $filter);
        //     }
        // });
    }
}
