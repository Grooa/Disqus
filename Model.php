<?php
/**
 * Created by PhpStorm.
 * User: Marijus
 * Date: 5/27/14
 * Time: 10:03 AM
 */
namespace Plugin\Disqus;

class Model{

    public static function getDisqusShortName(){

        $shortname = ipGetOption('Disqus.shortname');

        return $shortname;
    }

}
