<?php 
/*
 * Copyright 2012 Sean Proctor
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

if ( !defined('IN_PHPC') ) {
       die("Hacking attempt");
}

function cadmin()
{
	global $phpc_cal;

        if(!$phpc_cal->can_admin()) {
                permission_error(__('Debes haber iniciado sesión como Administrador.'));
        }

	return array(config_form(), user_list(), category_list(), group_list());
}

function config_form()
{
	global $phpc_cal, $phpc_script, $vars;

        $tbody = tag('tbody');

        foreach(get_config_options() as $element) {
                $name = $element[0];
                $text = $element[1];
		$default = $phpc_cal->$name;
		$input = create_config_input($element, $default);

                $tbody->add(tag('tr',
                                tag('th', $text),
                                tag('td', $input)));
        }

	$hidden_div = tag('div',
			create_hidden('action', 'cadmin_submit'));
	if(isset($vars['phpcid']))
		$hidden_div->add(create_hidden('phpcid', $vars['phpcid']));
		
        return tag('form', attributes("action=\"$phpc_script\"",
                                'method="post"'),
			$hidden_div,
			tag('table', attributes("class=\"phpc-container\""),
				tag('caption', __('Opciones')),
				tag('tfoot',
                                        tag('tr',
                                                tag('td', attributes('colspan="2"'),
							create_submit(__('Aceptar'))))),
				$tbody));

}

function user_list()
{
	global $phpc_script, $phpcid, $phpcdb, $vars;

	$users = $phpcdb->get_users_with_permissions($phpcid);

	$tbody = tag('tbody');

	foreach ($users as $user) {
		$tbody->add(tag('tr',
					tag('th', $user['username'],
						create_hidden('uid[]',
							$user['uid'])),
					tag('td', create_checkbox("read{$user['uid']}", "1", !empty($user['read']), __('Read'))),
					tag('td', create_checkbox("write{$user['uid']}", "1", !empty($user['write']), __('Write'))),
					tag('td', create_checkbox("readonly{$user['uid']}", "1", !empty($user['readonly']), __('Read-only'))),
					tag('td', create_checkbox("modify{$user['uid']}", "1", !empty($user['modify']), __('Modify'))),
					tag('td', create_checkbox("admin{$user['uid']}", "1", !empty($user['calendar_admin']), __('Admin')))
				   ));
	}

	$hidden_div = tag('div',
			create_hidden('action', 'user_permissions_submit'));
	if(isset($vars['phpcid']))
		$hidden_div->add(create_hidden('phpcid', $vars['phpcid']));
		
	return tag('form', attributes("action=\"$phpc_script\"",
                                'method="post"'),
			$hidden_div,
			tag('table', attributes("class=\"phpc-container\""),
				tag('caption', __('User Permissions')),
				tag('tfoot',
					tag('tr',
						tag('td', attributes('colspan="6"'),
							create_submit(__('Submit'))))),
				tag('thead',
					tag('tr',
						tag('th', __('User Name')),
						tag('th', __('Read')),
						tag('th', __('Write')),
						tag('th', __('Can Create Read-Only')),
						tag('th', __('Modify')),
						tag('th', __('Admin')))),
				$tbody));
}

function category_list()
{
	global $phpc_script, $phpcid, $phpc_cal, $vars;

	$categories = $phpc_cal->get_categories();

	$tbody = tag('tbody');

	foreach ($categories as $category) {
		$name = empty($category['name']) ? __('No Name')
			: $category['name'];
		$catid = $category['catid'];
		$tbody->add(tag('tr',
					tag('th',$name),
					tag('td', htmlspecialchars($category['text_color'])),
					tag('td', htmlspecialchars($category['bg_color'])),
					tag('td', htmlspecialchars($category['gid'])),
					tag('td', create_action_link(__('Edit'),
							'category_form',
							array('catid'
								=> $catid)),
						" ",
						create_action_link(__('Delete'),
							'category_delete',
							array('catid'
								=> $catid)))
				   ));
	}

	$create_link = create_action_link(__('Create category'), 'category_form',
			array('cid' => $phpcid));
	$table = tag('table', attributes("class=\"phpc-container\""),
			tag('caption', __('Calendar Categories')),
			tag('thead',
				tag('tr',
					tag('th', __('Name')),
					tag('th', __('Text Color')),
					tag('th', __('Background Color')),
					tag('th', __('Visible to User Group')),
					tag('th', __('Actions'))					
				   )),
			$tbody,
			tag('tfoot',
				tag('tr',
					tag('td', attributes('colspan="5"'),
						$create_link))));

	return tag('div', attributes('class="phpc-container"'), $table);
}

function group_list() {
	global $phpc_script, $phpcid, $phpc_cal, $vars;

	$groups = $phpc_cal->get_groups();

	$tbody = tag('tbody');

	foreach ($groups as $group) {
		$name = empty($group['name']) ? __('No Name')
			: $group['name'];
		$id = $group['gid'];
		$tbody->add(tag('tr',
					tag('th', $name),
					tag('td', create_action_link(__('Edit'),
							'group_form',
							array('gid' => $id)),
						" ",
						create_action_link(__('Delete'),
							'group_delete',
							array('gid' => $id)))
				   ));
	}

	$create_link = create_action_link(__('Create group'), 'group_form',
			array('cid' => $phpcid));
	$table = tag('table', attributes("class=\"phpc-container\""),
			tag('caption', __('Calendar Groups')),
			tag('thead',
				tag('tr',
					tag('th', __('Name')),
					tag('th', __('Actions'))
				   )),
			$tbody,
			tag('tfoot',
				tag('tr',
					tag('td', attributes('colspan="2"'),
						$create_link))));

	return tag('div', attributes('class="phpc-container"'), $table);
}

?>
