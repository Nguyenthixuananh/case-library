<?php

include_once "Model/UserModel.php";
include_once "Model/User.php";

class AuthController
{
    protected $userModel;

//    protected $user;

    public function __construct()
    {
        $this->userModel = new UserModel();
//        $this->user = new User();
    }

    public function showFormLogin()
    {
        include_once "View/auth/login.php";
    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];
        $role = $request["role"];
        if ($this->userModel->checkLogin($email, $password, $role)) {
            $user = $this->userModel->getByEmail($email);
            $_SESSION["username"] = $user["name"];
            if($role == "Admin"){
                header("location:index.php?page=book-list");
            } else {
                header("location:index.php?page=home-list");
            }
//            header("location:index.php");
        } else {
//            var_dump("Tài khoản không đúng");
            echo "Tài khoản không đúng";
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login");
    }

    public function checkAuth()
    {
        if (isset($_SESSION["username"])) {
            header("location:index.php?page=login");
        }
    }

    public function showFormCreate()
    {
        // lay het types
        $users = $this->userModel->getAll();
        include_once "View/auth/register.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $data['name'],
            "phone" => $data['phone'],
            "address" => $data['address'],
            "email" => $data['email'],
            "password" => $data['password'],
            "role" => $data['role']

        ];
//        $this->checkRegister();
        $this->userModel->create($data2);
        header("location:index.php?page=login");
    }


    public function index()
    {
        $users = $this->userModel->getAll();
        include_once "View/auth/list.php";
    }
    public function deleteUser($id)
    {
        if ($this->userModel->getById($id) !== null) {
            $this->userModel->delete($id);
            header("location:index.php?page=user-list");
        }
    }

    public function showDetail($id)
    {
        $user = $this->userModel->getById($id);
        include_once "View/auth/detail.php";
    }
    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $user = $this->userModel->getById($id);
        include_once "View/auth/update.php";
    }

    public function editUser($id,$request)
    {
        $user = $this->userModel->getById($id);
        $data = [
            "name" => $request['name'],
            "phone" => $request['phone'],
            "address" => $request['address'],
            "email" => $request['email'],
            "password" => $request['password'],
            "image" => $request['image'],
            "role" => $request['role'],
            "id" => $id
        ];
        $this->userModel->edit($data);
        header("location:index.php?page=user-list");
    }

    public function showProfile()
    {
        include_once "View/home/profile.php";
    }

}