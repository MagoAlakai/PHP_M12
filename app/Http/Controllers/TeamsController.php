<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Team;

class TeamsController extends Controller
{

    //CREATE
    public function createForm(){
        return view('teams/createTeam');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'stadium' => 'required',
          ]);

          $name = $request->input('name');
          $city = $request->input('city');
          $stadium = $request->input('stadium');

          if($name !== null && $city !== null && $stadium !== null){
            Team::create([
                'name'=> $name,
                'city'=> $city,
                'stadium'=> $stadium,
            ]);
              Alert::success('The new team has been created successfully!')->persistent(true,false);
              return redirect('teams');
          }else{
              //TODO: hacer error con try & catch
              return redirect('error404');
          }
    }

    //READ

    public function index(){
        $data = Team::all();
        return view('teams/teams', compact('data'));
    }

    public function show($id){

        $team = Team::find($id);
        return view('teams/showTeam', compact('team'));
    }


    //UPDATE
    public function editForm($id){

        $team = Team::find($id);
        return view('teams/editTeam', compact('team'));
    }

    public function edit(Request $request, $id) {
        $team = Team::find($id);
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'stadium' => 'required',
          ]);

          $name = $request->input('name');
          $city = $request->input('city');
          $stadium = $request->input('stadium');

          if($name !== null && $city !== null && $stadium !== null){
            $team->update($request->all());
            Alert::success('The team has been updated successfully!')->persistent(true,false);
            return redirect('teams');
          }else{
              //TODO: hacer error con try & catch
              return redirect('error404');
          }
    }

    //DELETE
    public function delete($id){

        $team = Team::find($id);
        $name = $team->name;

        $team->delete();

        Alert::success('You have deleted the team: '.$name.'.')->persistent(true,false);
        return redirect('teams');
    }
}
