<?php

include_once ROOT.'/models/Users.php';

class UsersController
{

    public function actionIndex()
    {
        $usersList = array();
        $usersList = Users::getUsersList();
        
        require_once (ROOT.'/views/users/index.php');

        return true;
    }

    public function actionAdd($firstName, $surname)
    {
        require_once (ROOT.'/views/users/userAdd.php');

        if (($firstName) && ($surname)) {
            Users::addUser($firstName, $surname);
        }
        return true;
    }
}