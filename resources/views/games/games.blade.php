@extends('layout')
@section('title', 'Catalog')

@section('content')

<h3 class="container text-center mt-3">Games List</h3>
<div class="container mt-4">
    <table class="table table-borderless table-striped table-earning">
        <thead>
        <tr>
            <th cope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Visitor Team - Result</th>
            <th scope="col">Local Team - Result</th>
            <th scope="col">Stadium</th>
            @if(Auth::check())
             <th scope="col">Action</th>
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
                @if(Auth::check() && Auth::user()->hasRole('administrator'))
                <td class="d-inline-flex justify-content-center align-items-center">
                    <a href="games/show/{{$game->id}}"><i class="fas fa-lg fa-eye mr-3" style="color:rgb(86, 170, 80);"></i></a>
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

    @if(Auth::check() && Auth::user()->hasRole('administrator'))
    <div class="container d-flex justify-content-center">
        <a href="games/create"><button type="button" class="btn btn-outline-primary mt-4">Create new game</button></a>
    </div>
    @endif
</div>

@endsection

