<?php
class hewan 
{
public $nama;
Public $jenis;

public function __construct($nama = "joni" , $jenis = "husky")
{
$this->nama = $nama;
$this->jenis = $jenis;
}


//  attribute promotions

// public function __construct(public $nama ="joni" , public $jenis = "husky") 


public function display():void
{
    echo "nama : ".$this->nama . "<br>";
    echo "jenis : ". $this->jenis;
  }
}

//inisialis objek
$hewan1 = new hewan("bady", "buldog");

echo $hewan1->display();