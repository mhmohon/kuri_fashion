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
use App\Inventory;
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
    public function update(Request $request, $id, $address_id)
    {
        $validate = $this->validate(request(),[
            'order_date' => 'required',
            'order_status' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'full_address' => 'required',
            'payment_type' => 'required',
            'order_description' => 'required',
        ]);
        
        //User Address update
        
        $full_address = request('full_address');
        $get_street = explode(',',trim($full_address))[0];
        $street_address = request('route');
        
        //check if user street address is get.
        if($street_address == null){

            $address = Address::find($id)->update([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => $get_street,  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);

        }elseif($get_street != $street_address){

            $address = Address::find($id)->update([
                'house_no' => request('house_no'),
                'street_address' => $get_street,
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);
        }else{
            $address = Address::find($id)->update([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);
        }

        //End User Address update
        
        $status = request ('order_status');
        //order update
        if( $status == 'confirm'){

            $updateDate = Order::find($id)->updated_at->addDays(4);
            Order::find($id)->update([

                'estimate_delivery_date' => $updateDate->toDateString()
            ]);

        }elseif($status == 'delivered'){

            $updateDate = \Carbon\Carbon::now();
            Order::find($id)->update([

                'delivery_date' => $updateDate->toDateString()
            ]);

        }elseif($status == 'returned'){

            //Get all the order content.
            $orderItems = OrderItem::where('order_id', $id)->get();

            foreach($orderItems as $orderItem){
                $product_id = $orderItem->product_id;
                $order_qty = $orderItem->quantity;
                $exist_qty = Inventory::find($product_id)->quantity_in_stock;
                $new_qty = $exist_qty + $order_qty;

                $updateInventory = Inventory::find($product_id)->update([
                    'quantity_in_stock' => $new_qty,
                ]);
            }
        }
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
        //for update invnetory
        $product_id = $orderItem->product_id;
        $exist_qty = Inventory::find($product_id)->quantity_in_stock;
        $new_qty = $exist_qty - $new_quantity;

        $orderUpdate = OrderItem::find($id)->update([

            'quantity' => $new_quantity,
            'total_price' => $sub_total,

        ]);
        $updateInventory = Inventory::find($product_id)->update([
            'quantity_in_stock' => $new_qty,
        ]);
        return redirect()->back()->with('msgsuccess','Quantity updated successfully');
    }

    public function deleteItem($id)
    {
        
        //find item and delete.
        $orderItem = OrderItem::find($id);
        if($orderItem->order->status != 'returned'){

            //for update invnetory
            $product_id = $orderItem->product_id;
            $order_qty = $orderItem->quantity;
            $exist_qty = Inventory::find($product_id)->quantity_in_stock;
            $new_qty = $exist_qty + $order_qty;

            $updateInventory = Inventory::find($product_id)->update([
                'quantity_in_stock' => $new_qty,
            ]);
        }
        $orderItem = OrderItem::find($id)->delete();
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
