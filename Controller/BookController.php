<?php

include_once "Model/BookModel.php";
include_once "Model/CategoryModel.php";

class BookController
{
    private BookModel $bookModel;
    private CategoryModel $categoryBookModel;

    public function __construct()
    {
        $this->bookModel= new BookModel();
        $this->categoryBookModel = new CategoryModel();
    }

    public function index()
    {
        $books = $this->bookModel->getAll();
//        var_dump($books);
//        die();
        include_once "View/book/list.php";
    }
    public function showFormCreate()
    {
        // lay het types
        $categories = $this->categoryBookModel->getAll();
        include_once "View/book/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" =>$data['name'],
            "category_id" => $data['category_id'],
            "description" => $data['description'],
            "author" => $data['author'],
            "publishingCompany" => $data['publishingCompany'],
            "quantity" => $data['quantity']
        ];
        $this->bookModel->create($data2);
//        var_dump($data2);
//        die();
        header("location:index.php");
    }

    public function deleteBook($id)
    {
        if ($this->bookModel->getById($id) !== null) {
            $this->bookModel->delete($id);
            header("location:index.php");
        }
    }

    public function showDetail($id)
    {
        $book = $this->bookModel->getById($id);
        include_once "View/book/detail.php";
    }

    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $book = $this->bookModel->getById($id);
        include_once "View/book/update.php";
    }

    public function editBook($id,$request)
    {
        $book = $this->bookModel->getById($id);
        $data = [
//            "category_id" => $request["category_id"],
            "description" => $request["description"],
            "quantity" => $request["quantity"],
            "id" => $id
        ];
        $this->bookModel->edit($data);
        header("location:index.php");
    }

}