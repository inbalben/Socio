<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\File_list;
use App\File;
use App\Branch;

class createNewFileList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createNewFileList';

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
    public function handle() {

        $files = File::all();
        $branches = Branch::all();
        foreach ($branches as $branch) {
            $files_play_list = [];
            foreach ($files as $file) {
                $files_play_list[] = $file->name;
            }
var_dump($files_play_list);
            File_list::create(['branch_id' => $branch->id, 'status' => 'active', 'list' => json_encode($files_play_list)]);
        }
    }

}
