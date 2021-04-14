@extends('layout')
@section('title', 'Catalog')

@section('content')

<h3 class="container text-center mt-5">Teams List</h3>
<div class="container mt-4">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="col-2" scope="col">#</th>
            <th class="col-3" scope="col">Name</th>
            <th class="col-3" scope="col">City</th>
            <th class="col-3" scope="col">Stadium</th>
            @if(Auth::check())
            <th class="col-2" scope="col">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @foreach($data as $team)
            <tr class="align-middle">
                <td><strong>{{$team->id}}</strong></td>
                <td>{{$team->name}}</td>
                <td>{{$team->city}}</td>
                <td>{{$team->stadium}}</td>
                @if(Auth::check() && Auth::user()->hasRole('administrator'))
                <td class="d-inline-flex justify-content-center align-items-center">
                    <a href="teams/show/{{$team->id}}"><i class="far fa-lg fa-eye me-3" style="color:rgb(86, 170, 80)";></i></a>
                    <a href="teams/edit/{{$team->id}}"><i class="far fa-lg fa-edit"></i></a>
                    <form action="teams/delete/{{$team->id}}" method="POST" type="submit">
                        @csrf
                        @method("DELETE")
                            <button type="submit" class="btn btn-small btn-outline-link">
                                <i class="far fa-lg fa-trash-alt" style="color:rgb(209, 64, 64);"></i>
                            </button>

                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(Auth::check() && Auth::user()->hasRole('administrator'))
    <div class="container d-flex justify-content-center">
        <a href="teams/create"><button type="button" class="btn btn-outline-primary mt-4">Create new team</button></a>
    </div>
    @endif
</div>

@endsection

