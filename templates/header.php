<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Dashboard</title>
    <link rel="stylesheet" href="https://himal.dev/bloodbank/assets/styles/main.css">
    <script src="https://himal.dev/bloodbank/js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .fa, .fas{
            font-size: 22px;
            margin-right: 10px;
            color: #04A5AA;
        }
        i{
            height: 20px;
            width: 20px;
        }
        .sidebar-menu{
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 18px;
        }
        .contain a.active {
            color: #04A5AA;
            font-weight: 400;
        }
    </style>   
    <?php
    date_default_timezone_set("Asia/Colombo");
    ?>  

</head>
<body>
    <!--top-bar-->
	<div class="top-bar clearfix">
    	<div class="logo">
    	</div>
    	<!--top-bar-links-->
    	<div class="top-bar-links">
    		<ul>
    			<li><a href="https://himal.dev/bloodbank/index.php">Home</a></li>
    			<li><a href="https://www.findhealthclinics.com/LK/Narahenpita/125648274159498/National-Blood-Transfusion-Service---Sri-Lanka">About Us</a></li>
    			<li><a href="#">Donate</a></li>
    			<li><a href="#">Campaigns</a></li>
                <li><a href="https://himal.dev/bloodbank/donor/logout.php">Log Out</a></li>
    		</ul>
    	</div>	
	</div>	
</body>
</html>