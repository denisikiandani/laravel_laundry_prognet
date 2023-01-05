<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Service;
use App\Http\Requests\UserServiceRequest;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('user.order.index', compact('order'));

        // $user = Auth::user();
        // return view('user.order.index',[
        //     'orders' => $user->orders
        // ]);
    }

    public function viewAdmin()
    {
        $order = Order::all();
        return view('admin.order.index', compact('order'));

        // $user = Auth::user();
        // return view('user.order.index',[
        //     'orders' => $user->orders
        // ]);
    }

    public function deleteOrder($id)
    {
        $data = Order::find($id);

        if($data != null){
            $data->delete();
        }

        return redirect()->back()->with('message', 'Order Berhasil di Hapus');
    }

    public function statusUpdate($id)
    {
        $order = Order::find($id);
        $order->status='delivered';
        $order->save();

        return redirect()->back()->with('message', 'Status Changed Successfully');
    }

    public function addOrder(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $email = $user->email;


        foreach($request->product as $key=>$product) 
        {
            $order = new Order();

            $order->product = $request->product[$key];

            $order->category = $request->product_category[$key];
            $order->quantity = $request->quantity[$key];
            $order->price = $request->price[$key];

            $order->name = $name;
            $order->email = $email;
            $order->status = 'not delivered';

            $order->save();
        }
        
        DB::table('carts')->where('email',$email)->delete();
        return redirect()->back()->with('message', 'Produk Berhasil di Order! YEAY!');
    }

}
