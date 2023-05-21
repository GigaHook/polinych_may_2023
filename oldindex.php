<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Привлечение родителей в детский сад</title> <!-- Подключаем bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Подключаем стили -->
  <link rel="stylesheet" href="style.css">
</head>

<body> <!-- Шапка сайта -->
  <header class="container-fluid bg-primary text-light">
    <div class="row">
      <div class="col-md-6">
        <h1 class="animated fadeInDown">Детский сад "Радуга"</h1>
        <p>Даем детям радость и знания!</p>
      </div>
      <div class="col-md-6"> <img src="logo.png" alt="Логотип"> </div>
    </div>
  </header> <!-- Основное содержимое сайта -->
  <main class="container">
    <div class="row"> <!-- Текстовый блок -->
      <div class="col-md-6">
        <h2>Детский сад "Радуга"</h2>
        <p>Мы рады приветствовать Вас на сайте нашего детского сада! У нас Вы можете записать своего ребенка на обучение
          или наш кружок. В нашем детском саду мы создаем неповторимую и добрую атмосферу, где каждый ребенок чувствует
          себя комфортно и в безопасности.</p>
        <p>Мы заботимся о здоровье и гармоничном развитии каждого малыша, создаем условия для творческого и игрового
          процесса, помогаем получить новые знания и навыки.</p>
        <p>Мы приглашаем Вас и Вашего ребенка познакомиться с нашим детским садом и присоединиться к нашей дружной
          команде!</p>
      </div> <!-- Форма для записи -->
      <div class="col-md-6">
        <h2>Запишите своего ребенка прямо сейчас!</h2>
        <form id="myForm">
          <div class="form-group"> <label for="name">Имя ребенка</label> <input type="text" class="form-control"
              id="name"> </div>
          <div class="form-group"> <label for="age">Возраст ребенка</label> <input type="text" class="form-control"
              id="age"> </div>
          <div class="form-group"> <label for="parentName">Имя родителя</label> <input type="text" class="form-control"
              id="parentName"> </div>
          <div class="form-group"> <label for="phone">Телефон</label> <input type="text" class="form-control"
              id="phone"> </div> <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </form>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-4">
        <div class="text-center mb-3">
          <i class="fas fa-rocket fa-3x text-primary animated bounceIn"></i>
          <h4>Быстрое развитие</h4>
          <p>Мы поможем вашему ребенку быстро освоить новые знания и навыки.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center mb-3">
          <i class="fas fa-heart fa-3x text-danger animated pulse"></i>
          <h4>Любовь и забота</h4>
          <p>Ваш ребенок будет окружен заботой, вниманием и любовью наших сотрудников.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center mb-3">
          <i class="fas fa-book fa-3x text-success animated fadeIn"></i>
          <h4>Обучение и развитие</h4>
          <p>Мы поможем вашему ребенку получить образование, необходимое для успешной жизни в будущем.</p>
        </div>
      </div>
    </div>

  </main> <!-- Футер сайта -->
  <footer class="container">
    <div class="row">
      <div class="col-md-6">
        <p>Телефон: +7 (123) 456-78-90</p>
        <p>Email: info@raduga.com</p>
      </div>
      <div class="col-md-6">
        <p>Адрес: г. Москва, ул. Ленина, д. 1</p>
      </div>
    </div>
  </footer> <!-- Подключаем jQuery и JavaScript файл -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>