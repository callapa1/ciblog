<?php
class Users extends CI_Controller{
    public function register(){
        $data['title'] = 'Sign up';

        $this->form_validation->set_rules('name', 'Name','required');
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[users.username]|min_length[3]',
            array(
                'is_unique' => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[users.email]',
            array(
                'is_unique' => 'This %s is already taken.'
            )
        );
        $this->form_validation->set_rules('password', 'Password','required|min_length[6]');
        $this->form_validation->set_rules('password2', 'Confirm Password','min_length[6]|matches[password]');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            // Set flash message
            $this->session->set_flashdata('user_register', 'You are now registered and can log in.');

            redirect('posts');
        }
    }
}