<!DOCTYPE html>
<html>
<head>
<title>Candidate Registration Form</title>
<link rel="stylesheet" type="text/css" href="demo.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#reg").validate({
        rules: {
            fname: {
                required: true,
                letters: true
            },
            mname: {
                required: true,
                letters: true
            },
            lname: {
                required: true,
                letters: true
            },
            dob: {
                required: true,
                checkAge: true // Custom rule for checking age
            },
            gen: {
                required: true
            },
            adh: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true
            },
            city: {
                required: true
            },
            tal: {
                required: true
            },
            dis: {
                required: true
            },
            state: {
                required: true
            },
            pin: {
                required: true,
                digits: true
            },
            edu: {
                required: true
            },
            job: {
                required: true
            },
            work: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            mob: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            part: {
                required: true
            },
            party: {
                required: true
            }
        },
        messages: {
            fname: "Please enter your first name",
            mname: "Please enter your middle name",
            lname: "Please enter your surname",
            dob: {
                required: "Please select your date of birth",
                checkAge: "You must be at least 21 years old"
            },
            gen: "Please select your gender",
            adh: {
                required: "Please enter your Aadhaar number",
                minlength: "Aadhaar number should be 12 digits",
                maxlength: "Aadhaar number should be 12 digits",
                digits: "Please enter a valid Aadhaar number"
            },
            city: "Please enter your city name",
            tal: "Please enter your taluqa name",
            dis: "Please enter your district name",
            state: "Please enter your state name",
            pin: {
                required: "Please enter your pincode",
                digits: "Please enter your valid pincode"
            },
            edu: "Please enter your education",
            job: "Please enter your job",
            work: "Please enter your working at",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            mob: {
                required: "Please enter your contact number",
                minlength: "Contact number should be 10 digits",
                maxlength: "Contact number should be 10 digits",
                digits: "Please enter a valid contact number"
            },
            part: "Please enter participate to",
            party: "Please enter your party name",
        },
        submitHandler: function(form) {
            alert("Data is correct..!!");
            form.submit();
        }
    });

    // Function to calculate age based on the selected birth date
    function calculateAge(birthDate) {
      var today = new Date();
      var birthDate = new Date(birthDate);
      var age = today.getFullYear() - birthDate.getFullYear();
      var monthDiff = today.getMonth() - birthDate.getMonth();
      if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      return age;
    }

    // Event listener for the date of birth input
    $('#dob').on('change', function() {
      var birthDate = $(this).val();
      var age = calculateAge(birthDate);
      // If age is less than 18, alert the user and reset the date input
      if (age < 21) {
        alert("You must be at least 21 years old to continue.");
        $(this).val('');
      }
    });
});
</script>
</head>
<body>
<form id="reg" action="can_in.php" method="post" enctype="multipart/form-data">
  <div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
  </div>

  <center>
  <font color="red"><h2>Candidate Registration Form</h2></font>
  <div class="box_a center">
    <font color="red"><h2>Personal Information</h2></font>
    Enter Name:<input type="text" name="fname" id="fname" value="" placeholder="Enter First Name">
    <input type="text" name="mname" id="mname" value="" placeholder="Enter Middle Name">
    <input type="text" name="lname" id="lname" value="" placeholder="Enter Last Name"><br><br>
    Enter Date OF Birth:<input type="date" name="dob" id="dob"><br><br>
    Select Gender:<input type="radio" name="gen" id="gen" value="Male"><label for="male">Male</label>
    <input type="radio" name="gen" id="gen" value="Female"><label for="female">Female</label><br><br>
    Enter Aadhaar No:<input type="number" name="adh" id="adh" value="" placeholder="Enter Aadhaar no"><br><br>

Enter Aadhaar No:<input type="number" name="adh" id="adh" value="" placeholder="Enter Aadhaar no"><br><br>

<div class="box">
<font color="red"><h2>Address</h2></font>


Enter City Name:<input type="text" name="city" id="city" value="" placeholder="Enter City Name">

Enter Taluka Name:<input type="text" name="tal" id="tal" value="" placeholder="Enter Taluka Name"><br><br>

Enter District Name:<input type="text" name="dis" id="dis" value="" placeholder="Enter District Name">

Enter State Name:<input type="text" name="state" id="state" value="" placeholder="Enter State Name"><br><br>

Enter Pincode No:<input type="number" name="pin" id="pin" value="" placeholder="Enter Pincode"><br>
</div>

<div class="box_a">
<font color="red"><h2>Education</h2></font>



Enter Educational Degree:<input type="text" name="edu" id="edu" value="" placeholder="Enter Educational Degree">

Enter Current Job Title:<input type="text" name="job" id="job" value="" placeholder="Enter Current Job Title"><br><br>

Working At:<input type="text" name="work" id="work" value="" placeholder="Working At"><br><br>
</div>


<div class="box">
<font color="red"><h2>Personal Information</h2></font>

Enter Email id:<input type="email" name="email" id="email" value="" placeholder="Enter Email id"><br><br>

Enter Mobile No:<input type="number" name="mob" id="mob" value="" placeholder="Enter Mobile No"><br><br>
</div>

<div class="box_a">
<font color="red"><h2>Election Related</h2></font>



Participate to:<input type="text" name="part" id="part" value=""><br><br>

Enter Party Name:<input type="text" name="party" id="party" value="" placeholder="Enter Party Name"><br><br>

Select Candidate Photo:<input type="file" name="cphoto" id="cphoto" value=""><br><br>
 
Select Party Symbol:<input type="file" name="symbol" id="symbol" value=""><br><br>
</div>
<div class="button">
<input type="submit" name="submit" id="submit" value="Submit" class="button a">
<input type="reset" name="reset" id="reset" value="Reset" class="button a">
<div>
</form>
</body>
</html>

