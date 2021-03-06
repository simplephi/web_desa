<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_topografi extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_topografi', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_topografi");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_topografi");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_topografi() {
        $query  = $this->db->query("select * from table_topografi");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_topografi', $data, array('topografi_id'=>$data['topografi_id']));
    }

    public function delete($id) {
        $this->db->delete('table_topografi', array('topografi_id' => $id));
    }

}
?>
