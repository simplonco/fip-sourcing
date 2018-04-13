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
            'selected' => ['name'=>'selected', 'type'=>Type::boolean()]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        if (empty($args)) {
            return Formation::all();
        }
        $formation = new Formation;

        foreach($args as $key=>$value) {
            if ($key === 'begin_session') {
                $formation = $formation->where($key, '>=', $value);
            } else {
                $formation = $formation->where($key, $value);
            }
        }

        return $formation->get();
    }
}
