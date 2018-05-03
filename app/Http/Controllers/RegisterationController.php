<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterationController extends Controller
{
    public function create()
    {
    	return view('registeration.create');
    }
    
    public function store(Request $request)
    {
    	// dd('hello');
    	$this->validate(request(),[
    			'name' => 'required',
    			'email' => 'required|email',
    			'password' => 'required|confirmed',
                'seq_q' => 'required',
                'seq_a' => 'required|confirmed',
    		]);

    	$user = new User;

        $user->name = $request->name;
       
       
        $user->email = $request->email;
        $pass =$request->password;
        $user->password = bcrypt($pass);
        
        $user->seq_q = $request->seq_q;
        $seq_a =$request->seq_a;
        $user->seq_a = $seq_a;
        

        $user->save();
    	//$user = User::create(request(['name','email',bcrypt('password')]));
    	
    	
    	auth()->login($user);
    	return redirect('/dashboard');
    	// return redirect()->hi();

    }
}
