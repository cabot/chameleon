<?php
/**
*
* @package Nested Set
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

require_once dirname(__FILE__) . '/set_forum_base.php';

class phpbb_tests_nestedset_set_forum_add_remove_test extends phpbb_tests_nestedset_set_forum_base
{
	public function remove_add_data()
	{
		return array(
			array(1, array(1, 2, 3), array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 2, 'right_id' => 5, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 3, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 7, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 8, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 10, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 11, 'right_id' => 12, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 15, 'forum_parents' => ''),
			), array(
				1	=> array('parent_id' => 0, 'left_id' => 17, 'right_id' => 18, 'forum_parents' => ''),
				2	=> array('parent_id' => 0, 'left_id' => 19, 'right_id' => 20, 'forum_parents' => ''),
				3	=> array('parent_id' => 0, 'left_id' => 21, 'right_id' => 22, 'forum_parents' => ''),
			), array(
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 2, 'right_id' => 5, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 3, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 7, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 8, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 10, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 11, 'right_id' => 12, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 15, 'forum_parents' => ''),
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 17, 'right_id' => 18, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 0, 'left_id' => 19, 'right_id' => 20, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 0, 'left_id' => 21, 'right_id' => 22, 'forum_parents' => ''),
			)),
			array(2, array(2), array(
				array('forum_id' => 2, 'parent_id' => 0, 'left_id' => 0, 'right_id' => 0, 'forum_parents' => ''),
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 5, 'right_id' => 10, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 6, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 7, 'right_id' => 8, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 11, 'right_id' => 20, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 12, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 17, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 15, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 18, 'right_id' => 19, 'forum_parents' => ''),
			), array(
				2	=> array('parent_id' => 0, 'left_id' => 21, 'right_id' => 22, 'forum_parents' => '')
			), array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 5, 'right_id' => 10, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 6, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 7, 'right_id' => 8, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 11, 'right_id' => 20, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 12, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 17, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 15, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 18, 'right_id' => 19, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 0, 'left_id' => 21, 'right_id' => 22, 'forum_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider remove_add_data
	*/
	public function test_remove_add($forum_id, $expected_removed, $expected_remove_table, $expected_added, $expected_add_table)
	{
		$forum = new phpbb_nestedset_item_forum($this->forum_data[$forum_id]);

		$removed_items = $this->set->remove($forum);

		$this->assertEquals($expected_removed, $removed_items);

		$result = $this->db->sql_query("SELECT forum_id, parent_id, left_id, right_id, forum_parents
			FROM phpbb_forums
			ORDER BY left_id, forum_id ASC");
		$this->assertEquals($expected_remove_table, $this->db->sql_fetchrowset($result));

		$added_items = array();
		foreach ($removed_items as $item_id)
		{
			$forum = new phpbb_nestedset_item_forum($this->forum_data[$item_id]);
			$added_items[$item_id] = $this->set->add($forum);
		}
		$this->assertEquals($expected_added, $added_items);

		$result = $this->db->sql_query("SELECT forum_id, parent_id, left_id, right_id, forum_parents
			FROM phpbb_forums
			ORDER BY left_id, forum_id ASC");
		$this->assertEquals($expected_add_table, $this->db->sql_fetchrowset($result));
	}

	public function delete_data()
	{
		return array(
			array(1, array(1, 2, 3), array(
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 2, 'right_id' => 5, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 3, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 7, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 8, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 10, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 11, 'right_id' => 12, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 15, 'forum_parents' => ''),
			)),
			array(2, array(2), array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 4, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 5, 'right_id' => 10, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 6, 'right_id' => 9, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 7, 'right_id' => 8, 'forum_parents' => ''),
				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 11, 'right_id' => 20, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 12, 'right_id' => 13, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 17, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 15, 'right_id' => 16, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 18, 'right_id' => 19, 'forum_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider delete_data
	*/
	public function test_delete($forum_id, $expected_deleted, $expected)
	{
		$forum = new phpbb_nestedset_item_forum($this->forum_data[$forum_id]);

		$this->assertEquals($expected_deleted, $this->set->delete($forum));

		$result = $this->db->sql_query("SELECT forum_id, parent_id, left_id, right_id, forum_parents
			FROM phpbb_forums
			ORDER BY left_id, forum_id ASC");
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function insert_data()
	{
		return array(
			array(array(
				'forum_desc'	=> '',
				'forum_rules'	=> '',
				'forum_id'		=> 12,
				'parent_id'		=> 0,
				'left_id'		=> 23,
				'right_id'		=> 24,
				'forum_parents'	=> '',
			), array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 4, 'right_id' => 5, 'forum_parents' => ''),

				array('forum_id' => 4, 'parent_id' => 0, 'left_id' => 7, 'right_id' => 12, 'forum_parents' => ''),
				array('forum_id' => 5, 'parent_id' => 4, 'left_id' => 8, 'right_id' => 11, 'forum_parents' => ''),
				array('forum_id' => 6, 'parent_id' => 5, 'left_id' => 9, 'right_id' => 10, 'forum_parents' => ''),

				array('forum_id' => 7, 'parent_id' => 0, 'left_id' => 13, 'right_id' => 22, 'forum_parents' => ''),
				array('forum_id' => 8, 'parent_id' => 7, 'left_id' => 14, 'right_id' => 15, 'forum_parents' => ''),
				array('forum_id' => 9, 'parent_id' => 7, 'left_id' => 16, 'right_id' => 19, 'forum_parents' => ''),
				array('forum_id' => 10, 'parent_id' => 9, 'left_id' => 17, 'right_id' => 18, 'forum_parents' => ''),
				array('forum_id' => 11, 'parent_id' => 7, 'left_id' => 20, 'right_id' => 21, 'forum_parents' => ''),

				array('forum_id' => 12, 'parent_id' => 0, 'left_id' => 23, 'right_id' => 24, 'forum_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider insert_data
	*/
	public function test_insert($expected_data, $expected)
	{
		$this->assertEquals($expected_data, $this->set->insert(array(
			'forum_desc'	=> '',
			'forum_rules'	=> '',
		)));

		$result = $this->db->sql_query('SELECT forum_id, parent_id, left_id, right_id, forum_parents
			FROM phpbb_forums
			ORDER BY left_id, forum_id ASC');
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}
}
