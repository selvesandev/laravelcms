<?php

namespace App\Traits;

trait AdminManager{

    protected function seoUrl($string, $separator = '_')
    {
        $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
        $special_cases = array('&' => 'and');
        $string = str_replace(array_keys($special_cases), array_values($special_cases), trim($string));
        $string = preg_replace($accents_regex, '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));
        $string = preg_replace("/[^A-Za-z0-9]/u", "$separator", $string);
        //$return = camel_case($string);
        //return ucfirst($string);
        return $string;
    }
}