<?php


function getOrderItemQP($id)
{

	$orderItems= DB::table('order_items as ot')
                    ->join('orders as co', 'ot.order_id', '=', 'co.id')
                    ->select('ot.order_id')
                    ->addSelect(DB::raw('SUM(ot.quantity) as TotalQuantity'))
                    ->addSelect(DB::raw('SUM(ot.total_price) as TotalPrice'))
                    ->where('ot.order_id', '=', $id)
                    ->groupBy('ot.order_id')
                    ->get();
        //dd($orderItems);
    return $orderItems;
}

