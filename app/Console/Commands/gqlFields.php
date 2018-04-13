<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class gqlFields extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gql:fields {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generat an easily usable list of fields';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $type = $this->argument('name');
        $class = 'App\\GraphQL\\Type\\'. ucfirst($type).'Type';
        $fields = array_keys((new $class)->fields());
        foreach($fields as $field) {
            $this->line($field.',');
        }

    }
}
