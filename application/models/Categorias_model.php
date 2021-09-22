<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function getCategorias(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("categorias");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("categorias",$data);
	}
	public function getCategoria($idcategorias){
		$this->db->where("idcategorias",$idcategorias);
		$resultado = $this->db->get("categorias");
		return $resultado->row();
	}
	public function update($idcategorias,$data)
	{
		$this->db->where("idcategorias",$idcategorias);
		return $this->db->update("categorias",$data);
	}
}