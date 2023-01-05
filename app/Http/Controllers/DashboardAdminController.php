<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $product = DB::select('SELECT DATE(created_at) as stat_day, SUM(price) from users GROUP BY DATE(created_at) ORDER BY stat_day;');

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
    public function analisis()
    {
        $total= Service::select(DB::raw("CAST(SUM(price) as int) as price"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('price');
        // dd($total);
        return view('admin.analisis.index');
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
