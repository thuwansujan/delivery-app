<?php

// OrderFromFilter.php

namespace App\Filters;

class OrderFromFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('date', '>=', $value);
    }
}