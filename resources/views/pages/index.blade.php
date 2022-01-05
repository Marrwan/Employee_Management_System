@extends('layouts.app')

@section('content')
    
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p><a href="/login" role="button" class="btn btn-lg btn-primary">LOGIN</a> <a href="/register" role="button" class="btn btn-lg btn-secondary">REGISTER</a></p>
    <a href="/employees">View All Employees</a>
</div>
@endsection