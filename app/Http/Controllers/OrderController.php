<?php

namespace App\Http\Controllers;

use DB;
use App\Order;
use Illuminate\Http\Request;
use Session;
use File;

class OrderController extends Controller
{
    public function index(){
		$orders = DB::table('orders')->get();
        return view('pages/welcome')->with('orders', $orders);
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
        $order->category = $request->category;
        $order->school = $request->school;
        $order->type = $request->type;
        $order->body = $request->body;
        $order->price = $request->price;
        $order->tags = 'cos';
        $order->save();

        foreach (json_decode($request['files']) as $fileName) {
            if ($this->isImage($fileName)) {
                DB::table('images')->insert(['order_id' => $order->id, 'path' => $fileName]);
            } else {
                DB::table('attachments')->insert(['order_id' => $order->id, 'path' => $fileName]);
            }
        };

        Session::flash('success', 'Zadanie zostało wysłane na market');
        return url("/orders/$order->id");
    }

     public function show($id)
    {
        $order = DB::table('orders')->where('id', $id)->get();
        $images = DB::table('images')->where('order_id', $id)->get();
        $attachments = DB::table('attachments')->where('order_id', $id)->get();
        return view('orders.show')
            ->with('orders', $order)
            ->with('images', $images)
            ->with('attachments', $attachments);
    }

    public function edit($id){
    }


    public function update(Request $request, $id){
    }

    public function destroy($id){
    }
	
	 private function isImage($fileName)
    {
        $imageExtensions = array('jpg', 'jpeg', 'png', 'gif');
        $extension = File::extension($fileName);
        return in_array(strtolower($extension), $imageExtensions);
    }
}
