$('div.select_day').click(function () {
    if ($('div.selected_day').hasClass('hiddend'))
        $('div.selected_day').removeClass('hiddend')
    else
        $('div.selected_day').addClass('hiddend')
});

$('selected_day').click(function () {
    if ($('div.selected_day').hasClass('hiddend'))
        $('div.selected_day').removeClass('hiddend')
    else
        $('div.selected_day').addClass('hiddend')
});

$('.selected_day').click(function (event) {
    let text = $(event.target).text();
    $('div.select_day span.day').text(text);
    birthday();
});




$('div.select_month').click(function () {
    if ($('div.selected_month').hasClass('hiddend'))
        $('div.selected_month').removeClass('hiddend')
    else
        $('div.selected_month').addClass('hiddend')
});

$('selected_month').click(function () {
    if ($('div.selected_month').hasClass('hiddend'))
        $('div.selected_month').removeClass('hiddend')
    else
        $('div.selected_month').addClass('hiddend')
});

$('.selected_month').click(function (event) {
    let text = $(event.target).text();
    $('div.select_month span.month').text(text);
    birthday();
});




$('div.select_year').click(function () {
    if ($('div.selected_year').hasClass('hiddend'))
        $('div.selected_year').removeClass('hiddend')
    else
        $('div.selected_year').addClass('hiddend')
});

$('selected_year').click(function () {
    if ($('div.selected_year').hasClass('hiddend'))
        $('div.selected_year').removeClass('hiddend')
    else
        $('div.selected_year').addClass('hiddend')
});

$('.selected_year').click(function (event) {
    let text = $(event.target).text();
    $('div.select_year span.year').text(text);
    birthday();
    console.log();
});


function birthday() {
    let day = $('div.select_day span.day').text();
    let month = $('div.select_month span.month').text();
    let year = $('div.select_year span.year').text();

    $('input.input_birthday').attr("value", day + " " + month + " " + year);
}



$('.container_sex').click(function (event) {
    $('.container_sex').removeClass('container_sex_active');
    $('.container_sex img').css('display', 'none');
    if (event.target.innerText === 'Мужской') {
        $('.man').addClass('container_sex_active');
        $('.man_sex_img').css('display', 'block');
        $('input.input_sex').attr("value", "man");
    }
    if (event.target.innerText === 'Женский') {
        $('.woman').addClass('container_sex_active');
        $('.woman_sex_img').css('display', 'block');
        $('input.input_sex').attr("value", "woman");
    }
});



