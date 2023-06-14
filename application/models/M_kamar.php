<?php
class M_kamar extends CI_Model

{

	public function getAll()
	{
		return $this->db->get('t_kamar');
	}
}
