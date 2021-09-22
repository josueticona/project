<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model("Permisos_model");
		$this->load->model("Usuarios_model");
	}
	 public function index()
	 {
	 	$data = array(
			'permisos'=> $this->Permisos_model->getPermisos(),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/list",$data);
		$this->load->view("layouts/footer");

	 }
	 public function add()
	 {
	 	$data = array(
		'roles'=> $this->Usuarios_model->getRoles(), 
		'menus'=> $this->Permisos_model->getMenus(),); 
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/add",$data);
		$this->load->view("layouts/footer");
	 }

	 public function store()
	 {
	 	$menu = $this->input->post("menu");
	 	$rol = $this->input->post("rol");
	 	$insert = $this->input->post("insert");
	 	$read = $this->input->post("read");
	 	$update = $this->input->post("update");
	 	$delete = $this->input->post("delete");

	 	$data= array(
	 		"menu_id" => $menu,
	 		"ro_id" => $rol,
	 		"read"=> $read,
	 		"insert"=> $insert,
	 		"update"=> $update,
	 		"delete"=> $delete,
	 	);
	 	if($this->Permisos_model->save($data))
	 	{
	 		redirect(base_url()."administrador/permisos");
	 	}
	 	else
	 	{
	 		$this->session->set_flashdata("error","No se pudo guardar");
	 		redirect(base_url()."administrador/permisos/add");
	 	}
	 }

	 public function edit($idpermisos)
	 {
	 	$data = array(
		'roles'=> $this->Usuarios_model->getRoles(), 
		'menus'=> $this->Permisos_model->getMenus(),
		'permisos' =>$this->Permisos_model->getPermiso($idpermisos));

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/permisos/edit",$data);
		$this->load->view("layouts/footer");
	 }
	 
	 public function update()
	 {
	 	$idPermisos = $this->input->post("idPermisos");
	 	$menu = $this->input->post("menu");
	 	$rol = $this->input->post("rol");
	 	$insert = $this->input->post("insert");
	 	$read = $this->input->post("read");
	 	$update = $this->input->post("update");
	 	$delete = $this->input->post("delete");

	 	$data= array(
	 		"read"=> $read,
	 		"insert"=> $insert,
	 		"update"=> $update,
	 		"delete"=> $delete,
	 	);
	 	if($this->Permisos_model->update($idPermisos,$data))
	 	{
	 		redirect(base_url()."administrador/permisos");
	 	}
	 	else
	 	{
	 		$this->session->set_flashdata("error","No se pudo guardar");
	 		redirect(base_url()."administrador/permisos/edit/".$idPermisos);
	 	}
	}
	public function delete($idPermisos)
	{
		$this->Permisos_model->delete($idPermisos);
	}
}