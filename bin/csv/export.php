<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright Tech To The People http:tttp.eu (c) 2011                 |
 +--------------------------------------------------------------------+
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007.                                       |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License along with this program; if not, contact CiviCRM LLC       |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/


/**
 *
 * Export records in a csv format to standard out. Optionally
 * limit records by field/value pairs passed as arguments.
 *
 * Usage:
 * php bin/csv/export.php -e <entity> [ --field=value --field=value ] [ -s site.org ]
 * e.g.: php bin/csv/export.php -e Contact --email=jamie@progressivetech.org
 *
 **/
require_once (dirname(__DIR__) . '/cli.class.php');

$entityExporter = new civicrm_cli_csv_exporter();
$entityExporter->run();
