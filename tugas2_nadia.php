<html>
    <h2> Nama : nadia nur aini </h2>
    <h3> Kelas : XI RPL</h3>
</html>
<?php
class Animals1 {
    public $ekor1 ;
    public $ekor2 ;
    public $bulu1 ;
    public $bulu2 ;
    public $warna1 ;
    public $warna2 ;
    public $suara1 ;
    public $suara2 ;
    public $hewan1 ;
    public $hewan2;
}
class Cat extends Animals1 {
     public $jenisCat;
     
    public function Ekor1(){
        return " ekor1 : ".$this->ekor1;
    }
    public function Ekor2(){
        return " ekor2 : ".$this->ekor2;
    }
    public function Bulu1(){
        return "bulu1 :".$this->bulu1;
    }
    public function Bulu2(){
        return "bulu2 :".$this->bulu2;
    }
    public function warna1(){
        return "warna1 : ".$this->warna1;
    }
    public function warna2(){
        return "warna2 : ".$this->warna2;
    }
    public function suara1(){
        return "suara1 : ".$this->suara1;
    }
    public function suara2(){
        return "suara2 : ".$this->suara2;
    }
    public function Hewan1(){
        return "hewan1 : ".$this->hewan1;
    }
    public function Hewan2(){
        return " hewan2 : ".$this->hewan2;
    }

}
class jenisCat extends Animals1{
    public $jenis_kucing1;
    public $jenis_kucing2;
    public $jenis_kucing3;
    
    public function kucing1(){
        return("1.jenis kucing :").$this-> jenis_kucing1;
    }
    public function kucing2(){
        return("2.jenis kucing : ").$this-> jenis_kucing2;
    }
    public function kucing3(){
        return("3.jenis kucing : ").$this-> jenis_kucing3;
    }
}
class jenisDog extends Animals1{
    public $jenis_anjing1;
    public $jenis_anjing2;

    public function anjing1(){
        return("1.jenis anjing : ").$this->jenis_anjing1;
    }
    public function anjing2(){
        return("2.jenis anjing : ").$this->jenis_anjing2;
    }
}
$kucing = new Cat();
echo"<br>===========================kucing==================</br>";
$kucing -> ekor1 ="panjang <br>";
echo $kucing -> Ekor1();
$kucing -> bulu1 ="halus<br>";
echo $kucing -> Bulu1();
$kucing -> warna1 ="putih<br>";
echo $kucing -> Warna1();
$kucing -> suara1 ="meong<br>";
echo $kucing -> Suara1();
$kucing -> hewan1 ="kucing<br>";
echo $kucing -> Hewan1();


$jeniskucing = new jenisCat();
echo"<br>========================jenis kucing==================<br>";
$jeniskucing -> jenis_kucing1 ="persia<br>";
echo $jeniskucing ->kucing1();
$jeniskucing -> jenis_kucing2 ="anggora<br>";
echo $jeniskucing ->kucing2();
$jeniskucing -> jenis_kucing3 ="himalay<br>";
echo $jeniskucing ->kucing3();


$dog = new Cat();
echo"<br>===========================anjing==================</br>";
$dog -> ekor2 ="panjang <br>";
echo $dog -> Ekor2();
$dog -> bulu2 ="halus<br>";
echo $dog -> Bulu2();
$dog -> warna2 ="coklat<br>";
echo $dog -> Warna2();
$dog -> suara2 ="gog gog<br>";
echo $dog -> Suara2();
$dog -> hewan2 ="anjing<br>";
echo $dog -> Hewan2();


$jenisanjing = new jenisDog();
echo"<br>========================jenis dog==================<br>";
$jenisanjing -> jenis_anjing1 ="jermanshep<br>";
echo $jenisanjing ->anjing1();
$jenisanjing -> jenis_anjing2 ="bulldog<br>";
echo $jenisanjing ->anjing2();


?>