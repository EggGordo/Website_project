<!--logout script that kills the current session.!-->
</script>
<?php
session_start();
session_unset();
session_destroy();
header("location: homepage.php");