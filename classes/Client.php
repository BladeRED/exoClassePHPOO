<?php

class client extends User
{

    private $_favouriteAnimal;

    public function __construct($_id, $_name, $_firstName, $_email, $_username, $_password, $_favouriteAnimal)
    {
        parent::__construct($_id, $_name, $_firstName, $_email, $_username, $_password);
    }

}

;

?>;