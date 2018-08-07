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
use pocketmine\nbt\tag\ListTag;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
	public const PREFIX = TextFormat::YELLOW . "Welcome!" . TextFormat::DARK_GRAY. " ";

	public function onLoad()  : void {
		$int = rand(1, 3);
		switch ($int) {
			case 1:
				$str = "FUN";
				break;
			case 2:
				$str = "EASY";
				break;
			case 3:
				$str = "SIMPLE";
		}
		$this->getLogger()->info(Main::PREFIX . "CODING IS " . $str);
	}

	public function onEnable() : void {
		$this->getLogger()->info(Main::PREFIX . "IDK");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
	}

	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool
	{
		$time = time();
		$date = date('Y-m-d');
		if ($sender instanceof Player) {
			switch ($cmd->getName()) {
				case "ctime":
					$sender->sendMessage(Main::PREFIX . TextFormat::RED  . TextFormat::BOLD . "THE TIME IS " . $time);
					return true;
				case "iraindrop":
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "THIS PLUGIN IS MADE BY @IRAINDROP_ (THAT IS MY TWITTER)");
					$sender->addTitle(TextFormat::RED . TextFormat::BOLD . "OOF");
					$item = Item::get(264,0,100);
					$inv = $sender->getInventory();
					$item->setCustomName("Diamond");
					$inv->addItem($item);
					return true;
				case "cdate":
					$sender->sendMessage(Main::PREFIX . TextFormat::RED . TextFormat::BOLD . "THE DATE IS " . $date);
					return true;
				case "kit test":
					$sender->addTitle(TextFormat::RED . TextFormat::BOLD . "KIT TEST");
					$item = Item::get(264,0,100);
					$inv = $sender->getInventory();
					$item->setCustomName(TextFormat::RED . TextFormat::BOLD . "Diamond");
					$item->setNamedTagEntry(new ListTag("ench"));
					$inv->addItem($item);
					$item = Item::get(1,0,100);
					$inv = $sender->getInventory();
					$item->setCustomName("Stone");
					$inv->addItem($item);
					return true;
				case "ping":
					$sender->sendMessage(TextFormat::RED . TextFormat::BOLD  .  "YOUR PING IS " . $sender->getPing() . "MS");
					return true;
			}
		} else {
			//Code for console
		}
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		if($player instanceof Player) {
		$player->getServer()->dispatchCommand($player, $this->getConfig()->get("ExecuteCommand"));
		}
	}

	public function onDisable() : void {
		$this->getLogger()->info(Main::PREFIX . "Oml");
	}
}
