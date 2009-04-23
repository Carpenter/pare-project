<?php
// $Id: Null.php,v 1.2.2.2 2008/10/03 07:27:39 nicolasconnault Exp $
/**
 * Null Serializer
 *
 * @category   HTML
 * @package    AJAX
 * @author     Joshua Eichorn <josh@bluga.net>
 * @copyright  2005 Joshua Eichorn
 * @license    http://www.opensource.org/licenses/lgpl-license.php  LGPL
 * @version    Release: 0.5.6
 * @link       http://pear.php.net/package/PackageName
 */
class HTML_AJAX_Serializer_Null 
{
    
    function serialize($input) 
    {
        return $input;
    }

    function unserialize($input) 
    {
        return $input;
    }
}
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
?>
