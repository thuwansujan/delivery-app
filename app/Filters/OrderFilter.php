<?php 

// OrderFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;

class OrderFilter extends AbstractFilter
{
    protected $filters = [
        'from' => OrderFromFilter::class,
        'to' => OrderToFilter::class
    ];
}
