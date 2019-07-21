<?php

namespace Spawn;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\
	{Command, CommandSender
};
use pocketmine\utils\TextFormat;

class Main extends PluginBase{
	
	public function onLoad(): void{
		$this->getLogger()->info(C::GREEN . "Loading Spawn Command.");
	}
	
	public function onEnable(): void{
		$this->getLogger()->info(C::YELLOW . "Spawn Command Loaded Succesfully!");
		$this=>getServer()->getCommandMap()->register("spawn", newSpawnCommand());
	}
	
	public function onDisbale(): void{
		$this->getLogger()->info(C::RED . "Disabled Spawn Command!");
	}
	
	public function onCommand(CommandSender $cmd, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "spawn":
			$cmd->teleport($cmd->getLevel()->getServer()->getDefaultLevel()->getSpawnLocation());
			$cmd->sendMessage(TextFormat::DARK_GRAY . "<" . C::DARK_RED . "METRO" . C::GOLD . "PVP" . C::DARK_GRAY . ">" . C::GREEN . "Teleportation is occurring.");
		
		break;
		}
	}
}
