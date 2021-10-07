<?php

// app/graphql/mutations/category/CreateCategoryMutation

namespace App\GraphQL\Mutations;

use App\Models\Employee;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createEmployee',
        'description' => 'Creates an employee'
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
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
        $employee = new Employee();
        $employee->fill($args);
        $employee->save();

        return $employee;
    }
}
