<!DOCTUPE>
<?php
    session_start(); 
?>

<html>
<?php
    include "header.php"
?>

<body id="body">
    <div id="allcontent" class="borderDesign">
        <!--Header-->
        <?php
            include 'body_header.php'
        ?>
        <!--Main Navigation Bar-->
        <?php 
            include "body_main_nav.php"
        ?>
        <!--Main-->
        <div class="mainSecondaryPage borderDesign3">
            <!--Breadcrumb-->
            <ul class="breadcrumb">
                <li><a class="aDesignBlue" href="index.php">Αρχική</a></li>
                <li>Βιβλιοθήκες</li>
                <li>Ανά Κεντρική Βιβλιοθήκη</li> 
            </ul>
            <h2>Αναζήτηση Βιβλιοθήκης Ανά Κεντρική Βιβλιοθήκη</h2>
            <div><img class="image imageDesign pull-left" src="images/books.jpg" width="160" height="104"></div>
            <p class="paragraph">
                Παρακάτω παρουσιάζονται οι 47 Βιβλιοθήκες του Εθνικού και Καποδιστριακού Πανεπιστημίου Αθηνών, 
                οργανωμένες ανά Κεντρική Βιβλιοθήκη.<br>Αν επιθυμείτε σύνθετη Aναζήτηση Βιβλιοθήκης, ανατρέξτε στον αντίστοιχο σύνδεσμο 
                <span><a href="#" class="aDesignBlue">Αναζήτηση Βιβλιοθήκης</a></span> στην κατηγορία "Υπηρεσίες και Δυνατότητες"
                της βασικής μπάρας αναζήτησης.
            </p>
            <div class="col-xs-3 schoolTabsPlace"> 
                <ul id="tabLibsMain" class="nav nav-tabs tabs-left tabsClass">
                    <li class="active"><a href="#healthSchool" data-toggle="tab">Σχολή Επιστημών Υγείας</a></li>
                    <li><a href="#godSchool" data-toggle="tab">Θεολογική Σχολή</a></li>
                    <li><a href="#lawSchool" data-toggle="tab">Σχολή Νομικών,Οικονομικών&amp; Πολιτικών Επιστημών</a></li>
                    <li><a href="#pedagogySchool" data-toggle="tab">Σχολή Παιδαγωγικών Επιστημών</a></li>
                    <li><a href="#scienceSchool" data-toggle="tab">Σχολή Θετικών Επιστημών</a></li>
                    <li><a href="#philosophySchool" data-toggle="tab">Φιλοσοφική Σχολή</a></li>
                </ul>
            </div>
            <div class="rightElement3">
                <div class="beforePager tab-content HoursBoxSecondaryPages borderDesign3">
                    <div class="contents tab-pane tab-paneClass active" id="healthSchool">
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7661 400</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/healthLibrary_1.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Επιστημών Υγείας</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Μικράς Ασίας και Δήλου,1<br>Γουδή 1ος όροφος</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                               <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>Κλειστά</td>                                                          <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>Κλειστά</td>                                                        <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>8:30-20:30</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7461 154</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/healthLibrary_2.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Οδοντιατρικής Σχολής</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Θηβών 2,<br>Γουδή</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>Κλειστά</td>                                 </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="godSchool">
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7275 781</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/godLibrary_1.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Θεολογικής Σχολής</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιούπολη,<br>Ανω Ιλίσσια,Αθήνα</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-16:00</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-16:00</td><td>Κλειστά</td>                                 </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-19:00</td><td>8:00-16:00</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="lawSchool">
                         <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3688 371</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/lawLibrary_1.JPG" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Δημοσίου Δικαίου</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Ιπποκράτους 33,<br> 5ος όροφος</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-17:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-17:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3688 363 </td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/lawLibrary_2.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Εμπορικού και Ναυτικού Δικαίου</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Ιπποκράτους 33,<br>6ος όροφος</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>9:00-16:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-16:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3688 731 </td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/lawLibrary_3.JPG" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Ποινικών Επιστημών</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Νομική Σχολή, Σόλωνος 57,<br>2ος όροφος, Αθήνα</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-16:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-16:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3688 355</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/lawLibrary_4.JPG" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Νομική Βιβλιοθήκη</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b> Νομική Σχολή,<br> Ιπποκράτους 33, Αθήνα</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>Κλειστά</td>                                             <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-16:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="pedagogySchool">
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7276 075</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/pedagogyLibrary_1.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Φυσικής Αγωγής και Αθλητισμού</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Εθν.Αντίστασης 41,<br>Δάφνη</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>Κλειστά</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>8:30-15:30</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3602 715  </td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/pedagogyLibrary_2.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Δημοτικής Εκπαίδευσης</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Χαριλάου Τρικούπη, 24<br>Αθήνα </p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>8:00-12:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>8:00-12:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 3688 219  </td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/pedagogyLibrary_3.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Φοιτητικών Αναγνωστηρίων</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Ιπποκράτους 15,<br>2ος όροφος</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>Κλειστά</td><td>Κλειστά</td>                                        </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>8:15-20:45</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="scienceSchool">
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7276 599</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/scienceLibrary_1.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="libraryInfo.php">Βιβλιοθήκη Θετικών Επιστημών</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιoύπολη,<br>Ζωγράφου</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>9:00-14:00</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>9:00-19:00</td><td>Κλειστά</td><td>Κλειστά</td>                                    </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7276 599</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/scienceLibrary_2.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Βιολογίας Χημείας Φαρμακευτικής</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιoύπολη,<br>Ζωγράφου</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1 hoursTableDiff">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>10:00-17:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7275 559</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.lib.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/scienceLibrary_3.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Μεθοδολογίας, Ιστορίας και Θεωρίας της Επιστήμης</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιoύπολη,<br>Ζωγράφου</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>Κλειστά</td><td>Κλειστά</td>                                        </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>9:00-16:00</td><td>Κλειστά</td><td>Κλειστά</td>                                   </tr>
                            </table>
                        </div>
                    </div>
                    <div class="contents tab-pane tab-paneClass" id="philosophySchool">
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7277 690</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>-</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/philosophyLibrary_1.jpg" width="150" height="100" alt="healthLibrary"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Αρχαιολογίας και Ιστορίας της Τέχνης</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιoύπολη,<br>Ζωγράφου</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                               <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr>
                                    <th class="tableHeader">Βιβλιοθήκη</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td>
                                </tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>Κλειστά</td><td>Κλειστά</td>                                    </tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>9:00-18:00</td><td>Κλειστά</td>                                               <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div>
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7277 687  </td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/philosophyLibrary_2.jpg" width="150" height="100" alt="Βιβλιοθήκη Ιστορίας"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Ιστορίας</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Φιλοσοφική Σχολή, 6ος όροφος,<br>Πανεπιστημιούπολη Ζωγράφου</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>Κλειστά</td>                                                  <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>Κλειστά</td>                                                <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>8:00-18:00</td><td>Κλειστά</td>                                                  <td>Κλειστά</td></tr>
                            </table>
                        </div>
                        <div class="libraryHours">
                            <table class="rightInfo">
                                <tr><th>Τηλέφωνο: <span class="glyphicon glyphicon-phone"></span></th><td>(210) 7277 565</td></tr>
                                <tr><th>Email: <span class="glyphicon glyphicon-envelope"></span></th><td>blablabla.edu.uoa.gr</td></tr>
                            </table>
                            <div class="leftInfo"><img class="imageDesign" src="images/philosophyLibrary_3.jpg" width="150" height="100" alt="Βιβλιοθήκη Ψυχολογίας"/></div>
                            <div class="middleInfo">
                                <a class="aDesignBlue" href="#">Βιβλιοθήκη Ψυχολογίας</a><br><br>
                                <p class="address"><b>Διεύθυνση:<br></b>Φιλοσοφική σχολή, 5ος όροφος<br>Πανεπιστημιόπολη, Ιλίσσια</p>
                            </div>
                            <table class="hoursTable tableDesign hoursTablePlace1">
                                <tr>
                                    <th class="tableHeader">
                                        <ul class="pager pagerClass">
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                        <li class ="range"> </li>
                                           <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>
                                    </th>
                                    <th class="monday"></th><th class="tuesday"></th><th class="wednesday"></th><th class="thursday"></th><th class="friday"></th><th class="saturday"></th><th class="sunday"></th>
                                </tr>
                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-15:00</td><td>Κλειστά</td>                                                <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-15:00</td><td>Κλειστά</td>                                              <td>Κλειστά</td></tr>
                                <tr><th class="tableHeader">Γραμματεία</th><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-17:00</td><td>9:00-15:00</td><td>Κλειστά</td>                                                <td>Κλειστά</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "footer.php"
        ?>
        </div>
</body>        