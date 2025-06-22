<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Menu Example</title>
    <style>
        /* Style for the menu bar */
        .menu {
            background-color: #24C2B7;
            overflow: hidden;
            width: 200%;
            margin: 0%;
            padding: 0%;

        }

        /* Style for the menu items */
        .menu a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            cursor: pointer;
        }

        /* Style for the content area */
        .content {
            padding: 20px;
        }
        .btn
        {
            background-color:#de2618;
            border-radius:8px;
            color:white;
            margin-top:8px;
            height:30px;
        }
        

    </style>
</head>
<body>

    <!-- Menu bar -->
    <div class="menu" id="menu">

        <button class="btn" onclick="scheduleVoting()">Schedule Voting</button>
        <a onclick="loadContent('verify')">Polling Station</a>
        <a onclick="loadContent('candidate_verify')">Candidate</a>
        

    </div>

    <!-- Content area -->
    <div class="content" id="content">
        <!-- Content will be loaded here -->
    </div>

    <!-- JavaScript to load content dynamically -->
    <script>
        function loadContent(page) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", page + ".php", true);
            xhttp.send();
        }

        function scheduleVoting() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            xhttp.open("GET", "truncate.php", true);
            xhttp.send();
        }

        // Load default content on page load
        window.onload = function() {
            loadContent('verify');
        };
    </script>

</body>
</html>
