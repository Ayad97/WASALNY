<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
	public $name;
	public $phone;
    public $email;
    public $password;
    public $login_as;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name ,phone=:phone, email=:email , password=:password , login_as=:login_as";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        
		$this->name=htmlspecialchars(strip_tags($this->name));
        $this->phone=htmlspecialchars(strip_tags($this->phone));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
	    $this->login_as=htmlspecialchars(strip_tags($this->login_as));

    
        // bind values
	  $stmt->bindParam(":name", $this->name);
      $stmt->bindParam(":phone", $this->phone);
      $stmt->bindParam(":email", $this->email);
      $stmt->bindParam(":password", $this->password);
      $stmt->bindParam(":login_as", $this->login_as);

    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `id`, `email`, `password`,`login_as`
                FROM
                    " . $this->table_name . " 
                WHERE
                    email='".$this->email."' AND password='".$this->password."' AND login_as='".$this->login_as."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                email='".$this->email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}