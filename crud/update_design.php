<?php include("connection.php");
$registration= $_GET['reg'];

$query = "SELECT * FROM registration_form where registration='$registration'";
$data  = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
$outdoor = $result['outdoor'];
$outdoor1 = explode(",",$outdoor);
$race = $result['race'];
$race1 = explode(",",$race);
$perarts = $result['perarts'];
$perarts1 = explode(",",$perarts);
$indoor = $result['indoor'];
$indoor1 = explode(",",$indoor);
$cultural = $result['cultural'];
$cultural1 = explode(",",$cultural);
$highlight = $result['highlight'];
$highlight1 = explode(",",$highlight);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update</title>
</head>
<body>
    <div class="container">
      <form action="#" method="POST">
      <div class="title">
       Update Participants Details
      </div>
      <div class="form">
       <div class="input_field">
            <label>Full Name</label>
            <input type="text" value="<?php echo $result['name']; ?>" class="input" name="name" required>
        </div>  
         <div class="input_field">
            <label>Registration Number</label>
            <input type="number" value="<?php echo $result['registration']; ?>" class="input" name="registration_number" required>
        </div> 
         <div class="input_field">
            <label>Student Of</label>
           <select class="selectbox" name="student_of" required>
            <option value="">Select</option>
            <option value="B-Tech"
              <?php
                if($result['student']=='B-Tech')
                {
                    echo "selected";
                }
                 ?>
            >
            B-Tech</option>
            <option value="Agriculture"
            <?php
                if($result['student']=='Agriculture')
                {
                    echo "selected";
                }
                 ?>
            >
            Agriculture</option>
            <option value="BCA"
            <?php
                if($result['student']=='BCA')
                {
                    echo "selected";
                }
                 ?>
            >
            BCA</option>
            <option value="Diploma"
            <?php
                if($result['student']=='Diploma')
                {
                    echo "selected";
                }
                 ?>
            >
            Diploma</option>
           </select>
            <label class="c">Gender</label>

           <select class="selectbox" name="gender" required>
            <option value="">select</option>
            <option value="Male"
              <?php
                if($result['gender']=='Male')
                {
                    echo "selected";
                }


              ?>
            >
                Male</option>

            <option value="Female"
                          <?php
                if($result['gender']=='Female')
                {
                    echo "selected";
                }
                 ?>
            >
            Female</option>
            <option Value="Others"
             <?php
                if($result['gender']=='Others')
                {
                    echo "selected";
                }


              ?>
            >
            Others</option>
           </select >

        </div> 
         <div class="input_field">
            <label>Email </label>
            <input type="email" value="<?php echo $result['email']; ?>"  class="input" name="email" required>
        </div>  
         <div class="input_field">
            <label>Phone Number</label>
            <input type="number" value="<?php echo $result['phone']; ?>"  class="input" name="phone_number" required>
        </div> 
          <div class="input_field">
            <label style="margin-right:80px;">Outdoor</label>
            <input type="checkbox" name="r1[]" value="Javelin"
            <?php 
            if(in_array(Javelin,$outdoor1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Javelin Throw</label>
            <input type="checkbox" name="r1[]" value="Discus"
             <?php 
            if(in_array(Discus,$outdoor1))
            {
                echo "checked";
            }
            
            ?>
            
            >
            <label style="margin-left:5px;">Discus Throw</label>
            <input type="checkbox" name="r1[]" value="Shotput"
               <?php 
            if(in_array(Shotput,$outdoor1))
            {
                echo "checked";
            }
            
            ?>
            
            >
            <label style="margin-left:5px;">Shotput Throw</label>
        </div> 
         <div class="input_field">
            <label style="margin-right:80px;">Race</label>
            <input type="checkbox" name="r2[]" value="hundred"
              <?php 
            if(in_array(hundred,$race1))
            {
                echo "checked";
            }
            
            ?>
            ><label style="margin-left:5px;">100m</label>
            <input type="checkbox" name="r2[]" value="twohun"
             <?php 
            if(in_array(twohun,$race1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">200m</label>
            <input type="checkbox" name="r2[]" value="fourhun"
               <?php 
            if(in_array(fourhun,$race1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">400m</label>
          
          </div>

            <div class="input_field">
            <label style="margin-right:80px;">Performing Arts</label>
            <input type="checkbox" name="r3[]" value="Singing"
            <?php
             if(in_array(Singing,$perarts1))
            {
                echo "checked";
            }
            
            ?>      
            >
            <label style="margin-left:5px;">Singing</label>
            <input type="checkbox" name="r3[]" value="Dancing"
            <?php
             if(in_array(Dancing,$perarts1))
            {
                echo "checked";
            }
            
            ?>      
            
            >
            <label style="margin-left:5px;">Dancing</label>
            <input type="checkbox" name="r3[]" value="Foodfun"
               <?php
             if(in_array(Foodfun,$perarts1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Foodfun</label>
        </div>

        <div class="input_field">
            <label style="margin-right:80px;">Indoor</label>
            <input type="checkbox" name="r4[]" value="Carrom"
                 <?php
             if(in_array(Carrom,$indoor1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Carrom</label>
            <input type="checkbox" name="r4[]" value="Chess"
                  <?php
             if(in_array(Chess,$indoor1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Chess</label>
            <input type="checkbox" name="r4[]" value="Pubg"
            <?php
            if(in_array(Pubg,$indoor1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Pubg</label>
        </div>
         <div class="input_field">
            <label style="margin-right:80px;">Cultural & Arts</label>
            <input type="checkbox" name="r5[]" value="Mehandi"
             <?php
            if(in_array(Mehandi,$cultural1))
            {
                echo "checked";
            }
            
            ?>
           
            ><label style="margin-left:5px;">Mehandi</label>
            <input type="checkbox" name="r5[]" value="Rangoli"
            <?php
            if(in_array(Rangoli,$cultural1))
            {
                echo "checked";
            }
            
            ?>
            >
            <label style="margin-left:5px;">Rangoli</label>
            <input type="checkbox" name="r5[]" value="Painting"
             <?php
            if(in_array(Painting,$cultural1))
            {
                echo "checked";
            }
            
            ?> 
            >
          <label style="margin-left:5px;">Painting</label>
        </div>

        <div class="input_field">
            <label style="margin-right:12px;font-weight: 600;">HighLights</label>
            <input type="checkbox" name="r6[]" value="StarofYear"
            <?php
            if(in_array(StarofYear,$highlight1))
            {
                echo "checked";
            }
            
            ?> 
            >
            <label style="margin-left:10px;font-weight: 600;">Star Of The Year</label>
            <input type="checkbox" name="r6[]" value="Treasure"
            <?php
            if(in_array(Treasure,$highlight1))
            {
                echo "checked";
            }
            
            ?> 
            >
            <label style="margin-left:10px;font-weight: 600;">Treasure Hunt</label>
        </div>
        <div class="input_field">
            <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span> 
            </label>
             <p>Agree to term & conditions</p>
        </div>   
          <div class="input_field">
             <input type="submit"  value ="Update" class="btn" name="update">
        </div>      
             
      </div>
     </form>
    </div>
</body>
</html>


<!--php code for data base store-->
<?php
if($_POST['update'])
{
   $name                = $_POST['name'];
   $registration_number = $_POST['registration_number'];
   $student_of          = $_POST['student_of'];
   $gender              = $_POST['gender'];
   $email               = $_POST['email'];
   $phone_number        = $_POST['phone_number'];
  $outdoor3             = $_POST['r1'];
   $outdoor4            = implode(",",$outdoor3);
   $race3                = $_POST['r2'];
   $race4               = implode(",",$race3);
   $Performing_Arts3     = $_POST['r3'];
   $Performing_Arts4    = implode(",",$Performing_Arts3);
   $Indoor3              = $_POST['r4'];
   $Indoor4             = implode(",",$Indoor3);
   $Cultural3            = $_POST['r5'];
   $Cultural4           = implode(",",$Cultural3);
   $Highlights3          = $_POST['r6'];
   $Highlights4         = implode(",",$Highlights3);

   if($name != "" && $registration_number != "" && $student_of != "" && $gender != ""
     && $email != ""  && $phone_number != "" )
   {

     $query= " UPDATE registration_form SET name='$name',
  student='$student_of',gender='$gender',email='$email',phone='$phone_number', outdoor='$outdoor4',race='$race4',
  perarts='$Performing_Arts4',indoor='$Indoor4', cultural='$Cultural4', highlight='$Highlights4' where registration='$registration_number'";



  $data = mysqli_query($conn,$query);
  if($data)
    { 
    
         echo "<script>alert('Record Updated ..');</script>";
       ?>
       
        <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php"/>
        <?php
       
  }
  else
  {
    echo "update nhi hoga";
  }
 }
//  else{
//     echo "<script>alert('Fill your details First');</script>";
//  }
 }


?>