<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Skill_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function ListData($PageSize = 10, $CurrentPage = 1)
    {
        $SkillName = getStringClean(($this->input->post('SkillName') != '') ? $this->input->post('SkillName') : '');
        $Status = ($this->input->post('Status') != '') ? $this->input->post('Status') : -1;
        $sql = "call usp_GetSkill('$PageSize' , '$CurrentPage','$SkillName','$Status' )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->result();
    }

    function ListDataActive($PageSize = 10, $CurrentPage = 1)
    {
        $SkillName = getStringClean(($this->input->post('SkillName') != '') ? $this->input->post('SkillName') : '');
        $Status = ($this->input->post('Status') != '') ? $this->input->post('Status') : 1;
        $sql = "call usp_GetSkill('$PageSize' , '$CurrentPage','$SkillName','$Status' )";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->result();
    }

    function Insert($array)
    {
        $array['SkillName'] = getStringClean((isset($array['SkillName'])) ? $array['SkillName'] : '');
        $array['Status'] = getStringClean((isset($array['Status']) && $array['Status'] == 'on') ? ACTIVE : INACTIVE);
        $array['CreatedBy'] = $this->session->userdata['UserID'];
        $array['UserType'] = $this->session->userdata['UserType'] . ' Web';
        $array['IPAddress'] = GetIP();
        $sql = "call usp_AddSkill('" .
            $array['SkillName'] . "','" .
            $array['CreatedBy'] . "','" .
            $array['Status'] . "','" .
            $array['UserType'] . "','" .
            $array['IPAddress'] . "')";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function Update($array)
    {
        $array['SkillName'] = getStringClean((isset($array['SkillName'])) ? $array['SkillName'] : '');
        $array['Status'] = (isset($array['Status']) && $array['Status'] == 'on') ? ACTIVE : INACTIVE;
        $array['ModifiedBy'] = $this->session->userdata['UserID'];
        $array['UserType'] = $this->session->userdata['UserType'] . ' Web';
        $array['IPAddress'] = GetIP();
        $sql = "call usp_EditSkill('" .
            $array['SkillName'] . "','" .
            $array['ModifiedBy'] . "','" .
            $array['Status'] . "','" .
            $array['ID'] . "','" .
            $array['UserType'] . "','" .
            $array['IPAddress'] . "')";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function GetByID($ID = 0)
    {
        $sql = "call usp_GetSkillByID('$ID')";
        $query = $this->db->query($sql);
        $query->next_result();
        return $query->row();
    }

    public function changeStatus($array)
    {
        $array['id']            =   (isset($array['id'])) ? $array['id'] : 0;
        $array['status']        =   (isset($array['status'])) ? $array['status'] : 0;

        $array['table_name'] = "ss_skill";
        $array['field_name'] = "SkillID";
        $array['modified_by'] = $this->session->userdata['UserID'];
        return $this->db->query("call usp_A_ChangeStatus('" . $array['table_name'] . "','" . $array['field_name'] . "','" . $array['id'] . "','" . $array['status'] . "','" . $array['modified_by'] . "');");
    }
}
