<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function cadastro() {
        $this->load->view('Cadastro');
    }

    public function validaLogin() {
        $this->load->model('Usuario_model', 'UM');
        if ($this->UM->logged() == false) {
            redirect($this->config->base_url() . 'usuario/login');
        }
    }

    public function login() {

    	$this->load->view('Login');
    }

    public function logar() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg_login', 'Usuário e Senha incorretos!');
        } else {
            $this->load->model('Usuario_model', 'UM');
            $query = $this->UM->get_one_login($this->input->post('email'), $this->input->post('senha'));
            if ($query) {
                $data = array(
                    'idUsuario' => $query->id,
                    'email' => $query->email,
                    'logged' => TRUE,
                );
                $this->session->set_userdata($data); //para usar $this->session->userdata('email');   
                redirect($this->config->base_url() . 'Home/servicos');
            } else {
                $this->session->set_flashdata('msg_login', 'Usuário e Senha incorretos!');
                redirect($this->config->base_url() . 'Home/sobre');
            }
        }
    }

    public function cadastrar() {
        $this->load->model('Usuario_model', 'UM');
        if ($_POST) {
            $this->form_validation->set_rules('nome', 'nome', 'required');
            if ($this->form_validation->run()) {
                $dados = array(
                    'nome' => $this->input->post('nome'),
                    'telefone' => $this->input->post('telefone'),
                    'email' => $this->input->post('email'),
                    'endereco' => $this->input->post('endereco'),
                    'senha' => sha1($this->input->post('senha')),
                    'ong' => ($this->input->post('ong') == 1) ? 1 : 0
                );
                $id = $this->UM->cadUsuario($dados);
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
