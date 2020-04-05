<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Tabla</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
             td, th {border: 1px solid grey; padding: 4px;}
            th {text-align:center;}
            table {border: 1px solid black;}
            
        </style>
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <th>Código</th>
                    <th>Módulo</th>
                    
                </tr>
 <?php


while ($modulo=each($_SERVER)){
    print"<tr>";
    print"<td>".$modulo[0]."<td>";
    print"<td>".$modulo[1]."<td>";
    print"<tr>"; 
    
}
?>
            </tbody>
        </table>
        
    </body>
</html>
