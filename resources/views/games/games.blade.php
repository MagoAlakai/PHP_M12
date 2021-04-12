@extends('layout')
@section('title', 'Catalog')

@section('content')

<h3 class="container text-center mt-5">Games List</h3>
<div class="container mt-4">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="col-1" cope="col">#</th>
            <th class="col-2" scope="col">Date</th>
            <th class="col-3" scope="col">Visitor Team - Result</th>
            <th class="col-3" scope="col">Local Team - Result</th>
            <th class="col-2" scope="col">Stadium</th>
            @if(Cookie::get('admin') == true)
             <th class="col-2" scope="col">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @foreach($data as $game)
            <tr class="align-middle">
                <td><strong>{{$game->id}}</strong></td>
                <td>{{$game->date}}</td>
                <td>{{$game->team_1}} - {{$game->result_1}}</td>
                <td>{{$game->team_2}} - {{$game->result_2}}</td>
                <td>{{$game->stadium}}</td>
                @if(Cookie::get('admin') == true)
                <td class="d-inline-flex justify-content-center align-items-center">
                    <a href="games/show/{{$game->id}}"><i class="far fa-lg fa-eye me-3" style="color:rgb(86, 170, 80)";></i></a>
                    <a href="games/edit/{{$game->id}}"><i class="far fa-lg fa-edit"></i></a>
                    <form action="games/delete/{{$game->id}}" method="POST" type="submit">
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

    @if(Cookie::get('admin') == true)
    <div class="container d-flex justify-content-center">
        <a href="games/create"><button type="button" class="btn btn-primary mt-4">Create new game</button></a>
    </div>
    @endif
</div>

@endsection

