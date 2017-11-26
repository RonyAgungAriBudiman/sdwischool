<?php
session_unset();
session_destroy();
echo "<meta http-equiv='refresh' content='0; url=sign-in.php?logout=Thanks You anda telah keluar'>";

exit;
?>