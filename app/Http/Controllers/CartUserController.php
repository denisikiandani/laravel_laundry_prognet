<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Service;
use App\Http\Requests\UserServiceRequest;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class CartUserController extends Controller
{
    public function index()
    {
        // return view('user.cart.index');

        $cart = Cart::all();
        return view('user.cart.index', [
            // 'kategori' => $kategori,
            'carts'=>$cart
        ]);
    }

    public function delete($id)
    {
        $data = Cart::find($id);

        if($data != null){
            $data->delete();
        }

        return redirect()->back()->with('message', 'Cart Berhasil di Hapus!');
    }
}
