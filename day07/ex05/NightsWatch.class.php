<?php
class NightsWatch {
    private $_recruits = array();

    public function recruit($recruit) {
        array_push($this->_recruits, $recruit);
    }

    public function fight() {
        foreach ($this->_recruits as $fighter)
        {
            if ($fighter instanceof IFighter)
                $fighter->fight();
        }
    }
}
?>