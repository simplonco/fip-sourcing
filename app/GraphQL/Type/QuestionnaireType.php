<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class QuestionnaireType extends BaseType
{
    protected $attributes = [
        'name' => 'QuestionnaireType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            "formation_id"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "title"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "global"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "questions"=> [
                "type" => Type::listOf(GraphQL::type('Question')),
                "description" => "Question liées a ce questionnaire, wesh !"
            ]
        ];
    }
}
