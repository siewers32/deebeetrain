<?php

namespace App\GraphQL\Types;

use App\Models\Performance;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PerformanceType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Performance',
        'description' => 'Collection of performances',
        'model' => Performance::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'performance_date' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Date of the performance'
            ],
            'start' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Start time'
            ],
            'end' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'End time'
            ],
        ];
    }
}
