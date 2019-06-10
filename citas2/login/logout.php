<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
    session_destroy();
    header("location:main_login.html");
</html>
