<?php

namespace DotKernel\DotTemplate;

include  '../bootstrap.php';

class TemplateTest extends \PhpUnit_Framework_TestCase
{
	
	/** @dataProvider provideStringTemplateKU */
	public function testStringTplKU($pageContent, $expectedPageContent)
	{
		$tpl = new DotTemplate('.', 'keep', '', ['tpl_main'=>$pageContent]);
		$this->assertEquals($tpl->get('tpl_main'), $expectedPageContent);
	}
	
	/** @dataProvider provideStringTemplateRU */
	public function testStringTplRU($pageContent, $expectedPageContent)
	{
		$tpl = new DotTemplate('.', 'remove', '', ['tpl_main'=>$pageContent]);
		$this->assertEquals($tpl->get('tpl_main'), $expectedPageContent);
	}
	
	/**
	 * String templates provider - Keep the unknowns
	 */
	public function provideStringTemplateKU()
	{
		return [
			
			['A', 'A'] ,
			['<html>{A}', '<html>{A}'] ,
			['{A}', '{A}'] ,
		];
	}
	
	/**
	 * String templates provider - Remove the unknowns
	 */
	public function provideStringTemplateRU()
	{
		return [
							
						['a{VAR}', 'a'] ,
						['<html>{X}{A}', '<html>'] ,
						['{A}', ''] ,
		];
	}
}
