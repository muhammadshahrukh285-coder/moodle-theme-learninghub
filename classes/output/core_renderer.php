<?php

namespace theme_learninghub\output;

defined('MOODLE_INTERNAL') || die();

/**
 * Learning Hub core renderer.
 */
class core_renderer extends \theme_boost\output\core_renderer {

    /**
     * Return the Learning Hub compact logo.
     *
     * @param int $maxwidth
     * @param int $maxheight
     * @return \moodle_url|false
     */
    public function get_compact_logo_url($maxwidth = 300, $maxheight = 300) {
        return \theme_learninghub_get_compact_logo_url();
    }

    /**
     * Return the Learning Hub favicon.
     *
     * @return \moodle_url
     */
    public function favicon() {
        return \theme_learninghub_get_favicon($this);
    }
}
