<!DOCTYPE HTML>
<html>
<head>
  <title>Three Divs Side-by-Side</title>
  <style>
     /* CSS for the navigation bar */
     nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            margin: 0%;
            padding: 0%;
            width: 100%;
            height: 13%;
            background-color: #24C2B7;
            position: fixed !important;
            top: 0; 
            left:0;
            right: 0;
            color: white;
        }

        /* CSS for the logo/image */
        .logo1 {
          width: 150px;
          height: 70px ;
          padding-left: 30px;
        }

        /* CSS for the login and signup buttons */
        .buttons {
            display: flex;
            gap: 10px;
        }

        /* CSS for the buttons */
        .buttons button {
            padding: 8px 16px;
            background-color: #262d66;
            border: none;
            color: white;
            cursor: pointer;
            border-radius:8px;
            
        }

        /* CSS for the buttons on hover */
        .buttons button:hover {
            background-color: white;
            color: black;
        }

        #div1
        {
        
          width:58%;
          float:left;
          margin-top:80px;
          height:500px;
          border-radius:10px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
        #div2
        {
          width:41%;
          float:right;
          margin-top:80px;
          height:500px;
          border-radius:8px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
        .form6
        {
          margin: auto;
          width:48%;
          height:48%;
          float:left;
          margin-left:14px;
          margin-top:25px;
        
          
        }
        .form6A
        {
          margin: auto;
          width:48%;
          height:48%;
          float:right;
          margin-right:13.5px;
          margin-top:25px;
          
        }
        .admin
        {
          margin: auto; 
          width:100%;
          height:50%;
          float:center;
          margin-right:13.5px;
          margin-top:2px;
          
        }
        .voteing
        {
          margin: auto;
          width:48%;
          height:48%;
          float:left;
          margin-left:14px;
          margin-top:2px;
        }
        .result
        {
         
          width:50%;
          height:35%;
          float:right;
         
          
        }
        .download
        {
          width:50%;
          height:35%;
          float:left;
        }
        .box5
        {
          width:95%;
         margin-bottom:30px;
          align-content:center;
          margin: auto;
          height:85%;
          border-radius: 8px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
          .box51
        {
          width:95%;
          background-color:red;
          align-content:center;
          margin: auto;
          height:85%;
          border-radius: 8px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
        .photo
        {
         
         width:35%;
         height:65%;
         float:left;
       
        }
        .buttonform6
        {
          margin-top: 145px;
          width:110px;
          height:32px;
        
        }
        
        .textform6
        {
          
          width:65%;
         height:65%;
         float:left;
         margin-top:15px;
        }
        .texthead
        {
          
        }
      .textcontaint
      {
        margin-top:15px;
      }
      .logo
      {
          margin-top:12px;
      }
      .button
      {
        border:none;
        color:white;
        height:30px;
        width:100px;
        border-radius:10px; 
        margin-left:5px;
      }
      .btn1
        {
          background-color:green;
        }
        .btn2
        {
          background-color:blue;
        }
       
        .content
        {
          width:100%;
          height:30%;
          float:left;
        }
       
        .servicephoto
        {
        
          width:40%;
          height:65%;
          float:left;
        }
        .servicetext
        {
          width:60%;
          height:100%;
          float:right;
        }
        .servicehead
        {
          color:white;
          margin-top:10px;
          margin-right:10px;
          margin-left:10px;
        }
        .servicecontent
        {
          color:white;
          margin-top:10px;
          margin-right:10px;
          margin-left:10px;
        }
        .button1
      {
        
        border:none;
        color:white;
        height:30px;
        width:80px;
        border-radius:10px; 
        margin-left:8px;
        margin-top:10px;
      }
      .contact
      {
      
        width:33.33%;
        height:68%;
        float:left;
      }
      .contentBox
        {
       
          width:95%;
          align-content:center;
          margin: auto;
          height:85%;
          border-radius: 8px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
      .post
      {
        
        width:33.33%;
        height:68%;
        float:right;
       
      }
      .email
      {
     
        width:33.33%;
        height:68%;
        float:right;
      }
      .box52
        {
          width:95%;
          align-content:center;
          margin: auto;
          height:85%;
          border-radius: 8px;
          box-shadow: 0 0 0.25em 0.25em rgba(0, 0, 0, 0.25);
        }
        .download1
        {
          width:100%;
          height:35%;
          float:left;
        }
      .btn4
        {
      
          background-color:maroon;
        }
       
      
    </style>
    <script>
    function openAnotherFile(url) {
        window.location.href = url; // Redirect the user to the specified URL
    }
</script>
</head>
<body>
<nav>
        <!-- Image/logo on the right side -->
        <img src="mylogo1.png" alt="Logo" class="logo1">

        <!-- Login and Signup buttons on the left side -->
        <div class="buttons">
            <button style="margin-right:10px;" onclick="window.location.href='login_form.php'">Login</button>
            <button style="margin-right:15px;" onclick="window.location.href='signup_form.php'">Signup</button>
        </div>
    </nav>
        <div id="div1">

            <div class="form6">
            <div class="box5" style="background-color:#e7b6f0;  border: 1.5px solid #b688bf;">
            <div class="photo">
              <img src="form6.svg" class="logo">
            </div>
            <div class="textform6">
              <div class="texthead" style="font-weight: bold;">New registration for general electors</div>
                <div class="textcontaint">Fill Form 6 if you are 18 years or above or you will turn 18 in few months</div>
            </div>
            <button class="button btn1" onclick="window.location.href='demo.php'">Form6</button>
            </div>
            </div>


            <div class="form6A">
            <div class="box5" style="background-color:#a0d7de; border: 1.5px solid #75c4c7;">
            <div class="photo">
            <img src="form6A.svg" class="logo">
            </div>
            <div class="textform6">
            <div class="texthead" style="font-weight: bold;">New registration for candidate</div>
                <div class="textcontaint">Fill Form 6A </div>
            </div>
            <button class="button btn2" onclick="window.location.href='candidate.php'">Form6A</button>
          </div>
            </div>


            <div class="admin">
            <div class="box51" style="background-color:#edcba4; border: 1.5px solid #e89d48;">
            <div class="photo">
            <img src="admin.png" height="110" width="110" class="logo">
            </div>
            <div class="textform6">
            <div class="texthead" style="font-weight: bold;">Candidate Administration</div>
                <div class="textcontaint">verSight and Management of Voting System Participants</div>
            </div>
            <button class="button btn4" onclick="window.location.href='admin.php'">Admin</button>
          </div>
            </div>

      </div>


       <div id="div2">

          <div class="download" style="margin-top:10px;">
            <div class="box5"  style="background-color:#c96863;">
              <div class="servicephoto">
              <img src="searchEPIC.svg" height="90" width="90" style="margin-top:3px; margin-left:3px;">
              <button class="button btn1" onclick="window.location.href='searchepic.php'">Search</button>
              </div>
              <div class="servicetext">
              <div class="servicehead" style="font-weight: bold;">Search in Electoral Roll</div>
                <div class="servicecontent">Get elector details here.</div>
              </div>
            </div>
          </div>

          <div class="result" style="margin-top:10px;">
          <div class="box5" style="background-color:#9d6dad;">
          <div class="servicephoto">
          <img src="EPICdownload.svg" height="90" width="90" style="margin-top:3px; margin-left:3px;">
          <button class="button btn2" onclick="window.location.href='epicdown.php'">Download EPIC </button>
          </div>
              <div class="servicetext">
              <div class="servicehead" style="font-weight: bold;">E-EPIC Download</div>
                <div class="servicecontent">Get digital version of your Electoral Photo Identity Card.</div>
              </div>
          </div>
          </div>

          
          

          <div class="download1" >
          <div class="box52" style="background-color:#5bc9ae;">
          <div class="servicephoto">
          <img src="result.svg" height="90" width="90" style="margin-top:3px; margin-left:3px;">
  </br>
          <button class="button btn4" onclick="window.location.href='barchart.php'">Election Result</button>
          </div>
              <div class="servicetext" >
              <div class="servicehead" style="font-weight: bold;">Election results</div>
                <div class="servicecontent">View current election results or view past election results and statistical report.</div>
              </div>
          </div>
          </div>

          <div class="content">
            <div class="contentBox">
              <div class="contacthead" style="font-size:20px; margin-bottom:8px; padding-left:10px;">Contact Us</div>



              <div class="contact">
                  <img src="phone.png" width="25" height="25" style="margin-left:6px;"> Contact Number
                  <h6 style="margin-top:-0px;"> 1950 (Toll-free Number)</h6>
              </div>


                <div class="post">
                  <img src="post.png" width="25" height="25"  style="margin-left:6px;"> Post Address
                  <h6 style="margin-top:-0px;">PGRS Section, Election Commission Of India, Ashoka Road, Solapur 413006</h6>
                </div>


                  <div class="email">
                    <img src="email.png" width="25" height="25"  style="margin-left:6px;"> email
                    <h6 style="margin-top:-0px;">complaints@eci.gov.in</h6>
                  </div>
                  

            </div>
          </div>

       
      </div>
   
</body>
</html>
