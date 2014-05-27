<?php
/**
 * Created by PhpStorm.
 * User: Marijus
 * Date: 5/16/14
 * Time: 2:21 PM
 */

namespace Plugin\Disqus;

class Slot
{

    public static function Disqus()
    {

        return self::getDisqusView('discussion');
    }

    private static function getDisqusView($view)
    {

        $shortname = Model::getDisqusShortName();

        if ($shortname) {
            $data['shortname'] = $shortname;
            return ipView('view/' . $view . '.php', $data)->render();
        } else {
            if (ipIsManagementState()) {
                return ipView('view/error.php')->render();
            }
            return false;
        }
    }

}