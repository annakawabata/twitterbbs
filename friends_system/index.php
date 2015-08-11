<?php
    $db = mysqli_connect('localhost' , 'root' , 'vagrant' ,'friends_system') or die(mysqli_connect_error());
    mysqli_set_charset($db, 'utf8');
    $area=mysqli_query($db,'SELECT*FROM areas');
    $data=mysqli_fetch_assoc($area);
    echo '<br/>'.$data['id'.'name'];
