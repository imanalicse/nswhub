<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class view extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating view by webalive';

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
        $arguments = $this->arguments();
        $name = $arguments['name'];
        print_r($arguments);
        
        $my_file = 'resources/views/'.$name.'.blade.php';
        $handle = fopen($my_file, 'w');        
        $data = "@extends('admin.layouts.app') \n\n";
        $data .= "@section('content')";
        fwrite($handle, $data);
        fclose($handle);
    }
}
