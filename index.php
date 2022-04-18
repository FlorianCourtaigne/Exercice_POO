<?php

require_once("Vehicle.php");
require_once("Bicycle.php");
require_once("Car.php");
require_once("Truck.php");
require_once("Bus.php");
require_once("Skateboard.php");
require_once("Highway.php");
require_once("MotorWay.php");
require_once("PedestrianWay.php");
require_once("ResidentialWay.php");


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck ('Red', 4, 'fuel', 100);
$truck->setTruckLoad($storageCapacity = 50);
var_dump($truck);
$bigTruck = new Truck ('Blue', 3, 'electric', 70);
$bigTruck->setTruckLoad($storageCapacity = 70);
var_dump($bigTruck);
echo $bigTruck->loadingState();

echo $bigTruck->forward();
echo $bigTruck->brake();

$tesla = new Car('black', 4, 'Fuel');
$ferrari = new Car('red', 2, 'electric');
$schoolBus = new Bus('yellow', 40, 'Fuel');
$skate = new Skateboard ('grey', 1);
var_dump($tesla, $ferrari, $schoolBus);

$road66 = new MotorWay ();
$rueSaintMaur = new PedestrianWay();
$rueStendhal = new ResidentialWay();
var_dump($rueStendhal);



$rueStendhal->addVehicle($car);
$road66->addVehicle($car);
$rueSaintMaur->addVehicle($skate);

var_dump($rueStendhal->getCurrentVehicles());
var_dump($road66->getCurrentVehicles());
var_dump($rueSaintMaur->getCurrentVehicles());

$tesla->setParkBrake($hasParkBrake = true);
var_dump($tesla);
try {
    echo $tesla->start();
} catch (Exception $e) {
    $tesla->setParkBrake($hasParkBrake = false) ;
} finally {
    echo 'My car goes like a donut !' ;
}
var_dump($tesla);

?>