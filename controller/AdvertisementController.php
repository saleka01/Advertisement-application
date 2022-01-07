<?php


class AdvertisementController extends Controller
{

    private const SELECT_ALL ="SELECT advertisements.id, users.name, users.id, advertisements.title FROM users, advertisements WHERE users.id = advertisements.userid";

    public static function getAll(){
        $adList = [];
        foreach (self::query(self::SELECT_ALL) as $ad){
            $user = new UserModel($ad[2], $ad[1]);
            $adList[] = new AdvertisementModel($ad[0],$user,$ad[3]);
        }
        return $adList;
    }
}