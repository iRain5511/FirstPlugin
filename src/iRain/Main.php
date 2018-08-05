<?php

namespace iRain;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\item\Item;

class Main extends PluginBase{
        
    public function onEnable (){
        $this->getLogger()->Info("This Plugin Has Been Enabled");
    }
        
    public function onDisable(){
        $this->getLogger()->Info("This Plugin Has Been Disabled");
    }
        
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args){
        if($sender instanceof Player)(
            case "iraindrop":
            $sender->addTitle("Oof");
            $item = Item::get(278,0,1);
            $inv = $sender->getInventory();
            $item->setCustomName("Okie");
            $inv->addItem($item);
        }else{
            $sender->sendMessage("Please Use This Command In Game Please");
            return true;
        }
    }
}                      
