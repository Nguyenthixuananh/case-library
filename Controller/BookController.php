<?php

include_once "Model/BookModel.php";
include_once "Model/CategoryModel.php";
include_once "Model/BorrowModel.php";


class BookController
{
    private BookModel $bookModel;
    private CategoryModel $categoryBookModel;
    private BorrowModel $borrowModel;

    public function __construct()
    {
        $this->bookModel= new BookModel();
        $this->categoryBookModel = new CategoryModel();
        $this->borrowModel = new BorrowModel();

    }

    public function index()
    {
        $books = $this->bookModel->getAll();
//        var_dump($books);
//        die();
        include_once "View/book/list.php";
    }

    public function homeIndex()
    {
        $books = $this->bookModel->getAll();
        include_once "View/home/list.php";
    }

//    public function showDetail($id)
//    {
//        $book = $this->bookModel->getById($id);
//        include_once "View/home/detail.php";
//    }

    public function showFormCreate()
    {
        // lay het types
        $categories = $this->categoryBookModel->getAll();
        include_once "View/book/create.php";
    }

    public function create($data)
    {
        $filepath = "";

        if (isset($_FILES["file"])) {
            $filepath = "uploads/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<img src=" . $filepath . " height=200 width=300 />";
            } else {
                echo "Error !!";
            }
        }

        $data2 = [
            "name" =>$data['name'],
            "category_id" => $data['category_id'],
            "description" => $data['description'],
            "author" => $data['author'],
            "publishingCompany" => $data['publishingCompany'],
            "quantity" => $data['quantity'],
            "image" => $filepath
        ];
        $this->bookModel->create($data2);

        header("location:index.php");
    }

    public function deleteBook($id)
    {
        if ($this->bookModel->getById($id) !== null) {
            if($this->borrowModel->checkBookById($id)){
                echo "<script>alert('Không thể xóa sách này do đang có người mượn!!!');window.location.href='index.php?page=book-list';</script>";
            }else{
                $this->bookModel->delete($id);
                header("location:index.php");
            }

        }
    }


    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $book = $this->bookModel->getById($id);
        include_once "View/book/update.php";
    }

    public function editBook($id,$request)
    {
        $filepath = "";

        if (isset($_FILES["file"])) {
            $filepath = "uploads/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<img src=" . $filepath . " height=200 width=300 />";
            } else {
                echo "Error !!";
            }
        }
        $book = $this->bookModel->getById($id);
        $data = [
//            "category_id" => $request["category_id"],
            "description" => $request["description"],
            "quantity" => $request["quantity"],
            "image" => $filepath,
            "id" => $id
        ];
        $this->bookModel->edit($data);
        header("location:index.php");
    }

    public function search($key)
    {
        if($_SERVER['REQUEST_METHOD']=="GET") {
            $search = $this->bookModel->search($key);
            include "View/book/search.php";

        }
    }

}