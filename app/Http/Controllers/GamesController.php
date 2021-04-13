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
        //dd($request);

        $request->validate([
            'date' => 'required',
            'team_1' => 'required',
            'result_1' => 'required',
            'team_2' => 'required|different:team_1',
            'result_2' => 'required',
            'stadium' => 'required',
          ]);

          $team1_input = $request->input('team_1');
          $team1_team = Team::where('name', $team1_input)->first();
          //dd($team1_team);

          $team2_input = $request->input('team_2');
          $team2_team = Team::where('name', $team2_input)->first();
          //dd($team2_team);

          $date = $request->input('date');
          //dd($date);
          $team1 = $team1_team->id;
          //dd($team1);
          $result_1 = $request->input('result_1');
          $team2 = $team2_team->id;
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
              return redirect('games');
          }else{
              //TODO: hacer error con try & catch
              return redirect('error404');
          }
    }

    //READ

    public function index(){
        $data = Game::all();

        foreach($data as $game){
            $team1 = Team::find($game->team_1);
            $team1_name = $team1->name;
            $game->team_1 = $team1_name;

            $team2 = Team::find($game->team_2);
            $team2_name = $team2->name;
            $game->team_2 = $team2_name;
        }
        return view('games/games', compact('data'));
    }

    public function show($id){

        $game = Game::find($id);

        $team1 = Team::find($game->team_1);
        $team1_name = $team1->name;
        $game->team_1 = $team1_name;

        $team2 = Team::find($game->team_2);
        $team2_name = $team2->name;
        $game->team_2 = $team2_name;

        return view('games/showGame', compact('game'));
    }


    //UPDATE
    public function editForm($id){

        $game = Game::find($id);
        $teams = Team::all();

        $team1 = Team::find($game->team_1);
        $team1_name = $team1->name;
        $game->team_1 = $team1_name;

        $team2 = Team::find($game->team_2);
        $team2_name = $team2->name;
        $game->team_2 = $team2_name;

        return view('games/editGame', compact('game', 'teams'));
    }

    public function edit(Request $request, $id) {
        $game = Game::find($id);
        $request->validate([
            'date' => 'required',
            'team_1' => 'required',
            'result_1' => 'required',
            'team_2' => 'required|different:team_1',
            'result_2' => 'required',
            'stadium' => 'required',
          ]);


          $team1_input = $request->input('team_1');
          $team1_team = Team::where('name', $team1_input)->first();

          $team2_input = $request->input('team_2');
          $team2_team = Team::where('name', $team2_input)->first();

          $date = $request->input('date');
          $team1 = $team1_team->id;
          $result_1 = $request->input('result_1');
          $team2 = $team2_team->id;
          $result_2 = $request->input('result_2');
          $stadium = $request->input('stadium');

          if($date !== null && $team1 !== null && $result_1 !== null && $team2 !== null && $result_2 !== null && $stadium !== null){
            $game->update([
                'date' => $date,
                'team_1' => $team1,
                'result_1' => $result_1,
                'team_2' => $team2,
                'result_2' => $result_2,
                'stadium' => $stadium,
            ]);
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
        $teams = Team::all();

        $team1 = Team::find($game->team_1);
        $team1_name = $team1->name;

        $team2 = Team::find($game->team_2);
        $team2_name = $team2->name;

        $game->delete();

        Alert::success('You have deleted the Match between: '.$team1_name.' & '.$team2_name.'.')->persistent(true,false);
        return redirect('games');
    }
}
