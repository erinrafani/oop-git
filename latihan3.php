<?php
class masuk
{
    public $pemilik = "erin";
    protected $noAtm = "1234";
    private $pinAtm = "223344";

    public function login()
    {
        $pemilik = $this->pemilik;
        $b = $this->noAtm;
        if ($pemilik == "erin" && $noAtm == "1234") {
            $c = "Login Berhasil";
        } else {
            $d = "Login Gagal";
        }
        return $c;
    }
    public function info()
    {
        $pemilik = $this->pemilik;
        $b = $this->akun;
        $c = "Email : " . $email . "<br>Nama Akun : " . $b;
        return $c;

    }
}
$masuk = new masuk();

echo "Nama Akun : " . $login->akun . "<br>";
echo "Email : " . $login->login() . "<br>";
echo "Password : " . $login->pass . "<hr>";
