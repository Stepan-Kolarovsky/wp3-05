<?php require_once "classes/Computer.php";?>
<?php require_once "classes/Employee.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
     $computers[] = new Computer(" Pepíkuv počítač"," Intel Core i7 10900K"," Nvidia RTX 3070 16GB"," 256GB"," 16GB"," Asus"," Corsair 750W");
     $computers[] = new Computer(" Kájův počítač", " Amd Ryzen 9 5900X"," AMD Radeon RX 6700X"," 500GB"," 32GB"," Gigabyte"," Be quiet 850W");
     $computers[] = new Computer(" Lakyho počítač", " Amd Ryzen 7 3700X"," Nvidia GeForce 1660 6GB"," 1TB"," 16GB"," Gigabyte"," Corsair 650W");
     $computers[] = new Computer(" Franty počítač", " Amd Ryzen 5 3600X"," Nvidia RTX 2080 8GB"," 2TB"," 32GB"," Asus"," Asus 800W");
     $computers[] = new Computer(" Honzy počítač", " Intel Core i9 10900k"," Nvidia RTX 3090 16GB"," 5TB"," 64GB"," Asus"," Corsair 1200W");
    
     $employees[] = new Employee("Štěpán","Kolarovský","stepan.kolarovsky@student.ossp.cz",123456789,"kpt.jaroše","Velký Osek",$computers[1]);
     $employees[] = new Employee("Honza","Šlechta","jan.slechta@student.ossp.cz",123456789,"nekde","kolin",$computers[0]);
     $employees[] = new Employee("Michal","Plaček","michal.placek@student.ossp.cz",123456789,"nekde","konarovice",$computers[2]);
     $employees[] = new Employee("jakub","vavru","jakub.vavru@student.ossp.cz",123456789,"nekde","pucery",$computers[3]);
     $employees[] = new Employee("jarda","zlamal","jarda.zlamal@student.ossp.cz",123456789,"u franty","Most",$computers[4]);
    ?>
<h1>Výpis Employee</h1>
    <?php
    foreach ($employees as $employee) 
    {echo $employee->getFirstname(). "<br>";
    echo $employee->getLastname(). "<br>";
    echo $employee->getEmail(). "<br>";
    echo $employee->getPhone(). "<br>";
    echo $employee->getStreet(). "<br>";
    echo $employee->getCity(). "<br>";
    echo $employee->getComputer()->getCPU(). "<br>";
    echo $employee->getComputer()->getGPU(). "<br>";
    echo $employee->getComputer()->getSSD(). "<br>";
    echo $employee->getComputer()->getRAM(). "<br>";
    echo $employee->getComputer()->getMB(). "<br>";
    echo $employee->getComputer()->getPSU() . "<br>";}
?>

</body>
</html>
*/
<?php
    $i=1;
    echo "<table>";
    foreach ($employees as $employee) {
    echo "<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . $employee->getFirstname() . "</td>";
    echo "<td>" . $employee->getLastname() . "</td>";
    echo "<td>" . $employee->getEmail() . "</td>";
    echo "<td>" . $employee->getPhone() . "</td>";
    echo "<td>" . $employee->getStreet() . "</td>";
    echo "<td>" . $employee->getCity() . "</td>";
    echo "<td>" . $employee->getComputer()->getCPU() . "</td>";
    echo "<td>" . $employee->getComputer()->getSSD() . "</td>";
    echo "<td>" . $employee->getComputer()->getGPU() . "</td>";
    echo "<td>" . $employee->getComputer()->getRAM() . "</td>";
    echo "<td>" . $employee->getComputer()->getMB() . "</td>";
    echo "<td>" . $employee->getComputer()->getPSU() . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    ?>
*/