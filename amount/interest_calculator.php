<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 2:43 PM
 */

class interestCalculator {

    public $principleAmount;
    public $interestRate;
    public $timePeriod;


    public function getTotalAmount(){


        return ($this->interestRate*$this->principleAmount)/100+$this->principleAmount;
    }
} 