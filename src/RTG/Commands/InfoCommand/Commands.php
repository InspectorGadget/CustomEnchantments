<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 12/9/2017
 * Time: 9:10 PM
 */

namespace RTG\CE\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use RTG\CE\Loader;

class Commands implements Command {

    public $plugin;

    public function __construct(Loader $plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * @param CommandSender $sender
     * @param Command $cmd
     * @param array $param
     * @return bool
     */
    public function execute(CommandSender $sender, Command $cmd, array $param): bool {

        switch ($cmd->getName()) {

            case "info":

                return true;
            break;

        }

    }

}