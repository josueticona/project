<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public function getClientes(){
		$this->db->select("c.*,tc.nombre as tipocliente, td.nombre as tipodocumento");
		$this->db->from("clientes c");
		$this->db->join("tipo_cliente tc", "c.tipo_cliente_id= tc.idtipo_cliente");
		$this->db->join("tipo_documento td","c.tipo_documento_id = td.idtipo_documento");
		$this->db->where("c.estado","1");
		$resultados =$this->db->get();
		return $resultados->result();
	}
		public function getCliente($idclientes){
		$this->db->where("idclientes",$idclientes);
		$resultado = $this->db->get("clientes");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("clientes",$data);
	}
	public function update($idclientes,$data)
	{
		$this->db->where("idclientes",$idclientes);
		return $this->db->update("clientes",$data);
	}	
	public function getTipoClientes(){
		$resultados = $this->db->get("tipo_cliente");
		return $resultados->result();
	}

	public function getTipoDocumentos(){
		$resultados = $this->db->get("tipo_documento");
		return $resultados->result();
	}
}