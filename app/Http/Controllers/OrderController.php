<?php

namespace App\Http\Controllers;

use DB;
use App\Order;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    public function index(){
		$orders = DB::table('orders')->get();
        return view('pages/welcome', ['orders' => $orders]);
    }


    public function create(){
        return view('orders.create');
    }

    public function store(Request $request){
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
        ));

        $order = new Order();
        $order->title = $request->title;
        $order->body = $request->body;
        $order->tags = 'cos';

        $order->save();

        Session::flash('success', 'Zadanie zostało wysłane na market');

        return redirect()->route('orders.show', $order->id);
    }

    public function show($id){

        return view('orders.show');
    }

    public function edit($id){
    }


    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
}
