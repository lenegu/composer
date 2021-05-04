<?php


namespace App\Classes\Services;


use App\Classes\Libs\Db;

class UserManager
{
    private $mailer;

    /**
     * UserManager constructor.
     * @param $mailer
     */
    public function __construct(Db $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getAllUsersWhere($value) {
      return  $this->mailer->findUsersByValue($value);
    }

}