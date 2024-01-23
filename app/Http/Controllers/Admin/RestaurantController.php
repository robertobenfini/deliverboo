<?php

namespace App\Http\Controllers\Admin;

use App\Models\Typology;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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
        'required' => 'il campo :attribute è obbligatorio',
        'min' => 'il campo :attribute deve avere minimo :min caratteri',
        'max' => 'il campo :attribute non può superare i :max caratteri',
        'url' => 'il campo deve essere un url valido',
        'exists' => 'Valore non valido'
    ];

    
    public function index()
    {
        // Recupera l'utente autenticato
        $user = Auth::user();

        // Recupera il ristorante associato all'utente
        $restaurant = $user->restaurant;

        return view('admin.restaurants.index', compact('restaurant'));
    }

    
    public function create()
    {   
        $typologies = Typology::All();
        return view('admin.restaurants.create', compact('typologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {   
        // dd($request->all());
        $request->validate($this->validations, $this->validations_messages);

        // Ottenere i dati dalla richiesta
        $data = $request->all();
       
        
        // dd($data);

        // Creare una nuova istanza del ristorante
        $newRestaurant = new Restaurant();

        $newRestaurant->user_id = auth()->user()->id;
        $newRestaurant->name = $data['name'];
        $newRestaurant->address = $data['address'];
        $newRestaurant->p_iva = $data['p_iva'];
        $newRestaurant->photo = $data['photo'];

        
        // Salvare il nuovo ristorante nel database
        $newRestaurant->save();

        // Sincronizzare le tipologie del ristorante
        $newRestaurant->typologies()->sync($data['typologies'] ?? []);

        // Reindirizzare alla vista degli ristoranti
        return redirect()->route('admin.restaurants.index', ['restaurant' => $newRestaurant]);
       
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
