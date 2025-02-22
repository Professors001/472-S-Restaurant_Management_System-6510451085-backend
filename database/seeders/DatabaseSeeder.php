<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Food::factory(50)->create();
        Table::factory(20)->create();
        Order::factory(30)->create();
        OrderList::factory(50)->create();
        Reservation::factory(30)->create();
    }
}
