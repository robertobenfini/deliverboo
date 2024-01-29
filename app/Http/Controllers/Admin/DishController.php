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
        'required' => 'Il campo :attribute è obbligatorio',
        'max' => 'Il campo :attribute non può superare i :max caratteri',
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

        $restaurantId = auth()->user()->restaurant->id;

        $newDish = new Dish();

        $visible = $request->has('visible') ? true : false;

        $newDish->name = $data['name'];
        $newDish->description = $data['description'];
        $newDish->ingredients = $data['ingredients'];
        $newDish->visible = $visible;
        $newDish->price = $data['price'];
        $newDish->photo = $data['photo'];

        $newDish->restaurant_id = $restaurantId;

        $newDish->save();

        return redirect()->route('admin.restaurants.index', ['dish' => $newDish]);
    }

    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        
        if (Auth::user()->id !== $dish->restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }
        
        return view('admin.dishes.show', compact('dish'));
    }

    public function edit(Dish $dish)
    {
        if (Auth::user()->id !== $dish->restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }

        return view('admin.dishes.edit', compact('dish'));
    }

    public function update(Request $request, Dish $dish)
    {
        $request->validate($this->validations, $this->validations_messages);

        if (Auth::user()->id !== $dish->restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }

        $data = $request->all();

        $visible = $request->has('visible') ? true : false;

        $dish->name = $data['name'];
        $dish->description = $data['description'];
        $dish->ingredients = $data['ingredients'];
        $dish->visible = $visible;
        $dish->price = $data['price'];
        $dish->photo = $data['photo'];

        $dish->update();

        return redirect()->route('admin.restaurants.index', ['dish' => $dish->id]);
    }

    public function destroy(Dish $dish)
    {
        if (Auth::user()->id !== $dish->restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }

        $dish->delete();

        return redirect()->route('admin.restaurants.index')->with('delete_success', $dish);
    }
}
