<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dberror1 = "Could not connect to the database!!";
    
    $conn = mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
    $select_db = mysql_select_db('eam_2016') or die("Could not select database");
     mysql_set_charset('utf8',$conn);       //encoding utf-8
?>

<html>
<head>
    <title>Βιβλιοθήκες ΕΚΠΑ</title>
    <link rel="icon" href="3D-Library-icon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.tabpager.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    
    <script>
        
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    
    $(document).ready(function() {
        $('#largeA').on('click', function () {
        document.getElementById("body").style.fontSize = "1.4em";
        var element = document.getElementById("allcontent");
        if (element!== null)
                element.style.width = "1100px";
        this.classList.add("notActiveA");
        document.getElementById("mediumA").classList.remove("notActiveA");
        });
    });
    $(document).ready(function() {
        $('#mediumA').on('click', function () {
        document.getElementById("body").style.fontSize = "1.3em";
        var element = document.getElementById("allcontent");
        if (element!== null)
                element.style.width = "1020px";
        this.classList.add("notActiveA");
        document.getElementById("largeA").classList.remove("notActiveA");
        
        });
    });
    
    $(document).ready(function() {
        $('.dropdown.keep-open').on('hide.bs.dropdown', function () {
        return this.closable;
        });
    });
    $(document).ready(function() {
        $('.dropdown.keep-open').on('click', function () {
        this.closable = true;
        });
    });
    $(document).ready(function() {
        $('.dropdown.keep-open').on('shown.bs.dropdown', function () {
        this.closable = false;
        });
    });
    $(document).ready(function() {
        $("#tabLibsMain").tabpager({ 
        items: 2,
        contents: 'contents',
        tabPlace:'beforePager',
        time: 300,
        previous: '<span class="glyphicon glyphicon-chevron-left"></span> Προηγούμενη',
        next: 'Επόμενη <span class="glyphicon glyphicon-chevron-right"></span>',
        start: 1
        });
    });

   $(document).ready(function(){
        var i;
        var d = new Date();
        var tempDate = new Date();
        var days = ["Κυρ","Δευ","Τρ","Τε","Πέ","Πα","Σάβ"];
        var months = ["Ιαν", "Φεβ", "Μαρ", "Απρ", "Μαι", "Ιουν", "Ιουλ", "Αυγ", "Σεπ", "Οκτ", "Νοε", "Δεκ"];
        var monday = document.getElementsByClassName("monday");
        var tuesday = document.getElementsByClassName("tuesday");
        var wednesday = document.getElementsByClassName("wednesday");
        var thursday= document.getElementsByClassName("thursday");
        var friday = document.getElementsByClassName("friday");
        var saturday = document.getElementsByClassName("saturday");
        var sunday = document.getElementsByClassName("sunday");
        var range = document.getElementsByClassName("range");
        
        var day = d.getDay();
        for(i=0;i<monday.length;i++){
            if (day === 0){//if it's sunday
                tempDate.setDate(d.getDate()-6);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tempDate.setDate(d.getDate()-5);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-4);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-3);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-2);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-1);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                sunday[i].innerHTML = days[d.getDay()] + d.getDate();
                sunday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                sunday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                range[i].innerHTML += d.getDate();
            }
            else if (day === 1){//if it's monday
                monday[i].innerHTML = days[d.getDay()] + d.getDate();
                monday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                monday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                range[i].innerHTML = d.getDate() + "-";
                tempDate.setDate(d.getDate()+1);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+2);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+3);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+4);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+5);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+6);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
            else if (day === 2){//if it's tuesday
                tempDate.setDate(d.getDate()-1);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tuesday[i].innerHTML = days[d.getDay()] + d.getDate();
                tuesday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                tuesday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                tempDate.setDate(d.getDate()+1);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+2);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+3);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+4);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+5);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
            else if (day === 3){//if it's wednesday
                tempDate.setDate(d.getDate()-2);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tempDate.setDate(d.getDate()-1);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                wednesday[i].innerHTML = days[d.getDay()] + d.getDate();
                wednesday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                wednesday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                tempDate.setDate(d.getDate()+1);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+2);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+3);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+4);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
            else if (day === 4){//if it's thrursday
                tempDate.setDate(d.getDate()-3);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tempDate.setDate(d.getDate()-2);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-1);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                thursday[i].innerHTML = days[d.getDay()] + d.getDate();
                thursday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                thursday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                tempDate.setDate(d.getDate()+1);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+2);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+3);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
            else if (day === 5){//if it's friday
                tempDate.setDate(d.getDate()-4);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tempDate.setDate(d.getDate()-3);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-2);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-1);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                friday[i].innerHTML = days[d.getDay()] + d.getDate();
                friday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                friday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                tempDate.setDate(d.getDate()+1);saturday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()+2);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
            else if (day === 6){//if it's saturday
                tempDate.setDate(d.getDate()-5);monday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML = tempDate.getDate() + "-";
                tempDate.setDate(d.getDate()-4);tuesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-3);wednesday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-2);thursday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                tempDate.setDate(d.getDate()-1);friday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                saturday[i].innerHTML = days[d.getDay()] + d.getDate();
                saturday[i].style.border="solid thin rgba(3, 103, 103, 0.21)";
                saturday[i].style.backgroundColor="rgba(3, 103, 103, 0.16)";
                tempDate.setDate(d.getDate()+1);sunday[i].innerHTML = days[tempDate.getDay()] + tempDate.getDate();
                range[i].innerHTML += tempDate.getDate() + months[d.getMonth()];
            }
        }
    });
    </script>
</head>
</html>