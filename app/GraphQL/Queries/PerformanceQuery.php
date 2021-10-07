<?php

// app/graphql/queries/quest/QuestQuery

namespace App\GraphQL\Queries;

use App\Models\Performance;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class PerformanceQuery extends Query
{
    protected $attributes = [
        'name' => 'performance',
    ];

    public function type(): Type
    {
        return GraphQL::type('Performance');
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
        return Performance::findOrFail($args['id']);
    }
}
