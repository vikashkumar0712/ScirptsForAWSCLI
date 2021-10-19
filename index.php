<!DOCTYPE html>
<html lang="en">
<head>
<title>Game|| By Vikash</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .res-btn{
            background-color: rgba(212, 171, 117, 0.794);
            font-size: 1.5rem;
        }
        img{
            height: 200px;
            width: 200px;
        }
        .cen{
            width:200px;
            
        }

       *{
           padding: 0;
           margin: 0;
           box-sizing: border-box;
       }

     
   </style>
   
</head>
<body>
    <form action=""  method="get">
    <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="https://xp.io/storage/CgHh34U.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
   
 <center>
                <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Player Name:</b></label>
    <input type="text" class="form-control" name="user_name"id="exampleInputEmail1" style="width:200px;">
   
  </div>
  <div class="mb-3 custom">
    <label for="exampleInputPassword1" class="form-label"><b>Enter Your Choice:</b></label>
    <select class="form-select" name="user"aria-label="Default select example">
  <option value="Rock">Rock</option>
  <option value="Paper">Paper</option>
  <option value="Scissor">Scissor</option>
</select>
  </div>
 
  <button type="submit" class="btn btn-primary" name="btn">Let's Play</button>
</form>
</center>

    <?php 
      
    $user_name = $_GET['user_name'];
    $user = $_GET['user'];
    $num = 0 ;
    $randn= rand(1,3);
    $result="";
    if($randn==1){
        $num="Rock";
    }
    else if($randn==2){
      $num ="Paper";
    }
    else if($randn==3){
        $num ="Scissor";
    }
    // echo $user_name;
    // echo $user;
    // echo $num;
    if($user==$num){
        $result= " Same Choice Not anyone win";
    }
    else if($user=="Rock"&& $num=="Paper"){
        $result= $user_name . " Loose";
    }
    else if($user=="Rock"&& $num=="Scissor"){
        $result= $user_name . " Win";
    }
    else if($user=="Paper"&& $num=="Rock"){
        $result= $user_name . " Win";
    }
    else if($user=="Paper"&& $num=="Scissor"){
        $result=$user_name . " Loose";
    }
    else if($user=="Scisssor"&& $num=="Rock"){
        $result= $user_name . " Loose";
    }else if($user=="Scisssor"&& $num=="Paper"){
        $result= $user_name . " Win";
    }
    
    
    
    
    
    ?>

    </form>
    
    <div class="container">
    <center><h3 style="color:crimson;"><?php echo $user_name?> Choose: </h3><h4 style="color:grey;"><?php echo $user?></h4>
    <h3 style="color:crimson;">Computer Choose: </h3><h4 style="color:grey;"><?php echo $num?></h4>
    <h3 style="color:crimson;">Result: </h3> <h4 style="color:grey;"><?php echo $result?></h4></center></div>
</html>