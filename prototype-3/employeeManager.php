<?php
    include 'employee.php';
    class EmployeeManager {

        public function getAllEmployees($conn){
            $sqlGetData = 'SELECT ID, First_name, Last_name, Age, Gender FROM employees';
            $result = mysqli_query($conn ,$sqlGetData);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        }


        public function insertEmployee($conn, $employee){
            $First_Name = $employee->getFirstName();
            $Last_Name = $employee->getLastName();
            $Age = $employee->getAge();
            $Gender = $employee->getGender();

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO employees(First_name, Last_name, Age, Gender) 
                            VALUES('$First_Name', 
                                    '$Last_Name',
                                    '$Age', 
                                    '$Gender')";

        mysqli_query($conn, $sqlInsertQuery);
        }


        public function deleteEmployee($conn, $id){
            $sqlDeleteQuery = "DELETE FROM employees_test WHERE id= '$id'";

            mysqli_query($conn, $sqlDeleteQuery);
        }


        public function editEmployee($conn, $employee, $id){
            $First_name = $employee->getFirstName();
            $Last_name = $employee->getLastName();
            $Gender = $employee->getGender();
            $Age = $employee->getAge();
     
            // Update query
            $sqlUpdateQuery = "UPDATE employees SET 
                         First_name='$first_name', Last_name='$last_name', Age='$age', Gender='$gender'
                         WHERE ID=$id";
     
             // Make query 
             mysqli_query($conn, $sqlUpdateQuery);
       
        }

        public function getEmployee($conn, $id){
            $sqlGetQuery = "SELECT * FROM employees WHERE ID= $id";
    
        // get result
        $result = mysqli_query($conn, $sqlGetQuery);
    
        // fetch to array
        $employee = mysqli_fetch_assoc($result);
        return $employee;
        }
    }


    
?>