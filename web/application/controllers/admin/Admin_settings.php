<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_settings extends MY_Controller {

    public function index()
    {
        load_dashboard_view('admin/admin_settings_view');
    }


}
