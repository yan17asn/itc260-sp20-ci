<?php

//application/controllers/Pics.php

class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                
        }

        public function index()
        {
            $this->config->set_item('title', 'Flickr Pics List');
            $nav1 = $this->config->item('nav1');
            $data['title'] = 'Flickr Picture List';
            $data['tag1'] = 'mariners';
            $data['tag2'] = 'seahawks';
            $data['tag3'] = 'sounders';
            $this->load->view('pics/index', $data);   
        }
          

        public function view($slug = NULL)
        {
            //slug without dashes
            $dashless_slug = str_replace("-", " ", $slug);

            //Uppercase slug words
            $dashless_slug = ucwords($dashless_slug);

            //use slug for title
            $this->config->set_item('title', $dashless_slug);
                
            $data['pics_title'] = $slug;
            $data['pics'] = $this->pics_model->get_pics($slug);


            $this->load->view('pics/view', $data);
            
        }
        
}