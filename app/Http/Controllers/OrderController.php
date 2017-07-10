<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){
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

        return redirect()->route('orders.show', $order->id);
    }

    public function show($id){
    }

    public function edit($id){
    }


    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
}
