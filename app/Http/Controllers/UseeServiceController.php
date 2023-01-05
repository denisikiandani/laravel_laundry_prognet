<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\UserServiceRequest;
use App\Models\Cart;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\User;

class UseeServiceController extends Controller
{
    public function index()
    {
        // return view('user.service.index');
        $service = Service::all();
        return view('user.service.index', [
            // 'kategori' => $kategori,
            'service'=>$service
        ]);
    }

    // public function addChart()
    // {
    //     return 'hello';
    // }

    public function addChart(Request $request, $service_id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            // $service = DB::table('services')->find($service_id);
            $service = Service::find($service_id);
            $cart = new Cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->quantity = $request->quantity;
            $cart->price = $service->price;
            $cart->image = $service->image;
            $cart->category = $service->category;
            $cart->product = $service->product;

            $cart->save();
            // return redirect('service_user')->with('message', 'Service Added Succesfully');
            return redirect()->back()->with('message','Product Added Successfully');
        }
        else
        {
            return redirect('login');        
        }
    }

    // public function store(UserServiceRequest $request)
    // {
    //     return view('user.service.index');
    // }

    // public function store(Request $request)
    // {
    //    // dd($request);
    //     $category = $request->category;
    //     $product = $request->product;
    //     $price = $request->price;
    //     $image = $request->image;

    //     $validateData =$request->validate([
    //         'category'=>[
    //             'string'
    //         ],
    //         'product'=>[
    //             'required',
    //             'string'
    //         ],
    //         'price'=>[
    //             'required',
    //             'integer'
    //         ],
    //         'image'=>'mimes:jpg,jpeg,png|image|max:2048'


    //     ]);

    //     $service = new Service();
    //     if($request->hasFile('image')){
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename= time().'.'.$ext;
    
    //         $file->move('uploads/layanan', $filename);
    //         $service->image = $filename;
    //         }
    
    //     $service ->category=$category;
    //     $service ->product=$product;
    //     $service ->price=$price;
    
    //     $service->save();

    //     // return redirect('service')->with('message', 'Service Added Succesfully');
    // }
}

