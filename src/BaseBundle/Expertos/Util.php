<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 13/05/18
 * Time: 21:52
 */

namespace App\BaseBundle\Expertos;


class Util {

    private static $instance;
    public static function getInstance()
    {
        if(self::$instance===null) {
            self::$instance = new Util();
        }
        return self::$instance;
    }

    public function bundleCamelToUnder($str)
    {
        $str = str_replace('Bundle', '', $str);
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $str, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }
}


