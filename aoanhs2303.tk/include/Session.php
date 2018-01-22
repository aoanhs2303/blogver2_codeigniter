<?php 
    session_start();
    function Success() {
        if(isset($_SESSION["SuccessMessage"])) {
            $Output = '<div class="alert alert-success">';
            $Output .= $_SESSION['SuccessMessage'];
            $Output .= '</div>';
            $_SESSION["SuccessMessage"] = null;
            return $Output;
        }
    }
    
    function Error() {
        if(isset($_SESSION["ErrorMessage"])) {
            $Output = '<div class="alert alert-danger">';
            $Output .= $_SESSION['ErrorMessage'];
            $Output .= '</div>';
            $_SESSION["ErrorMessage"] = null;
            return $Output;
        }
    }
?>
