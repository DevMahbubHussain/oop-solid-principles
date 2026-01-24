<?php 

namespace App;

class Result
{
    public string $physics;
    public string $math;
    public string $chemistry;

    public function GetAverage()
    {
        return ($this->physics + $this->math + $this->chemistry) / 3;
    }

    public function GetPassOrFail()
    {
        return $this->GetAverage() >= 60 ? 'Pass' : 'Fail';
    }
}