@extends('layouts.app')
@section('title')
About page
@endsection
@section('content')

<h1>Welcome to my about page</h1>
<p>This is my about page.
</p>
<p>
    @forelse($students as $people)
    <p>{{$people['name']}}</p>
    <p>status: {{$people['status']}}</p>
    @empty
    <p>no students found</p>
    @endforelse


</p>
@endsection