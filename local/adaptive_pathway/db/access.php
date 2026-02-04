<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'local/adaptive_pathway:manage' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        ),
        'clonepermissionsfrom' => 'moodle/course:manageactivities'
    ),

    'local/adaptive_pathway:view' => array(
        'captype' => 'read',
        '' => CONTEXT_COURSE,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'student' => CAP_ALLOW,
        ),
    )

);
