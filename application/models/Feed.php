<?php

class Feed extends MY_Model {

    var $curator_id;
    var $content;
    var $image_url;
    var $video_url;
    var $created_at;
    var $updated_at;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function post_feed()
    {
    	
    }

}