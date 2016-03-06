<?php
    session_start();
   
    $output= "" ;
    $number = 0;
    $j=0;
    $id = array();
    $title = array();
    $type = array();
    $author = array();
    $libName = array();
    $returnDate = array();
    $publicationDate = array();
    $arr_rows = array();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dberror1 = "Could not connect to the database!!";
    
    $conn = mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
    $select_db = mysql_select_db('eam_2016') or die("Could not select database");
    mysql_set_charset('utf8',$conn); 
    if (filter_input(INPUT_SERVER,"REQUEST_METHOD") == "GET"){
        if (!empty(filter_input(INPUT_GET,'simple'))){
            $_SESSION["fieldTermComp"] = filter_input(INPUT_GET, 'fieldTermComp');
            $fieldTermComp =  $_SESSION["fieldTermComp"];
            $searchTermComp = filter_input(INPUT_GET, 'searchTermComp');

            if(strcmp($fieldTermComp,'Όλα Τα Πεδία')==0){
                if(!empty(filter_input(INPUT_GET,'searchTermComp'))){
                    $query = "SELECT * FROM documents WHERE (title LIKE '$searchTermComp' OR libName LIKE '$searchTermComp')";
                    $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
                    $num_rows = mysql_num_rows($fetch);
                    if($num_rows == 0){
                        $query = "SELECT * FROM documents WHERE author LIKE '$searchTermComp'";
                        $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
                        $num_rows = mysql_num_rows($fetch);
                    }
                    $_SESSION["query"] = $query;
                }
                else{
                    $num_rows = 0;
                }
                 
             }
            if(strcmp($fieldTermComp,'Συγγραφέας')==0){
                $query = "SELECT * FROM documents WHERE author LIKE '$searchTermComp'";
                $fetchAuthor = mysql_query($query);
                $num_rows = mysql_num_rows($fetchAuthor);
                $_SESSION["query"] = $query;
            }
            if(strcmp($fieldTermComp,'Τίτλος')==0){
                $query = "SELECT * FROM documents WHERE title LIKE '$searchTermComp'";
                $fetchTitle = mysql_query($query) or die("Unable to find what you have asked for!");
                $num_rows = mysql_num_rows($fetchTitle);
                 $_SESSION["query"] = $query;
            }
            if(strcmp($fieldTermComp,'Βιβλιοθήκη')==0){
                $query = "SELECT * FROM documents WHERE libName LIKE '$searchTermComp'";
                $fetchlibName = mysql_query($query) or die("Unable to find what you have asked for!");
                $num_rows = mysql_num_rows($fetchlibName);
                 $_SESSION["query"] = $query;
            }
        }
    }
    
    if($_SESSION["query"] != ""){
        $query = $_SESSION["query"];
        $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
        $num_rows = mysql_num_rows($fetch);
      //  echo $num_rows;
       // echo "<br>";
        while( $row = mysql_fetch_array($fetch) ){
            $arr_rows[] = $row;
            $_SESSION['arr_rows'] = $arr_rows;
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
                            <form method ="get" class="form" role="search" name="simple">
                                <div class="btn-group btn-groupClass">
                                    <select name="fieldTermComp" class="selectFieldSearch">
                                        <option>Όλα Τα Πεδία</option>
                                        <option>Συγγραφέας</option>
                                        <option>Τίτλος</option>
                                        <option>Βιβλιοθήκη</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="searchTermComp" id="srch-term">
                                    <div class="input-group-btn">
                                       <input name="simple" class="btn btn-default" type="submit" value="Αναζήτηση">
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
                    if($_SESSION["query"]==""){
                    echo '<div class="paragraphs pull-right">
                        <div class="tip">
                            <div class="tipInfo pull-right">
                                <h3>Συμβουλές Αναζήτησης Υλικού</h3>
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
                        if(strcmp( $_SESSION["fieldTermComp"],"Όλα Τα Πεδία")==0){
                            if($num_rows == 0){
                                $output = "No Results Found";
                            }
                            else if($num_rows != 0 && $_SESSION["query"]==""){
                                echo "alalal";
                              while($row = mysql_fetch_array($fetch)){
                                    $id[$lenght] = $row["idDocuments"];
                                    $title[$lenght] = $row["title"];
                                    $type[$lenght] = $row["type"];
                                    $author[$lenght] = $row["author"];
                                    $libName[$lenght] = $row["libName"];
                                    $isLended[$lenght] = $row["isLended"];
                                    $returnDate[$lenght] = $row["returnDate"];
                                    $publicationDate[$lenght] = $row["publicationDate"];
                                    $lenght++;
                                }
                                $number = $num_rows;
                           }
                           else{
                               $i=0;
                               while($i<$num_rows){
                                    $id[$i] =  $_SESSION['arr_rows'][$i]["idDocuments"];
                                    $title[$i] = $_SESSION['arr_rows'][$i]["title"];
                                    $type[$i] = $_SESSION['arr_rows'][$i]["type"];
                                    $author[$i] = $_SESSION['arr_rows'][$i]["author"];
                                    $libName[$i] = $_SESSION['arr_rows'][$i]["libName"];
                                    $isLended[$i] = $_SESSION['arr_rows'][$i]["isLended"];
                                    $returnDate[$i] = $_SESSION['arr_rows'][$i]["returnDate"];
                                    $publicationDate[$i] = $_SESSION['arr_rows'][$i]["publicationDate"];
                                    $i++;
                               }
                               $number = $num_rows;
                              // session_unset($_SESSION['arr_rows']);
                           }
                        }
                        if(strcmp( $_SESSION["fieldTermComp"],"Συγγραφέας")==0){
                                if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows != 0 && $_SESSION["query"]== "") {
                                    while($row = mysql_fetch_array($fetchAuthor)){
                                        $id[$lenght] = $row["idDocuments"];
                                        $title[$lenght] = $row["title"];
                                        $type[$lenght] = $row["type"];
                                        $author[$lenght] = $row["author"];
                                        $libName[$lenght] = $row["libName"];
                                        $isLended[$lenght] = $row["isLended"];
                                        $returnDate[$lenght] = $row["returnDate"];
                                        $publicationDate[$lenght] = $row["publicationDate"];
                                        $lenght++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                    while($i<$num_rows){
                                         $id[$i] =  $_SESSION['arr_rows'][$i]["idDocuments"];
                                         $title[$i] = $_SESSION['arr_rows'][$i]["title"];
                                         $type[$i] = $_SESSION['arr_rows'][$i]["type"];
                                         $author[$i] = $_SESSION['arr_rows'][$i]["author"];
                                         $libName[$i] = $_SESSION['arr_rows'][$i]["libName"];
                                         $isLended[$i] = $_SESSION['arr_rows'][$i]["isLended"];
                                         $returnDate[$i] = $_SESSION['arr_rows'][$i]["returnDate"];
                                         $publicationDate[$i] = $_SESSION['arr_rows'][$i]["publicationDate"];
                                         $i++;
                                    }
                                    $number = $num_rows;
                                  //  session_unset($_SESSION['arr_rows']);
                                }
                            }
                            if(strcmp( $_SESSION["fieldTermComp"],"Τίτλος")==0 ){
                               if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows != 0 && $_SESSION["query"]== ""){
                                    while($row = mysql_fetch_array($fetchTitle)){
                                        $id[$lenght] = $row["idDocuments"];
                                        $title[$lenght] = $row["title"];
                                        $type[$lenght] = $row["type"];
                                        $author[$lenght] = $row["author"];
                                        $libName[$lenght] = $row["libName"];
                                        $isLended[$lenght] = $row["isLended"];
                                        $returnDate[$lenght] = $row["returnDate"];
                                        $publicationDate[$lenght] = $row["publicationDate"];
                                        $lenght++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                    while($i<$num_rows){
                                         $id[$i] =  $_SESSION['arr_rows'][$i]["idDocuments"];
                                         $title[$i] = $_SESSION['arr_rows'][$i]["title"];
                                         $type[$i] = $_SESSION['arr_rows'][$i]["type"];
                                         $author[$i] = $_SESSION['arr_rows'][$i]["author"];
                                         $libName[$i] = $_SESSION['arr_rows'][$i]["libName"];
                                         $isLended[$i] = $_SESSION['arr_rows'][$i]["isLended"];
                                         $returnDate[$i] = $_SESSION['arr_rows'][$i]["returnDate"];
                                         $publicationDate[$i] = $_SESSION['arr_rows'][$i]["publicationDate"];
                                         $i++;
                                    }
                                    $number = $num_rows;
                                    //session_unset($_SESSION['arr_rows']);
                                }
                            }
                            if(strcmp( $_SESSION["fieldTermComp"],"Βιβλιοθήκη")==0){
                                if($num_rows == 0){
                                    $output = "No Results Found";
                                }
                                else if($num_rows != 0 && $_SESSION["query"]== ""){
                                    while($row = mysql_fetch_array($fetchlibName)){
                                        $id[$lenght] = $row["idDocuments"];
                                        $title[$lenght] = $row["title"];
                                        $type[$lenght] = $row["type"];
                                        $author[$lenght] = $row["author"];
                                        $libName[$lenght] = $row["libName"];
                                        $isLended[$lenght] = $row["isLended"];
                                        $returnDate[$lenght] = $row["returnDate"];
                                        $publicationDate[$lenght] = $row["publicationDate"];
                                        $lenght++;
                                    }
                                    $number = $num_rows;
                                }
                                else{
                                    $i=0;
                                    while($i<$num_rows){
                                         $id[$i] =  $_SESSION['arr_rows'][$i]["idDocuments"];
                                         $title[$i] = $_SESSION['arr_rows'][$i]["title"];
                                         $type[$i] = $_SESSION['arr_rows'][$i]["type"];
                                         $author[$i] = $_SESSION['arr_rows'][$i]["author"];
                                         $libName[$i] = $_SESSION['arr_rows'][$i]["libName"];
                                         $isLended[$i] = $_SESSION['arr_rows'][$i]["isLended"];
                                         $returnDate[$i] = $_SESSION['arr_rows'][$i]["returnDate"];
                                         $publicationDate[$i] = $_SESSION['arr_rows'][$i]["publicationDate"];
                                         $i++;
                                    }
                                   $number = $num_rows;
                                  //  session_unset($_SESSION['arr_rows']);
                                }
                            }
                     //  }
                       echo '<h4 class="resultsLabel" >(';echo $number ;echo')  Αποτελέσματα</h4>';
                       echo' <form class="formResult">
                            <div class="pull-right box">
                              <!--<span data-toggle="tooltip" title="" class="glyphicon glyphicon-question-sign pull-right"></span>-->
                              <input type="checkbox" name="addAllToList" value="addAllToList">
                            </div>
                            <span class="checkBox pull-right">Προσθήκη Όλων στη Λίστα</span>
                            <div class="dropdown filterBtn">
                                  <button id="filterButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ταξινόμηση Ανά
                                  <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#orderByAuthor">Συγγραφέα</a></li>
                                      <li><a>Τίτλο</a></li>
                                      <li><a>Χρονιά (καινούριο προς παλιό)</a></li>
                                      <li><a>Χρονιά (παλιό προς καινούριο)</a></li>
                                  </ul>
                            </div>
                        </form>';
                        if($number == 0){
                             echo '<h3>Κανένα Αποτέλεσμα</h3>';
                        }
                        $i = 0;
                        while($i<$number){
                        echo '<div class="searchResult">
                            <div class="pull-right boxInner">
                              <!--<span data-toggle="tooltip" title="" class="glyphicon glyphicon-question-sign pull-right"></span>-->
                              <input type="checkbox" name="addAllToList" value="addAllToList">
                            </div>
                            <span class="checkBox pull-right">Προσθήκη στη Λίστα</span>';
                            echo'<h4>';echo $j+1;echo".";echo'<a href="#" class="aDesignBlack">'; echo $title[$i];echo'</a>';echo'   [';echo  mb_strcut($publicationDate[$i],0,4);echo']';echo'</h4><br>';
                            echo '<span>Είδος Υλικού: </span><span>';if(strcmp($type[$i],"book")==0){echo "Βιβλίο";} else{ echo "Άρθρο";} echo'</span><br>';
                            echo'<span>Συγγραφέας: </span><span>';echo $author[$i];echo'</span><br>';

                            echo'<div class="accordion-sections">
                                <div class="accordion-section location">
                                    <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="header dropdown-toggle">
                                                <span class="section-label">Που μπορώ να το βρώ;</span>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        <span>Βιβλιοθήκη: <a class="aDesignBlue" href="#">';echo $libName[$i];echo'</a></span>
                                            <div class="dropdown-menu resultInfo">
                                            <table class="tableResultInfo tableDesign">
                                                    <tr><th>Αντίτυπα</th><th>Διαθεσιμότητα</th><th></th><th></th></tr>';
                                                    $copy=0;
                                                    while(1){
                                                        echo'<tr><td>Αντίτυπο';echo $copy+1;echo'</td><td>';if($isLended[$i]==1){echo'
                                                        <span class="glyphicon glyphicon-remove"></span>Δανεισμένο</td><td>Θα είναι διαθέσιμο στις:<br> ';echo mb_strcut($returnDate[$i],0,10);echo'</td></td><td></td></tr>';}
                                                        else{
                                                            echo'<span class="glyphicon glyphicon-ok"></span>Διαθέσιμο</td><td>';
                                                            if($_SESSION["username"]==""){
                                                               echo '<td><button type="submit" class="btn btn-success disabled btnDesign" data-toggle="tooltip" title="Πρέπει να κάνετε Σύνδεση για να πραγματοποιήσετε Αίτηση Κράτησης">Αίτηση Κράτησης</button></td></tr>';
                                                            }
                                                           else{
                                                               echo '<td><button type="submit" data-toggle="modal" data-target="#lended" class="btn btn-success btnDesign">Αίτηση Κράτησης</button></td></tr>';
                                                           }
                                                        }
                                                        $copy++;
                                                        if($i == $number-1){
                                                            break;
                                                        }
                                                        if($i+1 < $number){
                                                            if(strcmp($title[$i],$title[$i+1])!=0){
                                                                break;
                                                            }
                                                        }
                                                        $i++;
                                                    }


                                           echo' </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        $i++;
                        $j++;
                        }
                    echo '</div>';
                   }
                   echo'
                    <div class="side menu">
                        <h4 class="limit">Περιορίστε την Αναζήτησή σας</h4>
                            <nav class="navbar navbar-default sidebar side" role="navigation">
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav sidenav">
                                    <li class=" dropdown keep-open open"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Είδος Υλικού<span class="caret caretClass"></span></a>
                                        <ul class="dropdown-menu forAnimate" role="menu">
                                            <li><a class="fields" href="#kindBook"><span class="glyphicon glyphicon-book"></span>Βιβλία</a></li>
                                            <li><a class="fields" href="#"><span class="glyphicon glyphicon-envelope"></span>Εφημερίδες</a></li>
                                        </ul>
                                    </li>
                                    <!--<li class=" dropdown keep-open"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Θέμα<span class="caret caretClass"></span></a>
                                      <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a class="fields" href="#">Βιολογία</a></li>
                                        <li><a class="fields" href="#">Θρησκεία</a></li>
                                        <li><a class="fields" href="#">Μαθηματικά</a></li>
                                        <li><a class="fields" href="#">Χημεία</a></li>
                                        <li><a class="fields" href="#">Ψυχολογία</a></li>
                                      </ul>
                                    </li>-->
                                    <li class=" dropdown keep-open open"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Συγγραφέας<span class="caret caretClass"></span></a>
                                      <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a class="fields" href="#">Alexopoulos</a></li>
                                        <li><a class="fields" href="#">Georgatsos</a></li>
                                        <li><a class="fields" href="#">Liu</a></li>
                                        <li><a class="fields" href="#">Mastrodimitris</a></li>
                                        <li><a class="fields" href="#">Papasteriou</a></li>
                                        <li><a class="fields" href="#">Rassias</a></li>
                                      </ul>
                                    </li>
                                    <li class=" dropdown keep-open"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Βιβλιοθήκη<span class="caret caretClass"></span></a>
                                        <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a class="fields" href="#">Επιστημών Υγείας</a></li>
                                        <li><a class="fields" href="#">Θετικών Επιστημών</a></li>
                                        <li><a class="fields" href="#">Θεολογικής</a></li>
                                        <li><a class="fields" href="#">Νομικής</a></li>
                                        <li><a class="fields" href="#">Φιλοσοφικής</a></li>
                                      </ul>
                                    </li>
                                    <li class=" dropdown keep-open lastLi"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ημερομηνία Έκδοσης<span class="caret caretClass"></span></a>
                                        <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a class="fields" href="#">2014</a></li>
                                        <li><a class="fields" href="#">2013</a></li>
                                        <li><a class="fields" href="#">2011</a></li>
                                        <li><a class="fields" href="#">2010</a></li>
                                        <li><a class="fields" href="#">2001</a></li>
                                        <li><a class="fields" href="#">1994</a></li>
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
                <h2><span class="glyphicon glyphicon-saved"></span> Αίτηση Κράτησης Αντιτύπου</h2>
            </div>

            <div class="modal-body">
                <form  method="post" role="form">
                    <div class="row rowC fieldChange">
                        <div class="col-md-6 leftCMD">
                            <label for="surname_Change">Διαθέσιμος Χρόνος Παραλλαβής:</label>
                        </div>
                        <div class="col-md-6 middleCMD">
                            <label class = "notChange">3 Εργάσιμες Ημέρες</label> 
                        </div>
                    </div>

                    <div class="row rowC fieldChange">
                        <div class="col-md-6 leftCMD">
                             <label for="department_Change">Email Αποστολής κωδικού κράτησης: </label>
                        </div>
                        <div class="col-md-6 middleCMD">
                            <label class = "notChange">'; echo $_SESSION["email"];echo'</label> 
                        </div>
                    </div>
                    <br>
                    <h3>Είστε σίγουρος ότι θέλετε να προχωρήσετε σε Αίτηση Κράτησης του Αντιτύπου;</h3>
                </form>
                <input data-dismiss="modal"  name="isLend" type="submit" class="btn btn-success btn-block" value="Ναι, Πραγματοποίησε Κράτηση">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ακύρωση</button>
            </div>
        </div>
    </div>
</div>';
echo '</html>';
?>

   
</html>

<script>
$(document).ready(function(){
    $("#isLend").click(function(){
        $.ajax({url: "searchResults.php", 
            method: "POST",
            data: { id:"1" }
            dataType: "json"
            success: function(result){
           
        }});
    });
});
</script>
