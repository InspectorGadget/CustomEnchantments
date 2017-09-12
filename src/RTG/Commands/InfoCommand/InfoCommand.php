<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 12/9/2017
 * Time: 9:10 PM
 */

namespace RTG\CE\Commands;

use RTG\CE\Loader;

class InfoCommand implements CommandExecutor {

    public $plugin;

    public function __construct(Loader $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {

        if ($sender->hasPermission("ce.info")) {

            switch ($command->getName()) {

                case "info":

                    $sender->sendMessage("LOL");

                    return true;
                break;

            }

        }

    }

}