<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learner_marketplace_courses extends MY_Controller {

    public function index()
    {
        load_dashboard_view('learner/marketplace/learner_marketplace_courses_view');
    }


}
