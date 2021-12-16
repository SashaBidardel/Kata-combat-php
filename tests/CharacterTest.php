<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	/** @test */
	
	public function test_character_creation(){
		$character = new character;
		$health= $character->getHealth();
		$level= $character->getLevel();
		$alive= $character->getAlive();

		$this->assertEquals(1000, $health);
		$this->assertEquals(1, $level);
		$this->assertEquals(true, $alive);
	}
    public function test_deal_damage(){
		$character1 = new character;
		$character2 = new character;
		$resultEspected = 0;
		$character1->deal_damage($character2,$character1->getDamage());
		$this->assertEquals($resultEspected, $character2->getHealth());
	}
	public function test_deal_demage_health_equal_zero(){
		$character1 = new character;
		$character2 = new character;
		$resultEspected = 0;
		$alive = false;
		$character1->deal_damage($character2,$character1->getDamage());
		$this->assertEquals($resultEspected, $character2->getHealth());
		$this->assertEquals($alive, $character2->getAlive());
	}
	public function test_heal(){
		$character1 = new character;
		$character2 = new character;
		$resultEspected = 1000;
		$character1->heal($character2,$character1->getHeal());
		$this->assertEquals($resultEspected, $character2->getHealth());
	}
}


