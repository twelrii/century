$(document).ready(function () {
    const iter = 90 / $('.brief-timeline').children('.brief-timeline_dot').length;
    var left = 5;
    //console.log(left+"px");
    $('.brief-timeline_dot').each(function () {
        $(this).css('left', left+'%');
        left = left + iter;
    })
});

$('.brief-timeline_dot').click(function(){
    var modal = $(this).attr('id');
    $('article.dn').hide();
    $('article.' + modal).fadeIn(1000);
    var left = $(this).css('left');
    $('.brief-timeline_inside').animate({
        'width' : left
    }, 500);
});




/*$(document).ready(function () {
    $("a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $('html').animate({scrollTop: destination}, 3000);
        return false;
    });
});*/

/*let dalh = $('#dalh');*/
/*$(window).scroll(function(){
    let elem = $('#dalh');
    let pos = elem.offset().top;
    let height = elem.height()-20;
    console.log(pos);
    if ($(window).scrollTop() >= pos+height*2) {
        elem.css({'position':'fixed', 'top':'46%'});
    }else{
        elem.css({'position':'absolute', 'bottom':'20px'});
    }
    /!*var nsc = $(document).scrollTop();
    var bp1 = dalh.offset().top;
    var bp2 = bp1 + wrapper.outerHeight()-$(window).height();

    if (nsc>bp1) {  navbar.css('position','fixed'); }
    else { navbar.css('position','absolute'); }
    if (nsc>bp2) { navbar.css('top', bp2-nsc); }
    else { navbar.css('top', '0'); }*!/
});*/

/*$(window).scroll(function(){
    $('.container p').each(function(){
        var scrollTop     = $(window).scrollTop(),
            elementOffset = $(this).offset().top,
            distance      = (elementOffset - scrollTop),
            windowHeight  = $(window).height(),
            breakPoint    = windowHeight*0.9;

        if(distance > breakPoint) {
            $(this).addClass("more-padding");
        }  if(distance < breakPoint) {
            $(this).removeClass("more-padding");
        }
    });
});*/

/*let history = $('#history');
let timeline = $('#timeline');
let entrance = false;
$(document).scroll(function () {
    var h = history.offset().top;
    if(window.scrollY >= history.offset().top){
        timeline.removeClass('d-none');
        entrance = true;
        console.log('TRUE', timeline.offset().top >= history.offset().top);
    }else if(entrance === true){
        timeline.addClass('d-none');
        entrance = false;
        console.log('FALSE', timeline.offset().top >= history.offset().top);
    }
    //console.log('Timeline = ${t}', 'History = ${h}');
});*/

/*
*   Функции отвечающая за появление таймлайна при достижении опледеленной отметки
*/
let history = $('#history').offset().top,
    timeline = $('#timeline'),
    height = $(window).height() * 0.2;

function tgl (state) {
    /*timeline.animate({
        toggleClass: 'd-none',
    },500);*/
    timeline.toggleClass("d-none", state);
}

$(window).on("scroll", function () {
    var top = window.scrollY;
    console.log(top, history, timeline.height());
    if (top >= history-height) {
        tgl(false);
    } else {
        tgl(true);
    }
});
/*
* Функция отвечающая за скролинг страницы при клике по ссылке на таймлайне
 */
$('.flowing-scroll').on( 'click', function(){
    var el = $(this);
    el.toggleClass("active",   'addOrRemove');
    var dest = el.attr('href'); // получаем направление
    if(dest !== undefined && dest !== '') {
        // console.log('dest top=',$(dest).offset().top);// проверяем существование
        $('html, body').animate({
                scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
        }, 1000, 'swing'// скорость прокрутки
        );
    }
    return false;
});

/*let arr = new Map([
    ['one','10%'],
    ['two','20%'],
    ['three','30%'],
    ['four','40%'],
    ['five','50%'],
    ['six','60%'],
    ['seven','70%'],
    ['eight','80%'],
]);
$(function () {
    $('.dot').click(function () {
        let attr = $(this).attr('id');
        $('.inside').animate({
            'width' : arr[attr],
        }, 500);
    });
});*/



$(window).scroll(function(){
    var activeId = null;
    $('.flowing-scroll').each(function(){
        $(this).removeClass("active-date");
    });
    $('.history-block').each(function(){
        // if activeId return;
        var scrollTop     = $(window).scrollTop(),
            elementOffset = $(this).offset().top,
            distance      = Math.abs(elementOffset - scrollTop),
            windowHeight  = $(window).height(),
            // breakPoint    = windowHeight * 0.9;
            breakPoint = $(this).height() - windowHeight * 0.5;
        if(distance < breakPoint) {
            activeId = this.id;
            console.log('active id = ', this.id);
            $('a[href*="#' + this.id + '"]').addClass('active-date');
        }else{
            console.log('active id = none');
        }
        //     $(this).addClass("more-padding");
        // }  if(distance < breakPoint) {
        //     $(this).removeClass("more-padding");
        // }
    });
});