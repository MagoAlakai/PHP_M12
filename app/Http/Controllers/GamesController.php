<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Game;
use App\Models\Team;

class GamesController extends Controller
{
    //CREATE
    public function createForm(){

        $teams = Team::all();
        return view('games/createGame', compact('teams'));
    }

    public function create(Request $request) {

        $request->validate([
            'date' => 'required',
            'estadium' => 'required',
            'team_1' => 'required',
            'result_1' => 'required',
            'team_2' => 'required',
            'result_2' => 'required',
            'stadium' => 'required',
          ]);

          $date = $request->input('date');
          $team1 = $request->input('team_1');
          $result_1 = $request->input('result_1');
          $team2 = $request->input('team_2');
          $result_2 = $request->input('result_2');
          $stadium = $request->input('stadium');

          if($date !== null && $team1 !== null && $result_1 !== null && $team2 !== null && $result_2 !== null && $stadium !== null){
            Game::create([
                'date' => $date ,
                'team_1' => $team1,
                'result_1' => $result_1,
                'team_2' => $team2,
                'result_2' => $result_2,
                'stadium' => $stadium,
            ]);
              Alert::success('The new game has been created successfully!')->persistent(true,false);
              return redirect('games', compact('teams'));
          }else{
              //TODO: hacer error con try & catch
              return redirect('error404');
          }
    }

    //READ

    public function index(){
        $data = Game::all();
        return view('games/games', compact('data'));
    }

    public function show($id){

        $game = Game::find($id);
        return view('games/showGame', compact('game'));
    }


    //UPDATE
    public function editForm($id){

        $game = Game::find($id);
        return view('games/editGame', compact('game'));
    }

    public function edit(Request $request, $id) {
        $game = Game::find($id);
        $request->validate([
            'date' => 'required',
            'team_1' => 'required',
            'result_1' => 'required',
            'team_2' => 'required',
            'result_2' => 'required',
            'stadium' => 'required',
          ]);

          $date = $request->input('date');
          $team1 = $request->input('team_1');
          $result_1 = $request->input('result_1');
          $team2 = $request->input('team_2');
          $result_2 = $request->input('result_2');
          $stadium = $request->input('stadium');

          if($date !== null && $team1 !== null && $result_1 !== null && $team2 !== null && $result_2 !== null && $stadium !== nul){
            $game->update($request->all());
            Alert::success('The game has been updated successfully!')->persistent(true,false);
            return redirect('games');
          }else{
              //TODO: hacer error con try & catch
              return redirect('error404');
          }
    }

    //DELETE
    public function delete($id){

        $game = Game::find($id);
        $team1 = $game->team_1;
        $team2 = $game->team_2;

        $game->delete();

        Alert::success('You have deleted the Match between: '.$team1.' & '.$team2.'.')->persistent(true,false);
        return redirect('games');
    }
}
