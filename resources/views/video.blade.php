<video id="myVideo" height="600" width="600" autoplay controls onended="run();">   
                    <source id="ss"  src="video/video1.mp4" type='video/mp4'>
                </video>

                <script>
                    video_count = 1;
                    videoPlayer = document.getElementById("ss");
                    video = document.getElementById("myVideo");

                    function run() {
                        video_count++;
                        if (video_count == 1)
                            video_count = 1;
                        videoPlayer.setAttribute("src", "video/video" + video_count + ".mp4");
                        video.play();

                    }

                </script>