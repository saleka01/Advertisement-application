<?php


class AdvertisementModel{

    private $id;
    private $user;
    private $title;

    public function __construct($id, $user, $title)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user)
    {
        $this->user = $user;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }



}