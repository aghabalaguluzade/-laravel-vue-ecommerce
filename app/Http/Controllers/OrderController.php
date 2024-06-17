<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $order = Order::query()->where(['created_by' => $user->id])->paginate();

        return view('order.index', compact('orders'));
    }
}
