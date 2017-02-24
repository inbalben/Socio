<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\FileList;

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
    public function handle()
    {
        $dir = public_path().'\video';
        $files = scandir($dir);
            $files_play_list = [];
            foreach ($files as $file) {
                 if($file == "." || $file == "..") continue;
                $files_play_list[] = $file;
            }

            FileList::create(['branch_id' => 1, 'status' => 'active', 'list' => json_encode($files_play_list)]);
    }
}
