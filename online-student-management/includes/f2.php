<?php 
	include_once('database.php');
        $t11='-'; $t12='-'; $t21='-'; $t22='-'; $t31='-'; $t32='-'; $t41='-'; $t42='-';
        if(isset($_REQUEST['act']) && $_REQUEST['sid']!=''){
              $id = $_POST['sid'];
              $query = "SELECT * FROM routine WHERE std_id = $id";
                $run = mysqli_query($conn,$query);
                while($rslt= mysqli_fetch_assoc($run)){
                   if ($rslt['day']==='sun')
                    {
                        if($rslt['time']==='9am'){ $t11 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t21 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t31 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t41 = $rslt['sub']; }
                    }
                    else {
                        if($rslt['time']==='9am'){ $t12 = $rslt['sub']; }
                        else if($rslt['time']==='11am'){ $t22 = $rslt['sub']; }
                        else if($rslt['time']==='1pm'){ $t32 = $rslt['sub']; }
                        else if($rslt['time']==='3pm'){ $t42 = $rslt['sub']; }
                    }
                }
          }
          ?>
             <tr>
                        <td class="th1">09.00AM-11.00AM</td>
                        <td name="t11"> <?php echo $t11; ?> </td>
                        <td name="t12"> <?php echo $t12; ?></td>
                        <td name="t13"> <?php echo $t11; ?></td>
                        <td name="t14"> <?php echo $t12; ?></td>
                    </tr>
                    <tr>
                        <td class="th1">11.00AM-01.00PM</td>
                        <td name="t21"> <?php echo $t21; ?></td>
                        <td name="t22"> <?php echo $t22; ?></td>
                        <td name="t23"> <?php echo $t21; ?></td>
                        <td name="t24"> <?php echo $t22; ?></td>
                    </tr>
                    <tr>
                        <td class="th1">01.00PM-03.00PM</td>
                        <td name="t31"> <?php echo $t31; ?></td>
                        <td name="t32"> <?php echo $t32; ?></td>
                        <td name="t33"> <?php echo $t31; ?></td>
                        <td name="t34"> <?php echo $t32; ?></td>
                    </tr>
                    <tr>
                        <td class="th1">03.00PM-05.00PM</td>
                        <td name="t41"> <?php echo $t41; ?></td>
                        <td name="t42"> <?php echo $t42; ?></td>
                        <td name="t43"> <?php echo $t41; ?></td>
                        <td name="t44"> <?php echo $t42; ?></td>
                    </tr>

