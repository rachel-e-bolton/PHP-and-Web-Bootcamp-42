<?php
class UnholyFactory {
    private $_absorbedFighters = array();

    public function absorb($candidate) {
        if ($candidate instanceof Fighter)
        {
            foreach ($this->_absorbedFighters as $fighter_type)
            {
                if ($fighter_type->type_name == $candidate->type_name)
                {
                    print sprintf("(Factory already absorbed a fighter of type %s)\n", $candidate->type_name);
                    break ;
                }
            }
            print sprintf("(Factory absorbed a fighter of type %s)\n", $candidate->type_name);
            array_push($this->_absorbedFighters, $candidate);
        }
        else
            print sprintf("(Factory can't absorb this, it's not a fighter)\n");
    }

    public function fabricate($candidate_type_name) {
        foreach ($this->_absorbedFighters as $fighter_type)
        {
            if ($candidate_type_name == $fighter_type->type_name)
            {
                print sprintf("(Factory fabricates a fighter of type %s)\n", $candidate_type_name);
                return $fighter = clone $fighter_type;
            }
        }
        print sprintf("(Factory hasn't absorbed any fighter of type %s)\n", $candidate_type_name);
        return NULL;
    }
}
?>