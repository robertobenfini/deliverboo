<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = config('orders');

        foreach ($orders as $arrOrders) {
            $order = Order::create([
                'name' => $arrOrders['name'],
                'lastname' => $arrOrders['lastname'],
                'address' => $arrOrders['address'],
                'phone' => $arrOrders['phone'],
                'status' => $arrOrders['status'],
                'totalprice' => $arrOrders['totalprice'],
            ]);

            foreach ($arrOrders['dishes'] as $dishId) {
                // Recupera il piatto dall'ID
                $dish = Dish::findOrFail($dishId);
                
                // Associa il piatto all'ordine
                $order->dishes()->attach($dish);
            }
        }
    }
}
