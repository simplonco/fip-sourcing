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
            'questionnaires' => [
                'type' => Type::listOf(GraphQL::type('Questionnaire')),
                'description' => '',
                'resolve' => function($formation) {
                    return $formation->questionnaires;
                }
            ],
            'sessions' => [
                'type' => Type::listOf(GraphQL::type('Session')),
                'description' => '',
            ]
        ];
    }
}
