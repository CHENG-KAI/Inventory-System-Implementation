
<?php
$user = 'root';
$password = 'root';
$db = 'inventory_system_implementation';
$table = "FGTransaction";
$host = 'localhost';
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);
$mysqli->real_connect($host, $user, $password, $db);







if(isset($_POST['submit'])){
      $Warehouse = $_POST["Warehouse"];
      $ModelNo = $_POST["ModelNo"];
      $SN = $_POST["SN"];
      $Quantity = $_POST["Quantity"];
      $date = date('Y-m-d H:i:s');
      mysqli_query($mysqli,"INSERT INTO FGTransaction (Warehouse,ModelNo,SN,Quantity,TrnTime) VALUES('$Warehouse','$ModelNo','$SN ','$Quantity','$date')");

}
?>

<form action="connect.php" method = "POST">
<table border = "1" width ="400" height = "300">
  <tr>
    <td>Warehouse: <input type ="text" name = "Warehouse"></td>
  </tr>
  <tr>
    <td>ModelNo:<input type ="text" name = "ModelNo"></td>
  </tr>
  <tr>
    <td>SN:<input type ="text" name = "SN"></td>
  </tr>
  <tr>
    <td>Quantity:<input type ="text" name = "Quantity"></td>
  </tr>
  <tr>
    <td colspan="5" align="center"><input type ="submit" name = "submit"  value = "submit"></td>
  </tr>
</form>





<div>
  <table border = "1" width="400">
  <tr>
    <th>Warehouse</th>
    <th>Model No</th>
    <th>On Hand</th>
    <th>
      <p>Warehouse</p><form action="/connect.php" method = "POST">
        <select name="Warehouse">
          <option value="W1">W1</option>
          <option value="W2">W2</option>
          <option value="W3">All</option>
        </select>
        <br><br>
        <input type="submit">
      </form>
    </th>
  </tr>



<?php



mysqli_select_db($mysqli,'inventory_system_implementation');
$a = mysqli_query($mysqli,"SELECT Warehouse,ModelNo,SUM(Quantity) FROM FGTransaction WHERE Warehouse = 'W1'");
mysqli_select_db($mysqli,'inventory_system_implementation');
$b = mysqli_query($mysqli,"SELECT Warehouse,ModelNo,SUM(Quantity) FROM FGTransaction WHERE Warehouse = 'W2' GROUP BY ModelNo;");
mysqli_select_db($mysqli,'inventory_system_implementation');
$c = mysqli_query($mysqli,"SELECT 'ALL' ,ModelNo,SUM(Quantity) FROM FGTransaction GROUP BY ModelNo;");
if($_POST['Warehouse'] == W1){
  $run = $a;
}elseif($_POST['Warehouse'] == W2){
  $run = $b;
}else{
  $run = $c;
}

while($row=mysqli_fetch_array($run)){
    $Warehouse = $row[0];
    $ModelNo = $row[1];
    $OnHand = $row[2];
    echo "<tr>
            <td>$Warehouse</td>
            <td>$ModelNo</td>
            <td>$OnHand</td>
         </tr>";
}





?>


</div>
