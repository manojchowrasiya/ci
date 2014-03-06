<?php
Class Profile_model extends CI_Model
{
  function getMsg()
     {
     
      // $this->db->where('profileid', $id);
       $q = $this->db->get('messages');
       if($q->num_rows() > 0){
        foreach ($q->result() as $row)
        {
          $data[] = $row;

        }
        return $data;
      }
    } 

  

}
?>
