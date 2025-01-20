<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Contact extends CI_Controller
{



    function __construct()
    {

        parent::__construct();

        $this->load->model('admin/brand_model');

        $this->load->model('admin/blog_model');

        $this->load->library('form_validation');

        $this->load->library('recaptcha');

        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        // $this->db2 = $this->load->database('db2', TRUE);  // Load second database

    }



    public function index()
    {



        $data = $formData = array();

        $data['recaptcha_html'] = $this->recaptcha->getRecaptchaHtml();



        // Pass POST data to view

        $data['postData'] = $formData;

        $data['menu'] = $menu = $this->common_model->getMenus();

        $data['page_name'] = 'Contact';



        $data['metaKey'] = $this->common_model->getMenusMetaKey('Contact');

        // echo "<pre>";

        // print_r($data['metaKey']);

        // die;

        $this->load->view('front/includes/header', $data);

        $this->load->view('front/contact', $data);

        $this->load->view('front/includes/footer');
    }



    public function sendEmail()
    {

        // Load the email library

        $this->load->library('email');

        $this->form_validation->set_rules('con_firstname', 'First Name', 'required|alpha');


        $this->form_validation->set_rules('con_contact', 'Contact', 'required|numeric|exact_length[10]');

        $this->form_validation->set_rules('con_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('eventdate', 'Event Data', 'required');


        $mailData = $this->input->post();



        // Captcha validation

        $recaptcha_response = $mailData['g-recaptcha-response'];

        $response = TRUE; //$this->recaptcha->verifyResponse($recaptcha_response);

        // print_r($response);

        if ($this->form_validation->run() == FALSE || !$response['success']) {



            $data['menu'] = $menu = $this->common_model->getMenus();

            $data['page_name'] = 'Contact';

            $data['recaptcha_error'] = $response['error-codes'][0];

            // $data['recaptcha_html'] = $this->recaptcha->getRecaptchaHtml();

            $this->load->view('front/includes/header', $data);

            $this->load->view('front/contact', $data);

            $this->load->view('front/includes/footer');
        } else {
            $this->load->helper('file');
            $config['upload_path'] = 'assets/uploads/resume/';
            $config['allowed_types'] = 'doc|docx|pdf';
            $config['max_size'] = 10024;
            $config['file_name'] = 'resume_' . $mailData['con_firstname'] . '_' . time();

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('filename')) {
                // Define email data
                $formData = array(
                    'con_firstname' => $mailData['con_firstname'],
                    'con_contact' => $mailData['con_contact'],
                    'eventdate' => $mailData['eventdate'],
                    'con_email' => $mailData['con_email'],
                    'comment' => $mailData['comment']
                );
            }

            // Mail config
            $to = HR_MAIL;
            $from = $mailData['con_email'];
            $fromName = isset($formData['con_firstname']) ? $formData['con_firstname'] : '';
            $mailSubject = 'Contact Request Submitted by ' . isset($formData['con_firstname']) ? $formData['con_firstname'] : '';

            // Mail content
            $mailContent = '<h2>Contact Request Submitted</h2>
            <p><b>Contact Name: </b>' . (isset($formData['con_firstname']) ? $formData['con_firstname'] : '') . '</p>
            <p><b>Contact Number: </b>' . (isset($formData['con_contact']) ? $formData['con_contact'] : '') . '</p>
            <p><b>Email: </b>' . (isset($formData['con_email']) ? $formData['con_email'] : '') . '</p>
            <p><b>Event date: </b>' . (isset($formData['eventdate']) ? $formData['eventdate'] : '') . '</p>
            <p><b>Message: </b>' . (isset($formData['comment']) ? $formData['comment'] : '') . '</p>';

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtpout.secureserver.net',
                'smtp_port' => 465, // or 465 for SSL
                'smtp_crypto' => 'ssl',
                'smtp_user' => '',
                'smtp_pass' => '',
                'mailtype' => 'html', // or 'text'
                'charset' => 'utf-8', // or
                'wordwrap' => TRUE,
                'newline' => "\r\n", // Ensure correct line endings
                'crlf' => "\r\n"
            );
            $this->email->initialize($config);
            $this->email->to($to);
            $this->email->from($from, $fromName);
            $this->email->subject($mailSubject);
            $this->email->message($mailContent);
            $send = $this->email->send() ? true : false;

            $data = [
                'Name' => $formData['con_firstname'], // Input field name
                'Contact' => $formData['con_contact'],
                'EventDate' => $formData['eventdate'],
                'Email' => $formData['con_email'],
                'Message' => $formData['comment']
            ];
            $this->db->insert('sssm_appointment', $data);

            if ($send) {
                $formData = array();
                $data['status'] = array(
                    'type' => 'success',
                    'msg' => 'Your contact request has been submitted successfully.'
                );
                $data['menu'] = $menu = $this->common_model->getMenus();
                $data['page_name'] = 'Contact';
                $data['recaptcha_html'] = $this->recaptcha->getRecaptchaHtml();
                $this->load->view('front/includes/header', $data);
                $this->load->view('front/contact', $data);
                $this->load->view('front/includes/footer');
            } else {

                $data['status'] = array(
                    'type' => 'error',
                    'msg' => 'Some problems occured, please try again.'
                );

                $data['menu'] = $menu = $this->common_model->getMenus();

                $data['page_name'] = 'Contact';

                $data['recaptcha_error'] = $response['error-codes'][0];

                $data['recaptcha_html'] = $this->recaptcha->getRecaptchaHtml();

                $this->load->view('front/includes/header', $data);

                $this->load->view('front/contact', $data);

                $this->load->view('front/includes/footer');
            }
        }
    }
}
