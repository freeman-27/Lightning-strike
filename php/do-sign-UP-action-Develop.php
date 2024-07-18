<!-- <head> -->
<!-- template links ...fromCMS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="../css/color-restyle.css">


<!-- </head> -->

<?php

//require_once __DIR__.'/boot.php'; //for using with PDO
$connect = include 'connConfig/connConfig.php';   //for with OOP

//Authorization Header
echo '<body class="bg--main--BackImg--restyle"><div class="container mx-auto my-5 text-center text-light">
<img src="/img/WhiteFirstLogo3Small.png" alt="logo">&ensp; <b>WM</b> | webmaking.pro</a><hr>
</div></body>';




// Добавим пользователя в базу

    $username = $_POST['form-userName'];
    $userPass = $_POST['form-Password'];
    $fullName = $_POST['form-FullName'];
    $phone = $_POST['form-PhoneNumber'];
    $eMail = $_POST['form-Email'];
    const idClient5 = '5';
    //$id-client = idClient5;

if(isset($_POST['submit']))
{
    $InsertQuery = "INSERT INTO `WebMakingProUsersRegData` (`id`,`loginName`, `password`, `clientFullName`, `phoneNumber`, `e-mail`, `idClient`) VALUES (NULL, $username, $userPass, $fullName, $phone, $eMail, idClient5);
    INSERT INTO `WebMakingProUsersBasicData` (`id`,`login`, `password`, `idClient`) VALUES (NULL, $username, $userPass, idClient5);";
    if ($connect->query($InsertQuery) === TRUE){

        echo '<div class="container mx-auto my-5 text-center text-light"><h1>Успешная авторизация</h1><p class="fs-4 mb-5">Успешная регистрация, нажмите кнопку "Продолжить" для перехода в ваш личный кабинет</p><div class="container mx-auto mt-5 text-center text-light">
            <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#fffeee"><path d="M480-40 192-256q-15-11-23.5-28t-8.5-36v-480q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v480q0 19-8.5 36T768-256L480-40Zm0-100 240-180v-480H240v480l240 180Zm-42-220 226-226-56-58-170 170-84-84-58 56 142 142Zm42-440H240h480-240Z"/></svg>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#fffeee"><path d="M480-40 192-256q-15-11-23.5-28t-8.5-36v-480q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v480q0 19-8.5 36T768-256L480-40Zm0-100 240-180v-480H240v480l240 180Zm-42-220 226-226-56-58-170 170-84-84-58 56 142 142Zm42-440H240h480-240Z"/></svg>
            </div><button type="button" class="btn btn-primary btn-lg w-25 mt-5 mx-auto py-4 fw-bold" data-bs-toggle="modal" data-bs-target="#modalInfoBlockSpinner" onclick="goToUserPage()">ПРОДОЛЖИТЬ</button>
            </div><script src="/js/signInPageRedirect.js"></script>
                <!-- modal info loader -->
                <!-- Modal -->
                <div class="modal fade" id="modalInfoBlockSpinner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">WM | Вход в личный кабинет</b></h2>
                            </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <p>Подождите выполняется вход в личный кабинет...</p>
                                    </div>
                                    <div class="container d-flex justify-content-center">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="container d-flex justify-content-center" id="loaderContainer">
                                        <div class="mt-5 pt-5 bg-secondary customMainloader--WM" id="loaderContent"></div> 
                                        <!-- <div class="" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div> -->
                                    </div>                                                
                                </div>
                            <div class="modal-footer">
                                        <p>WM | webmaking.pro</p>
                            </div>
                        </div>
                    </div>
                </div>
            <button type="button" class="btn btn-primary btn-lg w-25 mt-5 mx-auto py-4 fw-bold" onclick="goToUserPage()">ПРОДОЛЖИТЬ</button>
        </div>
            <script src="/js/signInPageRedirect.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        ';

    }
}


//TO DO same with password hash

//$newHash = password_hash($pass, PASSWORD_DEFAULT);

//$userPassHash = $newHash->fetch(PDO::FETCH_ASSOC);

/*if (password_verify($_POST['form-Password'], $userPassHash)) {
    echo 'Пароль правильный!';
} else {
    echo 'Пароль неправильный.';
}*/

//header('Location: index.html'); //TO DO header part from CMS 

?>