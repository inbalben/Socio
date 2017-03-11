@extends('layout\layout')


@section ('content')


<div id="content">
    <div class="content_item">
        <table class="table table-striped table-bordered table-hover table-condensed table-nonfluid">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Company</td>
                    <td>Type</td>
                    <td>User id</td>
                    <td>City</td>
                    <td>Street</td>
                </tr>
            </thead>

            @foreach ($branches as $branch)
            <tbody>
                <tr>
                    <td> {{$branch->id }}</td>
                    <td> {{$branch->company }}</td>
                    <td> {{$branch->type }}</td>
                    <td> {{$branch->user_id }}</td>
                    <td> {{$branch->city }}</td>
                    <td> {{$branch->street }}</td>
                </tr>
            </tbody>

            @endforeach
        </table>    

        <div class="content_container">


            <form method="post" action="/branch">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table>
                    <tr>
                        <td><label for="company">company: </label></td>
                        <td><input type="text" name="company"></td>
                    </tr>

                    <tr>
                        <td><label for="type">type: </label></td>
                        <td><input type="text" name="type"></td>
                    </tr>

                    <tr>
                        <td><label for="user_id">user_id: </label></td>
                        <td><input type="number" name="user_id"></td>
                    </tr>

                    <tr>
                        <td><label for="city">city: </label></td>
                        <td><input type="text" name="city"></td>
                    </tr>

                    <tr>
                        <td><label for="street">street: </label></td>
                        <td><input type="text" name="street"></td>
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
