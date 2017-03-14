<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\FileList;
use App\Branch;
use App\File;

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
        /*$dir = public_path().'\video';
        $files = scandir($dir);
        $files_play_list = [];
        foreach ($files as $file) {
             if($file == "." || $file == "..") continue;
            $files_play_list[] = $file;
        }*/(
        $branches = branch::all());
        $files = File::all();
        
        foreach ($branches as $branch){
            $files_play_list = [];
            foreach ($files as $file) {
                if($file->branch['type'] == $branch->type){
                    continue;
                }
                if($file->branch_id != $branch->id){
                    $files_play_list[] = $file->name;
                }
            }

            FileList::create(['branch_id' => $branch->id, 'status' => 'active', 'list' => json_encode($files_play_list)]);
        } 
       
    }
}
