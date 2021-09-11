<?php
//mendrfinisikan sebuah class
class komputer{
    //membuat property atau atribut
    public $pemilik = "erin";
    public $merk = "tosiba";
    public $ukuran = "140";
    
    //membuat method 
    public function dinyalakan()
    {
        return "dinyalakan";
    }
    public function dimatikan()
    {
        return "dimatikan";
    }
}
$komputer1 = new komputer();
echo "pemilik : ". $komputer1->pemilik . "<br>";
echo "merk : ". $komputer1->merk . "<br>";
echo "ukuran : ". $komputer1->ukuran . "<br>";
echo "komputer: ". $komputer1->dinyalakan() . "<hr>";

$komputer2 = new komputer();
$komputer2->pemilik = "lusi";
$komputer2->merk = "LG";
echo "pemilik : ". $komputer2->pemilik . "<br>";
echo "merk : ". $komputer2->merk . "<br>";
echo "ukuran : ". $komputer2->ukuran . "<br>";
echo "komputer: ". $komputer2->dimatikan() . "<hr>";

$komputer3 = new komputer();
$komputer3->pemilik = "linda";
echo "pemilik : ". $komputer3->pemilik . "<br>";
echo "merk : ". $komputer3->merk . "<br>";
echo "ukuran : ". $komputer3->ukuran . "<br>";
echo "komputer: ". $komputer3->dimatikan() . "<hr>";

$komputer4 = new komputer();
$komputer4->pemilik = "berlin";
echo "pemilik : ". $komputer4->pemilik . "<br>";
echo "merk : ". $komputer4->merk . "<br>";
echo "ukuran : ". $komputer4->ukuran . "<br>";
echo "komputer: ". $komputer4->dinyalakan() . "<hr>";

$komputer5 = new komputer();
$komputer5->pemilik = "lusi";
echo "pemilik : ". $komputer5->pemilik . "<br>";
echo "merk : ". $komputer5->merk . "<br>";
echo "ukuran : ". $komputer5->ukuran . "<br>";
echo "komputer: ". $komputer5->dinyalakan() . "<hr>";


?>