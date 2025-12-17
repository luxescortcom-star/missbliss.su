<?php

$name = 'genie';
$name1 = 'Евгения';
$name2 = 'Евгению';
$name3 = 'Евгении';
$blur = null;
$picsFolio = 'genie';
$city = 'msk';

$home='Москва';
$height='170 см';
$weight='59 кг';
$birthdate = '1996-02-11';
$dataType = 'молодая фаворитка брюнетка би busty мск';


$en_title = 'Genie 🤩luxury beautiful girl with a chic figure';
$title = 'Евгения 🤩роскошная красивая девушка с шикарной фигурой!';
$description = 'Женственная, сентиментальная, темпераментная, страстная, покладистая, нежная. Люблю рисовать, натура я творческая, хотя по образованию экономист. Обожаю людей с хорошим чувством юмора. Люблю путешествовать';
$keywords = 'роскошная красивая брюнетка, эскортница вип, Евгения люксовая эскортница москва';
$fxt = 'jpg';

define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));

include_once (__ROOT__. '/includes/workers/birth_date.php');

include_once (__ROOT__. '/includes/profiles/moscow/favorites/genie.php');

include_once (__ROOT__. '/includes/profile-top-msk.php');

$canonical = ''.$url.'';

?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include_once (__ROOT__. '/includes/vip-head.php'); ?>
<?php include_once (__ROOT__. '/includes/styles-profile.php'); ?>
<style>
/* Измененные названия классов для видео-модалки */
.video-modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  z-index: 9999; /* Выше чем форма приглашения (z-index: 1000) */
  align-items: center;
  justify-content: center;
  pointer-events: none;
}

.video-modal-content {
  position: relative;
  width: 100%;
  max-width: 500px;
  height: 80vh;
  background: #000;
  border-radius: 15px;
  overflow: hidden;
  pointer-events: auto;
}

.video-close {
  position: absolute;
  top: 10px;
  right: 10px;
  color: white;
  font-size: 30px;
  cursor: pointer;
  z-index: 10;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  width: 25px;
  height: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Остальные стили остаются с префиксом video- */
.video-container {
  overflow: hidden;
  height: 100%;
}

.reel-video {
  transition: transform 0.3s ease;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.reels-controls {
  position: absolute;
  bottom: 20px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
  box-sizing: border-box;
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

.reels-controls button {
  background: rgba(255, 255, 255, 0.3);
  border: none;
  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 20px;
  margin-bottom: 50%;
  cursor: pointer;
  pointer-events: auto;
}

/* Показываем кнопки только на устройствах с мышью */
@media (pointer: fine) {
  .video-modal:hover .reels-controls {
    opacity: 1;
  }
}

.reels-controls button:hover {
  background: rgba(255, 255, 255, 0.5);
  transform: scale(1.1);
  transition: all 0.2s ease;
}

/* Кнопки навигации (только для десктопов) */
@media (pointer: coarse) {
  .reels-controls {
    display: none !important;
  }
}
</style>

</head>
<?php include_once (__ROOT__. '/includes/menu2.php'); ?>
<div class="perspective_container">
<div id="header-bg"></div>
<div id="sub-header-bg"></div>
<div id="body-wrapper" class="wrapper">
<div id="header">
<!--noindex--><a href="#" rel="nofollow" id="logo"></a><!--/noindex-->
<?php include_once (__ROOT__. '/includes/xxx-menu.php'); ?>
</div>
<div id="content" class="container clearfix">
<nav id="page-title">
<?php
include_once  ('../navigation.php');
$uri = substr(substr($_SERVER['REQUEST_URI'], 11), 8);
$currentFile = trim($uri, '/');
$currentFile = preg_replace('/\/+/', '/', $currentFile);
echo generateNavigation($currentFile);
?>
<h1><?=$name1 ?>. Москва</h1>
</nav>
<div id="main">
<div class="project-image portfolio">
<div class="flexslider">
<?php
$folder='b';
include_once (__ROOT__. '/includes/workers/slider_functions_FTP_old.php');

?>

</div>
</div>
<?php

include_once (__ROOT__. '/includes/workers/lightbox_functions.php');


?>

		<button class="video-button" 
        data-videos='["https://m-b.su/moscow/genie/video/genie.mp4"]'>
  📹 Показать видео
</button>

<div id="videoModal" class="video-modal">
  <div class="video-modal-content">
    <span class="video-close">х</span>
    <div class="video-container">
      <!-- Видео будут добавляться здесь -->
    </div>
    <div class="reels-controls">
      <button class="prev-btn">◀</button>
      <button class="next-btn">▶</button>
    </div>
  </div>
</div>

<script>
// Инициализация переменных
let currentVideoIndex = 0;
let videos = [];
let isVideoModalOpen = false;
let touchStartY = 0;
let hideControlsTimeout;

// Главный обработчик кнопки открытия
document.querySelector('.video-button').addEventListener('click', function() {
  if (isVideoModalOpen) return;
  
  console.log('Opening video modal');
  
  try {
    // Получаем список видео
    videos = JSON.parse(this.dataset.videos);
    console.log('Loaded videos:', videos);
    
    if (!videos || videos.length === 0) {
      console.warn('No videos found');
      return;
    }

    const modal = document.getElementById('videoModal');
    const videoContainer = modal.querySelector('.video-container');

    // Очищаем контейнер
    videoContainer.innerHTML = '';

    // Создаем элементы видео
    videos.forEach((videoUrl, index) => {
      const video = document.createElement('video');
      video.src = videoUrl;
      video.className = 'reel-video';
      video.controls = true;
      video.playsInline = true;
      video.muted = false;
      video.style.display = 'none';
      
      video.onerror = () => {
        console.error('Failed to load video:', videoUrl);
        videoContainer.innerHTML = `<p class="error">Video loading error</p>`;
      };
      
      videoContainer.appendChild(video);
    });

    // Показываем модальное окно
    modal.style.display = 'flex';
    isVideoModalOpen = true;
    console.log('Video modal opened');

    // Воспроизводим первое видео
    currentVideoIndex = 0;
    setTimeout(() => {
      playCurrentVideo();
    }, 100);

  } catch (error) {
    console.error('Error in video handler:', error);
    isVideoModalOpen = false;
  }
});

// Функция воспроизведения текущего видео
function playCurrentVideo() {
  if (!isVideoModalOpen) return;
  
  const allVideos = document.querySelectorAll('.reel-video');
  if (!allVideos.length) return;

  // Сначала останавливаем все видео
  allVideos.forEach(video => {
    video.pause();
    video.style.display = 'none';
    video.style.transform = '';
  });

  // Воспроизводим текущее видео
  const currentVideo = allVideos[currentVideoIndex];
  currentVideo.style.display = 'block';
  
  currentVideo.play()
    .then(() => console.log('Video playback started'))
    .catch(e => {
      console.log('Video playback error:', e.message);
      currentVideo.controls = true;
    });
}

// Навигация (только для десктопов)
document.querySelector('.prev-btn').addEventListener('click', () => {
  if (currentVideoIndex > 0) {
    currentVideoIndex--;
    playCurrentVideo();
  }
});

document.querySelector('.next-btn').addEventListener('click', () => {
  if (currentVideoIndex < videos.length - 1) {
    currentVideoIndex++;
    playCurrentVideo();
  }
});

// Закрытие видео-модального окна
function closeVideoModal() {
  if (!isVideoModalOpen) return;
  
  const modal = document.getElementById('videoModal');
  modal.style.display = 'none';
  isVideoModalOpen = false;
  
  // Останавливаем все видео
  document.querySelectorAll('.reel-video').forEach(video => {
    video.pause();
    video.currentTime = 0;
  });
  
  currentVideoIndex = 0;
  console.log('Video modal closed');
}

// Обработчики закрытия
document.querySelector('.video-close').addEventListener('click', closeVideoModal);

document.addEventListener('click', (e) => {
  const modal = document.getElementById('videoModal');
  if (isVideoModalOpen && modal.style.display === 'flex' && 
      !e.target.closest('.video-modal-content') && 
      !e.target.classList.contains('video-button')) {
    closeVideoModal();
  }
});

// Управление видимостью кнопок навигации (только для десктопов)
if (matchMedia('(pointer: fine)').matches) {
  const modal = document.getElementById('videoModal');
  
  modal.addEventListener('mousemove', () => {
    const controls = document.querySelector('.reels-controls');
    clearTimeout(hideControlsTimeout);
    controls.style.opacity = '1';
    
    hideControlsTimeout = setTimeout(() => {
      controls.style.opacity = '0';
    }, 2000);
  });
}

// Вертикальный свайп для мобильных устройств
const container = document.querySelector('.video-container');

container.addEventListener('touchstart', (e) => {
  if (!isVideoModalOpen) return;
  touchStartY = e.touches[0].clientY;
}, {passive: true});

container.addEventListener('touchmove', (e) => {
  if (!isVideoModalOpen) return;
  
  const touchY = e.touches[0].clientY;
  const diff = touchStartY - touchY;
  const currentVideo = document.querySelectorAll('.reel-video')[currentVideoIndex];
  
  // Слегка сдвигаем видео для визуальной обратной связи
  if (currentVideo) {
    currentVideo.style.transform = `translateY(${-diff/5}px)`;
  }
}, {passive: true});

container.addEventListener('touchend', (e) => {
  if (!isVideoModalOpen) return;
  
  const touchEndY = e.changedTouches[0].clientY;
  const diff = touchStartY - touchEndY;
  const absDiff = Math.abs(diff);
  
  // Возвращаем видео на место
  document.querySelectorAll('.reel-video').forEach(video => {
    video.style.transform = '';
  });
  
  // Определяем свайп (минимум 50px для срабатывания)
  if (absDiff < 50) return;
  
  if (diff > 0 && currentVideoIndex < videos.length - 1) {
    // Свайп вверх - следующее видео
    currentVideoIndex++;
    playCurrentVideo();
  } else if (diff < 0 && currentVideoIndex > 0) {
    // Свайп вниз - предыдущее видео
    currentVideoIndex--;
    playCurrentVideo();
  }
}, {passive: true});

// Закрытие по нажатию ESC
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && isVideoModalOpen) {
    closeVideoModal();
  }
});
</script>
</div>
<div id="sidebar">
<div class="widget">
<h2 id="modelNameData" data-model-name="<?=$name1 ?>"><?=$name1 ?></h2>
<div class="accBut first">Анкета</div>
<div class="accCon"><p>Город:<span><?=$home ?></span></p><p>Выезды<span><?=$departures ?></span></p><p>Возраст:<span><?php echo $ageData['age']; ?></span></p><p> Рост:<span><?=$height ?></span></p><p>Вес:<span><?=$weight ?></span></p><p> Объемы:<span><?=$volumes ?></span></p><p>Размер груди<span><?=$bra ?></span></p><p>Цвет глаз<span><?=$eyes ?></span></p><p>Цвет волос<span><?=$hair ?></span></p><p>Размер одежды<span><?=$size ?></span></p><p> Ориентация<span><i class="fas fa-venus-mars"></i> <?=$orientation ?></span></p><p>Языки<span><?=$languages ?></span></p><p>Отношение к курению<span><?=$smoking ?></span></p><p> Знак зодиака<span><?php echo $ageData['zodiac']; ?></span></p><br></div>
<div class="accBut">Предпочтения</div>
<div class="accCon"><?=$preferences ?></div>
<div class="accBut">Стиль</div>
<div class="accCon"><?=$style ?></div>
<div class="accBut">Хобби</div>
<div class="accCon"><?=$hobby ?></div>
 <div class="accBut">Отзывы</div>
<div class="accCon"><h4>Обо мне...</h4><p>Женственная, сентиментальная, темпераментная, страстная, покладистая, нежная. Люблю рисовать, натура я творческая, хотя по образованию экономист. Обожаю людей с хорошим чувством юмора. Люблю путешествовать.</p><br><h4>Оценка агентства...</h4><p><?=$name1 ?> - очень яркая веселая девушка которая обладает всеми качествами присущими настоящей женщине.</p><br><h4><a href="<?=$feedback ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Написать отзыв</a> <i class="far fa-thumbs-up"></i></h4></div>
<div class="accBut">Вознаграждение</div>
<div class="accCon"><div class="column last">
<div class=table-title>
</div>
<?php include_once __ROOT__. '/includes/model-prices.php'; ?>
<div class="footer">
<?=$invite ?>
</div> </div>
    <!--noindex--><a class="close" title="сlose" rel="nofollow" href="#close"></a><!--/noindex-->
    </div>
</div>
</div>
<div class="widget clearfix">
<hr>
<div class="testimonial">
<blockquote><p>Иногда мы слишком много думаем, а нужно просто жить.</blockquote>
<blockquote><p>Собирайте моменты, а не вещи.</blockquote>
<blockquote><p>Нет лучшего кометолога, чем Мир в Душе.</blockquote><br>
</div>
<?=$invite ?>
</div>
</div>

</div>
</div>
<?php include_once __ROOT__. '/section_generator.php'; ?>
</div>
<div id="footer">
<div id="footer-center" class="container">
<div class="footer-left">
<?php include_once (__ROOT__. '/includes/footer.php'); ?>

</ul>
</div>
</div>
<?php include_once __ROOT__. '/includes/footer-profile.php'; ?>





</html>