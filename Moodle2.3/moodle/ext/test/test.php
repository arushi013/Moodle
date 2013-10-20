<?php
	require_once(dirname(dirname(__FILE__)).'\config.php');
	
	
	$url = new moodle_url($CFG->wwwroot.'\formtest\test.php?id=1#mnv');
	$url2 = new moodle_url('$CFG->wwwroot\formtest\test.php?id=1');
	$url = new moodle_url('$CFG->wwwroot\formtest\test.php?fname='.urlencode('arushi bansal'));
	
	
	// Add params to moodle_url object
	$url->params(array( 'name'=>'arushi'));
	
	// Remove params from moodle_url object , do nothing when empty
	$url->remove_params(array(name));
	
	// Remove all params from moodle_url object
	//$url->remove_all_params(array(name));
	
	// To add a single param to moodle_url object
	//$url->param(name, 'arushi');
	
	// Shortcut for printing of encoded URL i.e, $url->out(true)
	print_r($url->__toString(false));
	echo '</br>';
	
	// Returns url without parameters, everything before '?', true means not remove anchor
	print_r($url->out_omit_queryString(true));
	echo '</br>';
	
	/** $matchtype The type of comparison (URL_MATCH_BASE, URL_MATCH_PARAMS, URL_MATCH_EXACT)
	  * URL_MATCH_BASE : Match url before query string
	  * URL_MATCH_PARAMS : Match url fully but params even if one is mathched then returns 1
	  * URL_MATCH_EXACT : Means exact match
	  **/
	echo $url->compare($url2, URL_MATCH_EXACT);
	
	// Set anchor to moodle_url object
	$url->set_anchor('abc');
	
	// Get the value of a param
	echo $url->get_param(id);
	
	/** Returns the 'path' portion of a URL. For example, if the URL is
      * http://www.example.org:447/my/file/is/here.txt?really=1 then this will
      * return '/my/file/is/here.txt'.
      **/ 
	echo $url->get_path();
	
	
	
	print_r($url->out(true));
	
	echo "</pre>";
	
	