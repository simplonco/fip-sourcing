<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class gqlType extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gql:type {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $arg = $this->argument('table');

        $fields = DB::select(DB::raw("DESCRIBE " . $arg));

        foreach($fields as $f) {
            if($f->Field !== 'id') {
                $this->formatField($f);
            } else {
                $this->line("'id' => [
    'type' => Type::nonNull(Type::string()),
    'description' => 'c l\'id wesh'
],");

            }
        }
    }

    private function formatField($field) {
        $line = ['"', $field->Field, '"=> [',"\n\t", '"type" =>', 'Type::', $this->getType($field->Type), '(),', "\n\t", '"description" => "",', "\n", '],'];
        $this->line(join('', $line));
    }

    private function getType($mysqlType) {
        $types = [
            'int'=>'int',
            'tinyint'=>'int',
            'varchar'=> 'string',
            'longtext'=> 'string',
            'text'=> 'string',
            'date'=> 'string',
            'timestamp'=> 'string',
        ];
        $mType = explode('(', $mysqlType)[0];
        if(isset($types[$mType])) {
            return $types[$mType];
        }

        return 'string';
    }
}
