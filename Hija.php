<?php
class Hija extends Padre{

    public $ciudad="madrid";
    public $email="hijo2@gmail.com";

    public function __construct(String $ciudad){
        $this->ciudad=$ciudad;
    }

    public function __construct2(string $ciudad, string $email){
        $this->ciudad=$ciudad;
        $this->email=$email;
    }
}