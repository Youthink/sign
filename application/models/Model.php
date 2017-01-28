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
      
      $num = $this->input->post('num');
      $sql = "select * from sign where num =? and date = ?";
      $query = $this->db->query($sql,array($num,date("Y-m-d")))
                    ->result_array();
      if(!$query){

        $data = array(

            'username' => $this->input->post('username'),
            'num' => $num,
        );
        $this->db->set('date',date("Y-m-d"));
        $this->db->set('time',date("H:i:s"));
        return $this->db->insert('sign', $data);

      }

    }

    public function get_rank($rankid)
    {
        if($rankid=='')
        {
              /*$this->db->order_by('date')
                   ->where('date',date('Y-m-d'));
              $query = $this->db->get('sign');*/
              $date = $this->input->post('date');
              if($date ==''){
                $date = date("Y-m-d");
              }
              $sql = "select *,count(distinct num) from sign where date = ? group by num order by time";

              $query = $this->db->query($sql, array($date));
              return $query->result_array();
        }else{
        
              $query = $this->db->get_where('sign', array('rankid' => $rankid));
              return $query->row_array();
        }
    }


}