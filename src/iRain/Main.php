<?php
namespace iRain;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\item\Item;

class Main extends PluginBase{
        
    public function onEnable (){
        $this->getLogger()->Info("This Plugin Has Been Enabled");
    }
        
    public function onDisable(){
        $this->getLogger()->Info("This Plugin Has Been Disabled");        
    }
        
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
	    $player->$sender->getPlayer();
	    switch($cmd_>getName()){
		case "test":
                $this->getServer()->getCommandMap()->dispatch($player, "tttt"); 
            	$sender->sendMessage("Item is now in your Inventory!");
            	$name = $sender->getName();
            	$sender->addTitle("Hi " . $name);
            	$item = Item::get(1,0,64);
            	$inv = $sender->genInventory();
            	$inv->addItem($item);
            	return true;
	    }
      }
}
