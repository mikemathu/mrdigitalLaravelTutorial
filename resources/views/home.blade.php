@extends('includes.master')


@section('content')

          @foreach($users as $user)

              {{$user->fname}}  {{$user->lname}}

          @endforeach

@endsection


@section('scripts')

<script>


</script>

@endsection