<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('response', "<p style='text-align: center;font-size: 15px;color: #d61d1d;'>Invalid Request.</p>");
            redirect('welcome');
        } else {
            if ($this->input->post($this->security->get_csrf_token_name(), TRUE) == get_cookie($this->config->item('csrf_cookie_name'), TRUE)) {
                $username = trim($this->input->post('username'));
                $password = trim($this->input->post('password'));
                $data = $this->model->selectdetails('login');
                foreach ($data as $row) {
                    if ($row['username'] == $username && $row['password'] == $password) {
                        $count = 1;
                        $newdata = array(
                            'name' => $row['name'],
                            'email' => $row['email'],
                            'lastlogin' => $row['last_login'],
                            'mobile' => $row['mobile']
                        );
                        $this->session->set_userdata('securelogin', $newdata);
                    } else {
                        $count = 0;
                    }

                    if ($count > 0) {
                        redirect('dashboard');
                    } else {
                        $this->session->set_flashdata('response', "<p style='text-align: center;font-size: 15px;color: #d61d1d;'>Invalid Request.</p>");
                        redirect('welcome');
                    }
                }
            } else {
                $this->session->set_flashdata('response', "<p style='text-align: center;font-size: 15px;color: #d61d1d;'>Invalid Request.</p>");
                redirect('welcome');
            }
        }
    }

    public function logout() {
        $newdata = array(
            'name' => '',
            'email' => '',
            'lastlogin' => '',
            'mobile' => ''
        );

        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect('welcome', 'refresh');
    }

}
