<?php

// app/graphql/queries/category/CategoriesQuery

namespace App\GraphQL\Queries;

use App\Models\Course;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CoursesQuery extends Query
{
    protected $attributes = [
        'name' => 'courses',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Course'));
    }

    public function resolve($root, $args)
    {
        return Courses::all();
    }
}
