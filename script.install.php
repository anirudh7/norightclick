<?php
/**
 * Created using PhpStorm.
 * User: anirudhmerugu
 * Date: 9/04/14
 * Time: 12:45 PM
 */
defined('_JEXEC') or die();

class plgSystemNoRightClickInstallerScript
{
    public function install ($parent)
    {
        $this->run("update #__extensions set enabled=1 where type = 'plugin' and element = 'norightclick'");
    }
    private function run ($query)
    {
        $db = JFactory::getDBO();
        $db->setQuery($query);
        $db->query();
    }
}
