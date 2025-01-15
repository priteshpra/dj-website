<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/brand_model');
        $this->load->model('admin/blog_model');
        $this->load->model('admin/category_model');
        $this->load->model('admin/subcategory_model');
        $this->load->model('common_model');
        $this->load->model('admin/pagemaster_model');
        $this->load->model('admin/cms_model');
        $this->load->model('admin/banner_model');
        $this->load->model('admin/testimonial_model');
        $this->load->library('recaptcha');
    }

    public function index()
    {
        $data['home'] = $this->common_model->getHomeData();
        // echo "<pre>";
        // print_r($data['home']);
        // die;
        $data['artistData'] = $this->common_model->getArtistData(0);
        $data['recaptcha_html'] = $this->recaptcha->getRecaptchaHtml();
        $data['menu'] = $menu = $this->common_model->getMenus();
        $data['jobPost'] = $this->common_model->getJobData();

        $data['brandList'] = $this->brand_model->ListData(100, 1);
        $data['blog'] = $this->blog_model->listData(100, 1);
        $firstThreeElements = array_slice($data['blog'], 0, 3);
        $data['page_id'] = '';
        $data['firstThreeElements'] = $firstThreeElements;

        $data['page_name'] = 'Home';
        $this->load->view('front/includes/header', $data);
        $this->load->view('front/index', $data);
        $this->load->view('front/includes/footer');
    }

    public function sendEmail()
    {
        $form_data = $this->input->post('form_data');
        parse_str($form_data, $mailData);
        // Load the email library
        $this->load->library('email');

        // Captcha validation
        $recaptcha_response = $mailData['g-recaptcha-response'];
        $response = $this->recaptcha->verifyResponse($recaptcha_response);
        if (!$response['success']) {
            $recaptcha_html = $this->recaptcha->getRecaptchaHtml();
            print_r($recaptcha_html);
            die;
        } else {
            // Mail config
            $to = HR_MAIL;
            $from = $mailData['con_email'];
            $fromName = $mailData['con_name'];
            $mailSubject = 'Looking for an excellent DJ - ' . $mailData['con_person'];

            // Mail content
            $mailContent = '
            <h2>Become a Growth Partner Form Submitted</h2>
            <p><b>Customer Name: </b>' . $mailData['con_name'] . '</p>
            <p><b>Email: </b>' . $mailData['con_email'] . '</p>
            <p><b>Subject: </b>' . $mailData['con_subject'] . '</p>
            <p><b>Message: </b>' . $mailData['con_info'] . '</p>
        ';

            // $config['mailtype'] = 'html';
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'smtpout.secureserver.net',
                'smtp_port' => 465, // or 465 for SSL
                'smtp_crypto' => 'ssl',
                'smtp_user' => '',
                'smtp_pass' => '',
                'mailtype'  => 'html', // or 'text'
                'charset'   => 'utf-8', // or
                'wordwrap'  => TRUE,
                'newline'   => "\r\n", // Ensure correct line endings
                'crlf'      => "\r\n"
            );

            $this->email->initialize($config);

            $this->email->from($from, $fromName);
            $this->email->to($to);
            $this->email->subject($mailSubject);
            $this->email->message($mailContent);

            if ($this->email->send()) {
                echo 'Email sent successfully';
            } else {
                show_error($this->email->print_debugger());
            }
        }
    }

    public function page()
    {
        $id = $this->uri->segment(1);
        $pageName = $this->uri->segment(1);

        // $data['pagemaster'] = $pagemaster = $this->pagemaster_model->getPageMasterByID($id);
        $page_id = $this->common_model->getPageIdData($pageName);

        $data['menu'] = $menu = $this->common_model->getMenus();

        $data['page_id'] = $page_id = isset($page_id[0]->PageID) ? $page_id[0]->PageID : 0;
        $data['cms'] = $cms = $this->common_model->getCmsData($page_id);


        $data['metaKey'] = $this->common_model->getMenusMetaKey(ucfirst($pageName));
        $data['brandList'] = $this->brand_model->ListData(100, 1);

        $query = $this->db->query("SELECT C.PageID,C.SubCategoryID
                                FROM sssm_pagemaster C
                                WHERE C.Status = 1 AND C.PageID = $page_id");
        $ArtistcatID = $query->result();

        $ArtistcatID = isset($ArtistcatID[0]) ? $ArtistcatID[0]->SubCategoryID : 0;
        $data['artistData'] = $this->common_model->getArtistData($ArtistcatID);

        $data['blog'] = $this->common_model->getBlogsData();
        $data['banner'] = $banner = $this->common_model->getBannerData($page_id);
        $data['testimonial'] = $this->testimonial_model->listData(15, 1);

        $data['page_name'] = ucfirst($pageName);



        $this->load->view('front/includes/header', $data);
        $this->load->view('front/index', $data);
        $this->load->view('front/includes/footer');
    }

    // public function subpage($id)
    // {
    //     $id = $this->uri->segment(3);

    //     $data['pagemaster'] = $pagemaster = $this->pagemaster_model->getPageMasterByID($id);
    //     $data['menu'] = $menu = $this->common_model->getMenus();
    //     $data['cms'] = $cms = $this->common_model->getCmsData($id);
    //     $data['page_id'] = $id;
    //     $data['banner'] = $banner = $this->common_model->getBannerData($id);


    //     $data['page_name'] = $pagemaster->PageName;

    //     $this->load->view('front/includes/header', $data);
    //     $this->load->view('front/index', $data);
    //     $this->load->view('front/includes/footer');
    // }

    public function detail($id)
    {
        $id = $this->uri->segment(3);
        $data['menu'] = $menu = $this->common_model->getMenus();
        $data['Blog'] = $this->blog_model->getCmsByID($id);
        $data['page_name'] = 'Blog Detail';
        $this->load->view('front/includes/header', $data);
        $this->load->view('front/blog-detail', $data);
        $this->load->view('front/includes/footer');
    }
}
