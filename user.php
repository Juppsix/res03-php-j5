class user {
 private int $id;
 private string $firstName;
 private string $lastName;
 private string $email;
 
   private function __construct(string $firstName, string $lastName, string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
   
    // public getter 
    
    public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
    public function getfirstName() : string
    {
        return $this->firstName;
    }

    // public setter
    
    public function setfirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    public function getlastName() : string
    {
       return $this->lastName;
    }
 
  public function setlastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    public function getemail() : string
    {
       return $this->email;
    }
 
  public function setemail(string $email) : void
    {
        $this->email = $email;
    }
    
     public function getfullName() : string
    {
        return $this->firstName;
        return $this->lastName;
    }
    
    
    $getfullName = new fullName;
    $getfullName->speak();
 
 }