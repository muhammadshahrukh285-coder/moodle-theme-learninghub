<?php
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/moodlelib.php');

$PAGE->set_url(new moodle_url('/theme/learninghub/contact.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');
$PAGE->set_title(get_string('contact', 'theme_learninghub'));
$PAGE->set_heading(get_string('contact', 'theme_learninghub'));

echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('contact', 'theme_learninghub'));

echo $OUTPUT->footer();
