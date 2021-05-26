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
    
    public function __construct(string $firstname, string $lastname, string $email, int $phone, string $street, string $city, Computer $computer) {
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
public function getFirstname() {
    return $this->firstname;
}
public function getLastname() {
    return $this->lastname;
}

public function getEmail() {
    return $this->email;
}
public function getPhone() {
    return $this->phone;
}
public function getStreet() {
    return $this->street;
}
public function getCity() {
    return $this->city;
}
public function getComputer() {
    return $this->computer;
}


}
?>