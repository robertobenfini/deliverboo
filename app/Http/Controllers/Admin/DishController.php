<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
{
    
    public function index()
    {
        $dishes = Dish::All();
        return view('admin.restaurant.dishes.index', compact('dishes'));
    }

    public function create()
    {
        return view('admin.dishes.create');
    }

    public function store(Request $request)
    {


        $data = $request->all();

        // dd($data);
        
        // Recupera l'ID del ristorante associato all'utente autenticato
        $restaurantId = auth()->user()->restaurant->id;
        
        $newDish = new Dish();
         // Se il campo 'visible' non è stato fornito, imposta un valore predefinito
        $visible = $request->has('visible') ? $request->visible : true;

        $newDish->name = $data['name'];
        $newDish->description = $data['description'];
        $newDish->ingredients = $data['ingredients'];
        $newDish->visible = $visible;
        $newDish->price = $data['price'];

        // Assegna l'ID del ristorante al nuovo piatto
        $newDish->restaurant_id = $restaurantId;

        $newDish->save();

        return redirect()->route('admin.restautants.index', ['dish' => $newDish]);
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
