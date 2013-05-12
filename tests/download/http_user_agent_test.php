<?php
/**
*
* @package testing
* @copyright (c) 2010 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

require_once dirname(__FILE__) . '/../../phpBB/includes/functions_download.php';

class phpbb_download_http_user_agent_test extends phpbb_test_case
{
	public function user_agents()
	{
		return array(
			// user agent
			// expected
			array(
				'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)',
				true,
			),
			array(
				'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',
				true,
			),
			array(
				'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.2; SV1; .NET CLR 3.3.69573; WOW64; en-US)',
				true,
			),
			array(
				'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
				false,
			),
			array(
				'Mozilla/4.0 (compatible; MSIE 6.1; Windows XP; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
				false,
			),
			array(
				'Mozilla/4.0 (compatible; MSIE 6.01; Windows NT 6.0)',
				false,
			),
			array(
				'Mozilla/5.0 (Windows; U; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)',
				false,
			),
			array(
				'Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0',
				false,
			),
			array(
				'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36',
				false,
			),
			array(
				'Googlebot-Image/1.0',
				false,
			),
			array(
				'Googlebot/2.1 ( http://www.google.com/bot.html)',
				false,
			),
			array(
				'Lynx/2.8.3dev.9 libwww-FM/2.14 SSL-MM/1.4.1 OpenSSL/0.9.6',
				false,
			),
			array(
				'Links (0.9x; Linux 2.4.7-10 i686)',
				false,
			),
			array(
				'Opera/9.60 (Windows NT 5.1; U; de) Presto/2.1.1',
				false,
			),
			array(
				'Mozilla/4.0 (compatible; MSIE 5.0; Windows NT;)',
				false,
			),
			array(
				'Mozilla/4.0 (compatible; MSIE 5.0; Windows NT 4.0) Opera 6.01 [en]',
				false,
			),
			array(
				'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.24',
				false,
			),
		);
	}

	/**
	* @dataProvider user_agents
	*/
	public function test_is_greater_ie7($user_agent, $expected)
	{
		$this->assertEquals($expected, phpbb_is_greater_ie7($user_agent));
	}
}
