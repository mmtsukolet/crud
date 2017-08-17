<?php

    require_once 'model/Creatures.php';

    class CreaturesController 
    {
        private $creatures = NULL;
        
        public function __construct() 
        {
            $this->creatures = new Creatures();
        }
        
        public function redirect($location) 
        {
            header('Location: '.$location);
        }
        
        public function handleRequest() 
        {
            $op = isset($_GET['op']) ? $_GET['op'] : NULL;

            try {
                if ( !$op || $op == 'list' ) {
                    $this->lists();
                } elseif ( $op == 'create' ) {
                    $this->save();
                } elseif ( $op == 'update' ) {
                    $this->update();
                } elseif ( $op == 'delete' ) {
                    $this->delete();
                } elseif ( $op == 'show' ) {
                    $this->show();
                } else {
                    $this->showError("Page not found", "Page for operation ".$op." was not found!");
                }
            } catch ( Exception $e ) {
                $this->showError("Application error", $e->getMessage());
            }
        }
        
        public function lists() 
        {
            $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'id';
            $creatures = $this->creatures->getAllCategories($orderby);
            include 'view/creatures/index.php';
        }
        
        public function save() 
        {
            $title = 'Add new Category';
            $name = '';
            $errors = [];
            
            if ( isset($_POST['form-submitted']) ) {
                
                $name = isset($_POST['name']) ? $_POST['name'] : NULL;
                
                try {
                    $this->creatures->createNewCategory($name);
                    $this->redirect('index.php?&r=creatures');
                    return;
                } catch (ValidationException $e) {
                    $errors = $e->getErrors();
                }
            }
            
            include 'view/creatures/form.php';
        }

        public function update() 
        {
           
            $title = 'Update Creatures';
            $name = '';
            $id = isset($_GET['id']) ? $_GET['id']  :NULL;;
            $errors = [];

            if (!$id)
              throw new Exception('Internal error.');
        
            $cat = $this->creatures->getCatById($id);
            if ( empty($cat) ) {
                throw new Exception('ID NOT FOUND.');
            }

            //set value
            $name = $cat->name;    
            if ( isset($_POST['form-submitted']) ) {
                
                $name = isset($_POST['name']) ? $_POST['name'] : NULL;
                $id = isset($_POST['id']) ? $_POST['id'] : NULL;
                if ( !$id ) {
                    throw new Exception('Internal error.');
                }
                
                try {
                    $this->creatures->updateCategory($id,$name);
                    $this->redirect('index.php?&r=creatures');
                    return;
                } catch (ValidationException $e) {
                    $errors = $e->getErrors();
                }
            }
            
            include 'view/creatures/form.php';
        }
        
        public function delete() 
        {
            $id = isset($_GET['id'])?$_GET['id']:NULL;
            if ( !$id ) {
                throw new Exception('Internal error.');
            }
            
            $this->creatures->delete($id);
            
            $this->redirect('index.php?&r=creatures');
        }
        
        public function show() 
        {
            $id = isset($_GET['id'])?$_GET['id']:NULL;
            if ( !$id ) {
                throw new Exception('Internal error.');
            }
            $category = $this->creatures->getCatById($id);
            
            include 'view/creatures/view.php';
        }
        
        public function showError($title, $message) 
        {
            include 'view/error.php';
        }
        
    }
?>
