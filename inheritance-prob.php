<!-- class php -->
 <?php
  class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $durasi;
  public $waktumain;
  public $tipe;
         
         public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi = 0, $waktumain = 0, $tipe = "tipe")
        {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
          $this->durasi = $durasi;
          $this->waktumain = $waktumain;
          $this->tipe = $tipe;
        }

         public function getData(){
            return "$this->judul, $this->penulis, $this->penerbit";
      }
      //method untuk mencetak info lengkap prduk
      public function getinfolengkap(){
        $cetak = "{$this->tipe} | {$this->judul} | {$this->getdata()} (RP. {$this->harga}) ";
        if ($this->tipe == "Game"){
          $cetak .= " - {$this->waktumain} JAM";
        } elseif ($this->tipe == "Film"){
          $cetak .= " - {$this->durasi} Menit";
        }
        return $cetak;
      }
  }

  class infoProduk{
    //method utnuk mencetak info produk
    public function getinfoProduk( produk $produk ){
    $str = "{$produk->judul} | {$produk->getdata()} (RP.{$produk->harga})"; 
    return $str;
  }

  }

  $produk1 = new produk("The Prodigy", "Gege Akutami", "Yuta Okkutsu", 100000, 80);
  $produk2 = new produk("wuthering waves", "kuro games", "kuro games", 100000);
 
 
  