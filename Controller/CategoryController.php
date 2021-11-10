<?php

include_once "Model/CategoryModel.php";
class CategoryController
{
    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $categories = $this->categoryModel->getAll();
        include_once "View/category/list.php";
    }


    public function showFormCreate()
    {
        // lay het types
        $categories = $this->categoryModel->getAll();
        include_once "View/category/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $data['name']
        ];
        $this->categoryModel->create($data2);
        header("location:index.php?page=category-list");
    }

    public function deleteCategory($id)
    {
        if ($this->categoryModel->getById($id) !== null) {
            $this->categoryModel->delete($id);
            header("location:index.php?page=category-list");
        }
    }

    public function showDetail($id)
    {
        $book = $this->categoryModel->getById($id);
        include_once "View/category/detail.php";
    }

    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $category = $this->categoryModel->getById($id);
        include_once "View/category/update.php";
    }

    public function editCategory($id,$request)
    {
        $category = $this->categoryModel->getById($id);
        $data = [
            "name" => $request['name'],
            "id" => $id
        ];
        $this->categoryModel->edit($data);
        header("location:index.php?page=category-list");
    }


}