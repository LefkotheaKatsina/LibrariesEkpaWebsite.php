<?php 
   session_start(); 
?>

<html>
<?php
    include "header.php";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dberror1 = "Could not connect to the database!!";
    
    $conn = mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
    $select_db = mysql_select_db('eam_2016') or die("Could not select database");
    mysql_set_charset('utf8',$conn); 
    $lenght = 0;
    $i = 0;
    $j=0;
    $id = array();
    $title = array();
    $type = array();
    $author = array();
    $libName = array();
    $returnDate = array();
    $publicationDate=array();
    $notAnyRef = 0;
    $number=0;
    
echo '<body id="body">
    <div id="allcontent" class="borderDesign">
        <!--Header-->';
        
        include 'body_header.php';
        
        if($_SESSION["username"] != ""){
            $idUser = $_SESSION["idUsers"];
            $query = "SELECT * FROM documents WHERE useridLended = $idUser";
            $fetch = mysql_query($query) or die("Unable to find what you have asked for!");
            $num_rows = mysql_num_rows($fetch);
            $number = $num_rows;

         while($row = mysql_fetch_array($fetch)){
             $id[$lenght] = $row["idDocuments"];
             $title[$lenght] = $row["title"];
             $type[$lenght] = $row["type"];
             $author[$lenght] = $row["author"];
             $libName[$lenght] = $row["libName"];
             $isLended[$lenght] = $row["isLended"];
             $returnDate[$lenght] = $row["returnDate"];
             $publicationDate[$lenght]=$row["publicationDate"];
             $lenght++;
         }             
     }
   
       //Main Navigation Bar
        include "body_main_nav.php";

        //Main-->
    echo'<div class="mainSecondaryPage borderDesign3 mainSecPageBorder3">
            <!--Breadcrumb-->
            <ul class="breadcrumb">
                <li><a class="aDesignBlue" href="index.php">Αρχική</a></li>
                <li>Υπηρεσίες και Δυνατότητες</li>
                <li><a class="aDesignBlue" href="searchResults.php">Αναζήτηση Υλικού</a></li>
                <li>Η Λίστα μου</li> 
            </ul>
            <h2>Διαχείριση της Λίστας μου</h2>
            <img class="image imageDesign pull-left" src="images/listIcon.jpg" width="160" height="98">
            <p class="paragraph">
                Σε αυτήν την σελίδα έχετε τη δυνατότητα να διαχειριστείτε τις λίστες του Επιλεγμένου και του Δανεισμένου Υλικού σας. Όσον αφορά την Λίστα των Επιλεγμένων σας,
                μπορείτε να την στείλετε για εκτύπωση ή στο email σας. Όσον αφορά την Λίστα των Δανεισμένων, μπορείτε να την διαχειριστείτε μόνο εφόσον έχετε πραγματοποιήσει σύνδεση.
                Σας δίνεται η δυνατότητα να δείτε πληροφορίες του δανεισμένου υλικού σας και να πραγματοποιήσετε Αίτηση Ανανέωσης Χρόνου Δανεισμού.
                
            </p>
            <div class="col-xs-3 listTabsPlace"> 
                <ul id="tabLibsMain" class="nav nav-tabs tabs-left tabsClass ">
                    <li class="active"><a href="#listSelected" data-toggle="tab">Λίστα Επιλεγμένων</a></li>
                    <li><a href="#listLended" data-toggle="tab">Λίστα Δανεισμένων</a>';
                    echo'</li>
                </ul>
            </div>
            <div class="rightElement3">
                <h4 class="resultsLabel">Αποτελέσματα</h4>
                <form class="listFormResult">
                            <div class="pull-right box">
                                  <!--<span data-toggle="tooltip" title="" class="glyphicon glyphicon-question-sign pull-right"></span>-->
                                  <input type="checkbox" name="addAllSelected" value="addAllSelected">
                            </div>
                            <span class="checkBox pull-right">Επιλογή Όλων</span>
                            <div class="dropdown filterBtn2 ">
                                <button id="filterButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ταξινόμηση Ανά
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#orderByAuthor">Συγγραφέα</a></li>
                                        <li><a>Τίτλο</a></li>
                                        <li><a>Χρονιά (καινούριο προς παλιό)</a></li>
                                        <li><a>Χρονιά (παλιό προς καινούριο)</a></li>
                                    </ul>
                            </div>
                            <div class="dropdown filterBtn3">
                                <button id="filterButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Αποστολή Προς
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">       
                                        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Εκτυπωτή</a></li>
                                    </ul>
                            </div>
                </form>
                <div class="tab-content beforePager tabPane borderDesign3">
                    <div class="contents tab-pane tab-paneClass active" id="listSelected">
                        <h3>Η Λίστα των Επιλεγμένων σας είναι κενή.</h3>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="listLended">';
                        if($_SESSION["username"]==""){
                            echo '<h3>Πρέπει να πραγματοποιήσετε';echo'<a href="#myModal" data-toggle="modal" data-target="#myModal">';echo' Σύνδεση';echo'</a>';echo' για να δείτε την Λίστα των Δανεισμένων σας.';echo'</h3>';
                        }   
                        else{
                         while($i<$number){   
                            echo'<div class="searchResult">
                            <div class="pull-right boxInner">
                              <!--<span data-toggle="tooltip" title="" class="glyphicon glyphicon-question-sign pull-right"></span>-->
                              <input type="checkbox" name="addAllToList" value="addAllToList">
                            </div>
                            <span class="checkBox pull-right">Επιλογή</span>
                           <h4>';echo $j+1;echo".";echo'<a href="#" class="aDesignBlack">'; echo $title[$i];echo'</a>';echo'   [';echo  mb_strcut($publicationDate[$i],0,4);echo']';echo'</h4><br>';
                            echo '<span>Είδος Υλικού: </span><span>';if(strcmp($type[$i],"book")==0){echo "Βιβλίο";} else{ echo "Εφημερίδα";} echo'</span><br>';
                            echo'<span>Συγγραφέας: </span><span>';echo $author[$i];echo'</span><br>';

                            echo'<div class="accordion-sections">
                                <div class="accordion-section location">
                                    <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="header dropdown-toggle">
                                                <span class="section-label">Επιστροφή</span>
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                            <span>Βιβλιοθήκη: <a class="aDesignBlue" href="#">';echo $libName[$i];echo'</a></span>
                                        <div class="dropdown-menu resultInfo">'; 
                                            echo'<button type="submit" data-toggle="modal" data-target="#refresh" class="btn btn-success btnDesign pull-right">Αίτηση Ανανέωσης Χρόνου Δανεισμού</button>';
                                            echo'<span>Επιστροφή μέχρι τις: ';echo mb_strcut($returnDate[$i],0,10);echo'</span>';
                                        echo'</div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        $i++;
                        $j++;
                         }  
                        }
                   echo' </div>
                    
                </div>
            </div>
            
        </div>';
        include "footer.php";
        
echo'       </div>
    </div>
</body>


                    
<div class="modal fade" id="refresh">
    <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
            <button type="button " class="close buttonEx" data-dismiss="modal">&times;</button>
            <div class="modal-header">
                <h2>Αίτηση Ανανέωσης Χρόνου Δανεισμού</h2>
            </div>

            <div class="modal-body">
                <form  method="post" role="form">
                    <div class="row rowC fieldChange">
                        <div class="col-md-6 leftCMD">
                            <label for="surname_Change">Χρόνος Ανανέωσης Δανεισμού:</label>
                        </div>
                        <div class="col-md-6 middleCMD">
                            <label class = "notChange">21 Ημέρες</label> 
                        </div>
                    </div>
                    <div class="row rowC fieldChange">
                        <div class="col-md-6 leftCMD">
                            <label for="surname_Change">Πληροφορίες Εξέλιξης Κράτησης στο:</label>
                        </div>
                        <div class="col-md-6 middleCMD">
                            <label class = "notChange">';echo $_SESSION["email"];echo'</label> 
                        </div>
                    </div><br>
                    <h3>Είστε σίγουρος ότι θέλετε να προχωρήσετε σε Αίτηση Ανανέωσης χρόνου δανεισμού του αντιτύπου;</h3>
                    <input  type="submit" class="btn btn-success btn-block" data-dismiss="modal" value="Ναι">
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ακύρωση</button>
            </div>
        </div>
    </div>
</div>';
echo '</html>';