<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
    td{
        padding : 5px;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        font-size:100%;
        font-family:Arial;

         border : 1px solid lightgrey; 
        
         background-color: #f2f2f2;
         padding : 10px;
    }
    #A{
        font-weight:bold;
    }
    input[type ="text"],
    input[type ="email"],
    input[type ="password"],
    input[type ="radio"],
    input[type ="submit"],
    textarea{
        width :100%;
        padding: auto;
        border: 1px solid black;
    }
   
    
    </style>
    </head>
<body>
<?php
 echo"<center><h1>"."Registration Form"."</h1></center>";
?>
   
        <form  method = "post" action = "details.php">
   
        <table>
        <tr >
            <td id = "A";>
                <lable>Name*</lable>
            </td>

            <td>
                <input type ="text" name = "name" required >
            </td>
       </tr>

        <tr>
            <td id = "A";>
            <lable>D.O.B</lable>
            </td>

            <td> 
            <input type ="text" name = "Dateofbirth" > 
            </td> 
    </tr>

    <tr>
         <td id = "A";>
            <lable>E-mail*</lable>
        </td>
        <td>
            <input type ="email" name = "email"  required>
        </td>
    </tr>

    <tr>
        
  
         <td id = "A";>
        
       GENDER
        <br>
</td>
<td>
        <input type ="radio" name = "radio" value = "male" >Male  
        <input type ="radio" name = "radio" value = "female" >female


</td>

      
    </tr>
    <tr>
            <td id = "A";>
                <lable>Password*</lable>
            </td>
        <td>
            <input type ="password" name = "password" required >
        </td>
    </tr>

    <tr>
            <td id = "A";>
                <lable>Qulification*</lable>
            </td>

            <td>
            <input type ="text" name = "qulification" required>
            </td>
    </tr>


    <tr>
        <td id = "A";>
            
            <lable>Address*</lable>
        </td>

        <td>
            <textarea name="address"  cols="30" rows="10" required></textarea>
        </td>
    </tr>
    
        <tfoot >
            <th colspan = "2">
                <input type ="submit" name = "submit" >
            </th>
            
        </tfoot>
</table>
</form> 
</body>
</html>