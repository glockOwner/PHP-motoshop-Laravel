<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const BRAND_ID = 'brand_id';
    public const TITLE_ID = 'type_id';

    protected function getCallbacks(): array
    {
        return [
            self::BRAND_ID => [$this, 'brand_id'],
            self::TITLE_ID => [$this, 'type_id'],
        ];
    }

    public function brand_id(Builder $builder, $value)
    {
        $builder->where('brand_id', $value);
    }
    public function type_id(Builder $builder, $value)
    {
        $builder->where('type_id', $value);
    }

}
