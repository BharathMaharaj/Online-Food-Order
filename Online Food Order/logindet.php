<?php 

  

  $servername = "localhost"; 

  $username = "root"; 

  $password = ""; 

  $databasename = "logindetails"; 

  

  // CREATE CONNECTION 

  $conn = mysqli_connect($servername,  

    $username, $password, $databasename); 

  

  // GET CONNECTION ERRORS 

  if (!$conn) { 

      die("Connection failed: " . mysqli_connect_error()); 

  } 

  

  // SQL QUERY 

  $query = "SELECT user, pass FROM `logindetails`;"; 

  // FETCHING DATA FROM DATABASE 

  $result = mysqli_query($conn, $query); 

  

  if (mysqli_num_rows($result) > 0) { 

      // OUTPUT DATA OF EACH ROW 

      while($row = mysqli_fetch_assoc($result)) { 

          echo "pass: " . $row["pass"] 

          . " - user: " . $row["user"]. "<br>"; 

      } 

  } else { 

      echo "0 results"; 

  } 

  

  $conn->close(); 

  
?>