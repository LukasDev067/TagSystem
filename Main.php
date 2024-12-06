<?php

namespace TagSystem;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener {

  public $contador = [];

  public function onEnable(){
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
   $this->getServer()->getLogger("SytemTag [Ativado...]");
  }

  public function onJoin(PlayerJoinEvent $event){
   $player = $event->getPlayer();
    $name = strtolower($player->getName());
     if(!isset($contador[$name])){
      $this->contador[$name] = 0;
       $player->sendMessage("§aVoçe tem " .$this->contador[$name];
    }
  }

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  if($sender instanceof Player){
   if(strtolower($cmd->getName()) == "systemtag"){
    if(!isset($args[0])){
     $sender->sendMessage("§euse /systemtag comprar <tag> \n \n §e/systemtag lista");
      return false;
     }
    }
   }
  }
}
