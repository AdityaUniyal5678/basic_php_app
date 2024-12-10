<?php


require_once 'models/UserModel.php';
class UsersController extends AppController
{
    private $tableName = 'users';

    public function __construct()
    {

    }

    public function saveUser($conn, $data): bool
    {
        $objUserModel = new UserModel();
        $res = $objUserModel->insert($conn, $data);
        return $res;
    }
}