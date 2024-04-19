<?php 
    $sql = "INSERT INTO users ( user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123');"
    mysqli_query($conn, $sql);
    
    header("Location: ../index.php?signup=success");