<!-- <head> -->
<!-- template links ...fromCMS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom links WM -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/color-restyle.css">
    <link rel="stylesheet" href="../css/loaderWMcustom.css">
<!-- </head> -->

<?php

require_once __DIR__.'/boot.php';

//Authorization Header
echo '<body class="bg--main--BackImg--restyle"><div class="container mx-auto my-5 text-center text-light">
<img src="/img/WhiteFirstLogo3Small.png" alt="logo">&ensp; <b>WM</b> | webmaking.pro</a><hr>
</div></body>';


// проверяем наличие пользователя с указанным юзернеймом
$stmt = pdo()->prepare("SELECT * FROM `WebMakingProUsersBasicData` WHERE `login` = :username");
$stmt->execute(['username' => $_POST['form-userName']]);
if (!$stmt->rowCount()) {
    echo '<div class="container mx-auto my-5 text-center text-light"><h1>Ошибка авторизации</h1><p class="fs-4 mb-5">Пользователь с такими данными не зарегистрирован</p>
    <div class="container mx-auto mt-5 text-center text-light">
        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#fffeee"><path d="m696-440-56-56 83-84-83-83 56-57 84 84 83-84 57 57-84 83 84 84-57 56-83-83-84 83Zm-336-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
    </div>
    <button type="button" class="btn btn-primary btn-lg w-25 mt-5 mx-auto py-4 fw-bold" onclick="goToMainPage()">Попробовать снова</button></div><script src="/js/ProjectsPagesWM.js"></script>
        ';
    //header('Location: index.html'); //TO DO - CHECK this function
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);


$pass = pdo()->prepare("SELECT * FROM `WebMakingProUsersBasicData` WHERE `password` = :password");
$pass->execute(['password' => $_POST['form-Password']]);
if (!$pass->rowCount()) {
    echo '<div class="container mx-auto my-5 text-center text-light"><h1>Ошибка авторизации</h1>
    <p class="fs-4 mb-5">Пароль неверный!!!</p>
    <div class="container mx-auto mt-5 text-center text-light">
        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#fffeee"><path d="m336-280 144-144 144 144 56-56-144-144 144-144-56-56-144 144-144-144-56 56 144 144-144 144 56 56ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
    </div>
    <button type="button" class="btn btn-primary btn-lg w-25 mt-5 mx-auto py-4 fw-bold" onclick="goToMainPage()">Попробовать снова</button></div><script src="/js/ProjectsPagesWM.js"></script>';
    //header('Location: index.html'); //TO DO - CHECK this function
    die;
}

echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container mx-auto my-5 text-center text-light"><h1>Успешная авторизация</h1><p class="fs-4 mb-5">Авторизация завершена, нажмите кнопку "Продолжить" для перехода в ваш личный кабинет</p><div class="container mx-auto mt-5 text-center text-light">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    ';




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