@extends('layout\layout')


@section ('content')
<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="content_container">
                <form  method="post" enctype="multipart/form-data" action="/uploadFile">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table>
                        <tr>
                            <td><label for="company">branch_id: </label></td>
                            <td> <input type="number" name="branch_id"></td>
                        </tr>

                        <tr>
                            <td><label for="street">file: </label></td>
                            <td><input name="file" type="file"><input type="hidden" name="MAX_FILE_SIZE" value="20000000"></td>
                        </tr>

                        <tr>
                            <td><button class="button_small" type="submit"><a>Upload</a></button></td>
                        </tr>

                    </table>
                </form>                          

            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content-->   


    @endsection