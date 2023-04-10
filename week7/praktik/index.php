<?php

//  class Tes{}
//  $a = new Tes();
//  var_dump($a);

 class Mobil{
    public $nama, // <- Variable di dalam class = Property
           $merk,
           $warna;

    // public function __construct($nama = $_POST['nama'], $umur = $_POST['umur'], $jk = $_POST['jk'], $bb = $_POST['bb'], $tb = $_POST['tb']) {
    //     $this->nama = $nama;
    //     $this->umur = $umur;
    //     $this->jk = $jk;
    //     $this->bb = $bb;
    //     $this->tb = $tb;
    // }
           
    // Fungsi di dalam class = Method 
    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }
 }

 $mobil1 = new Mobil(); // <- Variable di isi class = Object



 class Produk{
    public $nama = 'ini nama',
           $jenis = 'ini jenis',
           $harga = 9999;
    
    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printHarga(){
        return $this->harga;
    }
 }

 $produk1 = new Produk("Hoodie", "Jaket", 185000);
 
 echo "$produk1->nama, $produk1->jenis";
 echo "<br>";
 echo "Harga : " . $produk1->printHarga();



//  echo "Produk 1 : $produk1->nama,";

//  var_dump($produk1);
 ?>