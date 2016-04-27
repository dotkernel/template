# Dot Template
> Port of the original PHPLIB Template class by Kristian Koehntopp, NetUSE AG and was released under the LGPL.

The original PHPLIB library can be downloaded from here:
 - https://sourceforge.net/projects/phplib/
 - http://phplib.sourceforge.net/index.php3


### Example
Use the class from the DotKernel\DotTemplate namespace
```php
use DotKernel\DotTemplate\DotTemplate;
```
Load the templating system:
```php
$tpl = new DotTemplate('.', 'remove');
```
Set the root directory
```php
$tpl->setRoot('/templates_directory/');
```
Load the template file:
```php
$tpl->setFile('tpl_main', 'template_file.tpl');
```
Setting a variable:
```php
$tpl->setVar('VARIABLE', 'This is the variable inside');
```
Parse and output the variable
```php
$tpl->parse('tpl_main', 'VARIABLE');
echo $tpl->get('tpl_main');
```
or
```php
$tpl->pparse('tpl_main', 'VARIABLE');
```

A more complex example of how DotTemplate can be used can be found in:
``` 
/example/index.php
```
More examples can be found in DotKernel's official documentation  
https://www.dotkernel.com/docs/

### Installation

```sh
$ composer require dotkernel/dot-template
```   
License
---- 
LGPL