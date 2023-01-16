<?php
class Categories_model extends CI_Model
{
    public $title;
    public $parent_id;
    public $status;

    protected $table = 'categories';

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

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

    public function join()
    {
        $this->db->select('c.title,c.id,p.title as parent_title,c.status');
        $this->db->from('categories c');
        $this->db->join('categories p ', 'c.parent_id=p.id', 'Left');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
