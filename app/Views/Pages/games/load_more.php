<?php  
$output = '';  
$video_id = '';  
sleep(1);  

  $db = \Config\Database::connect();
         $query = $db->query('SELECT * FROM app WHERE  id >'.$_POST['last_id'].' LIMIT 12');
		 $results = $query->getResult(); foreach($results as $row3) {

          $video_id = $row["id"];  
          $output .= '  
               <tbody>  
               <tr>  
                    <td>'.$row["title"].'</td>  
               </tr></tbody>';  
     }  
    //  $output .= '  
    //            <tbody><tr id="remove_row">  
    //                 <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-success form-control">more</button></td>  
    //            </tr></tbody>  
    //  ';  
     echo $output;  
?>
