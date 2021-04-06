<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //REGISTER
    public function registerForm(){
        return view('auth/register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirmPassword' => 'required | same:password',
        ], [
            'email.unique' => 'This mail is already registered!',
            'confirmPassword.same' => "The two passwords don't match!"
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = $request->input('admin');

        if($admin == 'Yes'){
            $admin_verified = true;
        }elseif($admin == 'No'){
            $admin_verified = false;
        };

        if($name !== null && $email !== null && $password !== null){
            User::create([
                'name'=> $name,
                'email'=> $email,
                'password'=> bcrypt($password),
                'admin'=> $admin_verified,
            ]);

            Alert::success('Your registration has been successful!', 'You will be redirect to the login panel!')->persistent(true,false);
            return redirect('login');
        }else{
            //TODO: hacer error con try & catch
            return redirect('error404');
        }
    }

    //LOGIN
    public function loginForm(){
        return view('auth/login');
    }

    public function check(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required | unique',
          ]);

        $password = $request->input('password');
        $user = User::find($password);

        if($user->admin == true){
            $admin_verified = true;
        }elseif($user->admin == false){
            $admin_verified = false;
        };

        Cookie::queue(Cookie::make('admin', $admin_verified, 60));
        Cookie::queue(Cookie::make('login', $user->name, 60));

        if($user){
            Alert::success('Your login has been successful!', 'You will be redirect to your personal account!')->persistent(true,false);
            return redirect('teams/teams');
        }else{
            return redirect('error404');
        }
    }

    //PASSWORD RECOVER
    public function passwordForm(){
        return view('auth/password');
    }

    public function recover(Request $request){

        $request->validate([
            'password' => 'required',
            'newpassword' => 'required | same:password',
        ],[
            'newpassword.required' => 'The new password field is required',
            'newpassword.same' => "The two passwords don't match!"
        ]);


        $password = $request->input('password');
        $user = User::find($password);
        $verifiedPassword = $user->password;
        $newPassword = $request->input('newpassword');

        if($password !== null){

            if($password === $verifiedPassword){
                $user->update(['password' => $verifiedPassword]);
                Alert::success('Your password has been updated successfully!')->persistent(true,false);
                return redirect('teams');
            }else{
                Alert::warning('This password is not registered!', 'Please insert a valid password')->persistent(true,false);
            }

        }else{
            return redirect('error404');
        }
        return view('auth/login');
    }
}
