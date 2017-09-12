<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 12/9/2017
 * Time: 9:06 PM
 */

namespace RTG\CE;

use pocketmine\block\BlockIds;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\tile\Sign;

class Loader extends PluginBase  Listener {

    public $whitelist = array("InspectorGadget");

    const SIGNS = [BlockIds::SIGN_POST, BlockIds::WALL_SIGN, BlockIds::STANDING_SIGN];

    public function onEnable() {

    }

    public function runSet(PlayerInteractEvent $e) {
        if ($e->isCancelled()) return;

            if ($e->getAction() === "PlayerInteractEvent::LEFT_CLICK_BLOCK") {

                if (in_array($e->getBlock()->getId(), self::SIGNS)) {

                    $v = new Vector3($e->getBlock()->getX(), $e->getBlock()->getY(), $e->getBlock()->getZ());
                    $block = $e->getBlock();
                    $tile = $block->getLevel()->getTile($v);


                        if ($tile instanceof Sign) {

                            $tile->setText("Hey", "Lmao", "Test", "Yo");

                        }

                }
            }
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args): bool {

        switch ($cmd->getName()) {

            case "ce":

                if (isset($args[0])) {

                    switch ($args[0]) {

                        case "set":

                            if (!in_array($sender->getName(), $this->whitelist)) {
                                array_push($this->whitelist, $sender->getName());
                                $this->whitelist = $this->whitelist;
                            }

                            return true;
                        break;

                    }

                }

                return true;
            break;

        }

    }

    public function onDisable() {

    }

}