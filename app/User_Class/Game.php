<?php
namespace App\User_Class;

use App\Marker;

class Game
{
    private $token;
    public $score;
    public $current_task;
    public $passed = array();

    public function __construct()
    {
        $max = Marker::max('task_num');
        $min = Marker::min('task_num');
        //Generate a random string.
        $this->token = openssl_random_pseudo_bytes(16);
        //Convert the binary data into hexadecimal representation.
        $this->token = bin2hex($this->token);
        $this->score = 0;
        $this->current_task = rand($min, $max);

    }
    public function UpdateTask()
    {
        $max = Marker::max('task_num');
        $min = Marker::min('task_num');
        

        if (\in_array($min,$this->passed) and \in_array($max,$this->passed)){
            $this->score=$this->score+1000;
            return false;
        }

        do {

            $this->current_task = rand($min, $max);

        } while (in_array($this->current_task, $this->passed));
        $this->score=$this->score+100;
        return true;

    }
    public function GetData()
    {
        print("Token: $this->token\nScore: $this->score\nCurrent_Task: $this->current_task");
    }
    public function PassTask()
    {
        array_push($this->passed, $this->current_task);
        if ($this->UpdateTask()) {
            return true;
        } else {
            // echo "Вы прошли игру";
            return false;
        }

    }
}
