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
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Area</th>
                              <th>Contact no.</th>
                              <th>Email</th>
                              <th>NID</th>
                              <th>Request Date</th>
                              <th>Address</th>
                              <th>PV</th>
                              <th>Action</th>

                          </tr>
                      </thead>
                      <tbody>

                        <?php
                          if($access  == 'admin'){
                            $returnobj = mysqli_query( $connect, "SELECT * FROM guide AS g JOIN area AS a ON g.Area_ID = a.Area_ID WHERE Approved = 0" )
                            or die("Can not execute query");
                          }

                                while( $rows = mysqli_fetch_array( $returnobj ) ) {
                                    extract( $rows );
                                      ?>

                                      <tr>
                                          <td>
                                              <img src="<?php echo $Image?>" width="125" height="150">
                                          </td>
                                          <td><?php echo $Name ?></td>
                                          <td><?php echo $Area_Name ?></td>
                                          <td>0<?php echo $Contact_no ?></td>
                                          <td><?php echo $Email ?></td>
                                          <td><?php echo $nid?></td>
                                          <td><?php echo $Request_Date ?></td>
                                          <td><?php echo $Address?></td>
                                          <td><img src="<?php echo $pv_Image?>" width="125" height="150"></td>

                                          <td>
                                            <input id="button" type="button" value="Approve" onclick="approveGuide('<?php echo $guide_id ?>');">
                                            <br><br>
                                            <input id="button" type="button" value="Reject" onclick="deleteProfile('<?php echo $guide_id ?>');">
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

    <script>
    function deleteProfile(guide_id){
      location.assign('guide_profile_delete.php?guide_id='+guide_id);
    }

    function approveGuide(guide_id){
      location.assign('guide_approve_action.php?guide_id='+guide_id);
    }

    </script>

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
