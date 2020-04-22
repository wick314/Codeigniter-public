<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model 
{
    public function all_slider()
    {
        $query = $this->db->query("SELECT * FROM tbl_slider ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_service()
    {
        $query = $this->db->query("SELECT * FROM tbl_service ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_feature()
    {
        $query = $this->db->query("SELECT * FROM tbl_feature ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_why_choose()
    {
        $query = $this->db->query("SELECT * FROM tbl_why_choose ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_team_member()
    {
        $query = $this->db->query("SELECT * FROM tbl_team_member ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_testimonial()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_client()
    {
        $query = $this->db->query("SELECT * FROM tbl_client ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_pricing_table()
    {
        $query = $this->db->query("SELECT * FROM tbl_pricing_table ORDER BY id ASC");
        return $query->result_array();
    }
    public function all_faq_home()
    {
        $query = $this->db->query("SELECT * FROM tbl_faq WHERE show_on_home=?", array('Yes'));
        return $query->result_array();
    }
    // babykiller add 
    public function get_all() // get all tin tuc
    {
        $query = $this->db->limit('10')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_news() // get tin tuc
    {
        $query = $this->db->where('category_id','9')
                ->limit('10')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    } 
    public function get_fist_news() // get tin dau tien
    {
        $query = $this->db->limit('1')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_six_news() // get 6 tin tiep theo
    {
        $query = $this->db->limit(6,1)// lấy 6 bài viết bắt đầu từ sau bài thứ 1
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_fist_tt() // get tin dau tien
    {
        $query = $this->db->where('category_id','9')
                ->limit('1')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_six_tt() // get 6 tin tiep theo
    {
        $query = $this->db->where('category_id','9')
                ->limit(6,1)
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_fist_event() // get tin dau tien
    {
        $query = $this->db->limit('1')
                ->order_by('event_id','DESC')
                ->get('tbl_event');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_six_event() // get 6 tin tiep theo
    {
        $query = $this->db->limit(6,1)
                ->order_by('event_id','DESC')
                ->get('tbl_event');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_fist_tut() // get tin dau tien
    {
        $query = $this->db->where('category_id','2')
                ->limit('1')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_six_tut() // get 6 tin tiep theo
    {
        $query = $this->db->where('category_id','2')
                ->limit(6,1)
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_fist_cd() // get tin dau tien
    {
        $query = $this->db->where('category_id','8')
                ->limit('1')
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }
    public function get_six_cd() // get 6 tin tiep theo
    {
        $query = $this->db->where('category_id','8')
                ->limit(6,1)
                ->order_by('news_id','DESC')
                ->get('tbl_news');
        if($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result();
    }

}