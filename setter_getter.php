<?php

class contoh2
{
     ///variabel global
    //   public $nama;
    //   private $harga;

    //     constructor
    
        public function __construct(public string $nama = "teh", public int $harga = 1500)
    {
        $this->nama = $nama;
        $this->harga =$harga;
    }
   public function setnama(string $nama)
{
    $this->harga = $nama;
}
    public function getnama()
    {
       return $this->nama;
    }
    public function  setharga(string $harga) 
    {
        $this->harga;
    }
    public function getharga()
{
    return $this->harga;
}
public function display():void
{
    echo "nama: ".$this->getnama();
    echo "<br>";
    echo "harga : ".$this->getharga();
}
}  

$contoh1 = new contoh2();
$contoh1->setharga(harga : 3000);
echo $contoh1->display();