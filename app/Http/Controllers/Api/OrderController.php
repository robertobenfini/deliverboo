<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    public function index(Request $request)
    {
          // gestione parametro q (parametro di ricerca)
          $searchStr = $request->query('q', '');

          $orders = Order::where('name', 'LIKE', "%{$searchStr}%")->paginate(100);
   
          return response()->json([
               'success' => true,
               'results' => $orders,
          ]);
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

    
    public function store(Request $request)
    {
        $data = $request->all();
        
        $order = new Order();
        $order->name = $data['name'];
        $order->lastname = $data['lastname'];
        $order->address = $data['address'];
        $order->phone = $data['phone'];
        $order->status = true;
        $order->totalprice = $data['totalprice'];

        $order->save();

        if (isset($data['dishes']) && is_array($data['dishes'])) {
            foreach ($data['dishes'] as $dishData) {
                // Assicurati che i dati del piatto contengano dish_id e quantity
                if (isset($dishData['dish_id']) && isset($dishData['quantity'])) {
                    $order->dishes()->attach($dishData['dish_id'], ['quantity' => $dishData['quantity']]);
                }
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Ordine salvato con successo!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
