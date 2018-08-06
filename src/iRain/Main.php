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
	public const PREFIX = TextFormat::YELLOW . "TEST" . TextFormat::DARK_GRAY. " ";

	public function onLoad()  : void {
		$this->getLogger()->info(Main::PREFIX . "CODING");
	}

	public function onEnable() : void {
		$this->getLogger()->info(Main::PREFIX . "IDK");
	}

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool
	{
		$time = time();
		$date = date('Y-m-d');
		$num = rand(1, 5);
		if ($sender instanceof Player) {
			switch ($cmd->getName()) {
				case "ctime":
					$sender->sendMessage(Main::PREFIX . "The time is " . $time);
					return true;
				case "cdate":
					$sender->sendMessage(Main::PREFIX . "The date is " . $date);
					return true;
				case "rand":
					$sender->sendMessage(Main::Prefix . "The number is " . $num);
					return true;
			}
		}
	}


	public function onDisable() : void {
		$this->getLogger()->info(Main::PREFIX . "Oml");
	}
}
