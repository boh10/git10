<?php


$servername="localhost" ; 
$username="root" ; 
$password="" ; 
$dbname="service" ;
$conn=mysqli_connect($servername,$username,$password,$dbname); 
 $query="select * from reservation" ; 
 $result=mysqli_query($conn,$query) ;  
 if (isset($_POST["ajouter"])) 
 { 
   $nom=$_POST["nom"] ; 
   $prenom=$_POST["prenom"] ; 
   $mail=$_POST["mail"] ; 
   $numero=$_POST["numero"] ; 
   $partydate=$_POST["partydate"] ; 
   $cat=$_POST["cat"] ; 
   $area=$_POST["area"] ; 
       $sql="INSERT INTO reservation(firstname,lastname,email,telephone,datedereservation,choix,commentaire) VALUES('$nom','$prenom','$mail','$numero','$partydate','$cat','$area')" ; 
       mysqli_query($conn,$sql) ;
  }
?>
 
  <?php 


$sql="select * from reservation"; 
$result=mysqli_query($conn,$sql) ; 
while ($row=mysqli_fetch_assoc($result))
{ 
  echo"<tr border colspan='2'><td>"
  .$row["firstname"]."</td><td>"
  .$row["lastname"]."</td><td>"
  .$row["email"]."</td><td>"
  .$row["telephone"]."</td><td>"
  .$row["datedereservation"]."</td><td>"
  .$row["choix"]."</td><td>"
  .$row["commentaire"]."</td><td>"
  ."<td><a href='service_modifier.php?id=".$row["firstname"]."'>modifier<a></td>"
  ."<td><a href='service_supprimer.php?id=".$row["firstname"]."'>supprimer<a></td>" 
   ."<br>"
   ."<br>";
   

}
  ?>
</table>
</body>

</html>