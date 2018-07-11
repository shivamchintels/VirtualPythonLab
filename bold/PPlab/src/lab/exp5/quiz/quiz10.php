<!doctype html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data type";
    $x = "correct";
    $y = "incorrect";
 
    try
    {
        $conn = mysqli_connect($servername,$username, $password, $dbname);
        //echo("successfully");
    }

    catch (MySQLi_Sql_Exception $ex)
    {
        echo("error");
    }

if(isset($_POST['submit']))
{
    $qus10 = $_POST['qus10'];

     $query = mysqli_prepare($conn, "INSERT INTO `qsn`(`qsn`) VALUES (?)");
    mysqli_stmt_bind_param($query,'s',$qus10);
    $result = mysqli_stmt_execute($query);
 
    try
    {
        //$result = mysqli_stmt_execute($query);
 
        if($result)
        {
            if (mysqli_affected_rows($conn) > 0)
            {
                echo "submitted successfully";
            }

            else
            {
                echo "error in submission";
            }
        }
    }

    catch (Exception $ex)
    {
        echo ("error in connection");
    }

    $querytwo = "select qsn.qsn, answer.ans from answer inner join (select qsn from qsn order by id desc limit 1) as qsn on qsn.qsn = answer.ans";
    $resulttwo = mysqli_query($conn, $querytwo);

    if($resulttwo)
    {
        if (mysqli_affected_rows($conn) > 0)
        {
            $querythree = mysqli_prepare($conn, "INSERT INTO `compare`(`value`) VALUES (?)");
            mysqli_stmt_bind_param($querythree, 's', $x);
            $resultthree = mysqli_stmt_execute($querythree);
        }

        else
        {
            $querythree= mysqli_prepare($conn, "INSERT INTO `compare`(`value`) VALUES (?)");
            mysqli_stmt_bind_param($querythree, 's', $y);
            $resultthree=mysqli_stmt_execute($querythree);
        }
    }
}

$answer = "";

if (isset($_POST['check']))
{
    $queryfour = "select value from compare order by id desc limit 1";
    $resultfour = mysqli_query($conn, $queryfour);

    if ($resultfour)
    {
        if (mysqli_num_rows($resultfour))
        {
            while ($rows = mysqli_fetch_array($resultfour, MYSQL_BOTH))
            {
                $answer = $rows['value'];
            }
        }
    }

    if ($answer == "correct")
    {
        header("location:Quiz.php");

    }

    else
    {

        header("location:quiz10.php");

        //echo "eroor in result";
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz</title>
    </head>
    <body>
        <form action="" method="post">
            <div class="col-xl-2" style="background-color: #eee; font-size: 20px; text-align: center;padding: 5em;margin-top: 6em;">
           
                        <h3 style="font-family: monospace;font-weight: lighter;"><b>10.Suppose listDemo is [3,4,5,20,5,25,1,3]<br>print(listDemo.extend([32,35]) </b></h3>
                        <div class="form-check" style="padding: 4px 28px;">
                       <input name="qus9" type="radio" class="form-check-input with-gap" value="[3,4,5,20,5,25,1,3,32,55]">
                        <label class="form-check-label">[3,4,5,20,5,25,1,3,32,55]</label>
                        </div>
                          <div class="form-check" style="padding: 4px 28px;">
                       <input name="qus9" type="radio" class="form-check-input with-gap" value="[1,3,3,4,5,5,20,25,32,55]">
                        <label class="form-check-label">[1,3,3,4,5,5,20,25,32,55]</label>
                        </div>
                          <div class="form-check" style="padding: 4px 28px;">
                        <input name="qus9" type="radio" class="form-check-input with-gap" value="[25,20,5,5,4,3,3,1,32,55]">
                        <label class="form-check-label">[25,20,5,5,4,3,3,1,32,55]</label>
                        </div>
                          <div class="form-check" style="padding: 4px 28px;">
						<input name="qus9" type="radio" class="form-check-input with-gap" value="[1,3,4,5,20,5,25,3,32,55]">
                        <label class="form-check-label">[1,3,4,5,20,5,25,3,32,55]</label>
                        </div>
                
             
                        <input type="submit" name="submit" value="Submit" style="margin-right: 12em;">
                    
                        <input type="submit" name="check" value="Next" style="padding-left: 1em; padding-right: 1em;">
              
        </div>
    </form>
  </body>
</html>