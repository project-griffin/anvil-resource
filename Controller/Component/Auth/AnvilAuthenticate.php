<?php

App::uses('BaseAuthenticate', 'Controller/Component/Auth');
App::uses('User', 'Model');

class AnvilAuthenticate extends BaseAuthenticate {
    public function authenticate(CakeRequest $request, CakeResponse $response) {
        $userModel = new User();
        return $userModel->findByUsername($request->data['User']['username']);
    }
}

