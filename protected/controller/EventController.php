<?php

class EventController extends DooController {

    function index() {
        // echo 'You are visiting '.$_SERVER['REQUEST_URI'];
        $data = Doo::conf()->view_data;
        $this->view()->render('index', $data);
	}
	
	function next()
	{
	    Doo::loadModel('Flash');
	    $session = Doo::session(Doo::conf()->session_name);
	    $zipcode = $_POST['zipcode'];
        if ($zipcode)
        {
            $session->zipcode = $zipcode;
            $redirect_url = 'zip/' . $zipcode;
            return $redirect_url;
        }
        else
        {
            Flash::add('Please enter a valid zipcode');
            return Doo::conf()->SUBFOLDER;
        }
	}

	function events() {
	    Doo::loadModel('Flash');
        $session = Doo::session(Doo::conf()->session_name);
        if ($this->params['zipcode'])
        {
            $session->zipcode = $this->params['zipcode'];
        }
        else
        {
            Flash::add('Please enter a valid zipcode');
            return Doo::conf()->SUBFOLDER . 'index';
        }
        $data = Doo::conf()->view_data;
        $data['zipcode'] = $this->params['zipcode'];
        $event = Doo::loadModel('Event', true);
        // $data['events'] = Doo::db()->find('Event');
        $opts['where'] = 'zip = ?';
        $opts['param'] = array($session->zipcode);
        $data['events'] = $event->find($opts);
        $data['flash'] = Flash::dump();
        $this->view()->render('events', $data);
	}

	function event() {
		$a = Doo::db()->find('Event');
	}

	function flag() {
		$a = Doo::db()->find('Event');
	}

	function like() {
		$a = Doo::db()->find('Event');
	}

	function new_event() {
		echo 'You are visiting '.$_SERVER['REQUEST_URI'];
	}

}
?>