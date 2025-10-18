<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learner_mentorship extends MY_Controller {

    public function index()
    {
        load_dashboard_view('learner/learner_mentorship_view');
    }


}
