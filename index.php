<?php require_once "classes/Computer.php";?>
<?php require_once "classes/Employee.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $computers[] = new Computer(" Pepíkuv počítač"," Intel Core i7 10900K"," Nvidia RTX 3070 16GB"," 256GB"," 16GB"," Asus"," Corsair 750W");
     $computers[] = new Computer(" Kájův počítač", " Amd Ryzen 9 5900X"," AMD Radeon RX 6700X"," 500GB"," 32GB"," Gigabyte"," Be quiet 850W");
     $computers[] = new Computer(" Lakyho počítač", " Amd Ryzen 7 3700X"," Nvidia GeForce 1660 6GB"," 1TB"," 16GB"," Gigabyte"," Corsair 650W");
     $computers[] = new Computer(" Franty počítač", " Amd Ryzen 5 3600X"," Nvidia RTX 2080 8GB"," 2TB"," 32GB"," Asus"," Asus 800W");
     $computers[] = new Computer(" Honzy počítač", " Intel Core i9 10900k"," Nvidia RTX 3090 16GB"," 5TB"," 64GB"," Asus"," Corsair 1200W");
    
     $employees[] = new Employee("Štěpán","Kolarovský","stepan.kolarovsky@student.ossp.cz",123456789,"kpt.jaroše","Velký Osek",$computers[1])
    ?>
<h1>Výpis Názvů</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getname() . "<br>";}
?>
<h1>Výpis CPU</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getcpu() . "<br>";}
?>
<h1>Výpis GPU</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getgpu() . "<br>";}
?>
<h1>Výpis SSD</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getssd() . "<br>";}
?>
<h1>Výpis RAM</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getram() . "<br>";}
?>
<h1>Výpis MB</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getmb() . "<br>";}
?>
<h1>Výpis PSU</h1>
    <?php
    foreach ($computers as $computer){echo $computer->getpsu() . "<br>";}
?>
?>
<h1>Výpis Employee</h1>
    <?php
    foreach ($employees as $employee){echo $employee->getFirstname();echo $employee -> getComputer() -> getCPU() . "<br>";}
?>

</body>
</html>