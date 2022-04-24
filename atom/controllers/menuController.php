<?php
class menuController {

    private $kitchenTable;
    private $menuTable;
    private $commentTable;

    public function __construct($menuTable, $kitchenTable, $commentTable) {
        $this->kitchenTable = $kitchenTable;
        $this->menuTable = $menuTable;
        $this->commentTable = $commentTable;
    }

    public function mains() {

        $kitchen = $this->kitchenTable->find('id', $_GET['id']);
        $dishes = $this->menuTable->find('categoryId', $_GET['id']);
        // $comment = $this->commentTable->find('displayed', 1);
        $comment = $this->commentTable->findOrderBy('displayed', 1, 'stars','DESC');



        return [
            'template' => 'recipes.html.php',
            'option' => $kitchen[0]['name'],
            'title' => 'AtomCarSales website ',
            'variables' => ['kitchen' => $dishes, 'comments' => $comment]
        ];
    }



    public function amenu() {


        $kitchen = $this->menuTable->findAll();

        return [
            'template' => 'formdish.html.php',
            'option' => 'Edit Vehicle',
            'title' => 'AtomCarSales website Admin',
            'variables' => ['kitchen' => $kitchen]
        ];
    }


    public function adeletedish(){
        $this->menuTable->delete($_POST['id']);
        header('Location: /dishes/amenu');
    }

    public function adedit() {
        if (isset($_POST['category'])) {

            $this->kitchenTable->save($_POST['category']);

            header('location: /kitchen/acategories');
        }
        else {
            if  (isset($_GET['id'])) {
                $result = $this->kitchenTable->find('id', $_GET['id']);
                $kitchen = $result[0];
            }
            else  {
                $kitchen = false;
            }

            return [
                'template' => 'editform.html.php',
                'variables' => ['category' => $kitchen],
                'title' => 'Edit Category'
            ];
        }
    }

// public function amenuedit()
// {
//   $categories = $this->kitchenTable->findAll();
//   $dishes = $this->menuTable->find('id', $_GET['id']);


//   return [
//     'template' => 'editdishform.html.php', 
//     'option' => 'Home',
//     'title' => 'kitchen website Admin', 
//     'variables' => [
//       'dishes' => $dishes[0],
//       'categories'=>$categories,
//       ]
//   ];
// }


    public function amenuedit(){
        if(isset($_POST['submit'])) {
            $post = $_POST['menu'];
            //var_dump($_FILES['menu']);
            if ($_FILES['auctionItemImage']['error'] == 0) {
                $parts = explode('.', $_FILES['auctionItemImage']['name']);
                $extension = end($parts);

                //give the uploaded document a unique name.
                $filename = $parts[0] . '-' . uniqid() . '.' . $extension;

                move_uploaded_file($_FILES['auctionItemImage']['tmp_name'], 'images/' . $filename);

                $post['auctionItemImage'] = $filename;
                //Insert into database

            } else {
                //If there are errors with the file upload
                header('location:/dishes/amenu');
            }
            if ($_FILES['auctionItemImage2']['error'] == 0) {
                $parts = explode('.', $_FILES['auctionItemImage2']['name']);
                $extension = end($parts);

                //give the uploaded document a unique name.
                $filename = $parts[0] . '-' . uniqid() . '.' . $extension;

                move_uploaded_file($_FILES['auctionItemImage2']['tmp_name'], 'images/' . $filename);

                $post['auctionItemImage2'] = $filename;
                //Insert into database

            } else {
                //If there are errors with the file upload
                header('location:/dishes/amenu');
            }
            if ($_FILES['auctionItemImage3']['error'] == 0) {
                $parts = explode('.', $_FILES['auctionItemImage2']['name']);
                $extension = end($parts);

                //give the uploaded document a unique name.
                $filename = $parts[0] . '-' . uniqid() . '.' . $extension;

                move_uploaded_file($_FILES['auctionItemImage3']['tmp_name'], 'images/' . $filename);

                $post['auctionItemImage3'] = $filename;
                //Insert into database
                header('location:/dishes/amenu');
            } else {
                //If there are errors with the file upload
                header('location:/dishes/amenu');
            }
            if ($_FILES['auctionItemImage4']['error'] == 0) {
                $parts = explode('.', $_FILES['auctionItemImage4']['name']);
                $extension = end($parts);

                //give the uploaded document a unique name.
                $filename = $parts[0] . '-' . uniqid() . '.' . $extension;

                move_uploaded_file($_FILES['auctionItemImage4']['tmp_name'], 'images/' . $filename);

                $post['auctionItemImage4'] = $filename;
                //Insert into database

                header('location: /dishes/amenu');
            }
            $this->menuTable->save($post);
        } else {

            $categories = $this->kitchenTable->findAll();
            $dishes = $this->menuTable->find('id', $_GET['id']);
            return [
                'template' => 'editdishform.html.php',
                'option' => '',
                'title' => 'AtomCarSales website Admin',
                'variables' => [

                    'dishes' => $dishes[0] ?? null,
                    'categories'=>$categories,
                ]
            ];
        }
    }

}

