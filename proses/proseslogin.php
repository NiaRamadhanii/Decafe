<?php
    $username = (isset($_POST['username'])) ? htmlentities ($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? htmlentities ($_POST['password']) : "" ;
    if(!empty($_POST['sumbit_validate'])){
       if($username == "abc@abc.com" && $password == "password"){
        header("Location:home");
       }else{?>
            <script>
                alert('Username and password yang anda masukkan salah');
                window.location='../login';
            </script>

<?php
       }
    }
?>