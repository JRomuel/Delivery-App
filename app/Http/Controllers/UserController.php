<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['John Romuel Mendoza', 'johnromuelmendoza@yahoo.com', 'mendozajr21']);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 1',['princess']);

        // DB::delete('delete from users where id = ?', [1]);


        // eliqouent
        // $user = new User();
        // $user->name = 'John Romuel';
        // $user->email = 'test@escoglobal.com';
        // adding encryption to password
        // $user->password = bcrypt('romuel');
        // $user->save();

        // User::where('id', 3)->delete();

        // User::where('id', 4)->update(['name' => 'Hesoyam Mendoza']);

        // creating data in one line
        // $data = [
        //     'name' => 'aecel marie2',
        //     'email' => 'hecelmarie2@test5.com',
        //     'password' => 'testpassword',
        // ];

        // User::create($data);

        $user = User::all();
        return view('welcome');
    }

    public function uploadAvatar(Request $request){
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            // other way of flash session
            // $request->session()->flash('message','Image Uploaded.');
            // Short code for redirect back with flash session
            return redirect()->back()->with('message','Image Uploaded.');
        }
        return redirect()->back()->with('error','Image Not Uploaded.');
    }



}
