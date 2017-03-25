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
 * Version information for LangX.
 *
 * @package    filter_langx
 * @copyright  2017 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2017032400;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2012062500;        // Requires Moodle version 2.3.
$plugin->component = 'filter_langx';    // Full name of the plugin (used for diagnostics).
$plugin->release   = '0.1';
$plugin->maturity = MATURITY_ALPHA;
