<?php

namespace Simple;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\Player;


class Main extends PluginBase implements Listener {



   public function onEnable() {
   $this->getServer()->getPluginManager()->registerEvents($this, $this);   
    }




    public function onJoin(PlayerJoinEvent $e): void{
        $player = $e->getPlayer();

       $player->sendMessage("Welcome");
    
    }


}
