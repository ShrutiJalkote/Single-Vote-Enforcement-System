<!DOCTYPE html>
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
    height: 300px;
    width:500px;
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
    height: 5px;

}
.lab_info
{
    font-size: 15px;
}
.qr
{ 
    height:75%;
    weight:50%;
    padding: 10px;
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
width: 250px;
height: 50px;
margin-left: 800px;
}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


    <script>


window.jsPDF = window.jspdf.jsPDF;
var docPDF = new jsPDF();

function downloadPDF(invoiceNo){

    var elementHTML = document.querySelector("#content");
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
<form id="reg" action="insert.php" method="post">
  
<div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
</div>

 <div id="content">
 <div class="space"></div>
<center>
<div class="box_a">
<div class="sp"></div>
        <div class="head">
            <h3>Single Vote Enforcement System</h3>
            <img class="photo" src="photo.jpeg">
        </div>
    <div class="info"> 
       <div class="info_size"> <label class="lab_info">EPIC NO:</label>     <label id="gender" class="lab_info">ABC1234567</label></br></div>
       <div class="info_size"> <label class="lab_info">Name:</label>    <lable id="name" class="lab_info">Shruti Jalkote<lable></br></div>
       <div class="info_size"> <label class="lab_info">Address:</label>      <label id="address" class="lab_info">54/54 guruwar peth,solapur 413002  </label></div> 
       <div class="sp"></div></br>
       <div class="info_size"> <label class="lab_info">Date of Birth:</label>  <label id="dob" class="lab_info">24/04/2006</label></br></div>
       <div class="info_size"> <label class="lab_info">Gender:</label>      <label id="gender" class="lab_info">Female</label></br></div> 
    </div>
</div>
</br>
        
<div class="box_a">
   <div class="sp"></div>
   <h3>YOUR QR CODE</h3><img class="qr" src="image.png">  
<div>
</center>
</div>
</br>

<div class="btngroup">
<button type="button" class="button" onclick="downloadPDF()">Download PDF</button>
<input type="button" class="button" onclick="printDiv('content')" value="Print" />
</div>

</body>
</html>