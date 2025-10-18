<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learner_marketplace_events extends MY_Controller {

    public function index()
    {
        load_dashboard_view('learner/marketplace/learner_marketplace_events_view');
    }


}
