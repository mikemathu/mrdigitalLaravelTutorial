@extends('includes.master')


@section('content')


        @include('includes.validation')



        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                   <li> {{$error}} </li>

            @endforeach
            </ul>

        @endif

         <form method="post" action="{{route('createuser')}}">

         @csrf

            <input typle='text' name='fname' placeholder='fnam' value="{{old('fname')}}"> <br />

            <input typle='text' name='lname' placeholder='lnam' value="{{old('lname')}}">  <br />

            <input typle='email' name='email' placeholder='email' value="{{old('email')}}">  <br />

            <input typle='passsword' name='password' placeholder='passoword' value="{{old('password')}}">  <br />

            <textarea name='notes' placeholder='notes' value="{{old('notes')}}"> </textarea> <br />

            <button type='submit'>Create User </button>
         </form>

@endsection


@section('scripts')

<script>


</script>

@endsection