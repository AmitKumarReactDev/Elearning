<?php 

class CityModel extends CI_Model
{
	public function add()
	{
		$data = array(
			'city_name' => $this->input->post('cityname'),
			'state_id' => $this->input->post('statename'),
			'city_entry_time'=>date('Y-m-d h:i:s') 

		);
		$this->db->insert('city',$data);
	}
	public function NoOfData()
	{
		$result=$this->db->get('city');
		return $result;
	}
	public function detail($id)
	{
		$this->db->where('city.city_id',$id);
		$this->db->join('state','city.state_id=state.state_id','left');
		$result=$this->db->get('city');
		return $result->row_array();
	}
	public function getList()
	{
		$this->db->join('state','state.state_id=city.state_id','left');
		$result=$this->db->get('city');
		return $result->result_array();
	}
	public function delete($id)
	{
		$this->db->where('city_id',$id);
		$this->db->delete('city');
	}
	public function activedeactive($id)
	{
		$this->db->where('city_id',$id);
		$result=$this->db->get('city');
		return $result;	
	}
	public function activestatus($id)
	{
		$this->db->where('city_id',$id);
		$data = array(
			'city_status' =>'Deactive'
		);
		$this->db->update('city',$data);	
	}
	public function deactivestatus($id)
	{
		$this->db->where('city_id',$id);
		$data = array(
			'city_status' =>'Active'
		);
		$this->db->update('city',$data);	
	}
	 public function edit($id)
	{
		$this->db->where('city_id',$id);
		$result=$this->db->get('city');
		return $result->row_array();	
	}
	public function update($id)
	{
		$this->db->where('city_id',$id);
		$data = array(
			'city_name' => $this->input->post('cityname'),
			'state_id' => $this->input->post('statename'),
			'city_update_time'=>date('Y-m-d h:i:s') 
		);
		$this->db->update('city',$data);	
	}
	public function getallcity($id)
	{
		$this->db->where('state_id',$id);
		$result = $this->db->get('city');
		return $result->result_array();
	}
}
?>