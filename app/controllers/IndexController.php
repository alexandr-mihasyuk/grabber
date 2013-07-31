<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this -> view -> setVar('test', 'test Var!');
    }

}

