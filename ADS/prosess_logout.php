<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
session_destroy();
?>
<script>location=("index.php?p=form_login");</script>