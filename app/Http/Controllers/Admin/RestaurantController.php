<?php

namespace App\Http\Controllers\Admin;

use App\Models\Typology;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;

class RestaurantController extends Controller
{
    private $validations = [
        'name' => 'required|string|min:5|max:255',
        'address' => 'required|string|min:5|max:255',
        'p_iva' => 'required|numeric|digits:13',
        'photo' => 'nullable|string',
    ];

    private $validations_messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Il campo :attribute deve avere almeno :min caratteri',
        'max' => 'Il campo :attribute non può superare i :max caratteri',
        'url' => 'Il campo deve essere un URL valido',
        'exists' => 'Valore non valido',
    ];

    public function index()
    {
        $user = Auth::user();
        $restaurant = $user->restaurant;

        return view('admin.restaurants.index', compact('restaurant'));
    }

    public function create()
    {
        $typologies = Typology::all();
        return view('admin.restaurants.create', compact('typologies'));
    }

    public function store(StoreRestaurantRequest $request)
    {
        $request->validate($this->validations, $this->validations_messages);

        $data = $request->all();

        $newRestaurant = new Restaurant();
        $newRestaurant->user_id = auth()->user()->id;
        $newRestaurant->name = $data['name'];
        $newRestaurant->address = $data['address'];
        $newRestaurant->p_iva = $data['p_iva'];
        $newRestaurant->photo = $data['photo'];

        $newRestaurant->save();

        $newRestaurant->typologies()->sync($data['typologies'] ?? []);

        return redirect()->route('admin.restaurants.index', ['restaurant' => $newRestaurant]);
    }

    public function edit(Restaurant $restaurant)
    {
        $typologies = Typology::all();

        if (Auth::user()->id !== $restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }

        return view('admin.restaurants.edit', compact('restaurant', 'typologies'));
    }

    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $request->validate($this->validations, $this->validations_messages);

        if (Auth::user()->id !== $restaurant->user_id) {
            return abort(403, 'Non hai il permesso di accedere, il tuo URL è stato modificato');
        }

        $data = $request->all();

        $restaurant->user_id = auth()->user()->id;
        $restaurant->name = $data['name'];
        $restaurant->address = $data['address'];
        $restaurant->p_iva = $data['p_iva'];
        $restaurant->photo = $data['photo'];

        $restaurant->typologies()->sync($data['typologies'] ?? []);

        $restaurant->update();

        return redirect()->route('admin.restaurants.index', ['restaurant' => $restaurant->id]);
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->typologies()->sync([]);

        if ($restaurant->photo) {
            Storage::delete($restaurant->photo);
        }

        $restaurant->delete();

        return redirect()->route('admin.restaurants.index')->with('delete_success', $restaurant);
    }
}
