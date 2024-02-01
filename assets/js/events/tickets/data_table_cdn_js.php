<?php
    $currentFile = basename($_SERVER["PHP_SELF"]);
    if($currentFile === "tickets.php"){
          // DATA TABLE JS
          echo '<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>';
          echo '<script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>';
          echo '<script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>';
          
          // INITIALIZING THE DATA TABLE FUNCTIONALITIES
          echo '<script defer src="../assets/js/events/tickets/data_table_events.js"></script>';
          
          // INITIALIZING THE EVENT PAGE
          echo '<script src="../../../../../errorcode/assets/js/events/tickets/events.js"></script>';
          
    }
?>