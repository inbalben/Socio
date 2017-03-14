@extends('layout\layout')


@section ('content')

<div id="site_content">	 
    <div id="content">
        <div class="content_item">

            <div class="content_container">
                <video id="myVideo" autoplay controls onended="run();">   
                    <source id="ss"   type='video/mp4'>
                </video>


                <script type="text/javascript">

                    videoPlayer = document.getElementById("ss");
                    video = document.getElementById("myVideo");
                    video_play_list = [];
                    video_count = 0;
                    run();
                    
                    function run() {
                        if (!video_play_list){ 
                            getNewList();
                        }
                        else if (video_count == video_play_list.length){
                             getNewList();
                        }
                        else if(video_play_list){
                           playVideo();
                        }
                    }
                    
                    function playVideo(){
                        videoPlayer.setAttribute("src", "video/" + video_play_list[video_count]);
                        video.load();
                        video.play();
                        video_count++;
                    }
                    
                    function getNewList(){
                        console.log(window.location.href + '/get/1');
                        $.ajax({
                            type: "GET",
                            url: window.location.href + '/get/1',
                            data: {},
                            success: function (msg) {
                                video_play_list = msg;
                                video_count = 0;
                                console.log(msg);
                                playVideo();
                            }
                        });
                    }


                </script>		  
            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content-->   


    @endsection