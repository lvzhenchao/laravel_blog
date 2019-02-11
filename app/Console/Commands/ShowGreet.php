<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowGreet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laravist:hello {name=lzc}';//? =

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
        $this->info("Hello my frends:" . $this->argument('name'));
    }
}
