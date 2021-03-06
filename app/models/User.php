<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Register user
    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');

        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login User
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Get User by ID
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE id = :id');

        // Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findUserRequest($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }

      // Add User / Register
    public function request($data){
        // Prepare Query
       // $code = uniqid(true);
        $this->db->query('INSERT INTO resetpass (email)
        VALUES (:email)');
  
        // Bind Values
        $this->db->bind(':email', $data['email']);
       // $this->db->bind(':code', $code);
       
        //Execute
        if($this->db->execute()){
          return true;
          
        } else {
          return false;
        }
      }
      public function findUserResset($email){
        $this->db->query("SELECT * FROM resetpass WHERE email = :email");
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }
  
      // Add User / Register
      public function ressetpass($data){
        // Prepare Query
      
       // $code = uniqid(true);
        $this->db->query('UPDATE users SET password= :password WHERE email= :email');
  
  
        // Bind Values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        
        //Execute
        if($this->db->execute()){
          return true;
          
        } else {
          return false;
        }
    }
}
