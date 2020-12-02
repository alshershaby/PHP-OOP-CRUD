<?php

Class Model{
    Private $server="localhost";
    Private $username="root";
    Private $password="";
    Private $db="cruddb";
    Private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
        }catch(Exeption $ex){
            echo "error:".$ex->getMessage();
        }
    }
    public function insert(){
        if(isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address']) ){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];

                    $query = "INSERT INTO  datagetter (name,email,mobile,address) VALUES ('$name','$email','$mobile','$address')";
                
                    if($sql = $this->conn->query($query)){
                        echo "<script>alert('records added seccessfuly');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }else{
                        echo "<script>". "alert('please check your validation')"."</script>";
                        echo "<script>window.location.href='index.php';</script>";                        
                    }
                }else{
                    echo "<script>". "alert('empty inputs')"."</script>";
                    echo "<script>window.location.href='index.php';</script>";
                }
            }
        }
    }

    public function fetch(){
        $data = null;

        $query = "SELECT * FROM datagetter";
        if($sql = $this->conn->query($query)){
            while($row = mysqli_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($ID){
       $query = "DELETE FROM datagetter where ID ='$ID' ";
       if($sql = $this->conn->query($query)){
           return true;
       }else{
           return false;
       }
    }


    public function fetch_single($ID){
        $data = null;

        $query = "SELECT * FROM datagetter where ID = '$ID'";
        if($sql = $this->conn->query($query)){
         while($row = $sql->fetch_assoc()){
             $data= $row;
         }
        }
        return $data;
    }

    public function edit($ID){
        $data = null;

        $query = "SELECT * FROM datagetter where ID = '$ID'";
        if($sql = $this->conn->query($query)){
         while($row = $sql->fetch_assoc()){
             $data= $row;
         }
        }
        return $data;
    }

    public function update($data){
      
      $query = "UPDATE datagetter SET Name = '$data[name]', Email = '$data[email]', 
        Mobile = '$data[mobile]' WHERE ID = '$data[ID]'";

        if($sql = $this->conn->query($query)){
            return true;
        }else{
            return false;
        }
    }


}

?>