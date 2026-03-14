<?php
declare(strict_types=1);
namespace App;

class Result2{
    public float $phy;
    public float $ches;
    public float $math;
    public float $bio;

    public function GetAverage(){
        return ($this->phy+$this->ches+$this->math+$this->bio)/4;
    }

    public function GetPasOrFail(){
       return $this->GetAverage() >= 60 ? 'Pass' : 'Fail';
    }
}