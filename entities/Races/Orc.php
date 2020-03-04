<?php

namespace entities\Races;

class Orc extends \entities\Races\Race {
    public function getStats() : Array {
        return [BASE_HP * 1.05, BASE_STR * 1.08, BASE_INTL * 0.95, BASE_AGI, BASE_PDEF, BASE_MDEF];
    }
}
