@extends('base')

@section('content')

<h1>Dashboard</h1>

<p>
    <strong>Welcome {{auth()->user()->name}}!!! to Dashboard.</strong>
</p>
@endsection
