<?php

namespace App\GraphQL\Types;

use App\Models\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class EmployeeType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Employee',
        'description' => 'Collection of employees',
        'model' => Employee::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'first_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'First name of the quest'
            ],
            'prefix' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Prefix of the quest'
            ],
            'last_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Last name of the quest'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Email of the quest'
            ],
        ];
    }
}
