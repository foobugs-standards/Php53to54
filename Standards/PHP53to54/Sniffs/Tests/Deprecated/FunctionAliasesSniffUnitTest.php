<?php

require_once __DIR__.'/../AbstractSniffUnitTest.php';

/**
 * Unit test class for Deprecated/FunctionAliases sniff.
 *
 * @group PHP53to54
 * @category PHP
 * @package	PHP_CodeSniffer
 * @author Marcel Eichner // foobugs <marcel.eichner@foobugs.com>
 * @copyright 2012 foobugs oelke & eichner GbR
 * @license BSD Licence
 * @link https://github.com/foobugs/jagger
 */
class PHP53to54_Tests_Deprecated_FunctionAliasesUnitTest extends PHP53to54_Tests_AbstractSniffUnitTest
{
	public function testProcess()
	{
		$this->processFile(__DIR__.'/FunctionAliasesSniffUnitTest.inc');
	}
	
	/**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array(int => int)
     */
	public function getErrorList()
	{
		return array();
	}
	
	/**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
	public function getWarningList()
	{
        return array(
			3 => 1,
			5 => 1,
		);
    }
}