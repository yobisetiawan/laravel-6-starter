@extends('layouts.app')

@section('content')
<div class="container">

    <form method="POST" action="/countries">
        @csrf

        @include('pages.country.form')

    </form>

</div>
@endsection