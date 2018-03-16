<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class FormationType extends BaseType
{
    protected $attributes = [
        'name' => 'FormationType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'ben c le nom wesh'
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'ben c description wesh'
            ],
            'city' => [
                'type' => Type::string(),
                'description' => 'ben c city wesh'
            ],
            'year' => [
                'type' => Type::string(),
                'description' => 'ben c year wesh'
            ],
            'begin_session' => [
                'type' => Type::string(),
                'description' => 'ben c begin_session wesh'
            ],
            'end_session' => [
                'type' => Type::string(),
                'description' => 'ben c end_session wesh'
            ],
        ];
    }
}
