<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('documentos_model', 'modeldocumentos');
		 $this->load->helper(array('form', 'url'));
	}
	
	public function excluir($id){
		if ($this->modeldocumentos->excluir($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}
	public function excluirpde($id){
		if ($this->modeldocumentos->excluirpde($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function cadastro_documento(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_documento');
		$this->load->view('Template/Html-footer');
	}
	public function cadastro_pde(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_pde');
		$this->load->view('Template/Html-footer');
	}

	public function pagina_edicao($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_documento', $dados);
		$this->load->view('Template/Html-footer');
	}
	public function pagina_edicaopde($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_pde', $dados);
		$this->load->view('Template/Html-footer');
	}

	public function cadastrar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo', 'Título do documento', 'required');		

		$titulo= $this->input->post('txt-titulo');
		$resumo= $this->input->post('txt-resumo');
		$conteudo= $this->input->post('txt-conteudo');
		$categoria= filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_STRING);
		$arquivo= $_FILES['arquivo'];
		
		$original_name = $_FILES['arquivo']['name'];
        $new_name = ''.strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
        $path = 'assets/frontend/documentos/eventos/'.'/'.$new_name;

		$configuracao = array(
         'upload_path'   => './documentos/',
         'allowed_types' => 'pdf|zip|rar|doc|docx|odc|txt|csv',
         'file_name'     => $documento,
         //'max_size'      => 100;
         //'max_width'     => 1024;
         //'max_height'    => 768;
        );   
		
        $this->load->library('upload');
        $this->upload->initialize($configuracao);

		if($this->form_validation->run() == FALSE){
			$this->cadastro_documento();
		}else{
			
			if ($this->upload->do_upload('arquivo')){
				if ($this->modeldocumentos->adicionar($titulo, $resumo, $conteudo, $categoria, $new_name)) 
         			echo 'Arquivo salvo com sucesso.';
    			else
         			echo $this->upload->display_errors();
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}
	public function cadastrarpde(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome-doc', 'Nome do documento', 'required');		

		$titulo= $this->input->post('txt-nome-doc');
		$regiao= filter_input(INPUT_POST,"regiao",FILTER_SANITIZE_STRING);
		$arquivo= $_FILES['arquivo'];
		
		$original_name = $_FILES['arquivo']['name'];
        $new_name = ''.strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
        $path = 'assets/frontend/documentos/eventos/'.'/'.$new_name;
		$configuracao = array(
         'upload_path'   => './documentos/',
         'allowed_types' => 'pdf|zip|rar|doc|docx|odc|txt|csv',
         'file_name'     => $documento,
         //'max_size'      => 100;
         //'max_width'     => 1024;
         //'max_height'    => 768;
        );   
		
        $this->load->library('upload');
        $this->upload->initialize($configuracao);

		if($this->form_validation->run() == FALSE){
			$this->Cadastro_pde();
		}else{
			
			if ($this->upload->do_upload('arquivo')){
				if ($this->modeldocumentos->adicionarpde($titulo, $regiao, $new_name)) 
         			echo 'Arquivo salvo com sucesso.';
    			else
         			echo $this->upload->display_errors();
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('txt-titulo', 'Título do documento', 'required');
		$this->form_validation->set_rules('txt-resumo', 'Resumo do documento', 'required');
		$this->form_validation->set_rules('txt-conteudo', 'Conteúdo do documento', 'required');

		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
            $titulo= $this->input->post('txt-titulo');
			$resumo= $this->input->post('txt-resumo');
			$conteudo= $this->input->post('txt-conteudo');
            $categoria= filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_STRING);			           
					
			if ($this->modeldocumentos->atualizar($titulo, $resumo, $conteudo, $categoria, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
	public function atualizar_pde($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome-doc', 'Nome do documento', 'required');		
		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
          	$titulo= $this->input->post('txt-nome-doc');
			$regiao= filter_input(INPUT_POST,"regiao",FILTER_SANITIZE_STRING);
			$arquivo= $_FILES['arquivo'];		           
			$original_name = $_FILES['arquivo']['name'];
	        $new_name = ''.strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
	        $path = 'assets/frontend/documentos/eventos/'.'/'.$new_name;
			$configuracao = array(
	         'upload_path'   => './documentos/',
	         'allowed_types' => 'pdf|zip|rar|doc|docx|odc|txt|csv',
	         'file_name'     => $documento,
	         //'max_size'      => 100;
	         //'max_width'     => 1024;
	         //'max_height'    => 768;
	        );   
			
	        $this->load->library('upload');
	        $this->upload->initialize($configuracao);		
			if ($this->modeldocumentos->atualizarpde($titulo, $regiao, $new_name, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}