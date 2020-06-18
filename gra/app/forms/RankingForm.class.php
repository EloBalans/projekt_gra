<?php

namespace app\forms;

class RankingForm
{
    
    public $nick;
    
    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}