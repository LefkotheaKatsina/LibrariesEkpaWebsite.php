<?php
    $welcome = "2";
    if (filter_input(INPUT_SERVER,"REQUEST_METHOD") == "POST"){
        if (!empty(filter_input(INPUT_POST,'logOut'))){
            
            $_SESSION["username"] = "";
            $_SESSION["signInMes"]="";
            //session_destroy();
        }
        if(!empty(filter_input(INPUT_POST,'connection'))){
           
            $_SESSION["password"] = filter_input(INPUT_POST, 'password');
            $password = $_SESSION["password"];
            $_SESSION["email"]=  filter_input(INPUT_POST, 'email');
            $email = $_SESSION["email"];
            
            $query = "SELECT * FROM user WHERE email LIKE '$email%'";
            $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
            $row = mysql_fetch_assoc($fetch);
           
            if(!strcmp($row['password'],$password) &&(!strcmp($row['email'],$email))){
               // $_SESSION["welcome"] = "1";
                $welcome = "1";
                $queryname = "SELECT name FROM user WHERE email LIKE '$email%'";
                $fetchname = mysql_query($queryname) or die("Unable to find what you have asked for!");
                $rowname = mysql_fetch_assoc($fetchname);
                $_SESSION["name"] = $rowname['name'];

                $querySurname = "SELECT surname FROM user WHERE email LIKE '$email%'";
                $fetchSurname = mysql_query($querySurname) or die("Unable to find what you have asked for!");
                $rowSurname = mysql_fetch_assoc($fetchSurname);
                $_SESSION["surname"] = $rowSurname['surname'];

                $queryDep = "SELECT department FROM user WHERE email LIKE '$email%'";
                $fetchDep = mysql_query($queryDep) or die("Unable to find what you have asked for!");
                $rowDep = mysql_fetch_assoc($fetchDep);
                $_SESSION["department"] = $rowDep['department'];
                
                $queryidUsers = "SELECT idUsers FROM user WHERE email LIKE '$email%'";
                $fetchidUsers = mysql_query($queryidUsers) or die("Unable to find what you have asked for!");
                $rowidUsers = mysql_fetch_assoc($fetchidUsers);
                $_SESSION["idUsers"]= $rowidUsers['idUsers'];
                
                $queryUsername = "SELECT username FROM user WHERE email LIKE '$email%'";
                $fetchUsername = mysql_query($queryUsername) or die("Unable to find what you have asked for!");
                $rowUsername = mysql_fetch_assoc($fetchUsername);
                $_SESSION["username"]= $rowUsername['username'];
            }
            else{
               $_SESSION["username"] = "";
               //$_SESSION["welcome"] = "0";
               $welcome = 0;
            }
        }
        if(!empty(filter_input(INPUT_POST,'save'))){
            $change_username = filter_input(INPUT_POST, 'usrChan');
            $change_email = filter_input(INPUT_POST, 'emailChan');
            $change_password = filter_input(INPUT_POST,'passChan');
            
            $queryChange = "SELECT * FROM user WHERE email LIKE '$change_email%'";
            $fetchChange = mysql_query($queryChange) or die("Unable to find what you have asked for!");
            $rowChange = mysql_fetch_assoc($fetchChange);
            $rowL = mysql_fetch_lengths($fetchChange);
            if(($rowL != 0) && $rowChange["idUsers"]!=$_SESSION["idUsers"]){
                    $_SESSION["invalidChangeEmail"]= "1";
            }
            else{
                $id = $_SESSION["idUsers"];
                mysql_query("UPDATE user SET  password = '$change_password', email = '$change_email' , username ='$change_username' WHERE idUsers = $id") or die(mysql_error()); 

                $_SESSION["username"] = $change_username;
                $_SESSION["email"] = $change_email;
                $_SESSION["password"] = $change_password;
            }
        }
    }
?>

<html>
    <script>
        $(document).ready(function(){
            $(".alert-danger").click(function(){
                $(this).hide();
            });
        });
    </script>
    
       
<?php  if($_SESSION["username"] != ""){
        $username = $_SESSION["username"];
        $_SESSION["signInMes"]="Καλως Ήρθες, $username";
    } 
    else if($welcome == "0"){
       echo "<div class='alert alert-danger'>
            <strong class='Notwelcome'>Τα στοιχεία που συμπληρώσατε ειναι λανθασμένα!Προσπαθήστε ξανά!</strong>
            </div>";
       //$_SESSION["welcome"] ="2";
       $welcome = 2;
    }
?>
    
<?php if($_SESSION["invalidChangeEmail"] == "1"){
     echo "<div class='alert alert-danger alert-danger-invalidChange'>
            <strong class='Notwelcome'>Το email που εισάγατε χρησιμοποιείται ήδη απο άλλον χρήστη! Η επεξεργασία του Προφίλ σας δεν ολοκληρώθηκε.</strong>
            </div>";
       $_SESSION["invalidChangeEmail"]  ="0";
}
?>
        
<div id="header">
    <div id="headerNavigation">
         <ul class="ulDesignBlack">
            <li> 
            <?php  if($_SESSION["username"] == ""){ 
                echo "<a data-toggle='modal' data-target='#myModal' class='aDesignBlack' href='#'>Σύνδεση<span class='glyphicon glyphicon-user' aria-hidden='true'></a>";
            }
            else if($_SESSION["username"] != ""){
                 $signInMes = $_SESSION['signInMes'];
                 echo "<span id='message'>$signInMes</span> <a id='con' data-toggle='modal' data-target='#myDiscModal' class='aDesignBlack' href='#'>/Αποσύνδεση<span class='glyphicon glyphicon-user' aria-hidden='true'></a>";    
            }
            ?></li>
            <li>
            <?php  if($_SESSION["username"] != ""){ 
                echo "<a data-toggle='modal' data-target='#myProfModal' class='aDesignBlack' href='#'>Το Προφίλ Μου<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>";
            }
            else if($_SESSION["username"] == ""){
                echo "<span></span>";
            }
            ?></li>
            <li id="fontChange">
                <a class="aDesignBlack notActiveA" id="mediumA" href="#"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></a>
                <a class="aDesignBlack" id="largeA" href="#"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></a>
            </li>
        </ul>
    </div>
    
    <div id="headerImage"><a href="index.php"><img src="images/ekpa.png" alt="logoEkpa"/></a></div>
    <div id="headerFont"><a href="index.php"><h1>Βιβλιοθήκες και Υπηρεσίες Πληροφόρησης<br>Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών</h1></a></div>
</div>
    <!-- Modal -->
<div class="modal fade" id="myDiscModal">      
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                  <button type="button" class="close buttonEx" data-dismiss="modal" >&times;</button>
                <div class="modal-header">
                  <h4><span class="glyphicon glyphicon-lock"></span> Αποσύνδεση</h4>
                </div>
                    <form method ="post">
                        <div class="modal-body modal-body-disc">
                            <h3>Είστε σίγουρος ότι θέλετε να αποσυνδεθείτε;</h3><br>
                            <input name="logOut" type="submit" class="btn btn-success btn-block" style="width:356px;" value="Ναι,Αποσυνδέσου">
                            
                        </div>
                  </form>
                  <div class="modal-footer">
                    <form method="post">
                        <input type="submit" value = "Ακύρωση" class="btn btn-danger pull-left">
                    </form>
                  </div>
              </div>
            </div>
</div>

<div class="modal fade" id="myProfModal">     
    <div class="modal-dialog modal-dialog-save">
        <!-- Modal content-->
         <div class="modal-content modal-content-save">
            <button type="button" class="close buttonEx" data-dismiss="modal" >&times;</button>
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία Προφίλ</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                 <div class="row rowC fieldChange">
                     <div class="col-md-6 leftC">
                        <label for="user_Change">Όνομα Χρήστη: </label>
                    </div>
                     <div class="col-md-6 middleC">
                       <input type="text" class="form-control" name="usrChan" id="user_Change" value="<?php echo $_SESSION["username"]?>">
                    </div>
                     <div class="col-md-6 rightC">
                        <span class="error" id="change_err_username"></span>
                    </div>
                </div>
                <div class="row rowC fieldChange">
                    <div class="col-md-6 leftC">
                        <label for="pass_Change">Συνθηματικό: </label>
                    </div>
                     <div class="col-md-6 middleC">
                       <input type="text" class="form-control" name="passChan" id="pass_Change" value="<?php echo $_SESSION["password"]?>">
                    </div>
                     <div class="col-md-6 rightC">
                        <span class="error" id="change_err_password"></span>
                    </div>
                </div>
                    
                <div class="row rowC fieldChange">
                    <div class="col-md-6 leftC">
                        <label for="name_Change">Όνομα: </label>
                    </div>
                    <div class="col-md-6 middleC">
                       <label class = "notChange"><?php echo $_SESSION["name"];?></label> 
                       <input type="hidden" name="name_Change" >
                    </div>
                </div>
                    
                <div class="row rowC fieldChange">
                    <div class="col-md-6 leftC">
                        <label for="surname_Change">Επίθετο: </label>
                    </div>
                    <div class="col-md-6 middleC">
                        <label class = "notChange"><?php echo $_SESSION["surname"];?></label> 
                        <input type="hidden" name="surname_Change">
                    </div>
                </div>
                    
                  <div class="row rowC fieldChange">
                    <div class="col-md-6 leftC">
                         <label for="department_Change">Τμήμα: </label>
                    </div>
                    <div class="col-md-6 middleC">
                        <label class = "notChange"><?php echo $_SESSION["department"];?></label> 
                            <input type="hidden" name="surname_Change" >
                    </div>
                </div>
                    
                <div class="row rowC fieldChange">
                    <div class="col-md-6 leftC">
                        <label for="email_Change">Email: </label>
                    </div>
                    <div class="col-md-6 middleC">
                       <input class="form-control" name="emailChan" id="email_Change" value="<?php echo $_SESSION["email"]?>">
                    </div>
                     <div class="col-md-6 rightC">
                         <span class="error" id="change_err_email"></span>
                    </div>
                </div>
                <div>
                    <input name ="save" id="idSave" type="submit" class="btn btn-success btn-block" value="Αποθήκευση">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                 <form method="post">
                    <input type="submit" value = "Ακύρωση" class="btn btn-danger pull-left">
                 </form>
            </div>
        </div>
    </div>
</div>
    
<div class="modal fade" id="myModal">     
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <button class="close buttonEx" data-dismiss="modal">&times;</button>
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-lock"></span>Σύνδεση</h4>
            </div>
            
            <div class="modal-body">
                <form  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
                    <div class="form-group">
                      <label><span class="glyphicon glyphicon-eye-open"></span>Email<span class="error">*<span id="emailErr" ></span></span></label>
                      <input type="text" class="form-control" id="eml" name="email" placeholder="Εισάγετε Email π.χ someone@something.com">
                    </div>
                    <div class="form-group">
                        <label for="pass"><span class="glyphicon glyphicon-exclamation-sign"></span>Συνθηματικό<span class="error">*<span id="passErr" ></span></span></label>
                      <input type="text" class="form-control" id="pass" name="password" placeholder="Εισάγετε κωδικό">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Θυμήσου Τα Στοιχεία Μου</label>
                    </div>
                    <input type="submit" name="connection" class="btn btn-success btn-block"  onclick="return myFunction()" value = "Σύνδεση">
                </form>
            </div>
            <div class="modal-footer">
                <form method="post">
                    <input type="submit" value = "Ακύρωση" class="btn btn-danger pull-left">
                </form>
                <p>Δεν έχετε λογαριασμό?<a href="#"> Εγγραφή</a></p>
                <!--<p>Ξεχάσατε το Συνθηματικό σας?<a href="#"></a> </p>-->
            </div>
        </div>
    </div>
</div>


    
<script>
    
    $("#idSave").click(function(){
        var userMailReturn;
        var userReturn;
        var passReturn;
        var userMail = $("#email_Change").val();
        var user = $("#user_Change").val();
        var password = $("#pass_Change").val();
        if(!user.trim()){
            document.getElementById("change_err_username").innerHTML = "*Το πεδίο Όνομα Χρήστη είναι Υποχρεωτικό!";
            userReturn = 0;
        }
        else{
            document.getElementById("change_err_username").innerHTML = " ";
            userReturn = 1;
        }
        if(!password.trim()){
            document.getElementById("change_err_password").innerHTML = "*Το πεδίο Συνθηματικό είναι Υποχρεωτικό!";
            passReturn = 0;
        }
        else{
            document.getElementById("change_err_password").innerHTML = " ";
            passReturn = 1;
        }
        if(!userMail.trim()){       //white space or null
            document.getElementById("change_err_email").innerHTML = "*Το πεδίο Email είναι Υποχρεωτικό!";  
            userMailReturn=0;
        }
        else{
            if (!isValidEmail(userMail)){
                document.getElementById("change_err_email").innerHTML = "*Η μορφή του email που καταχωρήσατε είναι λανθασμένη!";
                userMailReturn = 0;                                    
            } //den einai valid                                         
            else{
                document.getElementById("change_err_email").innerHTML = " ";
                userMailReturn = 1;
            }  
        }
        if((userMailReturn === 1) && (userReturn === 1) && (passReturn === 1)){
            return true;
        }
        else{
            return false;
        }
        
    });
    
    
    $("#user_Change").blur(function(){
        var user = $("#user_Change").val();
        if(!user.trim()){
            document.getElementById("change_err_username").innerHTML = "*Το πεδίο Όνομα Χρήστη είναι Υποχρεωτικό!";
        }
        else{
            document.getElementById("change_err_username").innerHTML = " ";
        }
    });
    
    $("#email_Change").blur(function(){
        var userMail = $("#email_Change").val();
        if(!userMail.trim()){
            document.getElementById("change_err_email").innerHTML = "*Το πεδίο Email είναι Υποχρεωτικό!";
        }
        else{
            document.getElementById("change_err_email").innerHTML = " ";
        }
    });
    
    $("#pass_Change").blur(function(){
        var userPass = $("#pass_Change").val();
        if(!userPass.trim()){
            document.getElementById("change_err_password").innerHTML = "*Το πεδίο Συνθηματικό είναι Υποχρεωτικό!";
        }
        else{
            document.getElementById("change_err_password").innerHTML = " ";
        }
    });
   
    $("#pass").blur(function(){
        var password = $("#pass").val();
        if(!password.trim()){
            document.getElementById("passErr").innerHTML = " Το πεδίο Συνθηματικό είναι Υποχρεωτικό!";
        }
        else{
            document.getElementById("passErr").innerHTML = " ";
        }
    });
    
    $("#eml").blur(function(){
        var email = $("#eml").val();
        if(!email.trim()){
            document.getElementById("emailErr").innerHTML = " Το πεδίο Email είναι Υποχρεωτικό!";
        }
        else{
            document.getElementById("emailErr").innerHTML = " ";
        }
    });
 
    function myFunction(){
        var password = $("#pass").val();
        var passwordRtn,emailRtn;
        var email = $("#eml").val();
        if(!password.trim()){
            document.getElementById("passErr").innerHTML = " Το πεδίο Συνθηματικό είναι Υποχρεωτικό!";  
            passwordRtn=0;
        }
        else{
            document.getElementById("passErr").innerHTML = " ";
            passwordRtn=1;
        }
        
        if(!email.trim()){       //white space or null
            document.getElementById("emailErr").innerHTML = " Το πεδίο Email είναι Υποχρεωτικό!";  
            emailRtn=0;
        }
        else{
            if (!isValidEmail(email)){
                document.getElementById("emailErr").innerHTML = " Η μορφή του email που καταχωρήσατε είναι λανθασμένη!";
                emailRtn = 0;
            } //den einai valid
            else{
                document.getElementById("emailErr").innerHTML = " ";
                emailRtn = 1;
            }  
        }
        if(passwordRtn === 1 && emailRtn === 1){
            return true;
        }
        else{
            return false;
        }
    }
    
    function isValidEmail(strEmail){
        validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        if (strEmail.search(validRegExp) === -1){
        return false;
        }
        return true;
    }

</script>
</html>

