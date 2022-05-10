<?php
  
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $liczba = $_GET['liczba'];
    print $liczba;
} else {
    print 'Dane nie zostały pomyślnie wysłane.';
}
