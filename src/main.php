<?php
declare(strict_types=1);
namespace IntervexCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class main extends PluginBase Implements Listener{

public function onEnable{}{
    $this->getServer()->getPluginManager->registerEvents($this);
    $this->getLogger()->info("Intervex Core Enabled!");
}

public function onPlayerJoinEvent(PlayerJoinEvent $event){
    $p = event->getPlayer();
    $p->sendMessage("§l--------------------");
    $p->sendMessage("§fWelcome to §dMineage Network!");
    $p->sendMessage("§dStore : Coming Soon");
    $p->sendMessage("§dTwitter : Coming Soon");
    $p->sendMessage("§dDiscord : discord.mineage.com");
    $p->sendMessage("§l--------------------");

}
