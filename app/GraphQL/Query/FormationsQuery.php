<?php

namespace App\GraphQL\Query;

use App\Models\Formation;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;

class FormationsQuery extends Query
{
    protected $attributes = [
        'name' => 'FormationsQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Formation'));
    }

    public function args()
    {
        return [
            'id' => ['name'=>'id', 'type'=> Type::string()],
            'name' => ['name'=>'name', 'type'=> Type::string()],
            'description' => ['name'=>'description', 'type'=> Type::string()],
            'city' => ['name'=>'city', 'type'=> Type::string()],
            'year' => ['name'=>'year', 'type'=> Type::int()],
            'begin_session' => ['name'=>'begin_session', 'type'=> Type::string()],
            'end_session' => ['name'=>'end_session', 'type'=> Type::string()],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        if (isset($args['id'])) {
            return Formation::whereId($args['id'])->get();
        } else {
            return Formation::all();
        }
    }
}
