 <?php
include '../../main/db/database.php';

$erorMessage = '';
$id='';
$name='';
$description='';
$topics = selectAll('topics');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){

    $name= trim($_POST['name']);
    $description = trim($_POST['description']);


    if ($name === '' || $description === '' ){
        $erorMessage = "Not all fields are filled";
    }elseif (mb_strlen($name,'UTF-8') < 2){
        $erorMessage = "Category must be more than 2 characters";
    }
    else{
        $existence = selectOne('topics',['name' => $name]);
        if ($existence['name'] === $name){
            $erorMessage = "Category already exists";
        }else{
            $topic = [
                'name' => $name,
                'description' => $description,
            ];
            $id= insert('topics',$topic);
            $topic = selectOne('topics',['id' => $id]);
            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }

    //  $last_row = selectOne('users',['id'=>$id]);
}else{
    $name = '';
    $description = '';
}

 if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
     $id = $_GET['id'];
     $topic = selectOne('topics',['id' => $id]);
     $id = $topic['id'];
     $name = $topic['name'];
     $description = $topic['description'];

 }
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
     $name= trim($_POST['name']);
     $description = trim($_POST['description']);


     if ($name === '' || $description === '' ){
         $erorMessage = "Not all fields are filled";
     }elseif (mb_strlen($name,'UTF-8') < 2){
         $erorMessage = "Category must be more than 2 characters";
     }
     else{

             $topic = [
                 'name' => $name,
                 'description' => $description,
             ];
             $id= $_POST['id'];
             $topic_id = update('topics',$id,$topic);
             header('location: ' . BASE_URL . 'admin/topics/index.php');
         }


     //  $last_row = selectOne('users',['id'=>$id]);
 }
 if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     delete('topics', $id);
     header('location:' .BASE_URL . 'admin/topics/index.php');
 }