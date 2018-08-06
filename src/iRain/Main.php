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
use pocketmine\item\Item;

class Main extends PluginBase implements Listener {
    public const PREFIX = TextFormat::YELLOW . "Welcome!" . TextFormat::DARK_GRAY. " ";

    public function onLoad()  : void {
        $int = rand(1, 3);
        switch ($int) {
        case 1:
            $this->getLogger()->info(Main::PREFIX . "CODING");
            break;
        case 2:
            $this->getLogger()->info(Main::PREFIX . "IS");
            break;
        case 3:
            $this->getLogger()->info(Main::PREFIX . "FUN");
            break;
        }
    }

    public function onEnable() : void {
        $this->getLogger()->info(Main::PREFIX . "IDK");
    }

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool
    {
        $time = time();
        $date = date('Y-m-d');
        if ($sender instanceof Player) {
            switch ($cmd->getName()) {
                case "iraindrop":
                    $sender->sendMessage(Main::PREFIX . "This plugin is made by @iRainDrop_ (That is my Twitter)");
                    $sender->addTitle(TextFormat::RED . TextFormat::BOLD . "OOF");
                    $player->getInventory()->setItem(5, Item::get(264,0,1));
                    return true;
                case "cdate":
                    $sender->sendMessage(Main::PREFIX . "The date is " . $date);
                    return true;
            }
        }
    }


    public function onDisable() : void {
        $this->getLogger()->info(Main::PREFIX . "Oml");
    }
}
