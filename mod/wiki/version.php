<?PHP // $Id: version.php,v 1.28 2007/02/02 13:02:31 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of Wiki
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007020200;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007020200;  // The current module version (Date: YYYYMMDDXX)
$module->cron     = 3600;        // Period for cron to check this module (secs)

?>
