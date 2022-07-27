<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\OrderFilter;
use Illuminate\Database\Eloquent\Builder;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'date'  => 'date:Y-m-d',
    ];

    // Filter 
    public function scopeFilter(Builder $builder, $request)
    {
        return (new OrderFilter($request))->filter($builder);
    }

}
