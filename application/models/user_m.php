<?php

class  User_M extends MY_Model
{
    protected $_table_name = 'users';
    protected $_order_by = 'name';
    public $rules = array(
        'email' => array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
        'password' => array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|required')

    );
    public $rules_admin = array(
        'name' => array('field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'),
        'email' => array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email|callback__unique_email'),
        'password' => array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|matches[password_confirm]'),
        'password_confirm' => array('field' => 'password_confirm', 'label' => 'Confirm password', 'rules' => 'trim|matches[password]')

    );


    function __construct()
    {
        parent::__construct();
    }

    public function array_form_post($fields)
    {
        $data = array();
        foreach ($fields as $field){
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function login()
    {
        $user = $this->get_by(array(
            'email' => $this->input->post('email'),
            'password' => $this->hash($this->input->post('password'))
        ), true);
        if (count($user)) {
            // Log in user
            $data = array(
                'name' => $user->name,
                'email' => $user->email,
                'id' => $user->id,
                'loggedin' => TRUE
            );
            $this->session->set_userdata($data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }

    public function loggedin()
    {
        return (bool)$this->session->userdata('loggedin');
    }

    public function get_new()
    {
        $user = new stdClass();
        $user->name = '';
        $user->email = '';
        $user->password = '';

        return $user;

    }

    public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }
}