<?php

namespace App\GraphQL\Type;

use App\Models\Session;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CandidatType extends BaseType
{
    protected $attributes = [
        'name' => 'CandidatType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            "last_name"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "first_name"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "email"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "session" => [
                "type"=>GraphQL::type('Session'),
                "description"=>"Session selectionnée",
                "resolve"=> function ($user) {
                    return $user->currentSession();
                }
            ],
            "questionnaires" => [
                "type" => Type::listOf(GraphQL::type('Questionnaire')),
                "description" => "liste de questionnaires liés aux formations selectionnée"
            ]
        ];
    }
}
