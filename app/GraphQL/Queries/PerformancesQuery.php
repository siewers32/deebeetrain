<?php

// app/graphql/queries/category/CategoriesQuery

namespace App\GraphQL\Queries;

use App\Models\Performance;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PerformancesQuery extends Query
{
    protected $attributes = [
        'name' => 'performances',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Performance'));
    }

    public function resolve($root, $args)
    {
        return Performance::all();
    }
}
