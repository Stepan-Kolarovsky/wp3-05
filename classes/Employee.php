<?php
 class Employee
{   
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $street;
    private $city;
    private $computer;
    
    public function __construct(string $firstname, string $lastname, string $email,string $phone, string $street, string $city, string $computer) {
        $this ->firstname = $firstname;
        $this ->lastname = $lastname;
        $this ->email = $email;
        $this ->phone = $phone;
        $this ->street = $street;
        $this ->city = $city;
        $this ->computer = $computer;
}

public function summary() {
    echo "Jméno: $this->firstname<br>Přímení:$this->lastname<br>email:$this->email<br>telefon:$this->phone<br>adresa:$this->street<br>city:$this->city<br>Počítač:$this->computer";
    echo "<br>";

}
public function getfirstname() {
    return $this->firstname;
}
public function getlastname() {
    return $this->lastname;
}

public function getemail() {
    return $this->email;
}
public function getphone() {
    return $this->phone;
}
public function getstreet() {
    return $this->street;
}
public function getcity() {
    return $this->city;
}
public function getcomputer() {
    return $this->computer;
}


}
?>