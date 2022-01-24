<?php
    class bapak
{
    public $nama;       
    public $marga;

    public function __construct(string $nama = "@@@@@", string $marga = "simanjuntak" , string $status = "bapak") 
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
    }
    public function getnama() : string
    {
        return $this->nama;
    }
    public function getmarga() : string
    {
        return $this->marga;
    }
    public function getstatus() : string
    {
        return $this->status;
    }
    public function display() : void
    {
        echo $this->judul(). " <br>" ;  //overloading
        echo "nama : " , $this->getnama() , "<br>";
        echo "marga : " , $this->getmarga() , "<br>";
        echo "status : " , $this->getstatus() , "<br>";
        // echo
    }
    public function judul() : void 
    {
        echo "ini dari class ". $this->getstatus();
    }
}

// calss anak extends bapak
// {
// public $role;


// public function __construct(
//     string $nama = "dol" , string $marga = "simanjuntak",
//     string $status = "anak", string $role = "murid"
//     )
//     {
//         // overriding construct
//         parent:: __construct($nama, $marga, $status);
//         $this->role = $role;
//     }
//     public function displaychild():void
//     {
//         echo parent ::display();
//         echo "role : ".$this->getrole();
//     }
//     public function getrole() : string
//     {
//         return $this->role;
//     }
// }
// //  inisialisasi object
// $bapak = steven();

// $anak1 = steven();
// echo $bapak->display();

// echo "<hr>";
// echo $anak1->displayshild();