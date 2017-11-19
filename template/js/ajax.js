$(document).ready(function(){
    
    /* Переменная-флаг для отслеживания того, происходит ли в данный момент ajax-запрос. В самом начале даем ей значение false, т.е. запрос не в процессе выполнения */    
    var inProgress = false;
    /* С какой статьи надо делать выборку из базы при ajax-запросе */ 
    var startFrom = 3;

    
        /* Используйте вариант $('#more').click(function() для того, чтобы дать пользователю возможность управлять процессом, кликая по кнопке "Дальше" под блоком статей (см. файл index.php) */
        // $('#more').click(function() {
        $(window).scroll(function() {
            
            /* Если высота окна + высота прокрутки больше или равны высоте всего документа и ajax-запрос в настоящий момент не выполняется, то запускаем ajax-запрос */
            if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {
        
            $.ajax({
                /* адрес файла-обработчика запроса */
                url: 'ajax',
                /* метод отправки данных */
                method: 'POST',
                /* данные, которые мы передаем в файл-обработчик */
                data: {"startFrom" : startFrom},
                
                /* что нужно сделать до отправки запрса */
                beforeSend: function() {
                /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
                inProgress = true;}
                /* что нужно сделать по факту выполнения запроса */
                }).done(function(data){
                
                /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */ 
                data = jQuery.parseJSON(data);
                console.log(data);
                
                /* Если массив не пуст (т.е. статьи там есть) */
                if (data.length > 0) {
                    
                /* Делаем проход по каждому результату, оказвашемуся в массиве,
                где в index попадает индекс текущего элемента массива, а в data - сама статья */                 
                $.each(data, function(index, data){
                
                /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */    
                
                var postStrElm =
                    "<div class='col-sm-6 col-md-12'>\
                        <div class='thumbnail blog'>\
                            <h3>User: " + data.user_name + "</h3>\
                            <p>Comment: " + data.comment + "</p>\
                            <p><strong>at: " + data.created_at + "</strong></p>\
                            <input class=\"btn btn-default\" id=\"submit\" type=\"submit\" name=\"submit\" value=\"EDIT\">\
                        </div>\
                    </div>";
                    $("#article").append(postStrElm);
                });
                
                /* По факту окончания запроса снова меняем значение флага на false */
                inProgress = false;
                // Увеличиваем на 3 порядковый номер статьи, с которой надо начинать выборку из базы
                startFrom += 3;
                }});   
            }
        });
});
