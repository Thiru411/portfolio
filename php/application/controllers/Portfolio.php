<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url'); // Load URL helper

    }

    // Home page
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('portfolio/index');
        $this->load->view('templates/footer');
    }

    // Projects page
    public function projects()
    {
        $this->load->view('templates/header');
        $this->load->view('portfolio/projects');
        $this->load->view('templates/footer');
    }

    // Contact page
    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('portfolio/contact');
        $this->load->view('templates/footer');
    }

    // Handle form submission
    public function send_message()
    {
        // You can add form validation and email sending logic here
        // For now, we'll just redirect back to contact page with success message
        $this->session->set_flashdata('message_sent', 'Your message has been sent!');
        redirect('portfolio/contact');
    }
}
