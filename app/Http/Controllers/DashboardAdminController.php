<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $data=Service::select('service_id', 'created_at')->get()->groupBy(function($data){
        //     return Carbon::parse($data->create_at)->format('M');
        // });
        // // return view('admin.dashboard.dashboard');
        // $month=[];
        // $monthCount=[];
        // foreach($data as $month =>$values){
        //     $months[]=$month;
        //     $monthCount[]=count($values);
        // }
        // return view('admin.dashboard.dashboard', ['data'=>$data, 'months'=>$months, 'monthCount'=>$monthCount]);
        
       // $user = User::count();
        $user = User::whereNotNull('room')->count();
        $product = Service::count();
        $date = date('Y-m-d');
        $admin = User::whereNull('room')->count();
        // $order=Modelnya::where('created_at', '=', $date)->count();

        return view('admin.dashboard.dashboard', compact('user', 'product', 'admin'));
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
