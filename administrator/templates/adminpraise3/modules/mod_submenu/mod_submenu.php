<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

$menu	= AdminPraise3Menu::getInstance();

$html = null;
	
if ($this->get('option') == "com_content" || $this->get('option') == "com_sections" || ($this->get('option') == "com_categories" && $this->get('scope') =="content") || $this->get('option') =="com_frontpage")
	$html .= $menu->renderSubmenu('content');

if ($this->get('option') =="com_menus") :
	$menus = AdminPraise3MenuHelper::getMenus();
	$links = array();
	for($i=0; $i<count($menus); $i++) :
		$m = $menus[$i];
		$url = 'index.php?option=com_menus&task=view&menutype='.$m->menutype;
		$newLink = array('url' => $url, 'text' => $m->title);
		$newLink['children'] = array(array('url' => $url.'&task=newItem', 'text' => JText::_('NEW').' '.$m->title.' '.JText::_('ITEM')));
		$links[] = $newLink;
	endfor;
	$html .= $menu->renderChildren($links, 0, false);
elseif ($this->get('option') =="com_templates") : 
	$html .= $menu->renderSubmenu('templates');
elseif ($this->get('option') =="com_modules") :
	$html .= $menu->renderSubmenu('modules');	
elseif ($this->get('option') =="com_plugins") :
	$html .= $menu->renderSubmenu('plugins');	
elseif ($this->get('ap_task') == "list_components") :
	$html .= $menu->renderSubmenu('components');			
elseif ($this->get('option') =="com_users") :
	$html .= $menu->renderSubmenu('users');	
//elseif (($this->get('ap_task') == "admin") && ($this->_user->get('gid') > 24) || ($this->get('option') =="com_cpanel") && ($this->get('ap_task_set') !="list_components") && ($this->_user->get('gid') > 24)) :
//	$html .= $menu->renderSubmenu('cpanel');
elseif ($this->get('option') =="com_projectfork") :
	$html .= $menu->renderSubmenu('projectfork');
elseif ($this->get('option') =="com_virtuemart") :
	$html .= $menu->renderSubmenu('virtuemart');
endif;

require($tmpl_path.'/default.php');