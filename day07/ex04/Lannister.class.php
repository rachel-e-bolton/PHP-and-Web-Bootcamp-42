<?php
    class Lannister {
        public function sleepWith($class) { 
            if (get_class($this) == Jaime && get_class($class) == Cersei)
            {
                print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
            }
            else if (get_parent_class($this) == get_parent_class($class)) {
                print("Not even if I'm drunk !" . PHP_EOL);
            }
            else
                print("Let's do this." . PHP_EOL);
        }
    }
?>