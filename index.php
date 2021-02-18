<?php
   $link = mysqli_connect("172.19.0.2","root","root","trucorp");
   if (!$link) {
      echo "tidak bisa konek ke MySql" . PHP_EOL;
      exit;
   }
   $db = "SELECT * FROM users";
   $result = $link->query($db);
   $user = 0;

   if ($result->num_rows > 0) {
      echo "Table User Database trucorp-web-2.0" . PHP_EOL;
      echo "<table><tr><th>ID</th><th>Nama</th><th>Kantor</th></tr>";
      while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Nama"]. "</td><td>" . $row["Kantor"]. "</td></tr>" . PHP_EOL;
	 $user = $user + 1;
      }
      echo "</table>";
   }else {
      echo "Database Kosong" . PHP_EOL;
   }
   echo "Jumlah user: " . $link . PHP_EOL;
   echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;
   mysqli_close($Link);
?>



