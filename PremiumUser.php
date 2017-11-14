<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 14.11.2017
 * Time: 20:35
 */

class PremiumUser extends User
{
    protected function validate(array $user)
    {
        $errors = parent::validate($user);

        if (substr($user['email'], -8) != '@mail.ru') {
            $error[] = 'Email должен заканчиваться на @mail.ru';
        }

        return $error;
    }

}