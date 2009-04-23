<?php // $Id: mnet.php,v 1.3.2.1 2009/01/01 14:36:49 skodak Exp $

// This file defines settingpages and externalpages under the "mnet" category

$ADMIN->add('mnet', new admin_externalpage('net', get_string('settings', 'mnet'), 
                                           "$CFG->wwwroot/$CFG->admin/mnet/index.php",
                                           'moodle/site:config'));

$ADMIN->add('mnet', new admin_externalpage('mnetpeers', get_string('mnetpeers', 'mnet'), 
                                           "$CFG->wwwroot/$CFG->admin/mnet/peers.php",
                                           'moodle/site:config'));
$ADMIN->add('mnet', new admin_externalpage('ssoaccesscontrol', get_string('ssoaccesscontrol', 'mnet'),
                                           "$CFG->wwwroot/$CFG->admin/mnet/access_control.php",
                                           'moodle/site:config'));
$ADMIN->add('mnet', new admin_externalpage('mnetenrol', get_string('mnetenrol', 'mnet'), 
                                           "$CFG->wwwroot/$CFG->admin/mnet/enr_hosts.php",
                                           'moodle/site:config'));
$ADMIN->add('mnet', new admin_externalpage('trustedhosts', get_string('trustedhosts', 'mnet'), 
                                           "$CFG->wwwroot/$CFG->admin/mnet/trustedhosts.php",
                                           'moodle/site:config'));
?>
