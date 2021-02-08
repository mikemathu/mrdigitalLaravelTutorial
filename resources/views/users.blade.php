@extends('includes.master')


@section('content')

<table style="width:800px; text-align:left">

    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Action</th>

        </tr>

    </thead>

    <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('viewuser', $user->id)}}">View User</a></td>
            
            
            </tr>



            @endforeach
    
    
    
    
    </tbody>




</table>



@endsection