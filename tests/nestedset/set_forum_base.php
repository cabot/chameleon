<?php
/**
*
* @package Nested Set
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

class phpbb_tests_nestedset_set_forum_base extends phpbb_database_test_case
{
	public function getDataSet()
	{
		return $this->createXMLDataSet(dirname(__FILE__) . '/fixtures/phpbb_forums.xml');
	}

	protected $forum_data = array(
		// \__/
		1	=> array('forum_id' => 1, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
		2	=> array('forum_id' => 2, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
		3	=> array('forum_id' => 3, 'parent_id' => 1, 'user_id' => 0, 'left_id' => 4, 'right_id' => 5, 'forum_parents' => ''),

		// \  /
		//  \/
		4	=> array('forum_id' => 4, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 7, 'right_id' => 12, 'forum_parents' => ''),
		5	=> array('forum_id' => 5, 'parent_id' => 4, 'user_id' => 0, 'left_id' => 8, 'right_id' => 11, 'forum_parents' => ''),
		6	=> array('forum_id' => 6, 'parent_id' => 5, 'user_id' => 0, 'left_id' => 9, 'right_id' => 10, 'forum_parents' => ''),

		// \_  _/
		//   \/
		7	=> array('forum_id' => 7, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 13, 'right_id' => 22, 'forum_parents' => ''),
		8	=> array('forum_id' => 8, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 14, 'right_id' => 15, 'forum_parents' => ''),
		9	=> array('forum_id' => 9, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 16, 'right_id' => 19, 'forum_parents' => ''),
		10	=> array('forum_id' => 10, 'parent_id' => 9, 'user_id' => 0, 'left_id' => 17, 'right_id' => 18, 'forum_parents' => ''),
		11	=> array('forum_id' => 11, 'parent_id' => 7, 'user_id' => 0, 'left_id' => 20, 'right_id' => 21, 'forum_parents' => ''),

		// Unexisting forums
		0	=> array('forum_id' => 0, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
		200	=> array('forum_id' => 200, 'parent_id' => 0, 'user_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
	);

	protected $set,
		$config,
		$lock,
		$db;

	public function setUp()
	{
		parent::setUp();

		$this->db = $this->new_dbal();

		global $config;

		$config = $this->config = new phpbb_config(array('nestedset_forum_lock' => 0));
		set_config(null, null, null, $this->config);

		$this->lock = new phpbb_lock_db('nestedset_forum_lock', $this->config, $this->db);
		$this->set = new phpbb_nestedset_forum($this->db, $this->lock, 'phpbb_forums');
	}
}
