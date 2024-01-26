<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    
    private $validations = [
        'name' => "required|string|max:255",
        'description' => "required|string|max:2500",
        'ingredients' => "required|string|max:255",
        'price' => "required|numeric|max:255",

    ];
    private $validations_messages = [
        'required' => 'il campo :attribute è obbligatorio',
        'min' => 'il campo :attribute deve avere minimo :min caratteri',
        'max' => 'il campo :attribute non può superare i :max caratteri',
        'url' => 'il campo deve essere un url valido',
        'exists' => 'Valore non valido'
    ];

    
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
        $request->validate($this->validations, $this->validations_messages);

        $data = $request->all();

        // dd($data);
        
        // Recupera l'ID del ristorante associato all'utente autenticato
        $restaurantId = auth()->user()->restaurant->id;
        
        $newDish = new Dish();
        
        $visible = $request->has('visible') ? true : false;

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

  
    public function edit(Dish $dish)
    {
        return view('admin.dishes.edit', compact('dish'));
    }

    public function update(Request $request, Dish $dish)
    {
        $request->validate($this->validations, $this->validations_messages);

        $data = $request->all();

        $visible = $request->has('visible') ? true : false;

        $dish->name = $data['name'];
        $dish->description = $data['description'];
        $dish->ingredients = $data['ingredients'];
        $dish->visible = $visible;
        $dish->price = $data['price'];


        $dish->update();

        return redirect()->route('admin.restaurants.index', ['dish' => $dish->id]);
    }

  
    public function destroy(Dish $dish)
    {
        $dish->delete();
        
        return redirect()->route('admin.restaurants.index')->with('delete_success', $dish);
    }
}
