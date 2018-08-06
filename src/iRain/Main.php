<?php
declare(strict_types = 1);
namespace iRain;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {
    public $prefix = C::YELLOW."TEST".C::DARK_GRAY."";

    public function onLoad(){
        $this->getLogger()->info($this->prefix."IDK");
    }

    public function onEnable(){
        $this->getLogger()->info($this->prefix."IDK");
    }

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "test"){
            $sender->sendMessage($this->prefix."Hello");
        }
    }
    public function onDisable(){
        $this->getLogger()->info($this->prefix."Oml");
    }
}
