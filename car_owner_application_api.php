<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
$access = $_SESSION['access'];

        require_once('db_connect.php');
      	$connect = mysqli_connect( HOST, USER, PASS, DB )
      		or die("Can not connect");
      ?>

<!--------------------------------------------------------------------------------------------------------------------------------------->

              <h2 class="title"> Guide List </h2>

                  <table class="table">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Contact no.</th>
                              <th>Email</th>
                              <th>NID</th>
                              <th>Request Date</th>
                              <th>Action</th>

                          </tr>
                      </thead>
                      <tbody>

                        <?php
                          if($access  == 'admin'){
                            $returnobj = mysqli_query( $connect, "SELECT * FROM car_owners WHERE Approved = 0" )
                            or die("Can not execute query");
                          }

                                while( $rows = mysqli_fetch_array( $returnobj ) ) {
                                    extract( $rows );
                                      ?>

                                      <tr>
                                          <td><?php echo $Name ?></td>
                                          <td>0<?php echo $Mobile?></td>
                                          <td><?php echo $email ?></td>
                                          <td><?php echo $nid?></td>
                                          <td><?php echo $Request_Date ?></td>


                                          <td>
                                            <input id="button" type="button" value="Approve" onclick="approveOwner('<?php echo $owner_id ?>');">
                                            <br><br>
                                            <input id="button" type="button" value="Reject" onclick="deleteProfile('<?php echo $owner_id ?>');">
                                          </td>

                                    <?php

                                  }

                          ?>
                      </tbody>
                  </table>


    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>


  </body>
</html>
<?php
}

else{
  ?>
  <script>

    location.assign('login.php');

  </script>
  <?php
} ?>
