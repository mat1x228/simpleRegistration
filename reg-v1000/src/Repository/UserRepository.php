<?php

namespace UserRegistration\Repository;
use UserRegistration\Entity\User;


class UserRepository
{
    private const USER_FILE = '/var/www/reg-v1000/data/user.csv';

    public static function registrationUser(User $user)
    {
        $list = array(

            $user->getUserName(),
            $user->getUserEmail(),
            $user->getUserPassword(),
            $user->getUserAge(),
            $user->getCountry(),
            $user->getUserBio()

        );

        print_r($list);

        $fp = fopen(self::USER_FILE, 'a');

        fputcsv($fp, $list);

        fclose($fp);
    }


}