<?php

class user
{
     // member / atribute
     public $nama;
     public $umur;
     
     // contructor php v7.4
     public function __construct($nama,$umur)
     {
         $this->nama - $nama;
         $this->umur - $umur;
     }
     }

// inisialisai object
$user1 = new User("udin",20);

echo $user1->nama = "stnlyygy <br>";
echo $user1->umur = 18;
