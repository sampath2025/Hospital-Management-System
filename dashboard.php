<?php
session_start();
include_once("helpers/db.php");
$page_title = "Dashboard";
include("inc/header.php");
if(!isset($_SESSION['username'])){
        header("Location: login.php");
     }
?>

<link rel="stylesheet" href="assets/css/custom.css">

</head>
<body class="text-center">
<?php include("inc/menu.php"); ?>
<br>
<div class="container">
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Hospital Management System</h4>
    <p>This is our DBMS project which is a hospital management system.</p>
    <p><b>Project Description</b></p>
    <p style="font-style: italic;">
    A patient will have unique Patient ID. Full description about the patient about personal
detail and phone number, and then Disease and what treatment is going on. The doctor will
handle patients, One doctor can Treat more than 1 patient. Also, each doctor will have
unique ID. Doctor and Patients will be related. Patients can be admitted to hospital. So
different room numbers will be there, also rooms for Operation Theaters and ICU. There are
some nurses, and ward boys for the maintenance of hospital and for patient take care.
Based upon the number of days and treatment bill will be generated.
    </p>
    <p>
    <h4 class="alert-heading">Entity Relationship Diagram</h4>
    <iframe width="100%" height="500px" 
    style="box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); border-radius:15px;" 
    allowtransparency="true" allowfullscreen="true" scrolling="no" 
    title="Embedded DrawSQL IFrame" frameborder="0" 
    src="https://drawsql.app/teams/team-6-8/diagrams/hospitalmanagementsystem/embed"></iframe>
    </p>
  <p><b>Group Members</b></p>
  <p>Moulika Nagulavancha <br> Pranathi Kasula <br> Sampath Reddy Hanmanthu <br> Sampath Reddy Odesari</p>
  <hr>
    <p class="mb-0">Sincere thanks to <b>Professor Mark Chai</b> for his guidance.</p>
</div></div>

<?php
include_once("inc/bootstrap.php");
include_once("inc/footer.php");
?>
