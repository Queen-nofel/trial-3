@extends('layouts.app')
@section('title')
homepage
|@endsection

@section('content')

<h1>Welcome, {{$name}}</h1>
<p>This is my home page.
</p>
<x-button text="Login"
          class="bg-blue-500"
 />

@endsection