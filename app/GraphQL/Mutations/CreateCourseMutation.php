<?php

// app/graphql/mutations/category/CreateCategoryMutation

namespace App\GraphQL\Mutations;

use App\Models\Course;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateCourseMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCourse',
        'description' => 'Creates a course'
    ];

    public function type(): Type
    {
        return GraphQL::type('Course');
    }

    public function args(): array
    {
        return [
            'description' => [
                'name' => 'description',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $course = new Course();
        $course->fill($args);
        $course->save();

        return $course;
    }
}
