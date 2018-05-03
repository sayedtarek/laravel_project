<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificate;
use App\Kontract;
use App\Mariage;
use App\Twkel;
use Illuminate\Support\Facades\Input;
class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexCertificate()
    {        
        return view('site.registCertificate');
    }
    public function indexKontract()
    {        
        return view('site.registKontract');
    }
    public function indexMariage()
    {        
        return view('site.registMariage');
    }
    public function indexTwkel()
    {        
        return view('site.registTwkel');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_certificate(Request $request)
    {
        $certificate = new Certificate;

        $certificate->name = $request->name;
        $certificate->user_id = $request->user_id;
        $certificate->title = $request->title;
        $certificate->ssn = $request->ssn;
        $certificate->location = $request->location;
        $certificate->amount = $request->amount;

        if ($request->hasFile('file')) {
            $file = array('file' => Input::file('file'));
            $destinationPath = 'docs/cert/'; // upload path
            $extension = Input::file('file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('file')->move($destinationPath, $fileName);
            $file_path = $destinationPath.$fileName;
            $certificate->file_path =$file_path;
        }else{
            \Session::flash('alert-danger','لم يتم إضافة صورة.');
            return redirect('/registC');
        }        

        $certificate->save();
        \Session::flash('alert-success','تمت الإضافة بنجاح.');
        return redirect('/registC');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_kontract(Request $request)
    {
        $kontract = new Kontract;

        $kontract->user_id = $request->user_id;
        $kontract->seller_name = $request->seller_name;
        $kontract->buyer_name = $request->buyer_name;
        $kontract->seller_ssn = $request->seller_ssn;
        $kontract->buyer_ssn = $request->buyer_ssn;
        $kontract->amount = $request->amount;

        if ($request->hasFile('file')) {
            $file = array('file' => Input::file('file'));
            $destinationPath = 'docs/kont/'; // upload path
            $extension = Input::file('file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('file')->move($destinationPath, $fileName);
            $file_path = $destinationPath.$fileName;
            $kontract->file_path =$file_path;
        }else{
            \Session::flash('alert-danger','لم يتم إضافة صورة.');
            return redirect('/registK');
        }       

        $kontract->save();
        \Session::flash('alert-success','تم الإضافة بنجاح.');
        return redirect('/registK');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_mariage(Request $request)
    {
        $mariage = new Mariage;

        $mariage->user_id = $request->user_id;
        $mariage->hus_name = $request->hus_name;
        $mariage->wife_name = $request->wife_name;
        $mariage->wife_parent_name = $request->wife_parent_name;
        $mariage->hus_ssn = $request->hus_ssn;
        $mariage->wife_ssn = $request->wife_ssn;
        $mariage->wife_parent_ssn = $request->wife_parent_ssn;
        $mariage->witness_1_ssn = $request->witness_1_ssn;
        $mariage->witness_2_ssn = $request->witness_2_ssn;
        $mariage->amount = $request->amount;

        if ($request->hasFile('file')) {
            $file = array('file' => Input::file('file'));
            $destinationPath = 'docs/mariage/'; // upload path
            $extension = Input::file('file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('file')->move($destinationPath, $fileName);
            $file_path = $destinationPath.$fileName;
            $mariage->file_path =$file_path;
        }else{
            \Session::flash('alert-danger','لم يتم إضافة صورة.');
            return redirect('/registM');
        }
              

        $mariage->save();
        \Session::flash('alert-success','تمت الإضافة بنجاح.');
        return redirect('/registM');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_twkel(Request $request)
    {
        $twkel = new Twkel;

        $twkel->user_id = $request->user_id;
        $twkel->party_1_name = $request->party_1_name;
        $twkel->party_1_ssn = $request->party_1_ssn;
        $twkel->party_2_name = $request->party_2_name;
        $twkel->party_2_ssn = $request->party_2_ssn;
        $twkel->amount = $request->amount;

        if ($request->hasFile('file')) {
            $file = array('file' => Input::file('file'));
            $destinationPath = 'docs/twkel/'; // upload path
            $extension = Input::file('file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('file')->move($destinationPath, $fileName);
            $file_path = $destinationPath.$fileName;
            $twkel->file_path =$file_path;
        }else{
            \Session::flash('alert-danger','لم يتم إضافة صورة.');
            return redirect('/registT');
        }        

        $twkel->save();
        \Session::flash('alert-success','تمت الإضافة بنجاح.');
        return redirect('/registT');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_certificate($id)
    {
        //
        $certificate = Certificate::findOrFail($id);

        return \View::make('site.registCertificate')->with(compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_konract($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_mariage($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_twkel($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_certificate(Request $request, $id)
    {
        //
        $certificate = Certificate::find($id);

        $certificate->name = $request->name;
        $certificate->user_id = $request->user_id;
        $certificate->title = $request->title;
        $certificate->ssn = $request->ssn;
        $certificate->location = $request->location;
        $certificate->amount = $request->amount;

        if ($request->hasFile('file')) {
            $file = array('file' => Input::file('file'));
            $destinationPath = 'docs/cert/'; // upload path
            $extension = Input::file('file')->getClientOriginalExtension(); 
            $fileName = rand(11111,99999).'.'.$extension; // renaming image
            Input::file('file')->move($destinationPath, $fileName);
            $file_path = $destinationPath.$fileName;
            $certificate->file_path =$file_path;
        }else{
            \Session::flash('alert-danger','لم يتم إضافة صورة.');
            return redirect('/registC');
        }        

        $certificate->save();
        \Session::flash('alert-success','تمت الإضافة بنجاح.');
        return redirect('/registC');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_konract(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_mariage(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_twkel(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
