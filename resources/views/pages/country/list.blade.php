@extends('layouts.app')

@section('content')
<div class="container">
    @component('components.alert-success')@endcomponent

    <a href="/countries/create">New </a>

    <table class="table" aria-label="table">
        <tr>
            <th id="table-head-id">ID</th>
            <th id="table-head-name">Name</th>
            <th id="table-head-action" style="width: 120px;">Action</th>
        </tr>

        @foreach ($list as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>
                <div class="d-flex align-items-center">
                    <a href="/countries/{{$row->id}}/edit" class="mr-2">Edit</a>
                    @component('components.form-delete', ['url' => '/countries/'.$row->id])@endcomponent
                </div>


            </td>
        </tr>
        @endforeach
    </table>

    {{$list->links()}}
</div>
@endsection