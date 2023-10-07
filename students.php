<?php 
    class Students{
        public function login(){
            global $message;
            if(isset($_POST) && $_POST['login']=='user' && $_POST['password']=='123'){
                $_SESSION['login'] = true;
                $message = '';
            }
            else{
                $message ="Невірний логін або пароль";
            }
        }
        public function redirect($url){
            header('Location: '.$url);
        }
        public function logout(){
            unset($_SESSION['login']);
            $this->redirect("login.php");
        }
        public function add(){
            global $message;
            $students = array();
            if($_COOKIE['students']){
                $students = unserialize($_COOKIE['students']);
            }
            if(isset($_POST) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['surname']) && !empty($_POST['surname']) && isset($_POST['age']) && !empty($_POST['age'])){
                $students[count($students)] = array("name"=>$_POST['name'],"surname"=>$_POST['surname'],"age"=>$_POST['age']);
                $message = "";
            }
            else{
                $message = "Проблеми з даними";
            }
            setcookie('students', serialize($students));
            $this->redirect("/");
        }
    }
 ?>
  <?php ?>