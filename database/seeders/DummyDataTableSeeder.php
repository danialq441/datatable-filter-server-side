<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DummyData; // Import your DummyData model if you've created one

class DummyDataTableSeeder extends Seeder
{
    public function run()
    {
        // Define your dummy data
        $dummyData = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com'],
            ['name' => 'Alice Williams', 'email' => 'alice@example.com'],
            ['name' => 'Michael Brown', 'email' => 'michael@example.com'],
            ['name' => 'Emily Davis', 'email' => 'emily@example.com'],
            ['name' => 'William Wilson', 'email' => 'william@example.com'],
            ['name' => 'Samantha Taylor', 'email' => 'samantha@example.com'],
            ['name' => 'Daniel Martinez', 'email' => 'daniel@example.com'],
            ['name' => 'Olivia Anderson', 'email' => 'olivia@example.com'],
            ['name' => 'James Jackson', 'email' => 'james@example.com'],
            ['name' => 'Sophia Harris', 'email' => 'sophia@example.com'],
            ['name' => 'Matthew Clark', 'email' => 'matthew@example.com'],
            ['name' => 'Isabella Lewis', 'email' => 'isabella@example.com'],
            ['name' => 'Ethan Lee', 'email' => 'ethan@example.com'],
            ['name' => 'Emma Walker', 'email' => 'emma@example.com'],
            ['name' => 'Aiden Hall', 'email' => 'aiden@example.com'],
            ['name' => 'Mia Green', 'email' => 'mia@example.com'],
            ['name' => 'Liam Carter', 'email' => 'liam@example.com'],
            ['name' => 'Charlotte Brown', 'email' => 'charlotte@example.com'],
        ];

        // Insert dummy data into the database
        foreach ($dummyData as $data) {
            DummyData::create($data);
        }
    }
}

