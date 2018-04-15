<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class AnswerType extends BaseType
{
    protected $attributes = [
        'name' => 'AnswerType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            "candidate_id"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "question_id"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "value"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "created_at"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "updated_at"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "user" => [
                "type" => GraphQL::type('Candidat'),
                "description"=>"belongs to user",
                "resolve" => function($answer) {
                    return $answer->candidate;
                }
            ]
        ];
    }
}
