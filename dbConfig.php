<?php


class DbConnection
{
    //attributs
    private $hostName="localhost";
    private $dbname="UniversityDb";
    private $userName="user01";
    private $password="user01";
    private $dbCon;
    //contructeur
    function __construct()
    {
        try {
            
        $this->dbCon=new PDO("mysql:host=".$this->hostName.";dbname=".$this->dbname,$this->userName,$this->password);           
         //echo "connection has been establed";
        $this->dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch (Exception $e)
        {
            echo $e->getMessage();
            //die();
        }
        
    }
    function showAlert($msg) {
        print "<script type='text/javascript'>alert('$msg');</script>";
    }
    function insert($studentData)
    {
    
       
        















        
        
        if(!empty($studentData) && is_array($studentData))
        {
            try {
                $columnString = implode(',', array_keys($studentData));
                    
                $valueString = ":".implode(',:', array_keys($studentData));
                
                $sqlRequest="INSERT INTO Student(".$columnString.") VALUES(".$valueString.")";
                $statment=$this->dbCon->prepare($sqlRequest);

                $pdoExec=$statment->execute($studentData);
                if($pdoExec)
                    $this->showAlert("Student successfuly inserted");
                else
                    $this->showAlert("A Problem is occurend when inserting the Student.\nThe student is not inserted");

                return $pdoExec? $this->dbcon->lastInsertId():false;
            }
            catch (Exception $e)
            {
                print($e->getMessage());
            }
            
        }
        return false;
    }

}//end class
//$con=new DbConnection();
?>