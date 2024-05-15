<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add( new admin_setting_configcheckbox('block_testblock/showcourses', 'list of courses'  ,'this setting show list of courses',  0));
  }


