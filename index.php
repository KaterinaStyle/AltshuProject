<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>KaterinaStyleblog</title>
    <link rel="stylesheet" href="./Assets/css/styles.css">
    <link rel="stylesheet" href="./Assets/css/stylesMedia.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    </head>
<body>
    <header>
        <div class="top">
            <div class="blog">
                <button class="button"></button>    
                <p class="name">Блог Катерина Стайл</p>
            </div>
          
            <nav class="navtop">
               <ul class="navtoplist">
                    <li class="navtoplist_item">
                        <a href="#work">Работы</a> 
                    </li>
                    <li class="navtoplist_item">
                        <a href="#article">Статьи</a> 
                    </li>
                    <li class="navtoplist_item"> 
                        <a href="#introduction">Знакомство</a> 
                    </li>
                    <li class="navtoplist_item">
                        <a href="#contacts">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
       
    <main>
        <section class="topmain">
          <article class="greating">
                <div class="description">
                    <h2>Создам креативный <br> продающий <br> веб-сайт с нуля</h2>
                </div>
              <p>
                  Привет! Меня зовут Катерина. Моя креативность <br>
                  не знает пределов. Готов проверить? Создам <br> 
                  и адаптирую систему под твои запросы.
              </p>
            <div class="add_type">
                
                <a href="https://t.me/Katerina_style" class="writeme button-link">
            <p class="writeme_textstyle">
                  Напиши мне 
            </p>
            </a>
            <button class="add_type_button">
                Оставить заявку
            </button>
            <div id="popupWin" class="modalwin">
<form id="this_form">
  <div class="form">
    <label>
      Имя:
      <input type="text" name="name" placeholder="Введите свое имя">
    </label>
  </div>
  <div class="form">
    <label>
      Ваш номер телефона:
      <input type="number" name="phone_number" placeholder="Введите номер телефона"
    </label>
  </div>
    <div class="form">
      <label>
        Введите свой e-mail:
        <input type="text" name="email" placeholder="Укажите свой e-mail"
      </label>  
    </div>
    <div class="form">
      <label>
        Я согласен(-на) получать рассылку:
        <input type="checkbox" name="terms" checked>
      </label>
    </div>
     <div class="buttons"> 
    <div>
      <button type="submit">Отправить</button>
      </div>  
      <button class="cancel">Отказаться</button>
      </div>
</form>
  </div>
            
           
            </div>
            <div class="about_school">      
              <img class="about_school_picture" src="./Assets/pic/Altshu.jpg" alt="Эмблема" height="76">
            <div class="about_school_text"> 
               <p>Закончила курс по разработке веб-приложений в школе “Альтшу”</p>
             <a class="link" href="https://altshu.com/course">WebDevelopment 2022 • altshu.com</a>
            </div>
            </div>
          </article>
            <img class= "big_picture" src="./Assets/pic/Picturefirstpage.webp" alt="Большая картинка" width="610">
        </section>
    </main>
         
         
    <section class="introduction">
        <div class="nickname">
             <img src="./Assets/pic/Раздел.png" alt="log" height="50"> 
             <div id="introduction">
                <h3>Знакомство</h3>
             </div>
        </div>
        <div class="introduction_structure">
            <article class="reviews">
            <h4>
                 Отзывы
            </h4>
            <figure class="star">
                <img src="./Assets/pic/Vector.jpg" alt="ꙮ">
                 <img src="./Assets/pic/Vector.jpg" alt="ꙮ">
                 <img src="./Assets/pic/Vector.jpg" alt="ꙮ">
                 <img src="./Assets/pic/Vector.jpg" alt="ꙮ">
                 <img src="./Assets/pic/Vector.jpg" alt="ꙮ">
            </figure>

            <h5>
                Текст отзыва
            </h5>
            <figure class="review_line">
                <img src="./Assets/pic/Photo (comment.jpg" alt="Фото">
               <div class="review_common">
                 <p class="review_person">Anastasiya Smirnova</p>
                <p class="review_person_position">Middle+ FullStack Developer in GEROPHARM</p>
              </div>
            </figure>
            </article>

            <div class="introduction_description">
                <article>
                    <h4>
                        Хочешь быстро развиваться? <br>
                        Грамотно разработанный сайт поможет тебе
                    </h4>
                </article>

                <div class="introduction_numbers">
                    <article>
                        <p class="intr_numb">2+</p>
                        <p class="intr_let">Месяца обучения</p>
                    </article>

                    <article>
                        <p class="intr_numb">2+</p>
                        <p class="intr_let">Завершенных проекта</p>
                    </article>

                    <article>
                        <p class="intr_numb">5</p>
                        <p class="intr_let">Этапов создания</p>
                    </article>
                </div>

                <?php
              
                $programmName = [1 => 'HTML+CSS', 2 => 'JS, React', 3 => 'PHP, YII-2', 4 => 'MySQL'];
                $imgAssay = [1 => '<img src="./Assets/pic/HTML+CSS.jpg" alt="Pic">', 2 => '<img src="./Assets/pic/React.jpg" alt="Pic">', 3 => '<img src="./Assets/pic/PHP.png" alt="Pic">', 4 => '<img src="./Assets/pic/MySQL.jpg" alt="Pic">'];



                echo('<figure class="introduction_figure">');
                foreach($programmName as $i => $value) {	
                    echo($imgAssay[$i]);
                    echo('<p class="intr_let">');     
                    echo($value);  
                    echo('</p>');                    
                    };
                echo('</figure>');
                ?>                
            </div>

        </div>
    </section>

    <section class="work">
        <div class="nickname">
            <img src="./Assets/pic/Раздел.png" alt="log" height="50"> 
        <div id="work">
            <h3>Работы</h3>
        </div>
        </div>
        
        <h4>
            Каждый клиент получает желаемый результат
        </h4>

        
        <?php
        $article = array(
            array(
            "image" => '<img src="./Assets/pic/Rectangle.png" alt="Блок">',
            "title" => "С чего все начиналось",
            "shortDescription" => "Много лет назад в рамках какого-то курса в универе мне надо было создать веб-сайт. Каким-то образом  я справилась с этой <br>
            задачей, но результат был не супер. Тогда я решила, что это просто не мое."
            ),

            array(
            "image" => '<img src="./Assets/pic/Rectangle.png" alt="Блок">',
            "title" => "Что сейчас?",
            "shortDescription" => "Лучше всего у меня получается учиться. Именно мое упорство и не сдаваться при первых трудностях помогает мне развиваться. <br>
            И вот вы видете мою первую серьезную работу в качестве веб-разработчика."
            ),

            array(
            "image" => '<img src="./Assets/pic/Rectangle.png" alt="Блок">',
            "title" => "Планы на будущее",
            "shortDescription" => "В связи с тем, что мой путь в качестве веб-разработчика только начинается, то здесь хочу сохранить интересные идеи оформления сайтов. <br>
            Это поможет вам выбрать из имеющегося многообразия именно то, что вам понравится, а я смогу понять, что вам предлагать."
            )

        );

        $next='<img src="./Assets/pic/Стрелка.jpg" alt="дальше" height="28px">';

        echo('<div class="work_start_end">');
        echo('<article class="work_start_end_article">');
        for ($i=0; $i < 3; $i++) {
            echo($article[$i]['image']);
            echo('<p class="work_article_title">');
            echo($article[$i]['title']);
            echo('</p>');
            echo('<div class="work_description">');
            echo("<p>".$article[$i]['shortDescription']."</p>");
            echo($next);
            echo('</div>');
            };
        echo('</article>');
        echo('</div>');

        ?>


            </div>
                <a href="" class="etc button-link">
                    <p class="etc_textstyle">
                          Еще... 
                    </p>
                </a>
            </div>

        </article>

      </section>

    <section class="article">
        <div class="nickname">
            <img src="./Assets/pic/Раздел.png" alt="log" height="50">
            <div id="article">
            <h3>Статьи</h3>
             </div>
        </div>
        <h4>Блог обо всем по чуть-чуть.<br> 
            Здесь ты познакомишься со мной и получишь полезную информацию по созданию веб-сайтов
        </h4>
        <div class="article_comblock">
        <article class="article_common_block">
            <div class="article_title_block">
            <h5>
                Мой опыт и знания
            </h5>
            </div>
            <div class="article_block">
            <article class="experience">
                <img src="./Assets/pic/Кто круче.png" alt="фото" height="70%">
                <p class="article_text"></p>
            </article>

            <article class="experience">
                <img src="./Assets/pic/красный пиджак.png" alt="фото" height="70%">
                <p class="article_text"></p>
            </article>      
            
            <article class="experience">
                <img src="./Assets/pic/делегировать.png" alt="фото" height="70%">
                <p class="article_text"></p>
            </article>  

            <article class="experience">
                <img src="./Assets/pic/ожидание.png" alt="фото" height="70%">
                <p class="article_text"></p>
            </article> 

            <article class="experience">
                <img src="./Assets/pic/все статьи.png" alt="фото" height="70%">
                <p class="article_text"></p>
            </article> 
            </div>
        </article>
        
        <article class="article_common_block">
            <div class="article_title_block">
            <h5>
                Полезный материал
            </h5>
            </div>
            <div class="article_block">
            <article class="good_content">
                <img src="./Assets/pic/в процессе.png" alt="фото" height="90%">
                <p class="article_text"></p>
            </article> 

            <article class="good_content">
                <img src="./Assets/pic/в процессе.png" alt="фото" height="90%">
                <p class="article_text"></p>
            </article> 

            <article class="good_content">
                <img src="./Assets/pic/в процессе.png" alt="фото" height="90%">
                <p class="article_text"></p>
            </article> 

            <article class="good_content">
                <img src="./Assets/pic/в процессе.png" alt="фото" height="90%">
                <p class="article_text"></p>
            </article> 

            <article class="good_content">
                <img src="./Assets/pic/все статьи.png" alt="фото" height="90%">
                <p class="article_text"></p>
            </article> 
            </div>
        </article>  
        </div>
         
    </section>

    <footer class="contacts">
        <div class="nickname">
            <img src="./Assets/pic/раздел.png" alt="log" height="50">
        <div id="contacts">
        <h3>Контакты</h3>
        </div>
        </div>
        
                <p class="connect">Let's connect.</p>
        <p class="mind">Have something in mind?</p>

        <a class="contact_text" href="#work">Работы</a>
        <a class="contact_text" href="#article">Статьи</a> 
        <a class="contact_text" href="#indroduction">Знакомство</a>
        <a class="contact_text" href="#contacts">Контакты</a>

        <p class="contact_text">Подпишись, чтобы не потерять контакты</p>
        <a class="contact_text" href="https://vk.com/katestv">Вконтакте</a>
        <a class="contact_text" href="https://t.me/Katerina_style">Телеграмм</a>
        <a class="contact_text" href="mailto: stellaplus1@yandex.ru">E-mail</a>
        <a class="contact_text" href="tel: +79112682594">+7 (911) 268-25-94</a>
        <p class="contact_text">© Создано КатеринаСтайл 2022</p>
 
    </footer>
</body>

<script src="./Assets/css/javscript.js"></script>

</html>