<?php

include_once "Model/BorrowModel.php";

class BorrowController
{
    private $borrowModel;
    private $bookModel;

    public function __construct()
    {
        $this->borrowModel = new BorrowModel();
        $this->bookModel = new BookModel();
    }

    public function indexAdmin()
    {
        $borrowes = $this->borrowModel->getAll();
        include_once "View/borrow/list.php";
    }

    public function indexUser()
    {
        $borrowes = $this->borrowModel->getAll();
        include_once "View/home/profile.php";
    }


    public function deleteBorrow($id)
    {
        if ($this->borrowModel->getById($id) !== null) {
            $this->borrowModel->delete($id);
            header("location:index.php?page=borrow-list");
        }
    }

    public function showDetail($id)
    {
        $borrow = $this->borrowModel->getById($id);
        $book = $this->bookModel->getById($id);

        include_once "View/home/detail.php";
    }


    public function showFormCreate()
    {
        // lay het types
        $borrowes = $this->borrowModel->getAll();
        include_once "View/borrow/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "book_id" => $data['book_id'],
            "dateStart" => $data['dateStart'],
            "datFinish" => $data['datFinish'],
        ];

        $this->borrowModel->create($data2);

        header("location:index.php?page=home-list");
    }
}

//    public function create($data)
//    {
//        $data2 = [
//            "name" => $data['name']
//        ];
//        $this->categoryModel->create($data2);
//        header("location:index.php?page=category-list");
//    }
//
