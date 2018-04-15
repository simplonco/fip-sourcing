<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class SessionType extends BaseType
{
    protected $attributes = [
        'name' => 'SessionType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            "city"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "year"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "begin_session"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "end_session"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "formation_id"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "application_start_date"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "application_end_date"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "impact_unit"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "formation" => [
                "type"=>GraphQL::type('Formation'),
                "description" => "Formation associée"
            ]
        ];
    }
}
