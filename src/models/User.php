<?php

class User extends Model {

    protected static $tableName = 'clientes';
    protected static $columns = [
        'nome', 'sobrenome', 'senha', 'email', 'telefone', 'cep', 'endereco', 'numero',
        'bairro', 'cidade', 'uf','data_nasc', 'complemento', 'cpf'];

        private function validate(){
            $errors = [];

            if(!$this->nome) {
                $errors['nome'] = 'Nome é um campo abrigatório.';
            } else if(strlen($this->nome) < 3 ){
                $errors['nome'] = 'Tamanho minimo 3 caracteres';
            } else if (strlen($this->nome) > 15 ) {
                $errors['nome'] = 'Tamanho máximo 15 caracteres';
            }

            if(!$this->sobrenome) {
                $errors['sobrenome'] = 'Sobrenome é um campo abrigatório.';
            }  else if(strlen($this->sobrenome) < 3 ){
                $errors['sobrenome'] = 'Tamanho minimo 3 caracteres';
            } else if (strlen($this->sobrenome) > 15 ) {
                $errors['sobrenome'] = 'Tamanho máximo 30 caracteres';
            }

            if(!$this->data_nasc) {
                $errors['data_nasc'] = 'Data de nascimento é um campo abrigatório.';
            }

            if(!$this->cpf) {
                $errors['cpf'] = 'CPF é um campo abrigatório.';
            }

            if(!$this->telefone) {
                $errors['telefone'] = 'Telefone é um campo abrigatório.';
            }

            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'E-mail inválido'; 
            }else if(strlen($this->email) < 10 ){
                $errors['sobrenome'] = 'Tamanho minimo 10 caracteres';
            } else if (strlen($this->email) > 30 ) {
                $errors['sobrenome'] = 'Tamanho máximo 30 caracteres';
            }

            if(!$this->senha) {
                $errors['senha'] = 'Senha é um campo abrigatório.';
            }else if(strlen($this->senha) < 8 ){
                $errors['sobrenome'] = 'Tamanho minimo 8 caracteres';
            } else if (strlen($this->senha) > 30 ) {
                $errors['sobrenome'] = 'Tamanho máximo 30 caracteres';
            }

            if(!$this->senha2) {
                $errors['senha2'] = 'Confirmação de Senha é um campo abrigatório.';
            }else if(strlen($this->senha2) < 8 ){
                $errors['sobrenome'] = 'Tamanho minimo 8 caracteres';
            } else if (strlen($this->senha2) > 30 ) {
                $errors['sobrenome'] = 'Tamanho máximo 30 caracteres';
            }

            if($this->senha && $this->senha2 
            && $this->senha !== $this->senha2) {
            $errors['senha'] = 'As senhas não são iguais.';
            $errors['senha2'] = 'As senhas não são iguais.';
        }

        if(!$this->cep) {
            $errors['cep'] = 'CEP é um campo abrigatório.';
        }

        if(!$this->endereco) {
            $errors['endereco'] = 'Endereco é um campo abrigatório.';
        }

        if(!$this->numero) {
            $errors['numero'] = 'Número é um campo abrigatório.';
        }

        if(!$this->bairro) {
            $errors['bairro'] = 'Bairro é um campo abrigatório.';
        }

        if(!$this->cidade) {
            $errors['cidade'] = 'Cidade é um campo abrigatório.';
        }

        if(!$this->uf) {
            $errors['uf'] = 'UF é um campo abrigatório.';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
        }

        public function insert() {
            $this->validate();
            return parent::insert();
        } 
        
        public function update() {
            return parent::update();
        } 

}        