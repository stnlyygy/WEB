<?php

class udin
{
    public $nama;
    public $marga;

//  constructor 
    public function __construct(string $marga = "simanjuntak",string $nama = "udin")
    {
        $this->nama = $nama;
        $this->marga = $marga;
    }

        public function setnama(string $nama)
        {
            $this->nama = $nama;
        }

        public function getnama()
        {
            return $this->nama;
        }
        public function display():void
        {
            echo "nama : ".$this->getnama() ."<br>";
            echo "marga : ".$this->getmarga();
        }
        public function getmarga()
        {
            return $this->marga;
        }
    }
    
class udin1 extends udin
{   
}
$udin1  = new udin;
echo $bocil1->display();
