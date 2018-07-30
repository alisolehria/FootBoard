
<?php

include(dbConnect.php);

$query="SELECT * FROM data";

 $result = mysql_query($query);
      $numrows = mysql_num_rows($result);
      print '<table border = "1">';
      $fieldCount = mysql_num_fields($result);
      print "<tr>";
      for ($i=0; $i<$fieldCount; $i++) {              

       $fieldName = mysql_field_name($result, $i);
       print "<th><p>".$fieldName."</p></th>";
     }
     print "</tr>";
     while ($row = mysql_fetch_row($result) )
     {
      print ("<tr>");
      for ($i=0; $i<$fieldCount; $i++) 
      {
        print ("<td><p>". $row[$i] . "</p></td>") ;  
      }
      print ("</tr>");
    }
    print ("</table>");
?>