<?php
class Orders_model extends CI_Model
{
    public $user_id;
    public $payment_method;
    public $delivery_method;
    public $total_amount;
    public $payment_json;
    public $status_id;

    protected $table = 'orders';

    // public function insert($data)
    // {
    //     $this->db->insert($this->table, $data);
    //     return $this->db->insert_id();
    // }

    public function select_all()
    {
        // $this->db->where('status', 1);
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function selectDataById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);

        return $query->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    // public function delete($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete($this->table);
    // }
}
