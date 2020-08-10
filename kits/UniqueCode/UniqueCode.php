<?php

namespace Kits\UniqueCode;

use Ramsey\Uuid\Uuid;

class UniqueCode
{
    /**
     * 生成32位Uuid
     * @return \Ramsey\Uuid\UuidInterface
     */
    public static function Uuid()
    {
        return Uuid::uuid4();
    }

    /**
     * @param int $uniqueCodeType
     * @param int $length
     * @return string
     * @throws \Exception
     */
    public static function randomString($uniqueCodeType = 6, int $length = 10)
    {

        if ($length < 1) {
            throw new \Exception("$length 不能小于1");
        }

        switch ($uniqueCodeType) {
            case UniqueCodeType::RANDOM_LOWWER_CASE:
                $string = 'abcdefghijklmnopkrstuvwxyz';
                break;
            case UniqueCodeType::RANDOM_UPPER_CASE:
                $string = 'ABCDEFGHIJLMNOPKRSTUVWXYZ';
                break;
            case UniqueCodeType::RANDOM_NUMBER:
                $string = '0123456789';
                break;
            case UniqueCodeType::RANDOM_NUMBER_AND_LOWWER_CASE:
                $string = '0123456789abcdefghijklmnopkrstuvwxyz';
                break;
            case UniqueCodeType::RANDOM_NUMBER_AND_UPPER_CASE:
                $string = '0123456789ABCDEFGHIJLMNOPKRSTUVWXYZ';
                break;
            case UniqueCodeType::RANDOM_ALL_STRING:
            default:
                $string = '0123456789abcdefghijklmnopkrstuvwxyzABCDEFGHIJLMNOPKRSTUVWXYZ';
                break;
        }


        $stringLength = mb_strlen($string);
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= mb_substr($string, mt_rand(0, $stringLength - 1), 1);
        }

        return $code;
    }


}
