<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artists extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/brand_model');
        $this->load->model('admin/blog_model');
    }

    public function detail($id)
    {
        $data['artist'] = $this->common_model->getArtistDatabyName($id);
        $data['menu'] = $menu = $this->common_model->getMenus();
        $data['page_name'] = isset($data['artist'][0]->DisplayName) ? $data['artist'][0]->DisplayName : 'Artist Detail';
        $data['gallry'] = $this->common_model->getArtistGallery($data['artist'][0]->UserID);
        // print_r($data['gallry']);
        // die;
        $this->load->view('front/includes/header', $data);
        $this->load->view('front/artist-detail', $data);
        $this->load->view('front/includes/footer');
    }
}
