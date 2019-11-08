<?php

class Contato extends CI_Controller {

    public function cadContato() {
        $this->load->model('Contato_model', 'CM');
        if ($_POST) {
            $this->form_validation->set_rules('nome', 'nome', 'required');
            if ($this->form_validation->run()) {
                $dados = array(
                    'nome' => $this->input->post('nome'),
                    'telefone' => $this->input->post('telefone'),
                    'email' => $this->input->post('email'),
                    'msg' => $this->input->post('msg'),
                    'datahora' => date('Y-m-d H:i:s'),
                );
                $id = $this->CM->cadContato($dados);
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
