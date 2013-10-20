<?PHP // $Id: version.php,v 1.5.2.5 2009/02/28 19:20:15 dlnsk Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of attforblock
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2013090702;  // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2012061700;    // Requires this Moodle version
$module->component = 'mod_attforblock'; // Full name of the plugin (used for diagnostics)
$module->cron     = 0;           // Period for cron to check this module (secs)
?>
