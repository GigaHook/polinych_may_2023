<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Подснежник</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <button type="button" class="btn btn-primary" id="scrollToTopBtn"><b>Наверх</b></button>

  <script> 
    window. onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopBtn").style.display = "block";
      } else {
        document.getElementById("scrollToTopBtn").style.display = "none";
      }
    }

    document.getElementById("scrollToTopBtn").addEventListener("click", function(){
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    });
  </script>
  
  <header id="auth">
    <div class="container">
      <div class="row">

        <div class="col-8 logo-font">
          <h2>Детский сад № 18</h2>
          <h1><b>Подснежник</b></h1>
        </div>
  
        <div class="col-4 text-right mt-2">
          <h5>8 (39161) 66-9-73 </h5>
          <h5>mbdou.18@bk.ru </h5>
          <h5>07:00 - 19:00 </h5>
          <h5>г. Канск, ул. Герцена-9, № 40 </h5>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="menu">
      <div class="container">
        <div class="menu-inside">
        
          <a href="#about" class="menu-item">Наш садик</a>
          <a href="#lessons" class="menu-item">Дополнительные занятия</a>
          <a href="#documents" class="menu-item">Документы</a>
  
        </div>
      </div>
    </div>
    <div class="position-relative main-1 w-100">

      <div class="main-overlay-1 position-absolute"></div>
  
      <div class="container">
        <div class="row align-items-center h-600">
  
          <div class="col-8 desc">
            <div class="big-font">
              <b>Идёт набор детей</b>
            </div>
            <div class="less-big-font">
              Добро пожаловать на страницу детского сада "Подснежник"!
              Наши квалифицированные сотрудники заботятся о детях в возрасте от 1 до 6 лет. Мы предлагаем комфортабельные условия для игр и обучения в нашем детском саду, который находится в самом центре города.
            </div>
          </div>
  
          <form class="col-4 bg-white border rounded" method="post">
            <h3 class="mt-1">Регистрация</h3>
            <input type="text" name="fio" class="form-control mb-3" placeholder="ФИО" required>
            <input type="tel" name="phone" class="form-control mb-3" placeholder="Номер телефона" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="E-mail" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Пароль" required>
            <button type="submit" class="btn btn-primary mb-3">Зарегистрироваться</button>
          </form>
  
        </div>
      </div>
    </div>

    <div class="head" id="about">
      <div class="container text-center">
        <h2>Наш садик</h2>
      </div>
    </div>

    <div class="main-2 position-relative w-100">
      <div class="container">
        <div class="row">

          <div class="col-4 mt-3">
            <img src="assets/images/about1.jpg" class="w-100">
          </div>
          
          <div class="col-4 mt-3">
            <img src="assets/images/about2.jpg" class="w-100">            
          </div>

          <div class="col-4 mt-3">
            <img src="assets/images/about3.jpg" class="w-100">
          </div>

          <div class="col-4 my-3">
            <img src="assets/images/about4.jpg" class="w-100">
          </div>

          <div class="col-4 my-3">
            <img src="assets/images/about5.jpg" class="w-100">
          </div>

          <div class="col-4 my-3">
            <img src="assets/images/about6.jpg" class="w-100">
          </div>

          <div class="col-12 mb-3">  
            <div class="card">
              <div class="card-header">
                <h3>Немного о нас</h3>
              </div>
              <div class="card-body">
                Год постройки учреждения - 1976г. <br>
                Дата регистрации Устава – 16.08.2011 г. <br>
                Лицензия - 21.10.2011 г. <br>
                Учредитель - Муниципальное образование город Канск в лице Администрации города Канска Красноярского края.
                Сайт нашего дошкольного учреждения адресован тем родителям и педагогам, кто неравнодушен к детям. Детский период жизни важен для ребенка и во многом определяет всю его дальнейшую жизнь. <br>
                Надеемся, что наш сайт поможет Вам избежать сложных ситуаций, возникающих в процессе воспитания, обучения и общения с детьми! <br>
                Учреждение расположено в типовом двухэтажном здании, располагает шестью групповыми помещениями, в состав которых входят: приемная, игровая, туалетная комната, буфетная; музыкально-физкультурным залом, методическим, медицинским (изолятор, процедурная), кабинетом учителя-логопеда, пищеблоком, прачечной, складом для хранения продуктов, помещением для хранения инвентаря и оборудования, и другими административными кабинетами. Площадь земельного участка ограждена. На прогулочных участках имеются групповые площадки, веранды на количество групп, малые архитектурные формы, спортивная площадка для занятия физкультурой.
              </div>
            </div>
          </div>

          <div class="col-12 mb-3">
            <div class="card">
              <div class="card-header">
                <h3>Записать ребёнка к нам</h3>
              </div>
              <div class="card-body row">
                
                <div class="col-8">

                  <form method="post">
                    <input type="text" name="childFio" class="form-control mb-3" placeholder="ФИО ребёнка" required>
                    <input type="number" name="age" class="form-control mb-3" placeholder="Возраст" min="1" max="6" required>
                    
                  </form>
                  
                </div>

                <div class="col-4">
                  
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="head" id="lessons">
      <div class="container text-center">
        <h2>Дополнительные занятия и кружки</h2>
      </div>
    </div>

    <div class="main-3 position-relative w-100">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-9 card px-3 pt-2 pb-3 mt-5 container">
            <div class="row">
              
              <h4 class="col-12">Танцы и гимнастика</h4>

              <div class="col-4">
                <img src="assets/images/lessons-dance.jpg" alt="" class="w-100">
              </div>

              <div class="col-8">
                Развивающие занятия для детей от 3 до 6 лет являются важным компонентом их физического и психического развития. Такие занятия помогают детям активизироваться, вырабатывать навыки и получать удовольствие от занятий спортом и физическими упражнениями. Наша программа включает в себя несколько видов развивающих занятий: танцы, гимнастика и другие упражнения, которые способствуют развитию координации, гибкости и силы.
              </div>

            </div>
          </div>

          <div class="col-9 card px-3 pt-2 pb-3 mt-5 container">
            <div class="row">
              
              <h4 class="col-12">Музыка и пение</h4>

              <div class="col-4">
                <img src="assets/images/lessons-music.jpg" alt="" class="w-100">
              </div>

              <div class="col-8">
                Для детей от 4 до 7 лет музыкальные занятия являются хорошим способом не только развивать музыкальные способности, но и открыть для себя новый мир звуков и ритмов. Наша программа занятий включает в себя обучение основам музыки и игры на музыкальных инструментах, что позволяет детям проявлять свой творческий потенциал и раскрывать свой музыкальный талант. 
              </div>

            </div>
          </div>

          <div class="col-9 card px-3 pt-2 pb-3 mt-5 mb-5 container">
            <div class="row">
              
              <h4 class="col-12">Занятие с логопедом</h4>

              <div class="col-4">
                <img src="assets/images/lessons-logoped.jpg" alt="" class="w-100">
              </div>

              <div class="col-8">
                Индивидуальные занятия речевой коррекции для детей дошкольного возраста являются важным шагом на пути к улучшению качества жизни ребенка и развитию его речи. Если у ребенка есть проблемы в речевом развитии, это может стать большой преградой на пути к общению и социальной адаптации в будущем. Логопедические занятия в такой ситуации становятся настоящей спасительной дорогой.
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="head" id="achievements">
      <div class="container text-center">
        <h2>Достижения</h2>
      </div>
    </div>

    <div class="main-4 position-relative w-100">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-3 my-3">
            <img src="assets/images/achievement1.jpg" alt="" class="w-100">
          </div>
          
          <div class="col-3 my-3">
            <img src="assets/images/achievement2.jpg" alt="" class="w-100">
          </div>

          <div class="col-3 my-3">
            <img src="assets/images/achievement3.jpg" alt="" class="w-100">
          </div>

          <div class="col-3 my-3">
            <img src="assets/images/achievement4.jpg" alt="" class="w-100">
          </div>


        </div>
      </div>
    </div>

    <div class="head" id="documents">
      <div class="container text-center">
        <h2>Документы</h2>
      </div>
    </div>

    <div class="main-5 position-relative w-100">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12 my-3">
            <a href="https://доу-18.канск24.рф/images/doc/79.pdf"> УКАЗ губернатора красноярского края(о социально-экономических мерах поддержки лиц, принимающих участие в СВО и членов их семей) </a> <br>
            <a href="https://доу-18.канск24.рф/images/doc/148.pdf">Постановление главы города Канска №1276 от 09.11 2022г. о социально-экономических мерах поддержки</a> <br>
            <a href="https://доу-18.канск24.рф/images/doc/149.pdf">Изменения в Постановление главы города от 09.11. 2022 г.</a> <br>
            <a href="https://доу-18.канск24.рф/images/doc/150.pdf">Указ Президента  РФ №968 от 29.12.2022г. об особенностях исполнения обязанностей</a> <br>
            <a href="https://доу-18.канск24.рф/images/doc/doc52.doc">Кадровое обеспечение и методическая работа </a>
          </div>

        </div>
      </div>
    </div>

  </main>

  <footer class="bg-secondary py-2">
    <div class="container">
      <div class="row justify-content-between">

        <div class="com-3 my-3">
          8 (39161) 66-9-73
        </div>

        <div class="com-3 my-3">
          mbdou.18@bk.ru
        </div>

        <div class="com-3 my-3">
          07:00 - 19:00
        </div>

        <div class="com-3 my-3">
          г. Канск, ул. Герцена-9, № 40
        </div>

      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper-core.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>