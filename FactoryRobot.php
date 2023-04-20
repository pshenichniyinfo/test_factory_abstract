<?php

class FactoryRobot
{
    protected array $robotTypes;

    public function addType(Robot $robotType)
    {
        $this->robotTypes[] = $robotType;
    }

    public function createRobot(Robot $robot, $count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = $robot;
        }
        return $result;
    }

    public function createMergeRobot($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $mergeRobot = new MergeRobot();
            foreach ($this->robotTypes as $robotType) {
                $mergeRobot->addRobot($robotType);
            }
            $result[] = $mergeRobot;
        }
        return $result;
    }
}
