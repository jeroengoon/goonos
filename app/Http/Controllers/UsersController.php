<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
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
        $users = User::find($id);

        //Check for correct user id
        if(auth()->user()->id !== $users['id']){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('users.show')->with('users', $users);
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
           
        $id = Auth::user()->id;
        

        $this->validate($request, [
            'firstname' => 'required',
            'lastname'  => 'required',
            'phone' => 'required',
            'street'  => 'required',
            'housenumber' => 'required',
            'city'  => 'required',
            'country' => 'required',
            'postalcode'  => 'required',
            'email'  => 'required'
        ]);

        //create Article
        // $userprofiles = User::find($id);
        $user = Auth::User();

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->street = $request->input('street');
        $user->housenumber = $request->input('housenumber');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->postalcode = $request->input('postalcode');
        $user->email = $request->input('email');
        $user->save();
            

        return redirect('/users/'.$id)->with('succes', 'Profile updated');

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
