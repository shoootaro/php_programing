<?php
  $blog = mktime(2, 44, 0, 1, 15, 2024);
  
  if ($blog >= time() - 86400) {
    echo "NEW";
  }
?>