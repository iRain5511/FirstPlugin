<?php

/*...*/

declare(strict_types=1);

namespace PluginTutorial;

use pocketmine\plugin\PluginBase
	
class Main extends PluginBase{
	
   public function onEnable(){ : void{
	   $this->getLogger()->info("Plugin has been enabled");
   }
			      
   public function onDisable() : void{
	   $this->getLogger()->info("Plugin has been disabled");
   }   
	   
   public function onCommand(CommandSender $sender, Command $command, string $label, array $args : bool{
       switch(command){
	       case "Hello":
	           $sender->sendMessage("Hello to you too!");
	           break;
        }
    }	   	   
}
