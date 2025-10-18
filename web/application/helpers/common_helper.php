<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('load_dashboard_view')) {
    function load_dashboard_view($url, $args = array(), $is_home = 0, $has_menu = 0)
    {
        $CI = &get_instance();
        $is_admin = 0;
        $data['page_content'] = $CI->load->view($url, $args, TRUE);

        if ($is_admin == 1) {
            $data['title_view'] = $CI->load->view('includes/admin/title_view', $args, TRUE);
            $data['side_nav_view'] = $CI->load->view('includes/admin/side_nav_view', $args, TRUE);
            $data['footer_view'] = $CI->load->view('includes/admin/footer_view', $args, TRUE);
        } else {
            $data['title_view'] = $CI->load->view('includes/learner/title_view', $args, TRUE);
            $data['side_nav_view'] = $CI->load->view('includes/learner/side_nav_view', $args, TRUE);
            $data['footer_view'] = $CI->load->view('includes/learner/footer_view', $args, TRUE);
        }

        $CI->load->view('includes/header', $data);
    }
}
