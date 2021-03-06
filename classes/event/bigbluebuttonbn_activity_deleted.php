<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The mod_bigbluebuttonbn deleted event.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

namespace mod_bigbluebuttonbn\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The mod_bigbluebuttonbn activity deleted event (triggered by view.php).
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class bigbluebuttonbn_activity_deleted extends base
{
    /**
     * Init method.
     */
    protected function init() {
        parent::init('d', self::LEVEL_OTHER);
        $this->description = "The user with id '$this->userid' deleted the bigbluebuttonbn activity " .
            "with id '$this->objectid' for the course id '$this->courseid'.";
    }

    /**
     * Return event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_activity_deleted', 'bigbluebuttonbn');
    }

    /**
     * Return objectid mapping.
     *
     * @return string
     */
    public static function get_objectid_mapping() {
        return array('db' => 'bigbluebuttonbn', 'restore' => 'bigbluebuttonbn');
    }
}
