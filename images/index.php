<?php
  if ($_FILES['sharex']) { # you can edit the part were it says "sharex" but you goto change it in sharex also
    $Url = "https://fbi.gov/images/39533"; # Fake URL ex: https://pornhub.com/
    $Link = "../"; # link to the dir that has the other index.php

    $file = $_FILES['sharex'];
    $allowed = array('jpg','png'); # You can add more just script it or add it idfc just leave credits

    function RandomString($length) {
      $keys = array_merge(range(0,9), range('a', 'z'));
      $key = '';
      for($i=0; $i < $length; $i++) {
          $key .= $keys[mt_rand(0, count($keys) - 1)];
      }
      return $key;
    }

    $new_dir = "";
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_error = $file['error'];

    $file_ext = explode('.', $file_name);
    $file_ext_n = strtolower(end($file_ext));

    if (in_array($file_ext_n, $allowed)) {
      $file_name_new = RandomString(6);
      $file_destination = '' . $file_name_new;

      if (move_uploaded_file($_FILES['sharex']['tmp_name'], $file_destination . ".png")) {
        echo "<" . $Url . ">||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​||||​|| " . $Link;
      } else {
        echo 'Fail to upload :^(';
      }
    }
  }
?>