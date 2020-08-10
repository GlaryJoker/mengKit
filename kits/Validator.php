<?php
namespace Kits;

class Validator{

    public static function isIDCard($IDCard){
        return preg_match('/^[1-9]\d{5}(18|19|20|(3\d))\d{2}((0[1-9])|(1[0-2]))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/',$IDCard);
    }

    public static function isPhoneNumber($phoneNumber){

        return preg_match('/^1[3-9]\d{9}$/',$phoneNumber);
    }

    public static function isEmail(string $email){
        $pattern = "/^[a-zA-Z0-9]+(\.|-|_|\w)+[a-zA-Z0-9]+@(vip\.)?\w+\.\w{2,30}$/";
        return preg_match($pattern,$email);
    }

}
