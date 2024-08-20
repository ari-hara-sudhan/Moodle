<?php

defined('MOODLE_INTERNAL') || die();

function local_auto_redirect_course_module_completed($event)
{
    global $DB, $USER, $CFG;

    if (!get_config('local_auto_redirect', 'redirect_next_section')) {
        return;
    }

    $coursemodule = $DB->get_record('course_modules', array('id' => $event->contextinstanceid));
    if ($coursemodule) {
        $course = $DB->get_record('course', array('id' => $coursemodule->course));

        // Get the next section.
        $sections = $DB->get_records('course_sections', array('course' => $course->id), 'section ASC');
        $currentsectionfound = false;
        foreach ($sections as $section) {
            if ($currentsectionfound && !$section->visible) {
                $nextsection = $section;
                break;
            }
            if ($section->id == $coursemodule->section) {
                $currentsectionfound = true;
            }
        }

        if (!empty($nextsection)) {
            // Redirect to the next section.
            redirect(new moodle_url('/course/view.php', array('id' => $course->id, 'section' => $nextsection->section)));
        }
    }
}

function local_auto_redirect_extend_navigation_course($navigation, $course, $context)
{
    if (has_capability('moodle/course:manageactivities', $context)) {
        $url = new moodle_url('/local/auto_redirect/index.php', array('id' => $course->id));
        $navigation->add(get_string('pluginname', 'local_auto_redirect'), $url, navigation_node::TYPE_SETTING);
    }
}
