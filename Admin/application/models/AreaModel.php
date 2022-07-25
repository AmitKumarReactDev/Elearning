<?php 
class areaModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'area_name' => $this->input->post('areaname'),
			'city_id' => $this->input->post('cityname'),
			'area_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('area',$data);
	}
	
	public function NoOfData()
	{
		$result=$this->db->get('area');
		return $result;
	}
	public function getList()
	{
		$this->db->join('city','city.city_id=area.city_id','left');
		$result=$this->db->get('area');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('area_id',$id);
		$this->db->delete('area');
	}
	public function activedeactive($id)
	{
		$this->db->where('area_id',$id);
		$result=$this->db->get('area');
		return $result;	
	}
	public function detail($id)
	{
		$this->db->where('area_id',$id);
		$this->db->join('city','area.city_id=city.city_id','left');
		$result=$this->db->get('area');
		return $result->row_array();
	}
	public function activestatus($id)
	{
		$this->db->where('area_id',$id);
		$data = array(
			'area_status' =>'Deactive'
		);
		$this->db->update('area',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('area_id',$id);
		$data = array(
			'area_status' =>'Active'
		);
		$this->db->update('area',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('area_id',$id);
		$result=$this->db->get('area');
		return $result->row_array();	
	}
	public function update($id)
	{
	
		$this->db->where('area_id',$id);
		$data = array(
			'area_name' => $this->input->post('areaname'),
			'city_id' => $this->input->post('cityname'),
			'area_update_time'=>date('Y-m-d h:i:s') 
		);
		$this->db->update('area',$data);	
	}
}
?>