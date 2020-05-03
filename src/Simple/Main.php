<?php

namespace Simple;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\player\Player;
use pocketmine\item\Item;


class Main extends PluginBase implements Listener {



   public function onEnable() {
   $this->getServer()->getPluginManager()->registerEvents($this, $this);   
    }




    public function onJoin(PlayerJoinEvent $e): void{
        $player = $e->getPlayer();
        

       $player->sendMessage("Welcome" . $player->getName());

       $player->getInventory()->setItem(5, Item::get(351, 1)->setCustomName("Test"));
    
    }

  public function onQuit(PlayerQuitEvent $e): void{
    $player = $e->getPlayer();
  
    
   
   }



  public function onInteract(PlayerInteractEvent $event)
    { 

    #Soon 

   }             


}
