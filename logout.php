<?php
    session_start();
    session_destroy();
    echo "<script>location='home'</script>";
