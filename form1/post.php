<?php

    // kondisi jika tombol submit memiliki value = send
    if(isset($_POST['submit']) && $_POST['submit'] == 'send') {

        // buat variabel baru
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // menampilkan value yang tersimpan di dalam variabel
        echo '
            <div> Username : ' . $username . ' </div>
            <div> Password : ' . $password . ' </div>
        ';
        // cara untuk menggabungkan html dan php dengan menggunakan ' . . '

    } else {
        echo "<h1>Oops!</h1> Something wrong!";
    }