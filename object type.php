<!-- class php -->
 <?php
  class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
         
         public function __construct($judul = "judul" , $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
        {
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
        }

         public function getData(){
            return "$this->judul, $this->penulis, $this->penerbit";
      }
  }

  class infoProduk{
    //method utnuk mencetak info produk
    public function getinfoProduk( produk $produk ){
    $str = "{$produk->judul} | {$produk->getdata()} (RP.{$produk->harga})"; 
    return $str;
  }

  }

  $produk1 = new produk("The Prodigy", "KaKaKA", "MAMAMAa", 100000);
  $produk2 = new produk("wuthering waves", "kuro games", "kuro games", 100000);
  $produk3 = new produk("minecraft", "Mojang", "Microsoft", 100000);
  $produk4 = new produk("Jujutsu kaisen", "Gege akutami", "Mappa", 100000);
  $produk5 = new produk("The Black", "ope", "Jarwo", 100000);
  
  // echo "Komik : " . $produk1->getData();
  // echo "<br/>";
  // echo "Game: " . $produk2->getData();
  // echo "<br/>";
  // echo "Game : " . $produk3->getData();
  // echo "<br/>";
  // echo "Anime : " . $produk4->getData();
  // echo "<br/>";
  // echo "Film : " . $produk5->getData();
  // echo "<br/>";
  $infoProduk1 = new infoProduk();
  echo $infoProduk1->getinfoProduk($produk1);
  echo "<br/>";
  echo $infoProduk1->getinfoProduk($produk2);
  echo "<br/>";
  echo $infoProduk1->getinfoProduk($produk3);
  echo "<br/>";
  echo $infoProduk1->getinfoProduk($produk4);
  echo "<br/>";
  echo $infoProduk1->getinfoProduk($produk5);
  echo "<br/>";
  
  