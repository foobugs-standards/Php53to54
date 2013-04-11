<?php

namespace Sniffs\Generic;

/**
 * @group SafeModeINIDirectives
 * @group PHP
 *
 */
class SafeModeINIDirectivesTest extends \AbstractPhpcsTestCase
{
    protected $sniffs = array('PHP53to54.PHP.SafeModeINIDirectives');
    protected $defaultType = "PHP53to54.PHP.SafeModeINIDirectives.INIDirectiveDeprecated";

    protected $warnings = array('17:1', '18:1', '26:1', '27:1', '28:1', '29:1', '30:1', '31:1');

    /** {@inheritdoc} */
    public function fixtureSniffProvider()
    {
        $this->fixture = __DIR__ . '/_fixtures/safeModeIniDirectives/1.inc';
        return parent::fixtureSniffProvider();
    }
}
