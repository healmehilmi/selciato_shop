<?php

class UsersController {

    public function show ($id) {
        $id = (int)$id;

        $users = Users::find($id);

        $params = [
            'users' => $users
        ];
        
        View::load('users.detail', $params);
    }

    public function list () {
        $controller = new HomeController();
        $controller->index();
        
    }
 
    public function userList () {
        $users = User::all();

        $params = [
            'users' => $user
        ];
 
        View::load('admin/users.list', $params);
        

    }

    public function editForm ($id) {
        $id = (int)$id;

        $users = Users::find($id);

        $params = [
            'users' => $users
        ];

        View::load('admin/users.edit', $params);
    }

    

    
    
}