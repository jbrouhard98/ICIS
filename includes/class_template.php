<?php

class template

{

/*     Variables we will be using in this class 
 * file_ext - For organisational reasons, the templae file extensions
 * buffer - The contents of the given template file that we work with.
*/

var $file_ext         = '.htm';

var $buffer;

// Lets call the theme location from config.inc.php
function theme(){
		include dirname(dirname(__FILE__)) . '/includes/config.inc.php';
		return $theme;		
	}

function buff_template ($file)
{
	
		
	if( file_exists( $this -> theme() . $file . $this -> file_ext ) )
	{
		//$this -> buffer = file_get_contents( $this -> template_dir . $file . $this -> file_ext );
		// For < PHP 4.3.0
		 $this -> buffer = join('', file( $this -> theme() . $file . $this -> file_ext ));
		return $this -> buffer;
	}
	else
	{
		echo $this -> theme() . $file . $this -> file_ext . ' does not exist';
	}
}

function parse_variables($input, $array)
{   
	$search = preg_match_all('/{.*?}/', $input, $matches);
	for($i = 0; $i < $search; $i++)
	{
		$matches[0][$i] = str_replace(array('{', '}'), null, $matches[0][$i]);
	}
	foreach($matches[0] as $value)
	{
		$input = str_replace('{' . $value . '}', $array[$value], $input);
	}

return $input;
}

}

?>
