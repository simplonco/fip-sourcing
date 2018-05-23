<?php

namespace App\GraphQL\Query;

use App\Models\Formation;
use Carbon\Carbon;
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
            'start_date' => ['name'=>'start_date', 'type'=> Type::string()],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $formations = Formation::all();
        $formations = $formations->map(function($formation) {
            $formation->sessions = $formation->sessions()
                ->where('application_start_date', '<=', Carbon::now())
                ->where('application_end_date', '>=', Carbon::now())
                ->get();
            return $formation;
        })->filter(function($formation) {
            return $formation->sessions->count() > 0;
        });
        return $formations;
    }
}
