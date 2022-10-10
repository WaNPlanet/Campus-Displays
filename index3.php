
<?php 
    session_start();

  include("config.php");
  //  include("functions.php");

  //  $user_data = check_login($conn);

  // write query for all complaints
  $sql = 'SELECT Sname, RegNumb,id FROM complaints';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $complaints = mysqli_fetch_all($result, MYSQLI_ASSOC);

   // free the $result from memory (good practise)
   mysqli_free_result($result);

   // close connection
   mysqli_close($conn);


?>

<!DOCTYPE html>
<html>

 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <style type="text/css">
      * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
section {
  height: 100vh;
  width: 100%;
  place-items: center;
}
body{

  /*height: 100vh;*/

  display: grid;

  place-items: center;

 

  background-size: 100% 100%;

  background-repeat: no-repeat;

}

table{

  width: 100%;

/*  box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);*/

}

table, td, th{

  padding: 20px;

  border: 1px solid lightgray;

  border-collapse: collapse;

  text-align: center;

  cursor: pointer;

}

td{

  font-size: 18px;

}

    </style>
    <section>
      <table>
         <tr>
 
      <th>Name</th>
      <th>Registration Number</th>
      <th>More Info</th>   
    </tr>
    <?php foreach($complaints as $complaint): ?> 
    <tr>
    <td><?php echo htmlspecialchars($complaint['Sname']); ?></td>
      <td> <?php foreach(explode(',', $complaint['RegNumb']) as $ing): ?>
         <?php echo htmlspecialchars($ing); ?>
                <?php endforeach; ?></td>
      <td> <a  href="show3.php?id=<?php echo $complaint['id'] ?>">
                  More info</a></td>
      
      </tr>
        <?php endforeach; ?>
        </table>
    </section>
     
  </body>
</html>
