@extends('layout\layout')


@section ('content')  

 @include ('layout\slide')
    <div class="slideshow">
        <ul class="slideshow">
            <li class="show"><img width="680" height="250" src="images/logo.jpeg" alt="&quot;Help your self by helping others&quot;" /></li>
            <li><img width="680" height="250" src="images/social.jpg" alt="&quot;Enter your caption here&quot;" /></li>
        </ul> 
    </div>

    <div id="content">
        <div class="content_item">
            <h1>Welcome To Your Website</h1> 
            <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you would like to remove the &lsquo;website template by Free HTML5 Templates&rsquo; link from the footer of a template / website then that is OK, providing you make a small donation via the website. I do not specify an amount, just what you think the design is worth.</p>   		

            <div class="content_imagetext">
                <div class="content_image">
                    <img width="150" height="150" src="images/social.jpg" alt="image1"/>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est, vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna. Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>
            </div><!--close content_imagetext-->


            <div class="content_container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>          
                <div class="button_small">
                    <a href="#">Read more</a>
                </div><!--close button_small-->		  
            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content-->   


@endsection