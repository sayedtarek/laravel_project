<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }
    public function create()
    {
    	return view('sessions.create');
    }
    /**
     * Get the needed Authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return $request->only('email', 'password', 'seq_q', 'seq_a');
    }
    public function store(Request $request)
    {
        //dd($request->email);
        $credentials = $this->getCredentials($request);
        //dd($credentials);
    	if(!\Auth()->attempt($credentials))
        {
    		return back()->withErrors([
                    'message' => 'من فضلك تأكد من بياناتك وحاول مرة أخري'
                ]);
    	}
    	return redirect('/dashboard');
    }
    public function destroy()
    {
    	\Auth()->logout();
    	return redirect('/login');
    }
}
