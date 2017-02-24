@extends('layout\layout')


@section ('content')
<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="content_container">
                <form method="post" enctype="multipart/form-data" action="/files">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="number" name="branch_id">
                        <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
                        <input name="file" type="file"> 
                        <button type="submit">Upload</button>                           

                    </div>
                </form>
            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content-->   


    @endsection