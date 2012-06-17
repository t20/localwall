<?php

class EventController extends DooController {

    function index() {
        // echo 'You are visiting '.$_SERVER['REQUEST_URI'];
        $data = Doo::conf()->view_data;
        $this->view()->render('index', $data);
		
	}

	function events() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

	function event() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

	function flag() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

	function like() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

	function new_event() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

}
?>