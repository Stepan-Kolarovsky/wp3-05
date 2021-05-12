<?php
 class Computer
{   
    private $name;
    private $cpu;
    private $gpu;
    private $ssd;
    private $ram;
    private $mb;
    private $psu;
    
    public function __construct(string $name, string $cpu, string $gpu,string $ssd, string $ram, string $mb, string $psu) {
        $this ->name = $name;
        $this ->cpu = $cpu;
        $this ->gpu = $gpu;
        $this ->ssd = $ssd;
        $this ->ram = $ram;
        $this ->mb = $mb;
        $this ->psu = $psu;
}

public function summary() {
    echo "název PC: $this->name<br>cpu:$this->cpu<br>gpu:$this->gpu<br>ssd:$this->ssd<br>ram:$this->ram<br>mb:$this->mb<br>psu:$this->psu";
    echo "<br>";

}
public function getname() {
    return $this->name;
}
public function getcpu() {
    return $this->cpu;
}

public function getgpu() {
    return $this->gpu;
}
public function getssd() {
    return $this->ssd;
}
public function getram() {
    return $this->ram;
}
public function getmb() {
    return $this->mb;
}
public function getpsu() {
    return $this->psu;
}


}
?>