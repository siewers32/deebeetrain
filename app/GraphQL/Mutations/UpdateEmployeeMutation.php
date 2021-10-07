<?php

// app/graphql/mutations/category/UpdateCategoryMutation

namespace App\GraphQL\Mutations;

use App\Models\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateEmployee',
        'description' => 'Updates an Employee'
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'first_name' => [
                'name' => 'first_name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'prefix' => [
                'name' => 'prefix',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'last_name' => [
                'name' => 'last_name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'email' => [
                'name' => 'email',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $employee = Employee::findOrFail($args['id']);
        $employee->fill($args);
        $employee->save();

        return $employee;
    }
}
