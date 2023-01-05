<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        $user = User::whereNotNull('room')->get();

        // $user = User::whereHas('room', function($q){
        //     $q->where('usertype', '=', '0');
        // })->get();
        
        return view('admin.user.index',compact('user'));
    }

    public function view(User $user)
    {
        return view('admin.user.view',compact('user'));
    }
    public function view_in_admin()
    {
        return view('admin.user.detail');
    }

    public function delete($id)
    {

        DB::table('users')->where('id', $id)->delete();
        return redirect('users')->with('message', 'User Delete Succesfully');
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
