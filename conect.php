<?php

class Conect{
    // جعلنا القسم ثابته علشان مش هااغير
    private const host_name="localhost";
    private const user_name="root";
    private const password="";
    private const db="school_managment";
    private $conn;

    public function __construct(){
    //    $this->conn=mysqli_connect(conect::host_name,conect::user_name,connect::password,connect::db);
    //    جعل الاتصال بالداتا بيز
       $this->conn= mysqli_connect(self::host_name,self::user_name,self::password,self::db);

    }
    public function insert(array $post,string $tableName):bool{

    $colums=[];
    $values=[];
    foreach ($post as $key=>$value){
        $colums[]=$key;
        $values[]="'".$value."'";
    }
    
  $columsString=implode(',',$colums);
  $valuesString=implode(',',$values);
  
    if($this->conn->query("INSERT INTO $tableName ($columsString)Values($valuesString)")){
        return true;
    }
        return false;
    }

    public function select( string $tableName):array{
        //select * from student_info;

        $s="SELECT * FROM $tableName" ;
        $rows=$this->conn->query($s);
       
        if($rows->num_rows>0){
            $data=$rows->fetch_all(MYSQLI_ASSOC);
        //      print "<pre>";
        // var_dump($data);
        // exit;
            return $data;
        }
        return [];
    }

    
    public function selectOne($tableName,$id):array{
         $s="SELECT * FROM $tableName where id=$id limit 1";
         $row=$this->conn->query($s);
        if($row->num_rows>0){
            $data=$row->fetch_assoc();
                 
                return $data;
        }
        return [];
    }
   public function update(array $post,string $tableName,$id):bool{
    // $s="update $tableName set name=value,lasetName=value where id =12";
   
    $fieldvalue=[];
    foreach ($post as $key => $value) {
       $fieldvalue[]= "$key='$value'"; 
    }
      
     $fieldvalueString=implode(',',$fieldvalue); 
      
    $s="update $tableName set $fieldvalueString where id=$id";
    if($this->conn->query($s)){
        return true;
    }
    return false;
   }
    
   public function login(string $userName,string $password){
    // فانكشن بتقوم بمراجعة تسجيل المستخدم ومطابقتها بالداتا بيز
    $s="SELECT * FROM user WHERE user_name='$userName' and password='$password' limit 1";
    $row=$this->conn->query($s);
    if($row->num_rows>0){
            $data=$row->fetch_assoc();
                 
                return $data;
        }
        return [];
   }


    public function delete(string $tableName,$id):bool{
        $s="DELETE FROM $tableName WHERE id=$id";
        if($this->conn->query($s)){
            return true;
        }
            return false;
    }
}



