<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;

class RestaurantController extends Controller
{   
    private $validations = [
        'name' => 'required|string|min:5|max:255',
        'address' => 'required|string|min:5|max:255',
        'p_iva' => 'required|string|min:5|max:255',
        'photo' => 'required|string|min:5|max:1000',
    ];
    
    private $validations_messages = [
        'required' => 'il campo :attribute è obbligatorio',
        'min' => 'il campo :attribute deve avere minimo :min caratteri',
        'max' => 'il campo :attribute non può superare i :max caratteri',
        'url' => 'il campo deve essere un url valido',
        'exists' => 'Valore non valido'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $restaurants = Restaurant::with(['user_id', 'name', 'address', 'p_iva', 'photo']);
        $restaurants = Restaurant::All();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        $request->validate($this->validations, $this->validations_messages);

        $data = $request->all();

        $newRestaurant = new Restaurant();

        $newRestaurant->name = $data['name'];
        $newRestaurant->address = $data['address'];
        $newRestaurant->p_iva = $data['p_iva'];
        $newRestaurant->photo = $data['photo'];

        $newRestaurant->save();

        return redirect()->route('admin.restaurants.create', ['restaurant' => $newRestaurant]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
