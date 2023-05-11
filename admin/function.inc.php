<?php

function get_safe_value($connection,$arg){
    return mysqli_real_escape_string($connection,$arg);
}

?>