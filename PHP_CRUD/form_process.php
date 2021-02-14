<?php 
      if(isset($_POST['submit'])){
          $user = $_POST['name'];
          $name = array("Tamima","Saima","Nazia");
          
        if(!in_array($user,$name))
        {  
            echo "sorry! not matched";
        }else{
            if($_POST['pwd']==$_POST['confirm'])
          {
              echo $_POST['name'];
          }else{
              echo "password not match";
          }
        }
      }
      
      ?>