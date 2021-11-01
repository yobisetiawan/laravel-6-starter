@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="/countries/{{$row->id}}">
        @method('PUT')
        @csrf

        @include('pages.country.form')

    </form>
</div>
@endsection