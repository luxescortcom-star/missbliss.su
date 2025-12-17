function send()
{
//Получаем параметры
var data=$('#newsletter').val()
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "subscribe.php",
                data: "data="+data,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#result").empty();
//и выводим ответ php скрипта
                        $("#result").append(html);
                }
        });

}