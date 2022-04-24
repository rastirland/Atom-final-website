<?php
class commentsController {

  private  $commentTable;

    public function __construct($commentTable) {
        $this->commentTable = $commentTable;
}

public function comment() { 

$comments = $this->commentTable->find('dishID', $_GET['id']);

if (isset($_POST['comments'])){
//    $this->$commentTable->insert($_POST['comments']);
$this->commentTable->insert($_POST['comments']);
}

return 
[  
    'template' => 'commentform.html.php',
    'option' => 'Leave Message',
    'title' => 'Atom Car Sales Leave Messages',
    'variables' => ['comments' => $comments]
];

}


public function approvecomments() { 

  if(isset($_POST['commentSubmit'])) {
    $comments = $_POST['comments'];
    $this->commentTable->save($comments); 
    header('location:/comments/approvecomments');
} else {
  

  $comments = $this->commentTable->findAll();

return [
    'template' => 'commentlist.html.php',
    'option' => '',
    'title' => 'Atom Admin',
    'variables' => ['comments' => $comments]

        ];
  }
}


  public function adelcomment(){
    $this->commentTable->delete($_POST['id']);
    header('Location: /comments/approvecomments');
  }


}


