<?php 
include("dbconfig.php");
if(isset($_POST['selected_value'])){
    // Get selected value from post data
    $selectedValue = $_POST['selected_value'];

    // Query to fetch data based on selected value
    $query = "SELECT * FROM tournament WHERE gamename = '".$selectedValue."'";
    $result = mysqli_query($con, $query);

   // $data = array();
    $arr = array();

    while($row = mysqli_fetch_assoc($result)){
       // $data[] = $row['players'];

       $arr = explode(',', $row['type']);
   

           //  $arr = $row['players'];
             //$arr1 = explode(',',$row['players']);
             
             //echo $row['players'];

             ?>
             
           

           
      <?php  
    }
   // print_r($arr);
    for($i=0;$i<count($arr);$i++){
      echo '  <div class="form-check" style="margin-bottom: 1.125rem;">
          <input class="form-check-input" type="radio" name="player" onchange="toggleInputBox(this)" id="gridRadios1" value="'.$arr[$i].'">
          <label class="form-check-label" for="gridRadios1">
            '.$arr[$i].'
          </label>
        </div>';
    }
   

 
                
              
   // <div class="form-check "style="margin-bottom: 1.125rem;">
   // <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value=""name="player[]">
   //         <label class="form-check-lable" for="inlineCheckbox1"><?php echo $arr[0]; </label></div>
    
   //echo json_encode($arr[$i]);
}
?>