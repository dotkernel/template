<?php
/**
 * This code that was derived from the original PHPLIB Template class is
 * copyright by Kristian Koehntopp, NetUSE AG and was released under the LGPL.
 *
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 */

/**
 * Exception for the DotTemplate Class
 * 
 * This substitutes the $tpl->halt() echoing 
 * It won't display anything on production
 * 
 * @package    DotTemplate
 * @author     DotKernel Team <team@dotkernel.com>
 */
namespace DotKernel\DotTemplate\Exception;

class HaltException extends \Exception{}