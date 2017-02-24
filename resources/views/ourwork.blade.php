@extends('layout\layout')


@section ('content')

<div id="site_content">	 
    <div id="content">
        <div class="content_item">

            <div class="content_container">
                <video id="myVideo" autoplay controls onended="run();">   
                    <source id="ss"   type='video/mp4'>
                </video>


                <script>

                    videoPlayer = document.getElementById("ss");
                    video = document.getElementById("myVideo");
                    video_count = -1;
                    video_play_list = <?php echo json_encode($files_play_list); ?>;
                    console.log(video_play_list);
                    run();
                    function run() {

                        video_count++;
                        if (video_count == video_play_list.length)
                            video_count = 0;
                        videoPlayer.setAttribute("src", "video/" + video_play_list[video_count]);
                        video.load();
                        video.play();

                    }

                </script>		  
            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content-->   


    @endsection