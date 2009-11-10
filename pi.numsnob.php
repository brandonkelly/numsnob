<?php

$plugin_info = array(
	'pi_name'        => 'Number Snob',
	'pi_version'     => '1.0',
	'pi_author'      => 'Brandon Kelly',
	'pi_author_url'  => 'http://brandon-kelly.com/',
	'pi_description' => 'Converts numbers 1-9 into words'
);

class Numsnob {

	var $return_data;

	function Numsnob()
	{
		global $TMPL;

		// get the number
		$num = $TMPL->fetch_param('num');

		// make number a word?
		$map = array('0', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
		if (isset($map[$num])) $num = $map[$num];

		// capitalize first letter?
		if ($TMPL->fetch_param('ucfirst') == 'yes') $num = ucfirst($num);

		// "return"
		$this->return_data = $num;
	}

}
