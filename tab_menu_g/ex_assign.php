<?php
// $Id$
// FILE		::	ex_assign.php
// AUTHOR	::	Ryuji AMANO <info@joetsu.info>
// WEB		::	Ryu's Planning <http://ryus.joetsu.info/>
//

global $xoopsUser, $xoopsModule;
if (is_object($xoopsUser)) {
	$pm_handler =& xoops_gethandler('privmessage');

	$criteria = new CriteriaCompo(new Criteria('read_msg', 0));
	$criteria->add(new Criteria('to_userid', $xoopsUser->getVar('uid')));
	$this->assign("ex_new_messages", $pm_handler->getCount($criteria));
}

if ( is_object($xoopsModule) ) {
	$this->assign('ex_moduledir', $xoopsModule->getVar('dirname'));
}

?>