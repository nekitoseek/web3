<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <title>Главная страница</title>
  <link rel="shortcut icon" href="../images/HC_Sibir_Logo.svg.png">
</head>
<body class="container p-0">
  <div class="container text-center">
    <img src="../images/header.png" class="w-100">
  </div>

  <nav class="container navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Главная страница</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/listnews.php">Список новостей</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/contacts.php">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mx-auto">
    <div class="bg-secondary-subtle row text-dark fs-1 text-center mt-4 p-5 align-items-center rounded-4">
      <div class="col-7 fst-italic fw-medium">
        Добро пожаловать на новостной сайт хоккейного клуба "Сибирь"!
      </div>
      <div class="col d-none d-md-block d-lg-block d-xl-block d-xxl-block">
        <img src="../images/prewiev.jpg" class="rounded-3 img-fluid">
      </div>
    </div>
  </div>
  
  <div class="container row justify-content-between mx-auto">
    <div class="card shadow-lg text-bg-light mt-4" style="width: 35rem;">
      <div class="m-3 mb-1">
        <div class="d-inline-flex justify-content-center mb-3 bg-secondary-subtle rounded-5 mx-auto p-1 fw-light">29.02.2024</div>
        <a href="../pages/news1.php"><img src="../images/news1.jpg" class="card-img-top" alt="Энди Андреофф и Кирилл Фастовский"></a>
      </div>
      <div class="card-body">
          <h5 class="card-title">"Сибирь" сохранила лучшего снайпера</h5>
          <p class="card-text">Продление контракта Андреофф.</p>
          <a href="../pages/news1.php" class="btn text-light color-sibir">Читать полностью</a>
      </div>
    </div>
    <div class="card shadow-lg text-bg-light mt-4" style="width: 35rem;">
      <div class="m-3 mb-1">
        <div class="d-inline-flex justify-content-center mb-3 bg-secondary-subtle rounded-5 mx-auto p-1 fw-light">28.02.2024</div>        <a href="../pages/news2.php"><img src="../images/news2.jpg" class="card-img-top" alt="Команда"></a>
      </div>
      <div class="card-body">
        <h5 class="card-title">"Сибирь" подвела итоги сезона</h5>
        <p class="card-text">Генеральный директор, и.о. главного тренера и игроки новосибирской команды подвели итоги сезона.</p>
        <a href="../pages/news2.php" class="btn text-light color-sibir">Читать полностью</a>
      </div>
    </div>
    <div class="card shadow-lg text-bg-light mt-4" style="width: 35rem;">
      <div class="m-3 mb-1">
        <div class="d-inline-flex justify-content-center mb-3 bg-secondary-subtle rounded-5 mx-auto p-1 fw-light">26.02.2024</div>        <a href="../pages/news3.php"><img src="../images/news3.jpg" class="card-img-top" alt="удар по воротам"></a>
      </div>
      <div class="card-body justify-content-evenly">
          <h5 class="card-title">"Сибирь" завершила сезон поражением</h5>
          <p class="card-text">Новосибирская команда проиграла в Астане.</p>
          <a href="../pages/news3.php" class="btn text-light color-sibir">Читать полностью</a>
      </div>
    </div>
    <div class="card shadow-lg text-bg-light mt-4" style="width: 35rem;">
      <div class="m-3 mb-1">
        <div class="d-inline-flex justify-content-center mb-3 bg-secondary-subtle rounded-5 mx-auto p-1 fw-light">22.02.2024</div>        <a href="../pages/news4.php"><img src="../images/news4.jpg" class="card-img-top" alt="игра возле ворот"></a>
      </div>
      <div class="card-body">
        <h5 class="card-title">"Сибирь" отыгралась с 0:3, но проиграла</h5>
        <p class="card-text">Второй матч сезона против ЦСКА для "Сибири" начался неудачно.</p>
        <a href="../pages/news4.php" class="btn text-light color-sibir">Читать полностью</a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container p-4 mt-4 mb-2 border-top border-bottom">
      <div class="row fw-light">
        <div class="col-4">&copy; 2024 ХК "Сибирь"</div>
        <div class="col-3"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="../pages/contacts.php">Контакты</a></div>
        <div class="col-5">При создании сайта использовался <a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://getbootstrap.com/">фреймворк Bootstrap v5.3 <img src="../images/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24"></a></div>
      </div>
    </div>
  </footer>
</body>




<!-- ссылки на новости: 
https://hcsibir.ru/media/news/sibir-sokhranila-luchshego-snaypera/
https://hcsibir.ru/media/news/sibir-podvela-itogi-sezona/
https://hcsibir.ru/media/news/sibir-zavershila-sezon-porazheniem-/
https://hcsibir.ru/media/news/sibir-otygralas-s-0-3-no-proigrala-/ -->