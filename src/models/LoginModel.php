<?php

class LoginModel extends Model {

    public function validade(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'Email é um campo obrigatório.';
        }

        if(!$this->senha){
            $errors['senha'] = 'Informe a senha.';
        }

        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }

     public function checkLogin() {
        $this->validade();
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if($this->senha == $user->senha) {
                return $user;
            }
        }
        throw new AppException('Usuário/Senha inválidos');
    }
}        