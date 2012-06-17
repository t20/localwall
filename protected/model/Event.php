<?php
Doo::loadCore('db/DooModel');

class Event extends DooModel{

    public $id;
    public $title;
    // public $image;
    // public $desc;
    // public $zip;
    // public $vote_count;
    // public $category_id;
    // public $created;
    // public $modified;

    public $_table = 'events';
    public $_primarykey = 'id';
    // public $_fields = array('id','title', 'image', 'desc', 'zip', 'vote_count', 'category_id', 'created', 'modified');
    public $_fields = array('id', 'title');


    public function  __construct() {
        parent::setupModel(__CLASS__);
    }

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'min', 0 ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                )
            );
    }
}
?>