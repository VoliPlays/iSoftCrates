<?php
namespace iSoftMC\iSoftCrates\Listeners;
/* Developed by iSoftMC Team (Az928)
  * Do not edit or modify
  */
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\inventory\Inventory;
use pocketmine\event\player\PlayerItemHeldEvent;
class Item extends PluginBase implements Listener{
	 public function __construct($plugin){
	      $this->plugin = $plugin;
		}
	 public function onItemHeld(PlayerItemHeldEvent $event){
	      $item = $event->getItem();
	      $player = $event->getPlayer();
	      $inv = $player->getInventory();
	      if($item->getId() == 388){
		        $player->sendPopup("§6[key]\n§aOrdinary\n§bRare§r\n§9Legendary");
		     }
		   elseif($item->getId() == 399){
				  $player->sendPopup("§6[key] §4Mythic§r\n§7Collect 5 to open!");
		}
     }
   }
