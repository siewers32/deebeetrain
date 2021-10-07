<?php

namespace App\GraphQL\Types;

use App\Models\Course;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CourseType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Course',
        'description' => 'Collection of courses',
        'model' => Course::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the quest'
            ],
        ];
    }
}
