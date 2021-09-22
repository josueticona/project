<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos(){
		$this->db->select("p.*,c.nombre as categoria");
		$this->db->from("productos p");
		$this->db->join("categorias c","p.categoria_id = c.idcategorias");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getProducto($idproductos){
		$this->db->where("idproductos",$idproductos);
		$resultado = $this->db->get("productos");
		return $resultado->row();
	}
	
	public function save($data){
		return $this->db->insert("productos",$data);
	}

	public function update($idproductos,$data){
		$this->db->where("idproductos",$idproductos);
		return $this->db->update("productos",$data);
	}
}