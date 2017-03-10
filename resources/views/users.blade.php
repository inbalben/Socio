@extends('layout\layout')


@section ('content')


    <div id="content">
        <div class="content_item">
            <table class="table table-striped table-bordered table-hover table-condensed table-nonfluid">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Permmisions</td>
                            </tr>
                        </thead>

                        @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td> {{$user->id }}</td>
                                <td> {{$user->name }}</td>
                                <td> {{$user->email }}</td>
                                <td>{{json_encode($users_slug[$user->id])}}</td>
                            </tr>
                        </tbody>

                        @endforeach
                    </table>    

            <div class="content_container">
                
                
                 <form method="post" action="/users_permissions">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table>
                    <tr>
                        <td><label for="user_id">name: </label></td>
                        <td>
                            <select name="user_id">
                                <option value=""></option>
                                @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="slug">permmision: </label></td>
                        <td>
                            <select name="acl_slug">
                                <option value=""></option>
                                @foreach ($permissions as $permission)
                                <option value="{{$permission->slug}}">{{$permission->name}}</option>
                                @endforeach
                            </select>
                        </td>
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
