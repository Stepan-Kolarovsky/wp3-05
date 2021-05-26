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
public function getName() {
    return $this->name;
}
public function getCpu() {
    return $this->cpu;
}

public function getGpu() {
    return $this->gpu;
}
public function getSsd() {
    return $this->ssd;
}
public function getRam() {
    return $this->ram;
}
public function getMb() {
    return $this->mb;
}
public function getPsu() {
    return $this->psu;
}


}
?>