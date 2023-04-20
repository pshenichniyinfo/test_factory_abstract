<?php
include 'FactoryRobot.php';
include 'Robot.php';
include 'Robot1.php';
include 'Robot2.php';
include 'MergeRobot.php';

$factory = new FactoryRobot();
$robot1 = new Robot1(10,20,30);
$robot2= new Robot2(20,30,50);

$factory->addType($robot1);
$factory->addType($robot2);

echo '<pre>';
var_dump($factory->createRobot($robot1,5));
var_dump($factory->createRobot($robot2, 2));
echo '</pre>';

$mergeRobot = new MergeRobot();
$mergeRobot->addRobot($robot2);
$mergeRobot->addRobot($factory->createRobot($robot1, 2)[0]);

$array = $factory->createMergeRobot(1);
$res = reset($array);

echo $res->getSpeed();
echo '<br>';
echo $res->getWeight();
