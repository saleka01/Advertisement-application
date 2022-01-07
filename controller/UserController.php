<?php

class UserController extends Controller{
    private const SELECT_ALL = "SELECT * FROM users";

    public static function getAll(){
        $userList = [];
        foreach (self::query(self::SELECT_ALL) as $user){
            $userList[] = new UserModel($user['id'], $user['name']);
        }
        return $userList;
    }
}