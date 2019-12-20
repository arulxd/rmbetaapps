 <?php
 
class Model_pasien extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    

    function get_tbl_pasien($no_rm)
    {
        $this->db->where('no_rm',$no_rm);
        return $this->db->get('dbo.tbl_pasien')->row();
    }

    function get_all_tbl_pasien()
    {
        $this->db->order_by('no_rm', 'desc');
        return $this->db->get('dbo.tbl_pasien')->result_array();
    }
        

    function add_tbl_pasien($data)
    {
        $this->db->insert('dbo.tbl_pasien',$data);
        return $this->db->insert_id();
    }
    



    public function edit($no_rm)
    {

        $query = $this->db->where("no_rm", $no_rm)
                ->get("tbl_pasien");

        if($query){
            return $query->result_array();
        }else{
            return false;
        }

    }
}
