<?php
class VariablesExample
{
    private static $loginAdminUser = array("id" => "1", "username" => "bleart", "password" => "demaku", 'role' => '1', 'age' => '22');
    private static $loginSimpleUser = array("id" => "2", "username" => "test", "password" => "test", 'role' => '0', 'age' => '25');
    private static $loginSimpleUser1 = array("id" => "3", "username" => "simple", "password" => "simple", 'role' => '0', 'age' => '32');
    

    private static $users;
    public static function getUsers()
    {
        self::$users = array(self::$loginAdminUser, self::$loginSimpleUser, self::$loginSimpleUser1);
        return self::$users;
    }
    
}



