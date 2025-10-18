<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learner_preformance extends MY_Controller {

    public function index()
    {
        load_dashboard_view('learner/learner_preformance_view');
    }


}
