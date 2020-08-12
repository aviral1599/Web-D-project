<?php
require("includes/common.php");
?>

<!DOCTYPE html>





<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css"/> 
         <title>About Us</title>
         <style>
             body{
                 padding-top: 70px;
             }
         </style>
    </head>

    <body>
        <?php 
include 'includes/header.php';
?>
        <?php 
include 'login.php';
?>
       
<div class="container">
    <div class="page-header">
        <center><h2>ABOUT US</h2></center>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading"> WHO WE ARE </div>
                <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/aboutus.png">
                    </div>
                    <p>Amazon.com, Inc. is an American multinational technology company based in Seattle, with 750,000 employees.[8] It focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four tech companies, along with Google, Apple, and Microsoft.[9][10][11] It has been referred to as "one of the most influential economic and cultural forces in the world."</p><br>

<p>Amazon is known for its disruption of well-established industries through technological innovation and mass scale.[13][14][15] It is the world's largest online marketplace, AI assistant provider, and cloud computing platform[16] as measured by revenue and market capitalization.[17] Amazon is the largest Internet company by revenue in the world.[18] It is the second largest private employer in the United States[19] and one of the world's most valuable companies.</p>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading"> OUR HISTORY </div>
                <div class="panel-body">
                    
                    <p>Jeff Bezos founded Amazon in July 1994. He chose Seattle because of technical talent as Microsoft is located there.[29] In May 1997, the organization went public. The company began selling music and videos in 1998, at which time it began operations internationally by acquiring online sellers of books in United Kingdom and Germany. The following year, the organization also sold video games, consumer electronics, home-improvement items, software, games, and toys in addition to other items.</p>
                    <p>In 2002, the corporation started Amazon Web Services (AWS), which provided data on Web site popularity, Internet traffic patterns and other statistics for marketers and developers. In 2006, the organization grew its AWS portfolio when Elastic Compute Cloud (EC2), which rents computer processing power as well as Simple Storage Service (S3), that rents data storage via the Internet, were made available. That same year, the company started Fulfillment by Amazon which managed the inventory of individuals and small companies selling their belongings through the company internet site. In 2012, Amazon bought Kiva Systems to automate its inventory-management business, purchasing Whole Foods Market supermarket chain five years later in 2017.[30]</p>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading"> OPPURTUNITIES </div>
                <div class="panel-body">
                    <ol>
                        <li>Jr./Sr. Web developer (frontend and backend). Full Time or 6-months Internship</li>
                        <li>Business Apprentice(6-months Internship</li>
                        <li>Mangaer Backend operation . Full time or 6-months Internship</li>
                        <li> Sales Manager</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include 'includes/footer.php';
?>
    </body>
    
</html>
