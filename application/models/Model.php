<?php  
class Model extends CI_Model
{
    public function __construct()
    {
        $this ->load->database();
        $this->load->helper('url');
        $this->load->helper('date');
    }

      public function M_addsign()
    {

        $data = array(

            'username' => $this->input->post('username'),
            'num' => $this->input->post('num'),
        );
        $this->db->set('date',date('Y-m-d'));
        $this->db->set('time',date('H:s:i'));
        return $this->db->insert('sign', $data);

    }

    public function get_rank($rankid)
    {
        if($rankid=='')
        {
              /*$this->db->order_by('date')
                   ->where('date',date('Y-m-d'));
              $query = $this->db->get('sign');*/
              $sql = "select *,count(distinct username) from sign where date = ? group by username order by time";
              $query = $this->db->query($sql,array(date('Y-m-d')));
              return $query->result_array();
        }else{
        
              $query = $this->db->get_where('sign', array('rankid' => $rankid));
              return $query->row_array();
        }
    }


}