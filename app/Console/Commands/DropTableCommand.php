<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DropTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:drop-table {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop a specific table from the database';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $table = $this->argument('table');
        DB::statement("DROP TABLE IF EXISTS {$table}");
        $this->info("Table '{$table}' has been dropped successfully.");
    }
}
