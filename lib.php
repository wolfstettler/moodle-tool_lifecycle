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
 * @package    tool_lifecycle
 * @copyright  2017 Tobias Reischmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

define('ACTION_ENABLE_TRIGGER', 'enable');
define('ACTION_DISABLE_TRIGGER', 'disable');
define('ACTION_UP_TRIGGER', 'up_trigger');
define('ACTION_DOWN_TRIGGER', 'down_trigger');
define('ACTION_WORKFLOW_TRIGGER', 'workflow_trigger');
define('ACTION_UP_STEP', 'up_step');
define('ACTION_DOWN_STEP', 'down_step');
define('ACTION_UP_WORKFLOW', 'up_workflow');
define('ACTION_DOWN_WORKFLOW', 'down_workflow');
define('ACTION_STEP_INSTANCE_FORM', 'step_instance_form');
define('SETTINGS_TYPE_TRIGGER', 'trigger');
define('SETTINGS_TYPE_STEP', 'step');
define('ACTION_TRIGGER_INSTANCE_FORM', 'trigger_instance_form');
define('ACTION_STEP_INSTANCE_DELETE', 'step_instance_delete');
define('ACTION_WORKFLOW_INSTANCE_FROM', 'workflow_instance_form');
define('ACTION_WORKFLOW_DELETE', 'workflow_instance_delete');
define('ACTION_WORKFLOW_DUPLICATE', 'workflow_instance_duplicate');
define('ACTION_WORKFLOW_ACTIVATE', 'workflow_instance_activate');