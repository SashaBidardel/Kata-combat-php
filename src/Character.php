<?php

namespace App;

class Character {
   private $health;
   private $level;
   private $alive;
   private $damage;
   public function __construct(){
       $this->health = 1000;
       $this->level = 1;
       $this->alive = true;
       $this->damage = 800;
   }
  
   /**
    * Get the value of health
    */ 
   public function getHealth()
   {
      return $this->health;
   }

   /**
    * Get the value of level
    */ 
   public function getLevel()
   {
      return $this->level;
   }

   /**
    * Get the value of alive
    */ 
   public function getAlive()
   {
      return $this->alive;
   }

   /**
    * Get the value of damage
    */ 
   public function getDamage()
   {
      return $this->damage;
   }
   public function deal_damage($character,$damage){
    $character->health = $character->health - $damage;
    if ($character->health < 1){
     $character->health = 0;
     $character->alive = false;
    }
    
    
}
}

?>