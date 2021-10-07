<?php

// app/graphql/queries/quest/QuestQuery

namespace App\GraphQL\Queries;

use App\Models\Course;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CourseQuery extends Query
{
    protected $attributes = [
        'name' => 'course',
    ];

    public function type(): Type
    {
        return GraphQL::type('Course');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return Course::findOrFail($args['id']);
    }
}
