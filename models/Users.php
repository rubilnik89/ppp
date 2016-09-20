<?php

class Users
{
    public static function getUsersList()
    {
        $db = Db::getConnection();

        $usersList = array();

        $result = $db->query('SELECT * FROM users');

        $i = 0;
        while ($row = $result->fetch()){
            $usersList[$i]['first_name'] = $row['first_name'];
            $usersList[$i]['surname'] = $row['surname'];
            $i++;
        }

        return $usersList;
    }

    public static function addUser($firstName, $surname)
    {
        $db = Db::getConnection();

        $result = $db->prepare('INSERT INTO users (first_name, surname) '
        .'VALUES (:first_name, :surname)');
        $result->bindParam(':first_name', $firstName);
        $result->bindParam(':surname', $surname);
        $result->execute();

    }
}