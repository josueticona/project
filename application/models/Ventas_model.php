<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

  public function getVentas(){
    $this->db->select("v.*,c.nombre,tc.nombre as tipocomprobante");
    $this->db->from("ventas v");
    $this->db->join("clientes c","v.cliente_id = c.idclientes");
    $this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.idtipo_comprobante");
    $resultados = $this->db->get();
    if ($resultados->num_rows() > 0) {
      return $resultados->result();
    }else
    {
      return false;
    }
  }

  public function getVenta($idventas){
      $this->db->select("v.*,c.nombre,c.direccion,c.telefono,c.num_documento as documento, tc.nombre as tipocomprobante");
      $this->db->from("ventas v");
      $this->db->join("clientes c","v.cliente_id = c.idclientes");
      $this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.idtipo_comprobante");
      $this->db->where("v.idventas",$idventas);
      $resultado = $this->db->get();
      return $resultado->row();
  }

  public function getVentasbyDate($fechainicio,$fechafin){
    $this->db->select("v.*,c.nombre,tc.nombre as tipocomprobante");
    $this->db->from("ventas v");
    $this->db->join("clientes c","v.cliente_id = c.idclientes");
    $this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.idtipo_comprobante");
    $this->db->where("v.fecha >=",$fechainicio);
    $this->db->where("v.fecha <=",$fechafin);
    $resultados = $this->db->get();
    if ($resultados->num_rows() > 0) {
      return $resultados->result();
    }else
    {
      return false;
    }
  }

  public function getDetalle($idventas){
    $this->db->select("dt.*,p.codigo,p.nombre");
      $this->db->from("detalle_venta dt");
      $this->db->join("productos p","dt.producto_id = p.idclientes");
      $this->db->where("dt.venta_id",$idventas);
      $resultados=$this->db->get();
      return $resultados->result();
  }

  public function getComprobantes(){
    $resultados = $this->db->get("tipo_comprobante");
    return $resultados->result();
  }

  public function getComprobante($idcomprobante){
    $this->db->where("idcomprobante",$idcomprobante);
    $resultado = $this->db->get("tipo_comprobante");
    return $resultado->row();
  }

  public function getproductos($valor){
    $this->db->select("idproductos,codigo,nombre as label,precio,stock");
    $this->db->from("productos");
    $this->db->like("nombre",$valor);
    $resultados = $this->db->get();
    return $resultados->result_array();
  }

  public function save($data){
    return $this->db->insert("ventas",$data);
  }

  public function lastID(){
    return $this->db->insert_id();
  }

  public function updateComprobante($idcomprobante,$data){
    $this->db->where("idtipo_comprobante",$idcomprobante);
    $this->db->update("tipo_comprobante",$data);
  }

  public function save_detalle($data){
    $this->db->insert("detalle_venta",$data);
  }
}