<?php

namespace App\Core\Vehicles;

use App\Core\Interfaces\FlyMovementInterface;
use App\Core\Interfaces\MovementInterface;
use App\Core\Vehicle;

class Plane extends Vehicle implements MovementInterface, FlyMovementInterface
{

	/**
	 * @return mixed
	 */
	public function moveForward() 
    {
        echo "Самолёт {$this->name} летит вперёд со скоростью {$this->speed}!";
    }
	
	/**
	 * @return mixed
	 */
	public function moveBack() 
    {
        echo "Самолёт {$this->name} летит назад (кстати вообще как это возможно!???? ну для примера пусть будет)!";
	}
	
	/**
	 * @return mixed
	 */
	public function moveLeft() 
    {
        echo "Самолёт {$this->name} летит влево!";
	}
	
	/**
	 * @return mixed
	 */
	public function moveRight() 
    {
        echo "Самолёт {$this->name} летит вправо!";
	}
	
	/**
	 * @return mixed
	 */
	public function flyTop() 
    {
        echo "Самолёт {$this->name} поднимается вверх!";
	}
	
	/**
	 * @return mixed
	 */
	public function flyBottom() 
    {
        echo "Самолёт {$this->name} опускается вниз!";
	}
}