<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use App\GraphQL\Type\Timestamp;
use GraphQL;

class SessionType extends BaseType
{
    protected $attributes = [
        'name' => 'SessionType',
        'description' => 'A type'
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->timeType = new Timestamp();
    }

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

            "start_date"=> [
                "type" =>$this->timeType,
                "description" => "",
                "resolve" => function($session) {
                    return $session->begin_session;
                }
            ],
            "end_date"=> [
                "type" =>$this->timeType,
                "description" => "",
                "resolve" => function($session) {
                    return $session->end_session;
                }
            ],
            "begin_session"=> [
                "type" =>$this->timeType,
                "description" => "",
            ],
            "end_session"=> [
                "type" =>$this->timeType,
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
            ],
            "selected" => [
                "type" => Type::boolean(),
                "description" => "is currently selected session?",
                "resolve"=> function($session, $args, $context) {

                    $active = $context->currentSession();
                    if(!empty($active->id) && $active->id === $session->id) {
                        return true;
                    }
                    return false;
                }
            ]
        ];
    }
}
