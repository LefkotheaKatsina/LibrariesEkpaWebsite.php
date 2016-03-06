<?php
   session_start();
?>
<?php
    $output= "" ;
    $number = 0;
    $j=0;
    $id = array();
    $address = array();
    $telNum = array();
    $email = array();
    $libName = array();
    $department = array();
    $website=array();
  
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dberror1 = "Could not connect to the database!!";
    
    $conn = mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
    $select_db = mysql_select_db('eam_2016') or die("Could not select database");
    mysql_set_charset('utf8',$conn); 
    if (filter_input(INPUT_SERVER,"REQUEST_METHOD") == "GET"){
        if (!empty(filter_input(INPUT_GET,'Lib'))){
             $_SESSION["fieldTermLib"] = filter_input(INPUT_GET, 'fieldTermLib');
             $fieldTermLib = $_SESSION["fieldTermLib"];
            $searchTermLib = filter_input(INPUT_GET, 'searchTermLib');

            if(strcmp($fieldTermLib,'Όλα Τα Πεδία')==0){
                if(!empty(filter_input(INPUT_GET,'searchTermLib'))){
                    $query = "SELECT * FROM libraries WHERE (libName LIKE '$searchTermLib' OR address LIKE '$searchTermLib' OR department LIKE '$searchTermLib')";
                    $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
                    $num_rows = mysql_num_rows($fetch);
                    $_SESSION["queryLib"] = $query;
                }
                else{
                    $num_rows = 0;
                }
               
             }
            if(strcmp($fieldTermLib,'Όνομα')==0){
                $query = "SELECT * FROM libraries WHERE libName LIKE '$searchTermLib'";
                $fetchLibraryName = mysql_query($query);
                $num_rows = mysql_num_rows($fetchLibraryName);
                $_SESSION["queryLib"] = $query;
            }
            if(strcmp($fieldTermLib,'Διεύθυνση')==0){
                $query = "SELECT * FROM libraries WHERE address LIKE '$searchTermLib'";
                $fetchAdr = mysql_query($query) or die("Unable to find what you have asked for!");
                $num_rows = mysql_num_rows($fetchAdr);
                $_SESSION["queryLib"] = $query;
            }
            if(strcmp($fieldTermLib,'Τμήμα')==0){
                $query = "SELECT * FROM libraries WHERE department LIKE '$searchTermLib'";
                $fetchDep = mysql_query($query) or die("Unable to find what you have asked for!");
                $num_rows = mysql_num_rows($fetchDep);
                $_SESSION["queryLib"] = $query;
            }
            
        }
        
    }
    if($_SESSION["queryLib"] != ""){
        $query = $_SESSION["queryLib"];
        $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
        $num_rows = mysql_num_rows($fetch);
       //echo $num_rows;
       // echo "<br>";
        while( $row = mysql_fetch_array($fetch) ){
            $arr_rows[] = $row;
            $_SESSION['arr_rowsLib'] = $arr_rows;
        }
        //session_unset($_SESSION["query"]);
    }
    
echo '<html>';


include 'header.php';

    echo '<body id="body">
        <div id="allcontentSearch" class="borderDesign">';

            include "body_header.php";
           
              
              
            include "body_main_nav.php";

            echo '<div class="mainSearchpage">
                <div class="navbar navbar-default navSearchClass" role="navigation">
                    <div class="row rowClass">
                         <div class="col-md-6 leftCol">
                            <div class="navbar-form navbar-formClass" role="search">
                            <form method ="get" class="form" role="search" name="Lib">
                                <div class="btn-group btn-groupClass">
                                    <select name="fieldTermLib" class="selectFieldSearch">
                                        <option>Όλα Τα Πεδία</option>
                                        <option>Όνομα</option>
                                        <option>Διεύθυνση</option>
                                        <option>Τμήμα</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="searchTermLib" id="srch-term">
                                    <div class="input-group-btn">
                                       <input name="Lib" class="btn btn-default" type="submit" value="Αναζήτηση">
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-6 rightCol">
                            <ul class="nav navbar-nav navbarClass">
                                <li><a href="listEdit.php">Η Λίστα Μου</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb">
                    <li><a class="aDesignBlue" href="index.php">Αρχική</a></li>
                    <li>Υπηρεσίες&amp;Δυνατότητες</li>
                    <li>Αναζήτηση Υλικού</li>
                </ul>
                <div class="mainSearch">';
                    if($_SESSION["queryLib"]==""){
                        echo '<div class="paragraphs pull-right">
                        <div class="tip">
                            <div class="tipInfo pull-right">
                                <h3>Συμβουλές Αναζήτησης Βιβλιοθήκη</h3>
                                <p class="paragraph borderDesign">1. Eπιλέξτε το πεδίο στο οποίο θέλετε να γίνει η Aναζήτηση.<br>2. Συμπληρώστε το κουτί αναζήτησης με κάποιον όρο της επιλογής σας.<br>
                                3. Πατήστε το κουμπί <Αναζήτηση>.</p>
                            </div>
                            <img class="imageDesign tipImage"src="images/composer.jpg" width="140" height="140" alt="searchParagraph"/>
                        </div>
                        <div class="tip">
                            <div class="tipInfo pull-right">
                                <h3>Συμβουλές Περιορισμού Αποτελεσμάτων Αναζήτησης</h3>
                                <p class="paragraph borderDesign">1. Χρησιμοποιήστε την αριστερή μπάρα οριοθέτησης προκειμένου να περιορίσετε τα αποτελέσματα της αναζητησής σας.
                                <br>2. Όσο περισσότερα πεδία επιλέγετε, τόσο πιο περιορισμένα θα είναι τα αποτελέσματα της αναζήτησης.
                                </p>
                            </div>
                            <img class="imageDesign tipImage" src="images/limitSearch.jpg" width="140" height="140" alt="searchParagraph"/>
                        </div>
                    </div>';
                    }
                   else{
                       echo '<div class="mainSearchArea pull-right">';
                    //if (!empty(filter_input(INPUT_GET,'simple'))){
                        $lenght = 0;
                        if(strcmp($_SESSION["fieldTermLib"] ,"Όλα Τα Πεδία")==0){
                            if($num_rows == 0){
                                $output = "No Results Found";
                            }
                            else if($num_rows !=0 && $_SESSION["queryLib"]==""){
                                $i=0;
                                while($i<$num_rows){
                                    $id[$lenght] = $row["idLibraries"];
                                    $libName[$lenght] = $row["libName"];
                                    $address[$lenght] = $row["address"];
                                    $telNum[$lenght] = $row["telNum"];
                                    $email[$lenght] = $row["email"];
                                    $website[$lenght] = $row["website"];
                                    $department[$lenght] = $row["department"];
                                    $lenght++;
                                    $i++;
                                }
                                $number = $num_rows;
                           }
                           else{
                               $i=0;
                               while($i<$num_rows){
                                    $id[$lenght] = $_SESSION['arr_rowsLib'][$i]["idLibraries"];
                                    $libName[$lenght] = $_SESSION['arr_rowsLib'][$i]["libName"];
                                    $address[$lenght] = $_SESSION['arr_rowsLib'][$i]["address"];
                                    $telNum[$lenght] = $_SESSION['arr_rowsLib'][$i]["telNum"];
                                    $email[$lenght] = $_SESSION['arr_rowsLib'][$i]["email"];
                                    $website[$lenght] = $_SESSION['arr_rowsLib'][$i]["website"];
                                    $department[$lenght] = $_SESSION['arr_rowsLib'][$i]["department"];
                                    $lenght++;
                                    $i++;
                                }
                                $number = $num_rows;
                           }
                        }
                        if(strcmp($_SESSION["fieldTermLib"],"Όνομα")==0){
                                if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows != 0 && $_SESSION["queryLib"]==""){
                                    while($row = mysql_fetch_array($fetchLibraryName)){
                                        $id[$lenght] = $row["idLibraries"];
                                        $libName[$lenght] = $row["libName"];
                                        $address[$lenght] = $row["address"];
                                        $telNum[$lenght] = $row["telNum"];
                                        $email[$lenght] = $row["email"];
                                        $website[$lenght] = $row["website"];
                                        $department[$lenght] = $row["department"];
                                        $lenght++;
                                        $i++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                    while($i<$num_rows){
                                         $id[$lenght] = $_SESSION['arr_rowsLib'][$i]["idLibraries"];
                                         $libName[$lenght] = $_SESSION['arr_rowsLib'][$i]["libName"];
                                         $address[$lenght] = $_SESSION['arr_rowsLib'][$i]["address"];
                                         $telNum[$lenght] = $_SESSION['arr_rowsLib'][$i]["telNum"];
                                         $email[$lenght] = $_SESSION['arr_rowsLib'][$i]["email"];
                                         $website[$lenght] = $_SESSION['arr_rowsLib'][$i]["website"];
                                         $department[$lenght] = $_SESSION['arr_rowsLib'][$i]["department"];
                                         $lenght++;
                                         $i++;
                                     }
                                     $number = $num_rows;
                               }
                            }
                            if(strcmp($_SESSION["fieldTermLib"],"Διεύθυνση")==0){
                               if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows != 0 &&  $_SESSION["queryLib"]==""){
                                    while($row = mysql_fetch_array($fetchAdr)){
                                        $id[$lenght] = $row["idLibraries"];
                                        $libName[$lenght] = $row["libName"];
                                        $address[$lenght] = $row["address"];
                                        $telNum[$lenght] = $row["telNum"];
                                        $email[$lenght] = $row["email"];
                                        $website[$lenght] = $row["website"];
                                        $department[$lenght] = $row["department"];
                                        $lenght++;
                                        $i++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                     while($i<$num_rows){
                                         $id[$lenght] = $_SESSION['arr_rowsLib'][$i]["idLibraries"];
                                         $libName[$lenght] = $_SESSION['arr_rowsLib'][$i]["libName"];
                                         $address[$lenght] = $_SESSION['arr_rowsLib'][$i]["address"];
                                         $telNum[$lenght] = $_SESSION['arr_rowsLib'][$i]["telNum"];
                                         $email[$lenght] =$_SESSION['arr_rowsLib'][$i]["email"];
                                         $website[$lenght] = $_SESSION['arr_rowsLib'][$i]["website"];
                                         $department[$lenght] = $_SESSION['arr_rowsLib'][$i]["department"];
                                         $lenght++;
                                         $i++;
                                     }
                                     $number = $num_rows;
                               }
                            }
                            if(strcmp($_SESSION["fieldTermLib"],"Τμήμα")==0){
                                if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows!=0 && $_SESSION["queryLib"]==""){
                                    while($row = mysql_fetch_array($fetchDep)){
                                        $id[$lenght] = $row["idLibraries"];
                                        $libName[$lenght] = $row["libName"];
                                        $address[$lenght] = $row["address"];
                                        $telNum[$lenght] = $row["telNum"];
                                        $email[$lenght] = $row["email"];
                                        $website[$lenght] = $row["website"];
                                        $department[$lenght] = $row["department"];
                                        $lenght++;
                                        $i++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                     while($i<$num_rows){
                                         $id[$lenght] = $_SESSION['arr_rowsLib'][$i]["idLibraries"];
                                         $libName[$lenght] = $_SESSION['arr_rowsLib'][$i]["libName"];
                                         $address[$lenght] = $_SESSION['arr_rowsLib'][$i]["address"];
                                         $telNum[$lenght] = $_SESSION['arr_rowsLib'][$i]["telNum"];
                                         $email[$lenght] = $_SESSION['arr_rowsLib'][$i]["email"];
                                         $website[$lenght] = $_SESSION['arr_rowsLib'][$i]["website"];
                                         $department[$lenght] = $_SESSION['arr_rowsLib'][$i]["department"];
                                         $lenght++;
                                         $i++;
                                     }
                                      $number = $num_rows;
                               }
                            }
                     //  }
                       echo '<h4 class="resultsLabel" >(';echo $number ;echo')  Αποτελέσματα</h4>';
                       echo' <form class="formResult">
                            <div class="dropdown filterBtn orderLib">
                                  <button id="filterButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ταξινόμηση Ανά
                                  <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#orderByAuthor">Όνομα</a></li>
                                      <li><a>Διεύθυνση</a></li>
                                      <li><a>Τμήμα</a></li>
                                  </ul>
                            </div>
                        </form>';
                        if($number == 0){
                             echo '<h3>Κανένα Αποτέλεσμα</h3>';
                        }
                        $i = 0;
                        while($i<$number){
                            echo'<div class="searchResult">
                             <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>';echo $telNum[$i];echo'</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>';echo $email[$i];echo'</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/libraryIcon.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                Βιβλιοθήκη: <a class="aDesignBlue" href="#">';echo $libName[$i];echo'</a><br><br>
                                <p class="address"><b>Τμήμα: </b>';echo $department[$i];echo'</p>
                                <p><b>Διεύθυνση:<br></b>';echo $address[$i];echo'</p>
                            </div>
                            </div>';
                            $i++;       
                        }    
                        
                    echo '</div>';
                   }
                   echo'
                    <div class="side menu">
                        <h4 class="limit">Περιορίστε την Αναζήτησή σας</h4>
                            <nav class="navbar navbar-default sidebar side" role="navigation">
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav sidenav navbar-w">
                                    <li class=" dropdown keep-open open"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Τμήμα<span class="caret caretClass"></span></a>
                                        <ul class="dropdown-menu forAnimate" role="menu">
                                            <li><a class="fields" href="#">Νομική</a></li>
                                            <li><a class="fields" href="#">Ιατρική</a></li>
                                            <li><a class="fields" href="#">Φιλοσοφική</a></li>
                                            <li><a class="fields" href="#">Πληροφορική</a></li>
                                            <li><a class="fields" href="#">Θεολογική</a></li>
                                        </ul>
                                    </li>
                                    <li class=" dropdown keep-open lastLi"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Διεύθυνση<span class="caret caretClass"></span></a>
                                        <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a class="fields" href="#">Ιπποκράτους 33</a></li>
                                        <li><a class="fields" href="#">Μικράς Ασίας και Δήλου 1</a></li>
                                        <li><a class="fields" href="#">Πανεπιστημιούπολη</a></li>
                                      </ul>
                                    </li>

                                 </ul>

                            </div>
                        </nav>

            </div>';
      echo '</div>';
      echo '</div>';
     include "footer.php";
     echo'</div>
    </body>';
echo '<div class="modal fade" id="lended">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <button type="button " class="close buttonEx" data-dismiss="modal">&times;</button>
            <div class="modal-header">
                <h2>Αίτηση Κράτησης Αντιτύπου</h2>
            </div>

            <div class="modal-body">
                <form  method="post" role="form">
                    <h3>Είστε σίγουρος ότι θέλετε να προχωρήσετε στο δανεισμό του αντιτύπου; Αν ναι, τα στοιχεία δανεισμού θα σταλθούν στο email ';echo $_SESSION["email"];echo'</h3>
                    <input name="isLend" type="submit" class="btn btn-success btn-block" value="Ναι">
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ακύρωση</button>
            </div>
        </div>
    </div>
</div>';
echo '</html>';


