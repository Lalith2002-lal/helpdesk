<!--Bootstrap js5.3-->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-d52XpF76r3LqL3SJteYK7r4T2POGc4pE9Y7Wf0v0aPfC3zvcPzl/mv6Z6hATK1VA" crossorigin="anonymous"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!--jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Jquery Form Validation-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<!--Sweet Alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--CK Editor 4-->
<script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>

<!-- SCRIPT LINKING USING THE CONDITIONAL RENDERING-->
<?php
    $currentFile = basename($_SERVER["PHP_SELF"]);

    if ($currentFile === "index.php") {
        // LOGIN JS FOR THE LOGIN PAGE
        echo '<script src="assets/js/errors/login/error.js"></script>';
        echo '<script src="assets/js/events/login/events.js"></script>';
    }else if ($currentFile === "sidebar.php" || $currentFile === "tickets.php") {
        // FOR THE ICONS FROM IONICONS
        echo '<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>';
        echo '<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>';
        
        // SIDEBAR FUNCTIONALITIES
        echo '<script src="../assets/js/events/sidebar/sidebar.js"></script>';

        // //   FOR THE FORM VALIDATION FILE
          echo '<script defer src="../../../../errorcode/assets/js/events/tickets/modal_form_validation.js"></script>';
    }
?>



    