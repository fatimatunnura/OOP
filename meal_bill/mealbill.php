<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 3:28 PM
 */

class mealbill {

    public $rice;
    public $vegetable;
    public $fish;
    public $meat;
    public $vat;




    public function getGrossTotal(){


        return ($this->rice+$this->vegetable+$this->fish+$this->meat);
    }
    public function getvat(){
        return($this->getGrossTotal()*$this->vat/100);
    }


    public function getpayableAmount(){


        return ($this->getGrossTotal()+$this->getvat());
    }
}