<?php
include("phpqrcode/qrlib.php");
require_once("config.php");
function generateRandomString($length) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// Function to generate random integer
function generateRandomInteger($length) {
    $numbers = '0123456789';
    $randomInteger = '';
    for ($i = 0; $i < $length; $i++) {
        $randomInteger .= $numbers[rand(0, strlen($numbers) - 1)];
    }
    return $randomInteger;
}

// Function to generate EPIC number
function generateEpicNumber() {
    $random_chars = generateRandomString(3);
    $random_integers = generateRandomInteger(7);
    $epicNumber = $random_chars . $random_integers;
    return $epicNumber;
}
function savephoto(){
    $filename = $_FILES['fileUpload']['name'];
            $tempname = $_FILES['fileUpload']['tmp_name'];
            $e = "photo/".$filename;
            move_uploaded_file($tempname, $e);
            return $e;

}
function savedob(){
    $filename = $_FILES['photoproof']['name'];
            $tempname = $_FILES['photoproof']['tmp_name'];
            $r = "dobproof/".$filename;
            move_uploaded_file($tempname, $r);
            return $r;
}
function saveadd(){
    $filename = $_FILES['proofofresidence']['name'];
            $tempname = $_FILES['proofofresidence']['tmp_name'];
            $A = "addproof/".$filename;
            move_uploaded_file($tempname, $A);
            return $A;
}
function savedis(){
    $filename = $_FILES['disabiliycertify']['name'];
            $tempname = $_FILES['disabiliycertify']['tmp_name'];
            $F = "disproof/".$filename;
            move_uploaded_file($tempname, $F);
            return $F;
}

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $epicNumber = generateEpicNumber();
        $a=$_POST['state_input'];
        
        $b=$_POST['district_input'];
        $c=$_POST['firstName'];
        $mname=$_POST['middleName'];
        $d=$_POST['surname'];
        $e=savephoto();

        $f=$_POST['relatives'];                          
        $g=$_POST['rfirstName'];
        $h=$_POST['rsurnamee'];
    
        $i=$_POST['contact'];
        $j=$_POST['number'];
        $l=$_POST['email'];

        $m=$_POST['adharno'];
        $n=$_POST['gender'];

        $o=$_POST['date'];
        $p=$_POST['ageproof'];
        $q=$_POST['otherproof'];
        $r =savedob();


        $s=$_POST['house'];
        $t=$_POST['road'];
        $u=$_POST['town'];
        $v=$_POST['postoffice'];
        $w=$_POST['pincode'];
        $x=$_POST['taluqa'];
        $y=$_POST['district'];
        $z=$_POST['state'];
        $A = saveadd();

        $B=$_POST['Disability'];
        $C=$_POST['otherdisability'];
        $D=$_POST['perdisability'];
        $E=$_POST['ceritificateattached'];
        $F =savedis();

        $G=$_POST['familymembername'];
        $H=$_POST['relationwithapplicant'];
        $I=$_POST['epicno'];

        $J=$_POST['village'];
        $K=$_POST['district1'];
        $L=$_POST['state1'];
        $M=$_POST['place'];
        $N=$_POST['date1'];

        $path = 'images/';
        $qrcode = $path.time().".png";
        $qrimage = time().".png";
        $dt="http://localhost/final/form6/verification.php?id=$m";
        $qry=mysql_query("insert into voter.voter_reg (v_epic_no,v_state,v_district,v_first_name, v_middle_name, v_surname,v_photo_file, v_relative,v_relative_name, v_relative_surname,v_mobile_no_type,v_mobile_no,v_email_id,v_aadhaar_no, v_gender,v_dob,v_dob_proof_type, v_dob_proof_other,v_dob_proof_file,v_address_house_no,v_address_street,v_address_village,v_address_post_office,v_address_pin_code,v_address_tehsil,v_address_district,v_address_state,v_address_proof_file,v_category_of_disability,v_category_of_disability_other,v_percentage_of_disability,v_disability_certificate_attached,v_disability_certificate_file,v_family_member_name,v_family_member_relationship,v_family_member_epic, v_declaration_village,v_declaration_state,v_declaration_district,v_declaration_place,v_declaration_date)values('$epicNumber','$a','$b','$c','$mname','$d','$e','$f','$g','$h','$i','$j','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$A','$B','$C','$D','$E','$F','$G','$H','$I','$J','$K','$L','$M','$N')");
       
        if($qry==true)
        {
            QRcode :: png($dt, $qrcode, 'H', 4, 4);
            echo "<!DOCTYPE html>
            <html>
            <head>
                <title>card</title>
                <style>  
                body
                {
                    margin: 0%;
                    padding: 0%;
                    padding-top: 70px;
                    font-family: Verdana, Geneva, Tahoma, sans-serif;
                }
                nav
                {
                    margin: 0%;
                    padding: 0%;
                    width: 100%;
                    height: 12%;
                    background-color: #24C2B7;
                    position: fixed !important;
                    top: 0; 
                    left:0;
                    right: 0;
                }
                img
                {
                   width: 150px;
                   height: 70px ;
                   padding-left: 30px;
                  
                }
                .space
                {
                    height:20px;
                    weight:4px;
                }
                .box_a
                {
                    
                    border-style: solid;
                    border-width: 2px;
                    height: 250px;
                    width:450px;
                    align-items: center;
                }
                .info
                {
                  margin-right: 250px;
                  height: 120px;
                  width: 120px;
                 align-content: center;
                
                  
                }
                .info_size
                {
                    margin-right: 300px;
                    width:260px;
                    height: 20px;
                    text-align: left;
                }
                .sp
                {
                    width:260px;
                    height: 2px;
                
                }
                .lab_info
                {
                    font-size: small;
                }
                .head
                {
                    width: 400px;
                    height: 40px;
                    text-align: center;
                }
                .photo
                {
                width: 100px;
                height: 100px;
                margin-left: 200px;
                }
                .button
                {
                    width: 120px;
                    height: 40px;
                    background-color: #24C2B7;
                    border-style:inset;
                    border-radius: 10px;
                    
                }
                .btngroup
                {
                
                height: 40px;
                margin-bottom:50px;
                }
                .qrcode
                {
                    margin-right:50px;
                    height:130px;
                    width:150px;
                }
                .qrimg
                {
                    height:150px;
                    width:150px;
                    padding-right:30px;
                }
                    </style>

                <script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js'></script>
            
            
                <script>
            
            
            window.jsPDF = window.jspdf.jsPDF;
            var docPDF = new jsPDF();
            
            function downloadPDF(invoiceNo){
            
                var elementHTML = document.querySelector('#content');
                docPDF.html(elementHTML, {
                    callback: function(docPDF) {
                        docPDF.save(invoiceNo+'.pdf');
                    },
                    x: 10,
                    y: 10,
                    width: 170,
                    windowWidth: 650
                });
            }
            
            document.addEventListener('DOMContentLoaded', function() {
                // Get the print button by its ID
                var printButton = document.getElementById('printButton');
                
                // Add an event listener to the print button
                printButton.addEventListener('click', function() {
                    printDiv('content');
                });
            });
        
            function printDiv(divId) {
                var printContents = document.getElementById(divId).innerHTML;
                var originalContents = document.body.innerHTML;
        
                document.body.innerHTML = printContents;
        
                window.print();
        
                document.body.innerHTML = originalContents;
            }
            </script>
            </head>
            <body>
            <body>
            <form id='reg' action='insert.php' method='post'>
              
            <div class='nav'>
                  <nav>
                 <img src='mylogo1.png'>
                  </nav>
            </div>
            
             <div id='content'>
            <center>
            <div class='space'></div>
            <div class='box_a'>
                    <div class='head'>
                        <h4>Single Vote Enforcement System</h4>
                        <img class='photo' src='".$e."'>
                    </div>
                <div class='info'> 
                   <div class='info_size'> <label class='lab_info'>EPIC NO:</label>     
                   <label id='gender' class='lab_info'>$epicNumber</label></br></div>
                   <div class='info_size'> <label class='lab_info'>Name:</label>    
                   <lable id='name' class='lab_info'> $c $mname $d<lable></br></div>
                   <div class='info_size'> <label class='lab_info'>Address:</label>      
                   <label id='address' class='lab_info'>$s $t $u, $w  </label></div> 
                   <div class='sp'></div></br>
                   <div class='info_size'> <label class='lab_info'>Date of Birth:</label>  <label id='dob' class='lab_info'>$o</label></br></div>
                   <div class='info_size'> <label class='lab_info'>Gender:</label>      <label id='gender' class='lab_info'>$n</label></br></div> 
                </div>
            </div>
            </br>
                    
            <div class='box_a'>
               <div class='sp'></div>
               <h3>YOUR QR CODE</h3><div class='qrcode'><img img class='qrimg' src='".$qrcode."'></div>
 
            <div>
            </center>
            </div>
            </br>
            
            <div class='btngroup'>
            <center>
            <input type='button' class='button' onclick='downloadPDF()' value='Download PDF' />
            <input type='button' class='button' id='printButton' value='Print' />
            </center>
            </div>
            
            </body>
            </html>";
        }
        else
        {
            echo"not".mysql_error();
        }
    }
      else
      {
          echo"Request methd is not POST";	
      }
?>