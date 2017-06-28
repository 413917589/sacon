<?php
session_start();
session_unset();
session_destroy();
header("content-type:text/html;charset=utf-8");
echo '<script>
              alert("成功退出");
              window.location.href="login.php";
              </script>';
?>