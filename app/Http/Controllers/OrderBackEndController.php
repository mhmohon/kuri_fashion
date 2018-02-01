<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ProductDetail;
use App\Order;
use App\OrderItem;
use App\Address;
use App\PaymentMethod;
class OrderBackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get All the latest product.
        $orders = Order::latest()->get();    

        return view('back_end.pages.order.view_order', compact('orders'));
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
        $order = Order::find($id);
        return view('back_end.pages.order.view_order_detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $customer_id = $order->user_id;
        $addresses = Address::where('user_id', $customer_id)->get();
        $payment_type = PaymentMethod::latest()->get()->pluck('method_detail','id');

        return view('back_end.pages.order.edit_order', compact('order','addresses','payment_type'));
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
        $validate = $this->validate(request(),[
            'order_date' => 'required',
            'order_status' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'payment_type' => 'required',
            'order_description' => 'required',
        ]);
        
        
        $orderUpdate = Order::find($id)->update([

            'order_description' => request ('order_description'),
            'status' => request ('order_status'),
            

        ]);

        return redirect()->route('orderIndex')->with('msgsuccess','Order updated successfully');
    }


    public function updateQuantity(Request $request, $id)
    {
        
        $orderItem = OrderItem::find($id);
        $product_price = $orderItem->product->productDetail->pro_price;
        $new_quantity = request ('quantity'.$id);
        $sub_total = $product_price * $new_quantity;
        

        $orderUpdate = OrderItem::find($id)->update([

            'quantity' => $new_quantity,
            'total_price' => $sub_total,

        ]);

        return redirect()->back()->with('msgsuccess','Quantity updated successfully');
    }

    public function deleteItem($id)
    {
        
        //find item and delete.
        OrderItem::find($id)->delete();

        return redirect()->back()->with('msgsuccess','Order item deleted successfully');
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
