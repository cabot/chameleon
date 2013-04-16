<?php
/**
*
* @package Nested Set
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

require_once dirname(__FILE__) . '/set_forum_base.php';

class phpbb_tests_nestedset_set_forum_test extends phpbb_tests_nestedset_set_forum_base
{
	public function forum_constructor_data()
	{
		return array(
			array(array(
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
			)),
		);
	}

	/**
	* @dataProvider forum_constructor_data
	*/
	public function test_forum_constructor($expected)
	{
		$result = $this->db->sql_query('SELECT forum_id, parent_id, left_id, right_id, forum_parents
			FROM phpbb_forums
			ORDER BY left_id, forum_id ASC');
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}

	public function get_sql_where_data()
	{
		return array(
			array('SELECT forum_id, parent_id, left_id, right_id, forum_parents
				FROM phpbb_forums
				%s
				ORDER BY left_id, forum_id ASC',
				'WHERE', '', array(
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
			)),
			array('SELECT f.forum_id, f.parent_id, f.left_id, f.right_id, f.forum_parents
				FROM phpbb_forums f
				%s
				ORDER BY f.left_id, f.forum_id ASC',
				'WHERE', 'f.', array(
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
			)),
			array('SELECT forum_id, parent_id, left_id, right_id, forum_parents
				FROM phpbb_forums
				WHERE forum_id < 4 %s
				ORDER BY left_id, forum_id ASC',
				'AND', '', array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 4, 'right_id' => 5, 'forum_parents' => ''),
			)),
			array('SELECT f.forum_id, f.parent_id, f.left_id, f.right_id, f.forum_parents
				FROM phpbb_forums f
				WHERE f.forum_id < 4 %s
				ORDER BY f.left_id, f.forum_id ASC',
				'AND', 'f.', array(
				array('forum_id' => 1, 'parent_id' => 0, 'left_id' => 1, 'right_id' => 6, 'forum_parents' => ''),
				array('forum_id' => 2, 'parent_id' => 1, 'left_id' => 2, 'right_id' => 3, 'forum_parents' => ''),
				array('forum_id' => 3, 'parent_id' => 1, 'left_id' => 4, 'right_id' => 5, 'forum_parents' => ''),
			)),
		);
	}

	/**
	* @dataProvider get_sql_where_data
	*/
	public function test_get_sql_where($sql_query, $operator, $column_prefix, $expected)
	{
		$result = $this->db->sql_query(sprintf($sql_query, $this->set->get_sql_where($operator, $column_prefix)));
		$this->assertEquals($expected, $this->db->sql_fetchrowset($result));
	}
}
