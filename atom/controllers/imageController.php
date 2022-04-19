<?php
class imageController {

    private $kitchenTable;
    private $menuTable;
    private $imageTable;

    public function __construct($imageTable, $menuTable, $kitchenTable) {
        $this->kitchenTable = $kitchenTable;
        $this->menuTable = $menuTable;
        $this->imageTable = $imageTable;
    }

        

    public function home() { 

        $kitchen = $this->kitchenTable->findAll();
        return [
           
            'template' => 'indexform.html.php',
            'option' => 'Home',
            'title' => 'kitchen website',
            'variables' => ['kitchen' => $kitchen]
        ];
        }

        public function update() { 

            $kitchen = $this->kitchenTable->findAll();
            return [
               
                'template' => 'updateform.html.php',
                'option' => 'Home',
                'title' => 'kitchen website',
                'variables' => ['kitchen' => $kitchen]
            ];
            }
        

}