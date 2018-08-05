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
        
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        if($sender instanceof Player){
            switch($cmd->getName()){
                case "iraindrop":
                $sender->addTitle("Oof");
                $item = Item::get(278,0,1);
                $inv = $sender->getInventory();
                $item->setCustomName("Okie");
                $item->setLore("Okie");
                $inv->addItem($item);
            }
        }
    }
}                    
