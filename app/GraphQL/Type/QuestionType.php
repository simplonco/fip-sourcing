<?php

namespace App\GraphQL\Type;

use App\Models\Answer;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class QuestionType extends BaseType
{
    protected $attributes = [
        'name' => 'QuestionType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'c l\'id wesh'
            ],
            "questionnaire_id"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "title"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "type"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "mandatory"=> [
                "type" =>Type::boolean(),
                "description" => "",
            ],
            "goal"=> [
                "type" =>Type::string(),
                "description" => "A hint",
            ],
            "weight"=> [
                "type" =>Type::int(),
                "description" => "",
            ],
            "created_at"=> [
                "type" =>Type::string(),
                "description" => "",
            ],
            "values" => [
                "type" => Type::string(),
                "description" => "possible values for certain field types",
                "resolve" => function($question) {
                    return json_encode($question->default_value);
                }
            ],
            "answer" => [
                "type" => GraphQL::type('Answer'),
                "description" => "current user answer to question",
                "resolve" => function($question, $args, $context, $info) {
                    return Answer::where('candidate_id', $context->id)->where('question_id', $question->id)->first();
                }
            ]
        ];
    }
}
