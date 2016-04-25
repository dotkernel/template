<?php
/**
 * Example: example will show you how 
 * @var unknown
 */
include '../src/Exception/HaltException.php';
include '../src/DotTemplate.php';
use DotKernel\DotTemplate\DotTemplate as Dot_Template;

// root directory is . 
// remove the unknown / undefined {VARIABLES}
// no fallback
// no predefined page content
$tpl = new Dot_Template('.', 'remove');
// alternate version
// using ../templates because the setRoot won't help in this case as we get file contents manually
#$tpl = new Dot_Template('.', 'remove', '', ['tpl_main'=>file_get_contents('../templates/index.tpl')]);

// set the root directory
$tpl->setRoot(dirname(__DIR__).'/templates/');

// set the main variable the template is working on (usually tpl_main)
$mainVar = 'tpl_main';

// load file contents in to main variable
$tpl->setFile($mainVar, 'index.tpl');

// setting 
$tpl->setVar('VARIABLE', 'This is the variable inside');

// values to parse within block
$values = [1,2,3,4,7];

// setting the block
$tpl->setBlock($mainVar, 'test_block', 'internal_block_var');

// parsing the block
foreach($values as $key => $value)
{
	$tpl->setVar('KEY', $key);
	$tpl->setVar('VALUE', $value);
	$tpl->parse('internal_block_var', 'test_block', true);
}

// parse the tpl_main variable to the variable OUTPUT
// @notice: parse does the main variable / page parsing 
// without this method call we cannot 
$tpl->parse('OUTPUT', 'tpl_main');
// display the final result
echo $tpl->get('OUTPUT');