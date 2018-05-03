<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Auth;
use App\Certificate;
use App\Kontract;
use App\Mariage;
use App\Twkel;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function index_certificates()
    {
        if(\Auth::user()->id == 1)
            $certificates = Certificate::latest()->paginate(8);
        else
            $certificates = Certificate::where('user_id','=',\Auth::user()->id)->latest()->paginate(8);
        return view('admin.certificates.index',compact('certificates'));
        
    }
    public function index_konracts()
    {
        if(\Auth::user()->id == 1)
            $konracts = Kontract::latest()->paginate(8);
        else
            $konracts = Kontract::where('user_id','=',\Auth::user()->id)->latest()->paginate(8);
        return view('admin.konracts.index',compact('konracts'));
        
    }
    public function index_mariages()
    {
        if(\Auth::user()->id == 1)
            $mariages = Mariage::latest()->paginate(8);
        else
            $mariages = Mariage::where('user_id','=',\Auth::user()->id)->latest()->paginate(8);        

        return view('admin.mariages.index',compact('mariages'));
        
    }public function index_twkels()
    {
        if(\Auth::user()->id == 1)
            $twkels = Twkel::latest()->paginate(8);
        else
            $twkels = Twkel::where('user_id','=',\Auth::user()->id)->latest()->paginate(8);

        return view('admin.twkels.index',compact('twkels'));
        
    }
    public function destroy_certificate($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();

        return redirect('/dashboard/certificates');

    }
    public function destroy_konract($id)
    {
        $konract = Kontract::findOrFail($id);
        $konract->delete();

        return redirect('/dashboard/konracts');

    }
    public function destroy_mariage($id)
    {
        $mariage = Donor::findOrFail($id);
        $mariage->delete();

        return redirect('/dashboard/mariages');

    }
    public function destroy_twkel($id)
    {
        $twkel = Donor::findOrFail($id);
        $twkel->delete();

        return redirect('/dashboard/twkels');

    }
    public function destroy_contact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/dashboard/contact');

    }
    public function destroy_complaint($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();

        return redirect('/dashboard/complaint');

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
    public function store(Request $request)
    {
        //
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
    public function edit($id)
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
    public function update(Request $request, $id)
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
