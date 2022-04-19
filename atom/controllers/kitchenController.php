<?php
class kitchenController {

    public function __construct($kitchenTable) {
        $this->kitchenTable = $kitchenTable;
    }


    public function about() {
        return [
			'template' => 'comingsoon.html.php',
            'option' => 'About',
			'title' => 'kitchen website About',
            'variables' => [0],
		];
        
    }
    public function home() { 

        $kitchen = $this->kitchenTable->findAll();
        return [
           
            'template' => 'comingsoon.html.php',
            'option' => ' ',
            'title' => 'kitchen website',
            'variables' => ['kitchen' => $kitchen]
        ];
        }


    public function faq() {
    return [
        'template' => 'comingsoon.html.php',
        'option' => ' ',
        'title' => 'kitchen website FAQ',
        'variables' => [0]
    ];
    }
            public function acategories() { 

        
                $kitchen = $this->kitchenTable->findAll();
               $title = 'kitchen website Admin';
               
               
               return [
                   'template' => 'formcategory.html.php',
                   'option' => 'Categories',
                   'title' => 'kitchen website Admin',
                   'variables' => ['kitchen' => $kitchen]
                   ];
               }


               public function adeletecat(){
                $this->kitchenTable->delete($_POST['id']);
                header('Location: /kitchen/acategories');
              }
            
              public function aedit() {
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
                        'option' => 'Edit Categories',
                        'variables' => ['category' => $kitchen],
                        'title' => 'Edit Category'
                    ];
                }
            }
    
            public function logout() {
	
                unset($_SESSION['loggedin']);
                // ends the session , so another user may login this wil change what all the current users see depending who signed into the session
                session_destroy();
                return [
           
                    'template' => 'logoutform.html.php',
                    'option' => 'Thanks',
                    'title' => 'kitchen website',
                    'variables' => [0]
                ];
                    }
            
            


            
            
            



    

}