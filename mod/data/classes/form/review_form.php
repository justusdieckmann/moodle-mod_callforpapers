<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>;.

/**
 * Form for creating and editing an event.
 *
 * @package     mod_data
 * @copyright   2025 Justus Dieckmann, Ruhr-Universität Bochum <justus.dieckmann@ruhr-uni-bochum.de>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_data\form;

global $CFG;

require_once($CFG->libdir . '/formslib.php');
class review_form extends \moodleform {
// Add the review comment field

    protected function definition() {
        $mform = $this->_form;
        $mform->addElement ('editor', 'review_comment', get_string('review_comment', 'mod_data'));
        $mform->setType('review_comment', PARAM_RAW);
        $mform->addElement ('text', 'rating', get_string('rating', 'mod_data'));
        $mform->setType('rating', PARAM_INT);
        $this->add_action_buttons();
    }
}
