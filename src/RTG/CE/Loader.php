<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 12/9/2017
 * Time: 9:06 PM
 */

namespace RTG\CE;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use RTG\CE\Commands\InfoCommand;

class Loader extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getCommandMap()->register("ce", new InfoCommand($this));
    }

    public function onDisable() {

    }

}