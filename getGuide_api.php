<?php

session_start();

if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    $access = $_SESSION['access'];

    require_once('db_connect.php');
    $connect = mysqli_connect( HOST, USER, PASS, DB )
      or die("Can not connect");

    if(isset($_POST['selected_area']) && !empty($_POST['selected_area']))
      {
        $ID = 'g.Area_ID';
        $value = $_POST['selected_area'];
      }
    if(isset($_POST['selected_city']) && !empty($_POST['selected_city']))
      {
        $ID = 'a.City_ID';
        $value = $_POST['selected_city'];
      }
    if(isset($_POST['selected_country']) && !empty($_POST['selected_country']))
      {
        $ID = 'c.Country_ID';
        $value = $_POST['selected_country'];
      }
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>City</th>
                <th>Contact no.</th>
                <th>Email</th>

                <?php
                if($access == 'admin'){
                    ?>
                    <th>Address</th>
                    <th>Status</th>
                    <?php
                }
                else{
                ?>
                <th>Action</th>
                <?php
              } ?>


            </tr>
        </thead>
        <tbody>

          <?php
            if($access  == 'admin'){
              $returnobj = mysqli_query( $connect, "SELECT * FROM guide AS g JOIN area AS a ON g.Area_ID = a.Area_ID JOIN city AS c ON a.City_ID = c.City_ID JOIN country AS co ON c.Country_ID = co.Country_ID WHERE ($ID = $value) AND (Approved = 1 OR Approved = 2)" )
              or die("Can not execute query");
            }

            else{
              $returnobj = mysqli_query( $connect, "SELECT * FROM guide AS g JOIN area AS a ON g.Area_ID = a.Area_ID JOIN city AS c ON a.City_ID = c.City_ID JOIN country AS co ON c.Country_ID = co.Country_ID WHERE $ID = $value AND Approved = 1" )
              or die("Can not execute query");
            }


                  while( $rows = mysqli_fetch_array( $returnobj ) ) {
                      extract( $rows );
                        ?>

                        <tr>
                            <td>
                                <img src="<?php echo $Image?>" width="125" height="150">
                            </td>
                            <td>
                              <input id="button" type="button" value="<?php echo $Name?>" onclick="showProfile('<?php echo $guide_id ?>');">
                            </td>
                            <td><?php echo $Area_Name?></td>
                            <td><?php echo $Contact_no ?></td>
                            <td><?php echo $Email ?></td>

                            <?php
                            if($access  == 'admin'){
                                ?>
                                <td><?php echo $Address?></td>
                                <?php
                                if($Approved  == 1){
                                    ?>
                                    <td>Active</td>
                                    <?php
                                }
                                else{
                                    ?>
                                    <td>Blocked</td>
                                    <?php
                                }
                            }
                            else{
                              ?>
                              <td>
                                <input id="button" type="button" value="Book" onclick="bookGuide('<?php echo $guide_id ?>');">
                              </td>
                      </tr>
                            <?php
                            }
                    }

                    ?>
        </tbody>
    </table>

    <?php
}

else{
    ?>
    <script>
        location.assign('index.php');
    </script>
    <?php
}
?>
