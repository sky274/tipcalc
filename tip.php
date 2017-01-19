<html>

<head>

    <style>

        h3{
            text-align: center;
        }

        body{
            border: 1px solid black;
            width: 700px;
            margin: 0px auto;
            margin-bottom: 300px;
        }
        
        div{
            text-align: center;
            border: 5px solid #999;
            margin: 0px auto;
            margin-top: 20px;
            width: 500px;
            padding: 10px;
            color:blue;
            background: #FAFAD2;
        }
        
        form{
            border: 5px solid #999;
            width: 500px;
            text-align: center;         
            background:#7FFFD4;
            padding: 10px;
            margin: 0px auto;
        }


    </style>

    <title>Tip Calculator</title>

</head>

<body>

    <h3>Tip Calculator</h3>

    <form action="" method="post">  

        Bill: 
        <input type="text" name="bill" value="<?php echo isset($_POST['bill']) ? $_POST['bill'] : '0' ?>" />
        <p></p>
        
        Tip:
        <?php
            for($i = 10; $i <= 20; $i +=5){
        ?>
                
            <input type= "radio" name= "percent" value= "<?php echo $i; ?>" <?php if (isset($_POST['percent']) && $_POST['percent']== "$i") echo "checked";?> /> <?php echo $i; ?>%           
         <?php
        }
         ?>

         <p></p>
         
         <input type="submit" name= "calculate"  />   


       

    </form>

    <?php
    if(isset($_POST['calculate'])){
     if( isset($_POST['percent'])&& is_numeric($_POST['bill']) && $_POST['bill'] > 0){
        $bill = $_POST['bill'];
        $percent = $_POST["percent"];  
    ?>
    
    <div>
        <?php

            $tip = $bill * ($percent/ 100);
            echo "Tip = $".$tip . "</br>";

            $total = $tip + $bill;
            echo "Total = $" . $total;
        ?>
     </div>  
    
    <?php          
    }
    else{
    ?>
    <div>
        <?php

            echo "check tip amount and/or bill amount";
        ?>
     </div> 
    <?php
    }
}
    ?>

</body>

</html>
