<?php
class a
{
    public $akun = "erinrfn";
    protected $email = "erin@gmail.com";
    private $pass = "cantik";

    public function login()
    {
        $email = $this->email;
        $b = $this->pass;
        if ($email == "erin@gmail.com" && $b == "cantik") {
            $c = "Login Berhasil";
        } else {
            $c = "Login Gagal";
        }
        return $c;
    }
    public function info()
    {
        $email = $this->email;
        $b = $this->akun;
        $c = "Email : " . $email . "<br>Nama Akun : " . $b;
        return $c;

    }
}
$a = new a();

echo "Nama Akun : " . $a->akun . "<br>";
echo "Email : " . $a->email . "<br>";
echo "Password : " . $login->b . "<hr>";
