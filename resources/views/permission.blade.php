@extends('layout\layout')


@section ('content')


    <div id="content">
        <div class="content_item">
            <table class="table table-striped table-bordered table-hover table-condensed table-nonfluid">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Slug</td>
                            </tr>
                        </thead>

                        @foreach ($permissions as $permission)
                        <tbody>
                            <tr>
                                <td> {{$permission->id }}</td>
                                <td> {{$permission->name }}</td>
                                <td> {{$permission->slug }}</td>
                            </tr>
                        </tbody>

                        @endforeach
                    </table>    

            <div class="content_container">
                
                
                 <form method="post" action="/permission">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table>
                    <tr>
                        <td><label for="name">name: </label></td>
                        <td><input type="text" name="name"></td>
                    </tr>

                    <tr>
                        <td><label for="slug">slug: </label></td>
                        <td><input type="text" name="slug"></td>
                    </tr>

                    <tr>
                        <td><button class="button_small" type="submit"><a>Save</a></button></td>
                    </tr>

                </table>
            </form>
                               
            </div><!--close content_container-->			  
        </div><!--close content_item-->
    </div><!--close content--> 


    @endsection
