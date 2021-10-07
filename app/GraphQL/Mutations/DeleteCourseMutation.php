<?php

// app/graphql/mutations/category/DeleteCategoryMutation

namespace App\GraphQL\Mutations;

use App\Models\Course;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;

class DeleteCourseMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteCourse',
        'description' => 'deletes a course'
    ];

    public function type(): Type
    {
        return Type::boolean();
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
        $course = Course::findOrFail($args['id']);

        return  $course->delete() ? true : false;
    }
}
