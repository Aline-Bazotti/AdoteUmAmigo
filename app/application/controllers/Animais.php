<?php

class Animais extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Animal_model', 'AM');
    }

    public function gatos() {
        $this->load->view('Gatos');
    }

    public function cachorros() {
        $this->load->view('Cachorros');
    }

    public function cadastrar(){
    	$data['especies'] = $this->AM->getEspecies();
    	$this->load->view('CadAnimal', $data);
    }

    public function get_raca_by_especie() {
        $racas = $this->AM->getRacasByEspecie($this->input->post('idEspecie'));
        echo json_encode($racas);
    }

    public function CadAnimal() {
        if ($_POST) {
            $this->form_validation->set_rules('nome', 'nome', 'required');
            if ($this->form_validation->run()) {
            	$config['upload_path'] = 'assets/images/animais/';
	            $config['allowed_types'] = 'png|jpg|jpeg';
	            $config['max_size'] = '200000000';
	            $config['max_width'] = '3000';
	            $config['max_height'] = '3000';
	            $config['overwrite'] = true;

	            $this->upload->initialize($config);
	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload()) {
	                $dataImage = $this->upload->display_errors();
	            } else {
	                $dataImage = $this->upload->data();
	            }

                $dados = array(
                    'nome' => $this->input->post('nome'),
                    'sexo' => $this->input->post('sexo'),
                    'idRaca' => $this->input->post('raca'),
                    'descricao' => $this->input->post('descricao'),
                    'historico' => $this->input->post('historico'),
                    'castrado' => ($this->input->post('castrado') == 1) ? 1 : 0,
                    'deficiencia' => ($this->input->post('deficiencia') == 1) ? 1 : 0,
                    'datahora' => date('Y-m-d H:i:s'),
                );

                if ((is_array($dataImage)) && (array_key_exists("file_name", $dataImage)) && ($dataImage['file_name']) && ($dataImage['file_name'] <> '<')) {
                	$data['foto'] = 'assets/images/animais/' . $dataImage['file_name'];
            	}

                $id = $this->AM->cadAnimal($dados);
                if ($id) {
                    echo json_encode(array('url' => 'Cliente', 'error' => false, 'msg' => 'Sucesso ao realizar o cadastro.'));
                    return;
                } else {
                    echo json_encode(array('error' => true, 'msg' => 'Erro ao realizar o cadastro. Entre em contato com o desenvolvedor.'));
                    return;
                }
            } else {
                echo json_encode(array('error' => true, 'msg' => 'Verifique se todos os campos foram preenchidos.'));
                return;
            }
        }
    }
}
