<?php 

declare(strict_types=1);

namespace App;

class Result
{
    public float $physics;
    public float $math;
    public float $chemistry;

    public function GetAverage(): float | int
    {
        return ($this->physics + $this->math + $this->chemistry) / 3;
    }

    public function GetPassOrFail():string
    {
        return $this->GetAverage() >= 60 ? 'Pass' : 'Fail';
    }
}