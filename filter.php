<?php
// This file is part of LangX for Moodle - http://moodle.org/
//
// LangX is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// LangX is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plain text syntax: {langx XX}Text{langx} where XX is ISO 639-1 2-letter lowercase code.
 *
 * @package    filter_langx
 * @copyright  2017 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class filter_langx extends moodle_text_filter {

    public function filter($text, array $options = array()) {

        if (stripos($text, 'langx') === false) {
            return $text;
        }

        // Supports HTML only, not XHTML.
        $newtext = preg_replace('/\{langx\s+(\w+)\}(.*)\{langx\}/is', '<span lang="$1">$2</span>', $text);

        // Return original text if an error occured during regex processing.
        if (is_null($newtext)) {
            return $text;
        } else {
            return $newtext;
        }

    }

}
