@extends('includes.master')



@section('content')
    <h1>{{$user->fname}} {{$user->lname}}</h1>

    @include('includes.validation')


    <form action="post" action="{{route('updateuser', $user->id)}}">

        @csrf

            <input type="text"name="fname" placeholder="First Name" value="{{$user->fname}}" required> <br/>
            
            <input type="text"name="lname" placeholder="Last Name" value="{{$user->lname}}" required> <br/>

            <input type="email"name="email" placeholder="Email" value="{{$user->email}}" required> <br/>

            <input type="password"name="password" placeholder="Password" value="{{$user->password}}" required> <br/>

            <textarea name="notes" placeholder="Notes" cols="30" rows="10">{{$user->notes}}</textarea>  <br />

            <button type="submit">Save Changes </button>    
    
    
    
    </form>

    <form  action="{{route('deleteuser', $user->id)}}" method="">

    @csrf

        <button type="submit">Delete User</button>
    
    
    </form>



@endsection