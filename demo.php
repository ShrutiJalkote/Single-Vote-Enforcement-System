<!DOCTYPE html>
<html>
<head>
  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#reg").validate({
        rules: {
            firstName: {
                required: true,
                letters: true
            },
            middleName: {
                required: true,
                letters: true
            },
            surname: {
                required: true,
                letters: true
            },
            rfirstName: {
                required: true,
                letters: true
            },
            rsurname: {
                required: true,
                letters: true
            },
            number: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            adharno: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true
            },
            date: {
                    required: true,
                    checkAge: true // Custom rule for checking age
                },
            house: {
                required: true
            },
            road: {
                required: true
            },
            town: {
                required: true
            },
            postoffice: {
                required: true
            },
            pincode: {
                required: true,
                minlength: 6,
                maxlength: 6,
                digits: true
            },
            taluqa: {
                required: true
            },
            familymembername: {
                required: true
            },
            relationwithapplicant: {
                required: true
            },
            epicno: {
            required: true,
            minlength: 10,
            maxlength: 10,
            regex: /^[A-Z]{3}[0-9]{7}$/
            },

            village: {
                required: true
            },
            place: {
                required: true
            },
            date1: {
                required: true
            }
        },
        messages: {
            firstName: "Please enter your first name",
            middleName: "Please enter your middle name",
            surname: "Please enter your surname",
            rfirstName: "Please enter your relative's first name",
            rsurname: "Please enter your relative's surname",
            number: {
                required: "Please enter your contact number",
                minlength: "Contact number should be 10 digits",
                maxlength: "Contact number should be 10 digits",
                digits: "Please enter a valid contact number"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            adharno: {
                required: "Please enter your Aadhaar number",
                minlength: "Aadhaar number should be 12 digits",
                maxlength: "Aadhaar number should be 12 digits",
                digits: "Please enter a valid Aadhaar number"
            },
            date: {
                    required: "Please select your date of birth",
                    checkAge: "You must be at least 18 years old"
                },            
                house: "Please enter your house number",
            road: "Please enter your road",
            town: "Please enter your town",
            postoffice: "Please enter your post office",
            pincode: {
                required: "Please enter your pincode",
                minlength: "Pincode should be 6 digits",
                maxlength: "Pincode should be 6 digits",
                digits: "Please enter a valid pincode"
            },
            taluqa: "Please enter your taluqa",
            familymembername: "Please enter your family member's name",
            relationwithapplicant: "Please enter your relation with the applicant",
            epicno: {
            required: "Please enter your family member's EPIC number",
            minlength: "EPIC number should be 10 characters",
            maxlength: "EPIC number should be 10 characters",
            regex: "Please enter a valid EPIC number (3 characters followed by 7 digits)"
        },
            village: "Please enter your village name",
            place: "Please enter your place name",
            date1: "Please select your date of declaration form"
        },
        submitHandler: function(form) {
            alert("Data is correct..!!");
            form.submit();
        }
    });
});
</script>


<script type="text/javascript">
    var states_arr = new Array("Andhra Pradesh" , "Arunachal Pradesh" , "Assam" , "Bihar" , "Chhattisgarh" , "Goa" , "Gujarat" , "Haryana" , "Himachal Pradesh" , "Jammu and Kashmir" , "Jharkhand" , "Karnataka" , "Kerala" , "Madhya Pradesh" , "Maharashtra" , "Manipur" , "Meghalaya" , "Mizoram" , "Nagaland" , "Orissa" , "Punjab" , "Rajasthan" , "Sikkim" , "Tamil Nadu" , "Telangana" , "Tripura" , "Uttar Pradesh" , "Uttaranchal" , "West Bengal" , "Andaman and Nicobar Islands" , "Chandigarh" , "Dadra and Nagar Haveli" , "Daman and Diu" , "Delhi" , "Lakshadweep" , "Pondicherry");

    var district_arr = new Array();

    district_arr[0] = "";

    district_arr[1] = "Anantapur|Chittoor|Cuddapah|East Godavari|Guntur|Krishna|Kurnool|Nellore|Prakasam|Srikakulam|Vishakapatnam|Vizianagaram|West Godavari";

    district_arr[2] = "Anjaw|Changlang|Dibang Valley|East Kameng|East Siang|Kra Daadi|Kurung Kumey|Lohit|Longding|Lower Dibang Valley|Lower Subansiri|Namsai|Papum Pare|Siang|Tawang|Tirap|Upper Siang|Upper Subansiri|West Kameng|West Siang";

    district_arr[3] = "Baksa|Barpeta|Bongaigaon|Cachar|Chirang|Darrang|Dhemaji|Dhubri|Dibrugarh|Dima Hasao|Goalpara|Golaghat|Hailakandi|Jorhat|Kamrup M|Kamrup R|Karbi Anglong|Karimganj|Kokrajhar|Lakhimpur|Marigaon|Nagaon|Nalbari|Sibsagar|Sonitpur|Tinsukia|Udalguri";

    district_arr[4] = "Araria|Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur Bhabua|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger|Muzaffarpur|Nalanda|Nawada|Patna|Purnia|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran";

    district_arr[5] = "Balod|Baloda Bazar|Balrampur|Bastar|Bemetra|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariyaband|Janjgir Champa|Jashpur|Kanker|Kawardha|Kondagaon|Korba|Koriya|Mahasamund|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sukma|Surajpur|Surguja";

    district_arr[6] = "North Goa|South Goa";

    district_arr[7] = "Ahmedabad|Amreli|Anand|Aravalli|Banas Kantha|Bharuch|Bhavnagar|Botad|Chhotaudepur|Dahod|Devbhumi Dwarka|Gandhinagar|Gir Somnath|Jamnagar|Junagadh|Kachchh|Kheda|Mahesana|Mahisagar|Morbi|Narmada|Navsari|Panch Mahals|Patan|Porbandar|Rajkot|Sabar Kantha|Surat|Surendranagar|Tapi|The Dangs|Vadodara|Valsad";

    district_arr[8] = "Ambala|Bhiwani|Faridabad|Fatehabad|Gurgaon|Hisar|Jhajjar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Mewat|Palwal|Panchkula|Panipat|Rewari|Rohtak|Sirsa|Sonipat|Yamunanagar";

    district_arr[9] = "Bilaspur|Chamba|Hamirpur|Kangra|Kinnaur|Kullu|Lahul Spiti|Mandi|Shimla|Sirmaur|Solan|Una";

    district_arr[10] = "Anantnag|Badgam|Bandipora|Baramula|Doda|Ganderbal|Jammu|Kargil|Kathua|Kishtwar|Kulgam|Kupwara|Leh Ladakh|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|Shopian|Srinagar|Udhampur";

    district_arr[11] = "Bokaro|Chatra|Deoghar|Dhanbad|Dumka|Garhwa|Giridih|Godda|Gumla|Hazaribagh|Jamtara|Khunti|Kodarma|Latehar|Lohardaga|Pakaur|Palamu|Pashchimi Singhbhum|Purbi Singhbhum|Ramgarh|Ranchi|Sahibganj|Saraikela|Simdega";

    district_arr[12] = "Bagalkote|Bangalore Rural|Bangalore Urban|Belgaum|Bellary|Bidar|Bijapur|Chamrajnagar|Chikkaballapur|Chikmagalur|Chitradurga|Dakshina Kannada|Davanagere|Dharwad|Gadag|Gulbarga|Hassan|Haveri|Kodagu|Kolar|Koppal|Mandya|Mysore|Raichur|Ramanagar|Shimoga|Tumkur|Udupi|Uttara Kannada|Yadgir";

    district_arr[13] = "Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|KOZHIKKODE|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad";

    district_arr[14] = "Agar Malwa|Alirajpur|Anuppur|Ashok Nagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chhatarpur|Chhindwada|Damoh|Datia|Dewas|Dhar|Dindori|Guna|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Mandla|Mandsaur|Morena|Narsinghpur|Neemuch|Panna|Raisen|Rajgarh|Ratlam|Rewa|Sagar|Satna|Sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singroli|Tikamgarh|Ujjain|Umaria|Vidisha";

    district_arr[15] = "Ahmednagar|Akola|Amravati|Aurangabad|Bhandara|Bid|Brihan Mumbai|Buldana|Chandrapur|Dhule|Gadchiroli|Gondiya|Hingoli|Jalgaon|Jalna|Kolhapur|Latur|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigarh|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal";

    district_arr[16] = "Bishnupur|Chandel|Churachandpur|Imphal East|Imphal West|Senapati|Tamenglong|Thoubal|Ukhrul";

    district_arr[17] = "East Garo Hills|East Jaintia Hills|East Khasi Hills|North Garo Hills|Ri Bhoi|South Garo Hills|South West Garo Hills|South West Khasi Hills|West Garo Hills|West Jaintia Hills|West Khasi Hills";

    district_arr[18] = "Aizawl East|Aizawl West|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip";

    district_arr[19] = "Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Mon|Peren|Phek|Tuensang|Wokha|Zunheboto";

    district_arr[20] = "Anugul|Balangir|Baleshwar|Bargarh|Baudh|Bhadrak|Cuttack|Deogarh|Dhenkanal|Gajapati|Ganjam|Jagatsinghpur|Jajapur|Jharsuguda|Kalahandi|Kandhamal|Kendrapara|Keonjhar|Khordha|Koraput|Malkangiri|Mayurbhanj|Nabarangapur|Nayagarh|Nuapada|Puri|Rayagada|Sambalpur|Sonapur|Sundargarh";


    district_arr[21] = "Amritsar|Barnala|Bathinda|Faridkot|Fatehgarh Sahib|Fazilka|Firozpur|Gurdaspur|Hoshiarpur|Jalandhar|Kapurthala|Ludhiana|Mansa|Moga|Mohali SAS Nagar|Muktsar|Nawanshahr|Pathankot|Patiala|Rupnagar|Sangrur|Tarn Taran";

    district_arr[22] = "Ajmer|Alwar|Banswara|Baran|Barmer|Bharatpur|Bhilwara|Bikaner|Bundi|Chittaurgarh|Churu|Dausa|Dhaulpur|Dungarpur|Ganganagar|Hanumangarh|Jaipur|Jaisalmer|Jalor|Jhalawar|Jhunjhunun|Jodhpur|Karauli|Kota|Nagaur|Pali|Pratapgarh|Rajsamand|Sawai Madhopur|Sikar|Sirohi|Tonk|Udaipur";

    district_arr[23] = "East|North|South|West";

    district_arr[24] = "Ariyalur|Chennai|Coimbatore|Cuddalore|Dharmapuri|Dindigul|Erode|Kancheepuram|Kanniyakumari|Karur|Krishnagiri|Madurai|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Salem|Sivaganga|Thanjavur|Theni|Thiruvallur|Thiruvarur|Tiruchirappalli|Tirunelveli|Tirupur|Tiruvanamalai|Toothukudi|Vellore|Viluppuram|Virudhunagar";

    district_arr[25] = "Adilabad|Hyderabad|Karim Nagar|Khammam|Mahbubnagar|Medak|Nalgonda|Nizamabad|Ranga Reddy|Warangal Urban";

    district_arr[26] = "Dhalai|Gomati|Khowai|North Tripura|Sipahijala|South Tripura|Unakoti|West Tripura";

    district_arr[27] = "Agra|Aligarh|Allahabad|Ambedkar Nagar|Auraiya|Azamgarh|Bagpat|Bahraich|Ballia|Balrampur|Banda|Barabanki|Bareilly|Basti|Bijnor|Budaun|Bulandshahar|C S M Nagar|Chandauli|Chitrakoot|Deoria|Etah|Etawah|Faizabad|Farrukhabad|Fatehpur|Firozabad|Gautam Buddha Nagar|Ghaziabad|Ghazipur|Gonda|Gorakhpur|Hamirpur|Hapur|Hardoi|Hathras|Jalaun|Jaunpur|Jhansi|Jyotiba Phule Nagar|Kannauj|Kanpur Dehat|Kanpur Nagar|Kashi Ram Nagar|Kaushambi|Kushinagar|Lakhimpur Kheri|Lalitpur|Lucknow|Maharajganj|Mahoba|Mainpuri|Mathura|Maunathbhanjan|Meerut|Mirzapur|Moradabad|Muzaffarnagar|Pilibhit|Pratapgarh|Rae Bareli|Rampur|Saharanpur|Sambhal|Sant Kabir Nagar|Sant Ravidas Nagar|Shahjahanpur|Shamli|Shrawasti|Siddharth Nagar|Sitapur|Sonbhadra|Sultanpur|Unnav|Varanasi";

    district_arr[28] = "Almora|Bageshwar|Chamoli|Champawat|Dehradun|Garhwal|Hardwar|Nainital|Pithoragarh|Rudraprayag|Tehri Garhwal|Udham Singh Nagar|Uttarkashi";

    district_arr[29] = "Alipurduar|Bankura|Barddhaman|Birbhum|Dakshin Dinajpur|Darjiling|Haora|Hugli|Jalpaiguri|Koch Bihar|Maldah|Murshidabad|Nadia|North Twenty Four Parganas|Paschim Medinipur|Purba Medinipur|Puruliya|South Twenty Four Parganas|Uttar Dinajpur";



    district_arr[30] = "Nicobar|North and Middle Andaman|South Andaman";

    district_arr[31] = "Chandigarh";

    district_arr[32] = "Dadra and Nagar Haveli";

    district_arr[33] = "Daman|Diu";

    district_arr[34] = "Central|East|New Delhi|North|North East|North West|Shahdara|South|South East|South West|West";

    district_arr[35] = "Lakshadweep";

    district_arr[36] = "Karaikal|Mahe|Pondicherry|Yanam";


    function populateDistricts(stateElementId, districtElementId) 
    {
      var selectedStateIndex = document.getElementById(stateElementId).selectedIndex;
      var districtElement = document.getElementById(districtElementId);
      districtElement.length = 0;
      districtElement.options[0] = new Option('Select district', '');
      districtElement.selectedIndex = 0;
      var district_ar = district_arr[selectedStateIndex].split("|");
      for (var i = 0; i < district_ar.length; i++) 
      {
        districtElement.options[districtElement.length] = new Option(district_ar[i], district_ar[i]);
      }
    }

    function populateStates(stateElementId, districtElementId)
    {
      // given the id of the <select> tag as function argument, it inserts <option> tags
      var stateElement = document.getElementById(stateElementId);
      stateElement.length = 0;
      stateElement.options[0] = new Option('Select state', '-1');
      stateElement.selectedIndex = 0;
      for (var i = 0; i < states_arr.length; i++)
      {
        stateElement.options[stateElement.length] = new Option(states_arr[i], states_arr[i]);
      }

      // Assigned all countries. Now assign event listener for the states.

      if (districtElementId) 
      {
        stateElement.onchange = function () 
        {
          populateDistricts(stateElementId, districtElementId);
        };
      }
    }
    function validate_fileupload(fileName)
{
    var allowed_extensions = new Array("jpg","png","gif");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.

    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            return true; // valid file extension
        }
    }

    return false;
}
$(document).ready(function() {
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
    $('#date').on('change', function() {
      var birthDate = $(this).val();
      var age = calculateAge(birthDate);
      // If age is less than 18, alert the user and reset the date input
      if (age < 18) {
        alert("You must be at least 18 years old to continue.");
        $(this).val('');
      }
    });
  });
</script>


<title>Form6</title>

<link rel="stylesheet" type="text/css" href="demo.css">
</head>


<body>
<form id="reg" action="insert.php" method="post" enctype="multipart/form-data">
  <div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
</div>

<center>

<div class="box_a center ">
<font color="red"><h2>A. Select State, District & Personal Details</h2></font>

                State:<select id="state_input" name="state_input"></select>
                District:<select name="district_input" id="district_input"></select></br></br>
                <script language="javascript">
                populateStates("state_input", "district_input");
                </script>
                First Name:<input type="text" id="firstName" name="firstName"> 
                Middle Name:<input type="text" id="middleName" name="middleName"> 
                Last Name:<input type="text" id="surnamee" name="surname"> </br> </br>
                <input type="file" name="fileUpload"></br></br>
</div>

<div class="box">
<font color="red"><h2>B. Name and Surname of any one of the relatives</h2></font>

                Relatives:
                <input type="radio" id="father" name="relatives" value="Father">
                <label for="father">Father</label>

                <input type="radio" id="mother" name="relatives" value="Mother">
                <label for="mother">Mother</label>

                <input type="radio" id="husband" name="relatives" value="Husband">
                <label for="husband">Husband</label>

                <input type="radio" id="wife" name="relatives" value="Wife">
                <label for="wife">Wife</label>

                <input type="radio" id="thirdGender" name="relatives" value="Legal Guardian in case of orphan/Third Gender">
                <label for="thirdGender">Legal Guardian in case of orphan/Third Gender</label></br></br>

                First Name:<input type="text" id="rfirstName" name="rfirstName"> 
                Last Name:<input type="text" id="rsurnamee" name="rsurnamee"> </br> </br>
</div>

<div class="box_a">
<font color="red"><h2>C. Contact Details</h2></font>

Mobile Number:<label><input type="radio" name="contact" id="self" value="self"/> Self</label>
            <label><input type="radio" name="contact" id="relative" value="self"/> Relative</label></br></br>

            Mobile Number:
            <input type="text" id="number" name="number"></br></br>

            Email ID:
            <input type="email" id="email" name="email"></br><br>
</div>

<div class="box">
<font color="red"><h2>D. Aadhaar Details</h2></font>

Aadhaar Number:<input type="text" id="adharno" name="adharno"></br></br>

</div>

<div class="box_a">
<font color="red"><h2>E. Gender</h2></font>

                Gender:<input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>

                <input type="radio" id="thirdparty" name="gender" value="Third Party">
                <label for="thirdparty">Third Party</label></br></br>

</div>

<div class="box">
<font color="red"><h2>F. Date of Birth details</h2></font>

                Date of Birth *<input type="date" id="date" name="date"><br/></br>

                Self attested copy of document supporting age proof</br>
                attached Document for proof of Date of Birth.
                <select name="ageproof" id="ageproof">
                  <option value="Select Document">Select Document</option>
                  <option value="Birth Certificate">Birth Certificate issued by competent Local Body/Municipal Authority/Registrar of Birth & Deaths</option>
                  <option value="Adhar Card">Adhar Card</option>
                  <option value="Driving License">Driving License</option>
                  <option value="Certificate of Class X or XII">Certificate of Class X or Class XII issued by CBSE/ICSE/ State Education Boards,<break> if it Contains Date of Birth</option>
                  <option value="Indian Passport">Indian Passport</option>
                </select></br></br> 


                Any other Document for proof of Date of Birth (If no document is available) (Pl. Specify)
                <input type="text" id="otherproof" name="otherproof"></br></br>

                Proof of Residence (Document size maximum 2MB,.jpg,.png,.pdf) *
                <input type="file" id="photoproof" name="photoproof"></br></br>

</div>

<div class="box_a">
<font color="red"><h2>G. Present Address Details</h2></font>
House/Building/ Apartment No: <input type="text" id="house" name="house">
Street/Area/Locality/Mohalla/Road: <input type="text" id="road" name="road"> </br></br>     
Village/Town: <input type="text" id="town" name="town">
Post Office: <input type="text" id="postoffice" name="postoffice"></br></br>
PIN Code: <input type="text" id="pincode" name="pincode">
Tehsil/Taluqa/Mandal: <input type="text" id="taluqa" name="taluqa"> </br></br>

District:<select name="district" id="district"></select>
State:<select id="state" name="state"></select></br></br>
                <script language="javascript">
                populateStates("state", "district");
                </script>
Proof of Residence (Document size maximum 2MB,.jpg,.png,.pdf): <input type="file" id="proofofresidence" name="proofofresidence"></br></br>
</div>

<div class="box">
<font color="red"><h2>H. Category of Disability, if any</h2></font>

Category:
<input type="checkbox" id="Disability" name="Disability" value="Locomotive">Locomotive
<input type="checkbox" id="Disability" name="Disability" value="Visual">Visual
<input type="checkbox" id="Disability" name="Disability" value="Deaf & Dumb">Deaf & Dumb
other:<input type="text" id="otherdisability" name="otherdisability"></br></br>
Percentage of disability: <input type="text" minimum="1" maximum="100" id="perdisability" name="perdisability"></br></br>
Certificate Attached:<input type="radio" id="ceritificateattached" name="ceritificateattached">yes
                      <input type="radio" id="ceritificateattached" name="ceritificateattached">no</br></br>
  
Disability Certificate (Document size maximum 2MB,.jpg,.png,.pdf):<input type="file" id="disabiliycertify" name="disabiliycertify">

</div>

<div class="box_a">
<font color="red"><h2>I. The details of my family member already included in the electoral roll</br> at current address with whom I currently reside are as under</h2></font>

Name of Family Member: <input type="text" id="familymembername"name="familymembername">
Relationship with applicant:<input type="text" id="relationwithapplicant" name="relationwithapplicant"></br></br>
His/Her EPIC Number:<input type="text" id="epicno" name="epicno">
<script language="javascript">
                generateEpicNumber("state1", "district1");
                </script></br></br>

</div>

<div class="box">
<font color="red"><h2>J. Declaration</h2></font>

I Hereby declare that to the best of My knowledge and belief.</br></br>
I am a citizen of India and place of my birth is :
Village/Town:<input type="text" id="village" name="village"></br></br>
District:<select name="district1" id="district1"></select>
State:<select id="state1" name="state1"></select>
                <script language="javascript">
                populateStates("state1", "district1");
                </script></br></br>
Place: <input tupe="text" id="place" name="place">
Date: <input type="date" id="date1" name="date1">
</div>

<div class="box_a">
<font color="red"><h2>K. Captcha</h2></font> 
     <div class="col-md-6 form-group">
       <label for="captcha">Captcha</label>
       <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha" required class="form-control"/>
       <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
     </div>
     <div class="col-md-6 form-group">
       <label for="captcha-code">Captcha Code</label>
       <div class="captcha"><?php $rand = rand(9999,1000);
       echo $rand; ?></div>
      </div>
</div>

<div class="button">
<button type="submit" class="button a">Submit</button>&nbsp;&nbsp;
</div>
</center>

</form>
</body>
</html>