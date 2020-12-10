<?php
namespace App;

class GreetingGenerator
{
    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha', 'Hi'];
        $greeting = $greetings[array_rand($greetings)];

        return $greeting;
    }
}