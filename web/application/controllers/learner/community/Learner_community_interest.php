<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learner_community_interest extends MY_Controller {

    public function index()
    {
        load_dashboard_view('learner/community/learner_community_interest_view');
    }


}
