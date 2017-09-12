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
use RTG\CE\Commands\Commands;

class Loader extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getCommandMap()->register("ce", new Commands($this));
    }

    public function onDisable() {

    }

}