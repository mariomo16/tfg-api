<?php

namespace Database\Seeders;

use App\Models\Computer;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\TimeSlot;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Zone::factory(3)->create();
        Computer::factory(15)->create();
        TimeSlot::factory(14)->create();
        Reservation::factory(20)->create();
        Payment::factory(15)->create();
        Notification::factory(10)->create();
    }
}
