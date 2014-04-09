<?php
/**
 * Created using PhpStorm.
 * User: anirudhmerugu
 * Date: 9/04/14
 * Time: 11:21 AM
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');
jimport('joomla.environment.response');

class plgSystemNoRightClick extends JPlugin
{
    function onContentPrepare($context, &$row, &$params, $page = 0)
    {
        $document = JFactory::getDocument();
        $document->addScript(JURI::base(). "plugins/system/norightclick/norightclick.js");
    }
}
