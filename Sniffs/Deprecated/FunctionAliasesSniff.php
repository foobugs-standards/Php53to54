<?php

/**
 * Deprecated Function Aliases
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Marcel Eichner // foobugs <marcel.eichner@foobugs.com>
 * @copyright 2012 foobugs oelke & eichner GbR
 * @license   BSD http://www.opensource.org/licenses/bsd-license.php
 * @link      https://github.com/foobugs/PHP53to54
 * @since     1.0-beta
 */

/**
 * Deprecated Function Aliases
 *
 * Checks php source files for calls to function aliaeses that have been removed
 * in PHP 5.4.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Marcel Eichner // foobugs <marcel.eichner@foobugs.com>
 * @copyright 2012 foobugs oelke & eichner GbR
 * @license   BSD http://www.opensource.org/licenses/bsd-license.php
 * @link      https://github.com/foobugs/PHP53to54
 * @since     1.0-beta
 */
class PHP53to54_Sniffs_Deprecated_FunctionAliasesSniff
extends Generic_Sniffs_PHP_DeprecatedFunctionsSniff
{
    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
        'PHP',
    );

    /**
     * A list of deprecated functions with their alternatives.
     *
     * The value is NULL if no alternative exists. IE, the
     * function should just not be used.
     *
     * @var array(string => string|null)
     */
    protected $forbiddenFunctions = array(
        'mysqli_bind_param' => 'mysqli_stmt_bind_param',
        'mysqli_bind_result' => 'mysqli_stmt_bind_result',
        'mysqli_client_encoding' => 'mysqli_character_set_name',
        'mysqli_fetch' => 'mysqli_stmt_fetch',
        'mysqli_param_count' => 'mysqli_stmt_param_count',
        'mysqli_get_metadata' => 'mysqli_stmt_result_metadata',
        'mysqli_send_long_data' => 'mysqli_stmt_send_long_data',
    );

    /**
     * If true, an error will be thrown; otherwise a warning.
     *
     * @var bool
     */
    public $error = true;
}