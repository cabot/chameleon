<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

require_once dirname(__FILE__) . '/../../phpBB/includes/functions.php';
require_once dirname(__FILE__) . '/helper_route_test.php';

class phpbb_controller_helper_route_unclean_path_test extends phpbb_controller_helper_route_test
{
	protected function get_phpbb_root_path()
	{
		return './../';
	}

	protected function get_uri()
	{
		return '/adm/../bertie/index.php';
	}

	protected function get_script_name()
	{
		return 'index.php';
	}
}
