<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		$data = array(
		'usuarios'=> $this->Usuarios_model->getUsuarios(),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){

		$data = array(
			'roles'=> $this->Usuarios_model->getRoles(),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombres =$this->input->post("nombres");
		$apellidos =$this->input->post("apellidos");
		$email =$this->input->post("email");
		$username =$this->input->post("username");
		$password =$this->input->post("password");
		$rol =$this->input->post("rol");

		$data = array(
			"nombres"=>$nombres,
			"apellidos"=>$apellidos,
			"email"=>$email,
			"username"=>$username,
			"password"=>sha1 ($password),
			"rol_id"=>$rol,
			"estado"=>"1",
		);
		if ($this->Usuarios_model->save($data))
		{
			redirect(base_url()."administrador/usuarios/add");
		} 
		else
		{
			$this->session->set_flashdata("error","No se pudo guardar");
			redirect(base_url()."administrador/usuarios/add");
			}
		}

		public function edit($idusuarios)
		{
		$data = array(
		'roles'=> $this->Usuarios_model->getRoles(),
		'usuario' =>$this->Usuarios_model->getUsuario($idusuarios)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
		}

		public function update(){
		$idusuario = $this->input->post("idusuario");
		$nombres =$this->input->post("nombres");
		$apellidos =$this->input->post("apellidos");
		$email =$this->input->post("email");
		$username =$this->input->post("username");
		$rol =$this->input->post("rol");

		$data = array(
			"nombres"=>$nombres,
			"apellidos"=>$apellidos,
			"email"=>$email,
			"username"=>$username,
			"rol_id"=>$rol,
		);

		if ($this->Usuarios_model->update($idusuarios,$data))
		{
			redirect(base_url()."administrador/usuarios");
		}
		else
		{
			$this->session->set_flashdata("error","No se pudo guardar");
			redirect(base_url()."administrador/usuarios/edit".$idusuarios);
			}
		}

		public function delete($idusuarios)
		{
		$data=array(
			'estado'=> "0"
		);
		$this->Usuarios_model->update($idusuarios,$data);
		echo "administrador/usuarios/delete";
		}
	}
		/*public function view()
		{
			$idusuarios=$this->input->post("idusuario");
			$data= arrray(
				"usuario" => $this->Usuarios_model->getUsuario($idusuario)
			);
			$this->load->view("admin/usuarios/view",$data);
		}
	}*/