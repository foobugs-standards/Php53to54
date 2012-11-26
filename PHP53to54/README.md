PHP53to54
===============================================================================
PHP53to54 is a collection of sniffs for [PHP_CodeSniffer](http://pear.php.net/PHP_CodeSniffer) that check an PHP 5.3 application for PHP 5.4 compatibility.

Features
--------

* Check for removed, deprecated or changed function, methods, constants etc. including stuff from removed or changed extensions
* Scan for usage of added, changed or removed parameters
* Search for removed ini-directives
* Namespace-aware scan for class, interface, constant definitions that would collide with new ones
* Check for invalid `break`/`continue` statements
* Check for call time pass by reference

Requirements
------------

* [PHP_CodeSniffer 1.3.6+](http://pear.php.net/PHP_CodeSniffer)

Installation
------------

Make sure you’ve PHP_CodeSniffer installed. After that you can either put this standard into the PHP_CodeSniffer Standards directory located in your PEAR directory: (`pear/PHP/CodeSniffer/Standards`) or place the standard somewhere else and use it as standalone standard.

* **Download**
	
	Download the [zip master](https://github.com/foobugs/PHP53to54/zipball/master) from github and extract it in the PHP_CodeSniffer Standards directory.

* **Git-Clone-Install**

	This script will go to your PHP_CodeSniffer Standards directory and place
	a clone of PHP53to54 Standard inside of it:

        cd `pear config-get php_dir`/PHP/CodeSniffer/Standards
        git clone git://github.com/foobugs/PHP53to54.git
        cd PHP53to54 & rm composer.json & git mv PHP53to54/* ./

Usage
-----

### Installed standard

If you have this standard copied or cloned into the PHPCodeSniffer Standards directory the standard should be listed when calling:

	phpcs -i

If `PHP53to54` is listed there you’re ready to use this standard on any directory:

	phpcs --standard=PHP53to54 <source-path>

### External standard
	
If you did not put the Standard into PHP_CodeSniffers Standard directory you can specify the external location of the standard. Note that the path to the standard must be a full qualified path:

	phpcs -standard=/Users/frank/Downloads/PHP53to54/Standards/PHP53to54 <source-path>

You can find more options and arguments (f.i. ignoring files, extensions, memory limit) in the official [PHP_CodeSniffer Manual](http://pear.php.net/manual/en/package.php.php-codesniffer.php).


Participate!
------------
You can participate in this project by forking the [Repository](https://github.com/foobugs/PHP53to54) and push changes back to the project. Feel free to post issues or whishes in the [issue section](https://github.com/foobugs/PHP53to54/issues).