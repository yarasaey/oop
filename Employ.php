<?php
class Employ{
    var $name;
    var $email;
    var $salary;
    var $is_manager=false;
    var $address='none';

    function checkMsnger(){
        if($this->is_manager){
            echo "Manager";
        }else{
            echo "Not Manager ";
        }
    }
    function mangerTextColor(){
        if($this->is_manager){
            
            echo "text-success";
        }else{
            echo "text-danger ";
        }
    }
    function checkSalary(){
        if($this->salary>9000){
            echo "text-danger ";
        }else{
            echo "text-success";
           
        }
    }
}