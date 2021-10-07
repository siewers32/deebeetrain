<?php

// app/graphql/mutations/category/UpdateCategoryMutation

namespace App\GraphQL\Mutations;

use App\Models\Course;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateCourseMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateCourse',
        'description' => 'Updates a course'
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
                'type' =>  Type::nonNull(Type::int()),
            ],
            'description' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $course = Course::findOrFail($args['id']);
        $course->fill($args);
        $course->save();

        return $course;
    }
}
