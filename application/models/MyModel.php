<?php
class MyModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        //for connecting to database
        $this->load->database();
    }
    function save($tablenm,$data)
    {
       $n= $this->db->insert('entry' , $data);
       return $n;
    }
    public function getarraybyquery($query){
        $result=$this->db->query($query);
        return $result->result_array();
    }
    // data insert
   public function update($table, $data, $where)
    {
        $result = $this->db->where($where)->update($table, $data);
        return $result;
    }
    public function delete($table, $id){
        $this->db->where('id', $id);
        $n=$this->db->delete($table);
        return $n;
    }
    function get_record($table,$data,$order='')
    {
        $this->db->order_by($order);

        // $this->db->limit($limit);
        
        $query = $this->db->get_where($table,$data);
         if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        } else 
        {
            return array();
        }
       
     }

// public function login($username, $password){
//             $query = $this->db->get_where('entry', array('username'=>$username, 'password'=>$password));
//             return $query->row_array();
//         }

// public function isvalidate($username,$password)
// {
//     $q=$this->db->whare(['username'=>$username,'password'=>$password])
//     ->get('entry');
//     if($q->num_rows())
//     {
//       return true;  
//     }
//     else
//     {
//         return false;
//     }
// }
}