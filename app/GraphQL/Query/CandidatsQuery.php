<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Models\Role;

class CandidatsQuery extends Query
{
    protected $attributes = [
        'name' => 'CandidatQuery',
        'description' => 'A list of candidates query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Candidat'));
    }

    public function args()
    {
        return [
            'id' => ['name'=>'id', 'type'=> Type::string()]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        if (empty($args)) {
            return Role::whereName('learner')->first()->users;
        }
    }
}
