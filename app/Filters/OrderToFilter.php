<?php

// OrderToFilter.php

namespace App\Filters;

class OrderToFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('date', '<=', $value);
    }
}