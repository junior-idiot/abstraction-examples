<?php

namespace App\Core\Vehicles;

class Car extends \App\Core\Vehicle implements \App\Core\Interfaces\MovementInterface
{
	/**
	 * @return mixed
	 */
	public function moveForward() 
    {
        echo "Машина {$this->name} едет вперёд со скоростью {$this->speed}!";
    }
	
	/**
	 * @return mixed
	 */
	public function moveBack() 
    {
        echo "Машина {$this->name} едет назад!";
	}
	
	/**
	 * @return mixed
	 */
	public function moveLeft() 
    {
        echo "Машина {$this->name} едет влево!";
    }
	
	/**
	 * @return mixed
	 */
	public function moveRight() 
    {
        echo "Машина {$this->name} едет вправо!";
	}
}