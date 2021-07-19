<?php

namespace Izyanz;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onLoad(): void {
        $this->getLogger()->info("[Izyan] Plugin Loaded");
    }

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("[Izyan] Plugin Enable");
    }

    public function onDisable(): void {
        $this->getLogger()->info("[Izyan] Plugin Disable");
    }
}
© 
