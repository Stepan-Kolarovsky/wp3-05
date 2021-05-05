<?php
 class Computer
{   
    private $name;
    
    public function __construct(string $name) {
        $this ->name = $name;
}

public function summary() {
    echo "Počítač s názvem <strong>$this->name</strong> obsahuje skvělé komponenty";

}
}
?>