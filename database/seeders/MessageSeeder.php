<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myMessages = [
            [
                'name' => 'Mario',
                'lastname' => 'Rossi',
                'email' => 'mario@rossi.com',
                'text' => "Volevo sapere se c'è uno spazio adatto ai cani"
            ]
        ];
        foreach ($myMessages as $message) {
            $newMessage = new Message();
            $newMessage->name = $message['name'];
            $newMessage->lastname = $message['lastname'];
            $newMessage->email = $message['email'];
            $newMessage->text = $message['text'];

            $newMessage->save();
        }
    }
}
