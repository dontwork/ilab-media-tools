<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (!defined('ABSPATH')) { header('Location: /'); die; }

return [
    "id" => "debugging",
    "name" => "Debugging",
	"description" => "Enables logging for the plugin to track down issues.",
	"class" => "MediaCloud\\Plugin\\Tools\\Debugging\\DebuggingTool",
	"dependencies" => [],
	"env" => "ILAB_MEDIA_DEBUGGING_ENABLED",
	"settings" => [
		"options-page" => "media-tools-debugging",
		"options-group" => "ilab-media-debugging",
		"groups" => [
			"ilab-media-s3-debug-settings" => [
				"title" => "Debug Settings",
				"description" => "If you are having issues with ILAB Media Cloud, you can turn on logging to possibly help track down issues.",
				"options" => [
					"mcloud-debug-logging-level" => [
						"title" => "Logging Level",
						"description" => "The logging level to use. To disable logging for Media Cloud, set it to <code>None</code>.",
						"type" => "select",
						"default" => "info",
						"options" => [
							"none" => "None",
							"info" => "Info",
							"warning" => "Warning",
							"error" => "Error"
						]
					],
					"mcloud-debug-max-database-entries" => [
						"title" => "Maximum Database Entries",
						"description" => "The maximum number of log entries to keep in the database.  The default is 1000.",
						"type" => "number",
						"step" => 1,
						"min" => 100,
						"max" => 10000,
                        "default" => 1000
					],
					"mcloud-debug-remote-url" => [
						"title" => "Log Target Host",
						"description" => "The remote log target to send logs to, this will be supplied by Media Cloud support.",
						"type" => "text-field",
					],
					"mcloud-debug-remote-url-port" => [
						"title" => "Log Target Port",
						"description" => "The port number for the remote log target to send logs to, this will be supplied by Media Cloud support.",
						"type" => "text-field",
					],
				]
			]
		]
	]
];