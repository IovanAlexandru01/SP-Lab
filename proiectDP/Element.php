<?php
interface Element{

    public function print();
    public function add($element);
    public function remove($element);
    public function get($element);
    public function accept($visitior);


}

?>