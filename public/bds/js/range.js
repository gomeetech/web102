/*----------------------------------
    //------ ADVANCED SEARCH ------//
    -----------------------------------*/
    $('.more-search-options-trigger').on('click', function (e) {
        e.preventDefault();
        $('.more-search-options, .more-search-options-trigger').toggleClass('active');
        $('.more-search-options.relative').animate({
            height: 'toggle',
            opacity: 'toggle'
        }, 300);
    });

/*----------------------------------------------------*/
/*  Range Sliders
/*----------------------------------------------------*/





function addRangeSlider(element){
    var $e = $(element);
    var dataMin = Number($e.attr('data-min'));
    var dataMax = Number($e.attr('data-max'));
    var dataUnit = $e.attr('data-unit');
    var space = $e.attr('data-space') == 'true'? ' ': '';
    var unitPos = $e.attr('data-unit-pos') == 'left'?'left': 'right';
    var leftUnit = unitPos == 'left'?dataUnit + space:'';
    var rightUnit = unitPos == 'right'?space+dataUnit:'';
    if(isNaN(dataMin)) dataMin = 0;
    if(isNaN(dataMax)) dataMax = 0;
    $e.append("<input type='text' class='first-slider-value' disabled/><input type='text' class='second-slider-value' disabled/>");
    var options = {
        range: true,
        min: dataMin,
        max: dataMax,
        values: [dataMin, dataMax],
        slide: function (event, ui) {
            event = event;
            $e.children(".first-slider-value").val(leftUnit + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + rightUnit);
            $e.children(".second-slider-value").val(leftUnit + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + rightUnit);
        }
    };
    console.log(options)
    $e.slider(options);
    $e.children(".first-slider-value").val(leftUnit + $e.slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + rightUnit);
    $e.children(".second-slider-value").val(leftUnit + $e.slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + rightUnit);
}
$(".gomee-range-slider").each(function (i, e) {
    addRangeSlider(e);
});




