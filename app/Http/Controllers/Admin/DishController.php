<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    
    public function index()
    {
        $user = Auth::user(); 
        $restaurant = $user->restaurant; 
    
        $dishes = $restaurant->dishes;
        return view('admin.dishes.index', compact('dishes', 'restaurant'));
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
        $newDish->photo       = $data['photo'];

        // Assegna l'ID del ristorante al nuovo piatto
        $newDish->restaurant_id = $restaurantId;

        $newDish->save();

        return redirect()->route('admin.restaurants.index', ['dish' => $newDish]);
    }

   
    public function show($id)
    {
        $dish = Dish::findOrFail($id);

        return view('admin.dishes.show', compact('dish'));
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
