<!doctype html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "websitequiz";
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
    $qus4 = $_POST['qus4'];

    $query = mysqli_prepare($conn, "INSERT INTO `qsn`(`qsn`) VALUES (?)");
    mysqli_stmt_bind_param($query,'s',$qus4);
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
        header("location:quiz5.php");

    }

    else
    {

        header("location:quiz4.php");

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
           
                        <h3 style="font-family: monospace;font-weight: lighter;">4.What is the order of precedence in Python?
                            <br>i) Division
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>ii) Exponential
                            &nbsp;&nbsp;&nbsp;&nbsp;<br>iii) Multiplication
                            &nbsp;&nbsp;<br>iv) Parentheses
                           &nbsp;&nbsp;&nbsp; <br>v) Addition
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>vi) Subtraction&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                        <div class="form-check" style="padding: 4px 28px;">
                   <input name="qus4" type="radio" class="form-check-input with-gap" value="ii,iv,iii,i,v,vi">
                        <label class="form-check-label">ii,iv,iii,i,v,vi</label>
                        </div>
                          <div class="form-check" style="padding: 4px 28px;">
                       <input name="qus4" type="radio" class="form-check-input with-gap" value="iv,ii,iii,i,vi,v">
                        <label class="form-check-label">iv,ii,iii,i,vi,v</label>
                        </div>
                           <div class="form-check" style="padding: 4px 28px;">
                    <input name="qus4" type="radio" class="form-check-input with-gap" value="ii,iv,i,iii,v,vi">
                        <label class="form-check-label">ii,iv,i,iii,v,vi</label>
                        </div>
                          <div class="form-check" style="padding: 4px 28px;">
                        <input name="qus4" type="radio" class="form-check-input with-gap" value="iv,ii,iii,i,v,vi">
                        <label class="form-check-label">iv,ii,iii,i,v,vi</label>
                        </div>
                       
                
             
                        <input type="submit" name="submit" value="Submit" style="margin-right: 12em; margin-top: 3em;">
                    
                        <input type="submit" name="check" value="Next" style="padding-left: 1em; padding-right: 1em;margin-top: 3em;">
    </form>
    </body>
</html>