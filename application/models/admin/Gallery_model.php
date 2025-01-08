<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    // Start : to list all contries 
    public function listData($per_page_record = 10, $page_number = 1)
    {
        $Title = getStringClean(($this->input->post('Title') != '') ? $this->input->post('Title') : '');
        $status_search_value = ($this->input->post('Status_search') != '') ? $this->input->post('Status_search') : -1;

        $sql = "call usp_A_GetGallery( '$per_page_record' , '$page_number','$Title','$status_search_value' )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->result();
    }

    public function getRecordCount()
    {
        $query = $this->db->query("call usp_A_GetRecordCount('ss_artistgallery','ArtistGalleryID')");
        $query->next_result();
        return $query->result();
    }

    public function insert($banner_array)
    {
        $banner_array['Title']   =   getStringClean((isset($banner_array['Title'])) ? $banner_array['Title'] : NULL);

        $banner_array['Image'] = getStringClean((isset($banner_array['Image'])) ? $banner_array['Image'] : NULL);

        $banner_array['Status']        =   (isset($banner_array['Status']) && $banner_array['Status'] == 'on') ? ACTIVE : INACTIVE;
        $banner_array['created_by'] = $this->session->userdata['UserID'];
        $banner_array['usertype'] = 'Admin Web';
        $banner_array['IPAddress'] = GetIP();


        $sql = "call usp_A_AddGallery('" .
            $banner_array['Title'] . "','" .
            $banner_array['UserID'] . "','" .
            $banner_array['created_by'] . "','" .
            $banner_array['Status'] . "','" .
            $banner_array['usertype'] . "','" .
            $banner_array['IPAddress'] . "','" .
            $banner_array['Image'] . "')";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function update($banner_array)
    {
        //pr($banner_array);exit;
        $banner_array['Title']   =   getStringClean((isset($banner_array['Title'])) ? $banner_array['Title'] : NULL);

        $banner_array['IsCreative'] = (isset($banner_array['IsCreative']) && $banner_array['IsCreative'] == 'on') ? ACTIVE : INACTIVE;
        $banner_array['Image'] = getStringClean((isset($banner_array['Image'])) ? $banner_array['Image'] : NULL);

        $banner_array['Status']        =   (isset($banner_array['Status']) && $banner_array['Status'] == 'on') ? ACTIVE : INACTIVE;
        $banner_array['ID']   =   (isset($banner_array['ID'])) ? $banner_array['ID'] : NULL;
        $banner_array['modified_by'] = $this->session->userdata['UserID'];
        $banner_array['usertype'] = 'Admin Web';
        $banner_array['IPAddress'] = GetIP();


        $sql = "call usp_A_EditGallery('" .
            $banner_array['Title'] . "','" . $banner_array['UserID'] . "','" . $banner_array['modified_by'] . "','" . $banner_array['Status'] . "','" . $banner_array['ID'] . "','" . $banner_array['usertype'] . "','" . $banner_array['IPAddress'] . "','" . $banner_array['Image'] . "')";

        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }
    public function changeStatus($banner_array)
    {
        $banner_array['id']            =   (isset($banner_array['id'])) ? $banner_array['id'] : 0;
        $banner_array['status']        =   (isset($banner_array['status'])) ? $banner_array['status'] : 0;

        $banner_array['table_name'] = "ss_artistgallery";
        $banner_array['field_name'] = "ArtistGalleryID";
        $banner_array['modified_by'] = $this->session->userdata['UserID'];
        return $this->db->query("call usp_A_ChangeStatus('" . $banner_array['table_name'] . "','" . $banner_array['field_name'] . "','" . $banner_array['id'] . "','" . $banner_array['status'] . "','" . $banner_array['modified_by'] . "');");
    }

    public function getBannerByID($ID = null)
    {
        $query = $this->db->query("call usp_A_GetGalleryByID('$ID')");
        $query->next_result();
        return $query->row();
    }
}
