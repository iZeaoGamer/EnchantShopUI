<?php
namespace VCraftMCPE;

use pocketmine\{Player, Server};
use pocketmine\plugin\PluginBase;

use pocketmine\utils\{TextFormat};

use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\Listener;
use pocketmine\command\{Command,CommandSender, CommandExecutor, ConsoleCommandSender};
use jojoe77777\FormAPI;
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
        $this->getLogger()->info("Enchant GUI has been  enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
   public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        $player = $sender->getPlayer();
     $cd = strtolower($cmd->getName());
        switch ($cd){
            case "enchantui":
                $this->EnchantForm($player);
                break;
        }
        return true;
    }
  public function EnchantForm(){
    $plugin = $this->getServer()->getPluginManager();
        $formapi = $plugin->getPlugin("FormAPI");
        $form = $formapi->createSimpleForm(function (Player $event, array $args){
            $result = $args[0];
            $player = $event->getPlayer();
            if($result === null){
            }
            switch($result){
                case 0:
                    return;
                case 1:
                    return;
               case 2:
                    return;
                case 3:
                    return;
                case 4:
                    return;
                case 5:
                    return;
                case 6:
                    return;
            }
        });
    $form->setTitle("enchant");
        $form->setContent("sdasdasdsa ");
        $form->addButton("Exit");
        $form->addButton("");
        $form->addButton("");
        $form->addButton("");
        $form->addButton("");
        $form->addButton("");
        $form->addButton("");
        $form->sendToPlayer($player);
  }
  
}
