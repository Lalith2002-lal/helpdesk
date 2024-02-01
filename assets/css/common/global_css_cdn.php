<!--Bootstrap 5.3-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!--Bootstrap Icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!--Font awesome-->
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


<?php
    $currentFile = basename($_SERVER["PHP_SELF"]);

     // CONDITION FOR THE GLOBAL CSS
    if($currentFile === "index.php"){
        //  COMMON STYLE SHEET 
        echo "<link rel='stylesheet' href='assets/css/common/global.css'>";
    }else{
         //  COMMON STYLE SHEET 
         echo '<link rel="stylesheet" href="../assets/css/common/global.css">';
    }


    if ($currentFile === "index.php") {        
        // INDEX PAGE CSS
        echo "<link rel='stylesheet' href='assets/css/index/login.css'>";
    } else if ($currentFile === "sidebar.php" || $currentFile === "tickets.php") {
        // SIDEBAR CSS
        echo '<link rel="stylesheet" href="../assets/css/sidebar/sidebar.css">';
    }else if($currentFile === "tickets.php"){
        // DATA TABLE CSS
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">';
        echo '<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">';
        // TICKETS PAGE CSS
        echo '<link rel="stylesheet" href="../assets/css/tickets/tickets.css">';
    }
?>

<!-- Stylesheet -->
<!-- <link rel="stylesheet" href="assets/css/stylesheet.css"> -->
 