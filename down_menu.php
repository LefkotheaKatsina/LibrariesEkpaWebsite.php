
<html>
    <!-- Modal -->
<div class="modal fade" id="messageSentModal">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close buttonEx" data-dismiss="modal" >&times;</button>
            <div class="modal-header">
                <h4><span class="glyphicon glyphicon-lock"></span>Αποστολή Μηνύματος</h4>
            </div>
            <div class="modal-body modal-body-disc">
                <h3>Το μήνυμα σας στάλθηκε με επιτυχία!</h3><br>
                <div class="btn btn-success btn-block" onclick="formReset()" data-dismiss="modal" style="width:356px;">Εντάξει, επιστροφή!</div>
            </div>
        </div>
    </div>
</div>
    
<div id="downMenu">
    <div id="menuBar" class="borderDesign">
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a data-toggle="pill" class="ClassMenuBar edgeleft" href="#firstPill">Ώρες Λειτουργίας Βιβλιοθηκών<br><span class="pillExplainer">Τι είναι ανοιχτό σήμερα;</span></a></li>
            <li><a data-toggle="pill" class="ClassMenuBar middle" href="#thirdPill">Αναγνωστήρια<br><span class="pillExplainer">Που μπορείς να διαβάσεις σήμερα;</span></a></li>
            <li><a data-toggle="pill" class="ClassMenuBar edgeRight" href="#fourthPill">Στείλε Email<br><span class="pillExplainer">Επικοινώνησε μαζί μας ηλεκτρονικά!</span></a></li>
        </ul>
    </div>
    <div class="tab-content borderDesign menuBarContainer">
        <div id="firstPill" class="tab-pane active">
            <p class="labelClass currentDate"></p>
                        <div class="rightElement">
                            <a href="#" class="aDesignBlue aClass">Ώρες Λειτουργίας Βιβλιοθηκών ανά Εβδομάδα</a>
                            <!-- Tab panes -->
                            <div class="tab-content beforePager hoursBoxLibs borderDesign3">
                                <div class="contents tab-pane active" id="healthSchool">
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">8:30-14:30</td><td  class="firstTableRow">(210) 7461 400</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:30-20:30</td><td>(210) 7461 459</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">8:30-14:30</td><td  class="lastTableRow">(210) 7461 459</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/healthLibrary_1.jpg" width="150" height="100" alt="Βιβλιοθήκη Επιστημών Υγείας"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Επιστημών Υγείας</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">8:30-14:30</td><td  class="firstTableRow">(210) 7461 400</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:30-20:30</td><td>(210) 7461 459</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">8:30-14:30</td><td  class="lastTableRow">(210) 7461 459</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/healthLibrary_2.jpg" width="150" height="100" alt="Βιβλιοθήκη Οδοντιατρικής Σχολής"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Οδοντιατρικής Σχολής</a></div>
                                    </div>
                                </div>
                                <div class="contents tab-pane tab-paneClass" id="godSchool">
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">8:30-16:00</td><td  class="firstTableRow">(210) 7275 781</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:30-19:00</td><td>(210) 7275 782</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">8:30-19:00</td><td  class="lastTableRow">(210) 7275 781</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/godLibrary_1.jpg" width="150" height="100" alt="Βιβλιοθήκη Θεολογικής Σχολής"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Θεολογικής Σχολής</a></div>
                                    </div>
                                </div>
                                <div class="contents tab-pane tab-paneClass" id="lawSchool">
                                        <div class="libraryHours">
                                            <table class="tableClass pull-right">
                                                <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-18:00</td><td  class="firstTableRow">(210) 3688 560</td></tr>
                                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td></tr>
                                                <tr><th class="tableHeader">Γραμματεία</th><td class="lastTableRow">8:30-19:00</td><td  class="lastTableRow">(210) 7275 782</td></tr>
                                            </table>
                                            <img class="imageDesign libraryImages" src="images/lawLibrary_1.JPG" width="150" height="100" alt="Βιβλιοθήκη Δημοσίου Δικαίου"/>
                                            <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Δημοσίου Δικαίου</a></div>
                                        </div>
                                        <div class="libraryHours">
                                            <table class="tableClass pull-right">
                                                <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-16:00</td><td  class="firstTableRow">(210) 3688 363</td></tr>
                                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td></tr>
                                                <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-16:00</td><td  class="lastTableRow">(210) 3688 363</td></tr>
                                            </table>
                                            <img class="imageDesign libraryImages" src="images/lawLibrary_2.JPG" width="150" height="100" alt="Βιβλιοθήκη Εμπορικού και Ναυτικού Δικαίου"/>
                                            <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Εμπορικού<br>και Ναυτικού Δικαίου</a></div>
                                        </div>
                                        <div class="libraryHours">
                                            <table class="tableClass pull-right">
                                                <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-19:00</td><td  class="firstTableRow">(210) 3688 731</td></tr>
                                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td></tr>
                                                <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-19:00</td><td  class="lastTableRow">(210) 3688 731</td></tr>
                                            </table>
                                            <img class="imageDesign libraryImages" src="images/lawLibrary_3.JPG" width="150" height="100" alt="Βιβλιοθήκη Ποινικών Επιστημών"/>
                                            <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Ποινικών Επιστημών</a></div>
                                        </div>
                                        <div class="libraryHours">
                                            <table class="tableClass pull-right">
                                                <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                                <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-17:00</td><td  class="firstTableRow">(210) 3688 355</td></tr>
                                                <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-17:00</td><td>(210) 3688 355</td></tr>
                                                <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-17:00</td><td  class="lastTableRow">(210) 3688 354</td></tr>
                                            </table>
                                            <img class="imageDesign libraryImages" src="images/lawLibrary_4.JPG" width="150" height="100" alt="Νομική Βιβιοθήκη"/>
                                            <br><div class="libraryName"><a class="aDesignBlue" href="#">Νομική Βιβιοθήκη</a></div>
                                        </div>
                                </div>
                                <div class="contents tab-pane tab-paneClass" id="pedagogySchool">
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">8:30-14:30</td><td  class="firstTableRow">(210) 7461 445</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">8:30-14:30</td><td  class="lastTableRow">(210) 7461 400</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/pedagogyLibrary_1.jpg" width="150" height="100" alt="Βιβλιοθήκη Επιστήμης Φυσικής Αγωγής και Αθλητισμού"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Επιστήμης<br>Φυσικής Αγωγής και Αθλητισμού</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-18:00</td><td  class="firstTableRow">(210) 3602 715</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>-</td><td>-</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-18:00</td><td  class="lastTableRow">(210) 3602 715</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/pedagogyLibrary_2.jpg" width="150" height="100" alt="Βιβλιοθήκη Δημοτικής Εκπαίδευσης"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Δημοτικής Εκπαίδευσης</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">8:15-20:45</td><td  class="firstTableRow">(210) 3688 231</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>8:15-20:45</td><td>(210) 3688 247</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">8:15-20:45</td><td  class="lastTableRow">(210) 3688 219</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/pedagogyLibrary_3.jpg" width="150" height="100" alt="Βιβλιοθήκη Φοιτητικών Αναγνωστηρίων"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Φοιτητικών Αναγνωστηρίων</a></div>
                                    </div>
                                </div>
                                <div class="contents tab-pane tab-paneClass" id="scienceSchool">
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-19:00</td><td  class="firstTableRow">(210) 7275 190</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-19:00</td><td>(210) 7275 221</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-19:00</td><td  class="lastTableRow">(210) 7275 190</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/scienceLibrary_1.jpg" width="150" height="100" alt="Βιβλιοθήκη Σχολής Θετικών Επιστημών"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="libraryInfo.php">Βιβλιοθήκη<br>Σχολής Θετικών Επιστημών</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">10:00-17:00</td><td  class="firstTableRow">(210) 7461 459</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-18:00</td><td>(210) 7461 459</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">10:30-17:00</td><td  class="lastTableRow">(210) 7461 400</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/scienceLibrary_2.jpg" width="150" height="100" alt="Βιβλιοθήκη Βιολογίας/Χημείας/Φαρμακευτικής"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Βιολογίας<br>Χημείας Φαρμακευτικής</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">10:00-17:00</td><td  class="firstTableRow">(210) 7275 559</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-16:00</td><td>(210) 7275559</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-16:00</td><td  class="lastTableRow">(210) 7275 559</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/scienceLibrary_3.jpg" width="150" height="100" alt="Βιβλιοθήκη Μεθοδολογίας,Ιστορίας και Θεωρίας της Επιστήμης"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Μεθοδολογίας,<br>Ιστορίας και Θεωρίας της Επιστήμης</a></div>
                                    </div>
                                </div>
                                <div class="contents tab-pane tab-paneClass" id="philosophySchool">
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9.00-18.00</td><td  class="firstTableRow">(210) 7277 695</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>9.00-18.00</td><td>(210) 7277 695</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9.00-18.00</td><td  class="lastTableRow">(210) 7277 690</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/philosophyLibrary_1.jpg" width="150" height="100" alt=">Βιβλιοθήκη Αρχαιολογίας και Ιστορίας της τέχνης"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Αρχαιολογίας<br>και Ιστορίας της Τέχνης</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">08:00-18:00</td><td  class="firstTableRow">(210) 7277 687</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>08:00-18:00</td><td>(210) 7277 686</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">08:00-18:00</td><td  class="lastTableRow">(210) 7277 687</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/philosophyLibrary_2.jpg" width="150" height="100" alt="Βιβλιοθήκη Ιστορίας"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη Ιστορίας</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass pull-right">
                                            <tr><th></th><th>Ώρες Σήμερα</th><th>Τηλέφωνο</th></tr>
                                            <tr><th class="tableHeader">Βιβλιοθήκη</th><td  class="firstTableRow">9:00-17:00</td><td  class="firstTableRow">(210) 7277 565</td></tr>
                                            <tr><th class="tableHeader">Αναγνωστήριο</th><td>9:00-17:00</td><td>(210) 7275559</td></tr>
                                            <tr><th class="tableHeader">Γραμματεία</th><td  class="lastTableRow">9:00-16:00</td><td  class="lastTableRow">(210) 7277 565</td></tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/scienceLibrary_3.jpg" width="150" height="100" alt="Βιβλιοθήκη Ψυχολογίας"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Βιβλιοθήκη<br>Ψυχολογίας</a></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="leftElement">
                            <div class="h3class TabExplainer">ΑΝΑ ΚΕΝΤΡΙΚΗ ΒΙΒΛΙΟΘΗΚΗ</div>
                            <div class="col-xs-3 libraryTabsPlace"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul id="tabLibsMain" class="nav nav-tabs tabs-left tabsClass">
                                    <li class="active"><a href="#healthSchool" data-toggle="tab">Σχολή Επιστημών Υγείας</a></li>
                                    <li><a href="#godSchool" data-toggle="tab">Θεολογική Σχολή</a></li>
                                    <li><a href="#lawSchool" data-toggle="tab">Σχολή Νομικών,Οικονομικών&amp; Πολιτικών Επιστημών</a></li>
                                    <li><a href="#pedagogySchool" data-toggle="tab">Σχολή Παιδαγωγικών Επιστημών</a></li>
                                    <li><a href="#scienceSchool" data-toggle="tab">Σχολή Θετικών Επιστημών</a></li>
                                    <li><a href="#philosophySchool" data-toggle="tab">Φιλοσοφική Σχολή</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="thirdPill" class="tab-pane">
                        <p class="labelClass currentDate"></p>
                        <div class="rightElementReadingRooms">
                                <a class="aDesignBlue aClass2" href="#">Δές Αναλυτικά τα Αναγνωστήρια</a>
                                <div class="dropdown filterDiv">
                                  <button id="filterButton" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Φίλτρο Αποτελεσμάτων
                                  <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#thirdPill"><img  class="imageClass" src="icons/multiple25.png" width="15" height="18">Ομαδική Μελέτη</a></li>
                                      <li><a href="#thirdPill"><span  class="glyphicon glyphicon-user" aria-hidden="true"></span>Ατομική Μελέτη</a></li>
                                      <li><a href="#thirdPill"><img class="imageClass" src="icons/social12.png" width="15" height="18">Ομιλίες Επιτρεπτές</a></li>
                                      <li><a href="#thirdPill"><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span>Απόλυτη Ησυχία</a></li>
                                      <li><a href="#thirdPill"><span  class="glyphicon glyphicon-glass" aria-hidden="true"></span>Κοντά σε Καφετέρεια</a></li>
                                      <li><a href="#thirdPill"><img   class="imageClass" src="icons/pc6.png" width="15" height="18">Με Υπολογιστές</a></li>
                                      <li><a href="#thirdPill"><img   class="imageClass" src="icons/wifi-signal.png" width="15" height="16">Με wifi</a></li>
                                  </ul>
                                </div>
                            <!-- Tab panes -->
                            <div class="tab-content  hoursBoxLibs borderDesign3">
                                <div class=" tab-pane tab-paneClass active " id="healthRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Μικράς Ασίας, 1</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>08:30-20:30</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7461 400</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryImages" src="images/healthRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Επιστημών Υγείας"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Επιστημών Υγείας</a></div>
                                    </div>
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Θηβών, 2</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>09:00-19:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7461 154</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/healthRoom_2.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Οδοντιατρικής Σχολής"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Οδοντιατρικής Σχολής</a></div>
                                    </div>
                                </div>
                                <div class=" tab-pane tab-paneClass" id="godRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow"> Πανεπιστημιούπολη, Ανω Ιλίσσια</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>09:00-19:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7275 782</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/godRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Θεολογικής Σχολής"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Θεολογικής Σχολής</a></div>
                                    </div>
                                </div>
                                <div class= "tab-pane tab-paneClass" id="lawRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Ιπποκράτους 33, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>9:00-17:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 3688 354</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/lawRooms_1.jpg" width="150" height="100" alt="Αναγνωστήριο Νομικής Βιβλιοθήκης"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Νομικής<br>Βιβλιοθήκης</a></div>
                                    </div>
                                </div>
                                <div class=" tab-pane tab-paneClass" id="pedagogyRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Ιπποκράτους 15, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>8:15-20:45</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 3688 219</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/pedagogyRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Φοιτητικών Αναγνωστηρίων"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Φοιτητικών Αναγνωστηρίων</a></div>
                                    </div>
                                </div>
                                <div class=" tab-pane tab-paneClass" id="scienceRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Ζωγράφου, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>08:30-19:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7276 599</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/scienceRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Θετικών Επιστημών"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Θετικών Επιστημών</a></div>
                                    </div>
                                    
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Ζωγράφου, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>09:00-19:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7275 190</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/scienceRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Θετικών Επιστημών"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Πληροφορικής</a></div>
                                    </div>
                                </div>
                                <div class="tab-pane tab-paneClass" id="philosophyRooms">
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Πανεπιστημιούπολη, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>9.00-18.00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7277 690</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/philosophyRoom_1.jpg" width="150" height="100" alt="Αναγνωστήριο Βιβλιοθήκης Αρχαιολογίας και Ιστορίας της Τέχνης"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br>Αρχαιολογίας</a></div>
                                    </div>
                                    
                                    <div class="libraryHours">
                                        <table class="tableClass tableClassReadingRooms pull-right">
                                            <tr><th class="tableHeader">Διεύθυνση</th><td class="firstTableRow">Ζωγράφου, Αθήνα</td></tr>
                                            <tr><th class="tableHeader">Ώρες Σήμερα</th><td>08:00-18:00</td></tr>
                                            <tr><th class="tableHeader">Τηλέφωνο</th><td>(210) 7277 687</td></tr>
                                            <tr><th class="tableHeader">Φίλτρο</th>
                                                <td class="lastTableRow"><div class="glyphicon glyphicon-user glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-lamp glyphiconClass" aria-hidden="true"></div>
                                                    <div class="glyphicon glyphicon-glass glyphiconClass" aria-hidden="true"></div>
                                                </td>
                                            </tr>
                                        </table>
                                        <img class="imageDesign libraryimages" src="images/philosophyRoom_2.jpg" width="150" height="100" alt=">Αναγνωστήριο Βιβλιοθήκης Ιστορίας"/>
                                        <br><div class="libraryName"><a class="aDesignBlue" href="#">Αναγνωστήριο Βιβλιοθήκης<br> Ιστορίας</a></div>
                                    </div>
                                </div>
                            </div>
                        <ul id="jquery-tab-pager-navi2"> 
                               <li><a href="#" class="previos disable"><span class="glyphicon glyphicon-chevron-left"></span> Προηγούμενη</a></li> 
                               <li><a href="#" class="current">1</a></li> 
                               <li><a href="#" class="next disable">Επόμενη <span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul>    
                        </div>
                        
                        <div class="leftElement">
                            <div class="h3class TabExplainer">ΑΝΑ ΚΕΝΤΡΙΚΗ ΒΙΒΛΙΟΘΗΚΗ</div>
                            <div class="col-xs-3 libraryTabsPlace"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul id="tabReadingRoomsMain" class="nav nav-tabs tabs-left tabsClass">
                                    <li class="active"><a href="#healthRooms" data-toggle="tab">Σχολή Επιστημών Υγείας</a></li>
                                    <li><a href="#godRooms" data-toggle="tab">Θεολογική Σχολή</a></li>
                                    <li><a href="#lawRooms" data-toggle="tab">Σχολή Νομικών,Οικονομικών&amp; Πολιτικών Επιστημών</a></li>
                                    <li><a href="#pedagogyRooms" data-toggle="tab">Σχολή Παιδαγωγικών Επιστημών</a></li>
                                    <li><a href="#scienceRooms" data-toggle="tab">Σχολή Θετικών Επιστημών</a></li>
                                    <li><a href="#philosophyRooms" data-toggle="tab">Φιλοσοφική Σχολή</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="fourthPill" class="tab-pane">
                        <p class="labelClass currentDate"></p><br>
                        <h3 class="headerAsk">
                            <span data-toggle="tooltip" title="Κάνε μια ερώτηση, Ανέφερε ένα πρόβλημα σύνδεσης, Κάνε μας μια πρόταση απόκτησης υλικού κ.τ.λ" class="glyphicon glyphicon-question-sign"></span>Στείλε μας ένα μήνυμα!
                        </h3>
                        <!--<div class="alert alert-success"></div>-->
                        <form  id ="myForm" method="get" action="index.php?fourthPill" role="form">
                            <div class="mainAsk">
                                <label for="comment"><span class="glyphicon glyphicon-comment"></span>Γράψε το μήνυμά σου:<span class="error">*<span id="commentErr" ></span></span></label>
                                <textarea rows="5" class="form-control formtext" id="comment" cols="40" placeholder="Εισάγετε ένα μήνυμα..."></textarea>
                                <div class="form-group">
                                    <label for="usrnmSrnm"><span class="glyphicon glyphicon-user"></span>Ονοματεπώνυμο:<span class="error">*<span id="nameSurnameErr" ></span></span></label>
                                    <input type="text" class="form-control"  id="usrnmSrnm" placeholder="Εισάγετε Ονοματεπώνυμο...">
                                </div>
                                <div class="form-group">
                                    <label for="Idemail"><span class="glyphicon glyphicon-envelope"></span>Email:<span class="error">*<span id="IdemailErr" ></span></span></label>
                                    <input type="text" class="form-control"  id="Idemail" placeholder="Εισάγετε email π.χ someone@something.com">
                                </div>
                                <div class="form-group">
                                    <label for="status"><span class="glyphicon glyphicon-user"></span>Είμαι:</label><br>
                                    <select class="selectStatus" name="status">
                                        <option value="Φοιτητής">Φοιτητής</option>
                                        <option value="Καθηγητής">Καθηγητής</option>
                                        <option value="Προσωπικό">Μέλος Προσωπικού</option>
                                        <option value="Επισκέπτης">Επισκέπτης</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success btn-block1"  onclick="return myQuestionFunc()"> Αποστολή Μηνύματος</button>
                                <button type="reset" class="btn btn-default">Καθαρισμός Πεδίων</button>
                            </div>
                        </form>
            
        </div>
 </div>
</div>
   
 <script>
         var d = new Date();
        var days = ["Κυριακή","Δευτέρα","Τρίτη","Τετάρτη","Πέμπτη","Παρασκευή","Σάββατο"];
        var months = ["Ιανουαρίου","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        var x = document.getElementsByClassName("currentDate");
        for(var i=0;i<x.length;i++){
           x[i].innerHTML = "<em>Σήμερα, </em>" + days[d.getDay()] + " " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear() + "&nbsp;&nbsp;<em><b>Ώρα:</b></em> " + d.getHours() + ":" +                                   (d.getMinutes()<10?'0':'') + d.getMinutes();
        }
</script>


<script>    
    $("#comment").blur(function(){
        var comment = $("#comment").val();
        if(!comment.trim()){
            document.getElementById("commentErr").innerHTML = " Το πεδίο της ερώτησης είναι υποχρεωτικό!";
        }
        else{
            document.getElementById("commentErr").innerHTML = " ";
        }
    });
    
     $("#usrnmSrnm").blur(function(){
        var username = $("#usrnmSrnm").val();
        if(!username.trim()){
            document.getElementById("nameSurnameErr").innerHTML = " Το πεδίο Ονοματεπώνυμο είναι υποχρεωτικό!";
        }
        else{
            document.getElementById("nameSurnameErr").innerHTML = " ";
        }
    });
    $("#Idemail").blur(function(){
        var Idemail = $("#Idemail").val();
        if(!Idemail.trim()){
            document.getElementById("Idemail").innerHTML = " Το πεδίο Εmail είναι υποχρεωτικό!";
        }
        else{
            if (!isValidEmail(Idemail)){
                document.getElementById("Idemail").innerHTML = " Η μορφή του email που καταχωρήσατε είναι λανθασμένη!";
            } //den einai valid
            else{
                document.getElementById("Idemail").innerHTML = " ";
                
            } 
        }
    });
    function formReset()
    {
    document.getElementById("myForm").reset();
    }
    function myQuestionFunc(){
        var comment = $("#comment").val();
        var commRet,usrRet,emailRet;
        if(!comment.trim()){
            document.getElementById("commentErr").innerHTML = " Το πεδίο της ερώτησης είναι υποχρεωτικό!";
            commRet = 0;
        }
        else{
            document.getElementById("commentErr").innerHTML = " ";
            commRet = 1;
        }
        var username = $("#usrnmSrnm").val();
        if(!username.trim()){
            document.getElementById("nameSurnameErr").innerHTML = " Το πεδίο Ονοματεπώνυμο είναι υποχρεωτικό!";
            usrRet = 0;
        }
        else{
            document.getElementById("nameSurnameErr").innerHTML = " ";
            usrRet = 1;
        }
        var Idemail = $("#Idemail").val();
        if(!Idemail.trim()){
            document.getElementById("IdemailErr").innerHTML = " Το πεδίο Εmail είναι υποχρεωτικό!";
            emailRet = 0;
        }
        else{
            if (!isValidEmail(Idemail)){
                document.getElementById("IdemailErr").innerHTML = " Η μορφή του email που καταχωρήσατε είναι λανθασμένη!";
                emailRet = 0;
            } //den einai valid
            else{
                document.getElementById("IdemailErr").innerHTML = " ";
                emailRet = 1;
            }                      //einai valid
        }
        if(usrRet===1 && commRet===1 && emailRet===1){
            $('#messageSentModal').modal('show');
              return false;
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