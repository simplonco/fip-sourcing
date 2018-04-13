<?php

namespace App\GraphQL\Type;

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
            "availability"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "efforts"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "computers"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "heard_of"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "nationality"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "birth_date"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "gender"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "phone"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "postal_code"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "city"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "address"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "status"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "number_pole_emploi"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "pole_emploi"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "number_social_security"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "obtained_diploma"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "cdd"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "experience_programming"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "course"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "english"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "today"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "coding"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "profiles"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "hero"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "dev_qualities"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "personal_goal"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "dev_point"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "superpower"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "html_score"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "css_score"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "js_score"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "php_score"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "score"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "application_sent"=> [
                "type" =>Type::boolean(),
                "description" => "",
            ],
            "remember_token"=> [
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
        ];
    }
}
