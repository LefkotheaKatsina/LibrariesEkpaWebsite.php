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
            include 'body_main_nav.php'
        ?>
        <!--Main-->
        <div class="libraryInfoMainPage borderDesign3">
            <!--Breadcrumb-->
            <ul class="breadcrumb">
                <li><a class="aDesignBlue" href="index.php">Αρχική</a></li>
                <li>Βιβλιοθήκες</li>
                <li>Βιβλιοθήκη Θετικών Επιστημών</li> 
            </ul>
            <div class="libraryInfo borderDesign">
                <div class="tab-content pull-right libraryMainInfo">
                    <div id="basicInfo" class="tab-pane active">
                        <h2>Βιβλιοθήκη Σχολής Θετικών Επιστημών / Βασικές Πληροφορίες</h2>
                        <h3>Ώρες Λειτουργίας</h3>
                        <table class="hoursTable tableDesign">
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
                                <th class="tableHeader">Βιβλιοθήκη</th><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>9:00-14:00</td>                                                 <td>Κλειστά</td>
                            </tr>
                            <tr>
                                <th class="tableHeader">Αναγνωστήριο</th><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>8:30-19:00</td><td>9:00-14:00</td>                                               <td>Κλειστά</td></tr>
                            <tr>
                                <th class="tableHeader">Γραμματεία</th><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>8:30-15:00</td><td>Κλειστά</td>                                                 <td>Κλειστά</td>
                            </tr>
                        </table>
                        <br><br>
                        <div class="pull-right subEquip">
                        <h3>Θέματα</h3>
                         <ul>
                            <li>Βιολογία</li>
                            <li>Γεωλογία και Γεωπεριβάλλον</li>
                            <li>Μαθηματικά</li>
                            <li>Πληροφορική και Τηλεπικοινωνίες</li>
                            <li>Φαρμακευτική</li>
                            <li>Φυσική</li>
                            <li>Χημεία</li>
                        </ul>
                        <br>
                        <h3>Eξοπλισμός</h3>
                            <ul>
                            <li><img src="icons/printer.png" alt="printer"/> Εκτυπωτής</li>
                            <li><img src="icons/printerColor.jpg" alt="printer"/> Έγχρωμος Εκτυπωτής</li>
                            <li><img src="icons/copier.png" alt="printer"/> Φωτοτυπικό</li>
                            <li><img src="icons/scanner.png" alt="printer"/> Σκάνερ</li>
                            <li><img src="icons/computer.png" alt="printer"/> Δημόσιοι Υπολογιστές</li>
                        </ul>   
                        </div>
                        <h3>Περιγραφή</h3>
                        <p>The Archive of Recorded Sound's collection contains over 400,000 items that span sound recording history--from its beginnings to the present day. Nearly all formats ever                                    developed to record sound are represented: piano rolls; wax cylinders; shellac, acetate, aluminum, and vinyl discs; magnetic wire and tape recordings; compact discs. Collections                              are particularly strong in the areas of jazz and opera.</p>
                        <br><br>
                        <h3>Επικοινωνία</h3>
                        <p>Στον παρακάτω πίνακα παρουσιάζονται τηλέφωνα και email επικοινωνίας:</p>
                        <table class="tableClass">
                            <tr><th></th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><th class="tableHeader">Πληροφορίες</th><td class="firstTableRow">sci@lib.uoa.gr</td><td class="firstTableRow">210-727 6599</td></tr>
                            <tr><th class="tableHeader">Γραμματεία</th><td>sci@lib.uoa.gr</td><td>210-727 6525</td></tr>
                            <tr><th class="tableHeader">Ανανεώσεις Δανεισμού</th><td  class="lastTableRow">sci-loan@lib.uoa.gr </td><td  class="lastTableRow">210-727 6519</td></tr>
                        </table>
                        <br><br>
                        <h3>Προσβασιμότητα ΑΜΕΑ</h3>
                        <p>Power equipped accessible entrance; elevator access to lower level and Archive entrance.</p>
                        <br><br>
                        <h3>Τοποθεσία και Χάρτης</h3>
                        <p><b>Διεύθυνση: </b>Πανεπιστημιoύπολη, Ζωγράφου</p>
                        <a target="_blank"                                                          href="https://www.google.gr/maps/place/%CE%A0%CE%B1%CE%BD%CE%B5%CF%80%CE%B9%CF%83%CF%84%CE%B7%CE%BC%CE%B9%CE%BF%CF%8D%CF%80%CE%BF%CE%BB%CE%B7,+%CE%96%CF%89%CE%B3%CF%81%CE%AC%CF%86%CE%BF%CF%85+157+72/@37.96813,23.7622945,14z/data=!3m1!4b1!4m2!3m1!1s0x14a197eeb7af25b3:0x30bfd274bd628e41"><img class="maps" src="images/map.png" alt="map"/></a>
                    </div>
                    <div id="rentPolicy" class="tab-pane">
                        <h2>Βιβλιοθήκη Σχολής Θετικών Επιστημών / Πολιτική Δανεισμού</h2>
                        <h3>Γενικές Ερωτήσεις</h3>
                        <h4>Ποια διαδικασία πρέπει να ακολουθήσω προκειμένου να δανειστώ υλικό;</h4>
                        <p>Πρέπει να απευθυνθείς στα γραφεία εξυπηρέτησης <b>με την κάρτα δανεισμού σου</b>, ώστε να οριστεί και ο χρόνος επιστροφής τους.</p>
                        <h4>Πόσα βιβλία/άρθρα κ.τ.λ μπορώ να δανειστώ;</h4>
                        Ο αριθμός των βιβλίων που μπορείς να δανειστείς καθώς και η διάρκεια δανεισμού εξαρτάται από την κατηγορία στην οποία ανήκεις,όπως φαίνεται παρακάτω:</p>
                        <table class="hoursTable tableDesign tablePlace2">
                            <tr><th>Κατηγορία Χρηστών</th><th>Μέγιστος Αριθμός Τεκμηρίων</th><th>Διάρκεια Δανεισμού</th><th>Αριθμός Ανανεώσεων</th></tr>
                            <tr><td>Μέλη ΔΕΠ Σχολής Θετικών Επιστημών και του Τμήματος Φαρμακευτικής</td><td>7</td><td>30ημέρες</td><td>2</td></tr>
                            <tr><td>Μεταπτυχιακοί φοιτητές Σχολής Θετικών Επιστημών/Τμήματος Φαρμακευτικής και προσωπικό ΕΚΠΑ</td><td>3</td><td>10ημέρες</td><td>2</td></tr>
                            <tr><td>Προπτυχιακοί φοιτητές Σχολής Θετικών Επιστημών και του Τμήματος Φαρμακευτικής</td><td>2</td><td>4 ημέρες</td><td>2</td></tr>
                            <tr><td>Φοιτητές με Αναπηρία της Σχολής Θετικών Επιστημών και του Τμήματος Φαρμακευτικής</td><td>5</td><td  class="lastTableRow">15ημέρες</td><td>1</td></tr>
                        </table>
                        <br><br>
                        <h3>Ποινές</h3>
                        <h4>Τι θα συμβεί αν καθυστερήσω να επιστρέψω υλικό που έχω δανειστεί;</h4>
                        <p>Προσπάθησε να είσαι συνεπής ώστε να μη δημιουργούνται προβλήματα.Σε αντίθετη περίπτωση ισχύουν τα ακόλουθα:</p>
                        <table class="hoursTable tableDesign tablePlace2">
                            <tr><th>Είδος Καθυστέρησης</th><th>Ποινή</th></tr>
                            <tr><td>Καθυστέρηση επιστροφής πάνω από 3 ημέρες για πρώτη φορά</td><td>Αναστολή δυνατότητας δανεισμού για 1 μήνα</td></tr>
                            <tr><td>Επανάληψη της καθυστέρησης επιστροφής</td><td>Αναστολή δυνατότητας δανεισμού για 6 μήνες</td></tr>
                            <tr><td>Επαναλαμβανόμενη καθυστέρηση</td><td>Αφαίρεση κάρτας μέλους της Βιβλιοθήκης</td></tr>
                        </table>
                        <br>
                        <h4>Τι θα συμβεί αν καθυστερήσω να επιστρέψω υλικό που έχω δανειστεί λόγω ασθενείας;</h4>
                        <p>Η έγκαιρη επικοινωνία, είτε τηλεφωνικά είτε με e-mail, σε περίπτωση μη δυνατότητας επιστροφής του υλικού για σοβαρό λόγο (π.χ. ασθένεια) θα αντιμετωπίζεται ανάλογα με την                                       περίπτωση.</p>          
                        <h4>Τι θα συμβεί αν φθαρεί ή χαθεί υλικό το οποίο έχω δανειστεί;</h4>
                        <p>Ανάλογα με το είδος φθοράς ισχύουν τα ακόλουθα:</p>
                        <table class="hoursTable tableDesign tablePlace2">
                            <tr><th>Είδος Ζημιάς</th><th>Ποινή</th></tr>
                            <tr><td>Το δανεισμένο υλικό χαθεί</td><td>Αποκατάσταση με αγορά καινούριου</td></tr>
                            <tr><td>Το δανεισμένο υλικό υποστεί φθορά</td><td>Αποκατάσταση με αγορά καινούριου</td></tr>
                            <tr><td>Το δανεισμένο υλικό υποστεί χαθεί ή φθαρεί<br>αλλά δεν υπάρχει στο εμπόριο</td><td>το Εφορευτικό Συμβούλιο της Βιβλιοθήκης<br> αποφασίζει κατά περίπτωση</td></tr>
                        </table>
                        <br><br>
                        <h3>Ανανέωση Δανεισμού</h3>
                        <p>
                        Με το πέρας της τελευταίας ανανέωσης και την μεσολάβηση 15 ημερολογιακών ημερών, ο χρήστης μπορεί να δανειστεί εκ νέου το ίδιο τεκμήριο.Οι τρόποι ανανέωσης είναι οι εξής:</p>
                        <table class="hoursTable tableDesign tablePlace2">
                            <tr><th>Τρόπος Ανανέωσης</th><th>Στοιχείο Επικοινωνίας</th></tr>
                            <tr><td>Τηλεφωνικά</td><td>210-7276 519</td></tr>
                            <tr><td>Με ηλεκτρονικό ταχυδρομείο</td><td>email:sci-loan@lib.uoa.gr</td></tr>
                            <tr><td>Επιστρέφοντας το υλικό στη Βιβλιοθήκη, την ημέρα που έχει οριστεί <br>η επιστροφή του,εκτός εάν υπάρχει ήδη κράτηση από άλλο χρήστη.</td><td>-</td></tr>
                        </table>
                    <br><br>
                        <h3>Κράτηση</h3>
                        <p>Δίδεται η δυνατότητα κράτησης για υλικό το οποίο είναι ήδη δανεισμένο. Το ανώτατο όριο κράτησης υλικού ανά χρήστη είναι δύο (2) τεκμήρια.
                        Εάν δεν ζητηθεί εντός τριών εργάσιμων ημερών, χάνεται το δικαίωμα της κράτησης.<br>Για το υλικό στο οποίο έχει γίνει κράτηση από περισσότερους τους ενός χρήστες, η περίοδος δανεισμού                         μειώνεται για την καλύτερη εξυπηρέτηση όλων.</p>
                        <br><br>
                        <h3>Ανάκληση</h3>
                        <p>Η Βιβλιοθήκη διατηρεί το δικαίωμα ανάκλησης δανεισμένου υλικού σε περιπτώσεις αυξημένης ζήτησης.
                        Στο πλαίσιο του νόμου περί προστασίας των προσωπικών δεδομένων τα ονόματα των δανειζομένων δεν είναι ανακοινώσιμα.</p>
                    </div>
                    <div id="outerRentPolicy" class="tab-pane">
                        
                    </div>
                    <div id="staff" class="tab-pane">
                        <h2>Βιβλιοθήκη Σχολής Θετικών Επιστημών / Προσωπικό</h2>
                        <p>Στους παρακάτω πίνακες παρουσιάζονται τα στοιχεία επικοινωνίας του προσωπικού της Βιβλιοθήκης Θετικών Επιστημών.</p><br>
                        <h3>Yπεύθυνος Λειτουργίας Βιβλιοθήκης</h3>
                        <table class="tableClass tableDesign tablePlace">
                            <th>Όνομα</th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><td>Βαλσαμής Βαλσαμάκης</td><td>vvalsam&#64;lib.uoa.gr</td><td>210-727 6500</td></tr>
                        </table>
                        <br>
                        <h3>Γραμματεία-Οικονομική Διαχείριση</h3>
                        <table class="tableClass tableDesign tablePlace">
                            <th>Όνομα</th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><td>Γκιούλη Μυρτώ</td><td>mgiouli&#64;lib.uoa.gr</td><td>210-727 6525</td></tr>
                            <tr><td>Ζερβού Νίκη</td><td>nzervou&#64;lib.uoa.gr</td><td>210-727 6525</td></tr>
                            <tr><td>Σκεντέρη Σπυριδούλα</td><td>sskederi&#64;lib.uoa.gr</td><td>210-727 6525</td></tr>
                            <tr><td>Τσούφη Σπυριδούλα</td><td>stsoufi&#64;lib.uoa.gr</td><td>210-727 6525</td></tr>
                        </table> 
                        <br>
                        <h3>Γραφείο Εξυπηρέτησης Χρηστών</h3>
                        <table class="tableClass tableDesign tablePlace">
                            <th>Όνομα</th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><td>Ανδρούτσου Νικολέτα</td><td>nandrout&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Βουμβάκης Δημήτρης</td><td>dvoumvak&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Γαλαζούδη Ερασμία</td><td>egalaz&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Δουμεντζιάνου Χρύσα</td><td>xdoumetz&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Παπακωνσταντοπούλου Παναγιώτα</td><td>ppapako&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Παπαμίχος Στέφανος</td><td>steps&#64;di.uoa.gr</td><td>210-727 6599</td></tr>
                            <tr><td>Τσίλη Αννίτα</td><td>atsili&#64;lib.uoa.gr</td><td>210-727 6599</td></tr>
                        </table> 
                        <br>
                        <h3>Γραφείο Επεξεργασίας Υλικού</h3>
                        <table class="tableClass tableDesign tablePlace">
                            <th>Όνομα</th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><td>Καλαντζοπούλου Λήδα</td><td>lkalantz&#64;lib.uoa.gr</td><td>210-727 6598</td></tr>
                            <tr><td>Λιακοπούλου Φιλίππα</td><td>fliako&#64;lib.uoa.gr</td><td>210-727 6598</td></tr>
                            <tr><td>Λυμπέρη Πηγή</td><td>pliberi&#64;lib.uoa.gr</td><td>210-727 6598</td></tr>
                            <tr><td>Ναστούλη Ρέα</td><td>mtzimoka&#64;lib.uoa.gr</td><td>210-727 6598</td></tr>
                            <tr><td>Τζιμώκα Μαρία</td><td>kpashali&#64;lib.uoa.gr</td><td>210-727 6598</td></tr>
                        </table> 
                        <br>
                        <h3>Γραφείο Πληροφορικής Υποστήριξης και Εκδόσεων</h3>
                        <table class="tableClass tableDesign tablePlace">
                            <th>Όνομα</th><th>Email</th><th>Τηλέφωνο</th></tr>
                            <tr><td>Πασχαλίδου Κατερίνα</td><td>kpashali&#64;lib.uoa.gr</td><td>210-727 6590</td></tr>
                        </table> 
                        <br>
                    </div>
                    <div id="collection" class="tab-pane">
                        
                    </div>
                    <div id="otherServices" class="tab-pane">
                        
                    </div>
                    <div id="data" class="tab-pane">
                        
                    </div>
                    <div id="links" class="tab-pane">
                        
                    </div>
                </div>
                <div class="libraryLeftInfo">
                    <div class="imageAndInfo">
                        <img class="imageDesign imageLibraryInfo" src="images/library_b3.jpg" alt="ScieneLibrary"/>
                        <div class="addressLibraryInfo">
                            <p class="address"><b>Διεύθυνση:<br></b>Πανεπιστημιoύπολη, Ζωγράφου<br><br><b>T.K: </b>157 84  Αθήνα</p>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left tabsClass libraryMenuPlace">
                        <li class="active"><a href="#basicInfo" data-toggle="tab">Βασικές Πληροφορίες</a></li>
                        <li><a href="#rentPolicy" data-toggle="tab">Πολιτική Δανεισμού</a></li>
                        <li><a href="#outerRentPolicy" data-toggle="tab">Πολιτική Διαδανεισμού</a></li>
                        <li><a href="#staff" data-toggle="tab">Προσωπικό</a></li>
                        <li><a href="#collection" data-toggle="tab">Η Συλλογή Αναλυτικά</a></li>
                        <li><a href="#otherServices" data-toggle="tab">Άλλες Υπηρεσίες</a></li>
                        <li><a href="#data" data-toggle="tab">Χρήσιμα Έγγραφα</a></li>
                        <li><a href="#links" data-toggle="tab">Χρήσιμοι Σύνδεσμοι</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            include "footer.php"
        ?>
        
    </div>
</body>        
</html>
