<?php class School {
    private int $id;
    private User $teacher;
    private Student $students;
    
    
    
     public function __construct( User $teacher)
    {
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }
    
    public function getid() : int
    {
     return $this->id;
    }
    
    public function setid(int $id) : void
    {
    $this->id = $id;
    }
    
    public function addStudent(Student $student) : array
    {
        
            $this->students[]=$student;
       
            return $this->students;
       
        
       
    }
    
     public function removeStudent(Student $student) : array
    {
        
             
        foreach($this->students as $key=>$stud){
            
            if($stud->getId() === $student->getId()){
                
                unset($this->students[$key]);
                
            }
            
        }
         
     return $this->students;
        
    }
}
?>