<?php

namespace App\GraphQL\Query;

use App\Models\Session;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Auth;

class CandidatQuery extends Query
{
    protected $attributes = [
        'name' => 'CandidatQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return GraphQL::type('Candidat');
    }

    public function args()
    {
        return [
            
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return auth()->user();
    }
}
