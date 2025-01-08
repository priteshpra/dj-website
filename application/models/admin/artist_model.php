<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artist_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function ListData($PageSize = 10, $CurrentPage = 1)
    {
        $FirstName = getStringClean(($this->input->post('FirstName') != '') ? $this->input->post('FirstName') : '');
        $Status = ($this->input->post('Status') != '') ? $this->input->post('Status') : -1;
        $sql = "call usp_A_GetArtist('$PageSize' , '$CurrentPage','$FirstName','$Status' )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->result();
    }

    function ListDataActive($PageSize = 10, $CurrentPage = 1)
    {
        $FirstName = getStringClean(($this->input->post('FirstName') != '') ? $this->input->post('FirstName') : '');
        $Status = ($this->input->post('Status') != '') ? $this->input->post('Status') : 1;
        $sql = "call usp_A_GetArtist('$PageSize' , '$CurrentPage','$FirstName','$Status' )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->result();
    }

    function Insert($array)
    {
        $array['FirstName'] = getStringClean((isset($array['FirstName'])) ? $array['FirstName'] : '');
        $array['Status'] = getStringClean((isset($array['Status']) && $array['Status'] == 'on') ? ACTIVE : INACTIVE);
        $array['IsOpenToTravel'] = getStringClean((isset($array['IsOpenToTravel']) && $array['IsOpenToTravel'] == 'on') ? ACTIVE : INACTIVE);
        $array['CreatedBy'] = $this->session->userdata['UserID'];
        $array['UserType'] = $this->session->userdata['UserType'] . ' Web';
        $array['IPAddress'] = GetIP();
        $sql = "call usp_A_AddArtist(
            '" . $array['FirstName'] . "', 
            '" . $array['LastName'] . "', 
            '" . $array['DisplayName'] . "', 
            '" . $array['EmailID'] . "', 
            '" . $array['Password'] . "', 
            '" . $array['MobileNo'] . "', 
            '" . $array['Address'] . "', 
            " . (isset($array['CountryID']) ? $array['CountryID'] : "0") . ", 
            " . (isset($array['StateID']) ? $array['StateID'] : "0") . ", 
            " . (isset($array['CityID']) ? $array['CityID'] : "0") . ", 
            " . (isset($array['Rating']) ? $array['Rating'] : "NULL") . ", 
            '" . $array['Experience'] . "', 
            '" . $array['Languages'] . "', 
            " . (isset($array['IsOpenToTravel']) ? $array['IsOpenToTravel'] : "0") . ", 
            '" . $array['Skills'] . "', 
            '" . $array['AboutArtist'] . "', 
            '" . $array['FilePath'] . "', 
            " . (isset($array['Status']) ? $array['Status'] : "0") . ", 
            '" . $array['CreatedBy'] . "', 
            '" . $array['UserType'] . "', 
            '" . $array['IPAddress'] . "',
             '" . $array['ArtistCategoryID'] . "'
            )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function Update($array)
    {
        $array['FirstName'] = getStringClean((isset($array['FirstName'])) ? $array['FirstName'] : '');
        $array['Status'] = (isset($array['Status']) && $array['Status'] == 'on') ? ACTIVE : INACTIVE;
        $array['IsOpenToTravel'] = getStringClean((isset($array['IsOpenToTravel']) && $array['IsOpenToTravel'] == 'on') ? ACTIVE : INACTIVE);
        $array['ModifiedBy'] = $this->session->userdata['UserID'];
        $array['UserType'] = $this->session->userdata['UserType'] . ' Web';
        $array['IPAddress'] = GetIP();


        $sql = "call usp_A_EditArtist(
            '" . $array['FirstName'] . "', 
            '" . $array['LastName'] . "', 
            '" . $array['DisplayName'] . "', 
            '" . $array['EmailID'] . "', 
            '" . $array['Password'] . "', 
            '" . $array['MobileNo'] . "', 
            '" . $array['Address'] . "', 
            " . (isset($array['CountryID']) ? $array['CountryID'] : "0") . ", 
            " . (isset($array['StateID']) ? $array['StateID'] : "0") . ", 
            " . (isset($array['CityID']) ? $array['CityID'] : "0") . ", 
            " . (isset($array['Rating']) ? $array['Rating'] : "0") . ", 
            '" . $array['Experience'] . "', 
            '" . $array['Languages'] . "', 
            " . (isset($array['IsOpenToTravel']) ? $array['IsOpenToTravel'] : "0") . ", 
            '" . $array['Skills'] . "', 
            '" . $array['AboutArtist'] . "', 
            '" . $array['FilePath'] . "', 
            " . (isset($array['Status']) ? $array['Status'] : "0") . ", 
            '" . $array['ModifiedBy'] . "', 
            '" . $array['ID'] . "', 
            '" . $array['UserType'] . "', 
            '" . $array['IPAddress'] . "',
            '" . $array['ArtistCategoryID'] . "'
            )";

        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function GetByID($ID = 0)
    {
        $sql = "call usp_A_GetArtistByID('$ID')";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function changeStatus($array)
    {
        $array['id']            =   (isset($array['id'])) ? $array['id'] : 0;
        $array['status']        =   (isset($array['status'])) ? $array['status'] : 0;

        $array['table_name'] = "sssm_user";
        $array['field_name'] = "UserID";
        $array['modified_by'] = $this->session->userdata['UserID'];
        return $this->db->query("call usp_A_ChangeStatus('" . $array['table_name'] . "','" . $array['field_name'] . "','" . $array['id'] . "','" . $array['status'] . "','" . $array['modified_by'] . "');");
    }
}
