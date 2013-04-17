
VK.init({
    apiId: 3139786,
    onlyWidgets: true
});
function setBlocks() {
    var windowHeight = $(window).innerHeight();
    var list_height = windowHeight - 15;
    $('#studio-list').css({
        'overflow-y':'scroll',
        height:list_height + 'px'
    });

    var map_height = list_height - 355;
    if (map_height < 320) {
        map_height = 320;
    }
    var schedule_height = 340;

    $('#schedule-wrapper').css({
        'overflow-y':'scroll',
        height:schedule_height + 'px'
    });
    $('#map').css({
        height:map_height + 'px'
    });
}
$(function () {
    setBlocks();
    $(window).resize(setBlocks());
    $('.voting').on('click', '.icon-thumbs-up',function () {
        var block = $(this).closest('.voting');
        var studio_id = block.data('studio-id');
        $.ajax({
            type:'POST',
            url:'/vote/plus/',
            data:{studio_id:studio_id},
            success:function (data) {

                block.children('span').html(data.response);
            },
            dataType:'json'
        });
    }).on('click', '.icon-thumbs-down', function () {
            var block = $(this).closest('.voting');
            var studio_id = block.data('studio-id');

            $.ajax({
                type:'POST',
                url:'/vote/minus/',
                data:{studio_id:studio_id},
                success:function (data) {

                    block.children('span').html(data.response);
                },
                dataType:'json'
            });
        });


});
L.Icon.Default.imagePath = 'http://reptochki.by/images/';
var R = {
    studios:{},
    active:'',
    clicked_marker:null,
    init:function (lat, lng,zoom) {

        map = L.map('map',{
            scrollWheelZoom:true
        }).setView([lat, lng ], zoom);
        L.tileLayer('http://{s}.tile.cloudmade.com/170820bcc2f3411395f33ab9cdee29df/997/256/{z}/{x}/{y}.png', {
            attribution:'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom:18
        }).addTo(map);
    },
    bindMarkers:function (markers) {
        $.each(markers, function (key, marker) {
            if (marker.lat && marker.lon) {
                if (!R.studios[marker.id]) {
                    R.studios[marker.id] = {
                        marker:''
                    }
                }
                R.studios[marker.id].marker = L.
                    marker([marker.lat, marker.lon]).on('click',function(){
                        R.clicked_marker = 'yes';
                    }).
                    addTo(map)
                    .bindPopup(
                    "<h3>" +
                        marker.title +
                        "</h3><br>" +
                        $('.studio' + marker.id + ' address.phones').html(),
                    {id:marker.id}
                );
            }
        });
    },
    setHandlers:function () {
        /**
         * @todo add close handler using marker click handler
         */
        map.on('popupclose',function(){
            if(!(R.source || R.clicked_marker)){
                $('.accordion-heading[data-studio-id=' + R.active + ']').find('.accordion-toggle').trigger('click');
            }
        });
        map.on('popupopen', function (event) {
            if(!R.source){
                R.source = 'map';
                R.active = event.popup.options.id;
                $('.accordion-heading[data-studio-id=' + event.popup.options.id + ']').find('.accordion-toggle').trigger('click');
                $('.schedule-active').hide().removeClass('schedule-active');
                $('#schedule-' + event.popup.options.id).show().addClass('schedule-active');
                R.source = null;
                R.clicked_marker = null;
            }
        });
        $('#studio-list').on('click','.accordion-heading a',function(){
            if(!R.source){
                R.source = 'list';
                var id = $(this).closest('.accordion-heading').data('studio-id');
                if(R.active == id){
                    if(!R.clicked_marker){
                        R.active = null;
                        map.closePopup();
                        R.source = null;
                        $('.schedule-active').hide().removeClass('schedule-active');
                        $('.default').show().addClass('schedule-active');
                        $("#studio-list").animate({scrollTop: '0px'});
                    }else{
                        $('.schedule-active').hide().removeClass('schedule-active');
                        $('.default').show().addClass('schedule-active');
                        $("#studio-list").animate({scrollTop: '0px'});
                        R.active = null;
                        R.source = null;
                        R.clicked_marker = null;
                    }

                }else{
                    R.active = id;
                    R.studios[id].marker.openPopup();
                    $('.schedule-active').hide().removeClass('schedule-active');
                    $('#schedule-' + id).show().addClass('schedule-active');
                    R.source = null;
                }}

        });
        $('.collapse').on('show',function(){
            var id = $(this).attr('rel');
            var heading = $('.accordion-heading[data-studio-id='+id +']');
            var index = heading.index('.accordion-heading');
            var height = index*40;
            $("#studio-list").animate({scrollTop: height + 'px'});

        });
//        $('.collapse').on('hide',function(){
//        });
    },
    setMarkers:function () {
        $.ajax({
            type:'GET',
            url:'/studio/markers',
            success:function (data) {
                R.bindMarkers(data);
            },
            dataType:'json'
        })
    }

};
$(function () {
    $.ajax({
        type:'GET',
        url:'/ajax/map/',
        success:function (data) {
            R.init(data.lat, data.lon,data.zoom);
            R.setMarkers();
            R.setHandlers();
        },
        dataType:'json'
    });

    if ($('#loading').is('.visible')) {
        $('#loading').hide().removeClass('visible');
    }
    $('table').delegate('.disabled','click',function(e){
        e.preventDefault();
        e.stopPropagation();
        return false;
    }).delegate('.btn-primary:not(.active)','click',function(e){
            e.stopPropagation();
            e.preventDefault();
            $(this).addClass('active');


        }).delegate('.active','click',function(e){
            e.stopPropagation();
            e.preventDefault();
            $(this).removeClass('active');
        });

});

window.onload = function () {
    VK.Widgets.Like('vk_like',
        {
            type:'button',
            pageTitle: 'Репетиционные студии',
            pageUrl:'http://reptochki.by',
            pageImage:'http://reptochki.by/images/logo.png',
            pageDescription: 'Репетиционные точки, цены, аппарат, свободное время'
        }
    );
}
$(function(){
    var meny = Meny.create({

        menuElement: document.querySelector( '.meny' ),

// The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector( '.contents' ),

// The alignment of the menu (top/right/bottom/left)
        position: 'left',

// The height of the menu (when using top/bottom position)
        height: 200,

// The width of the menu (when using left/right position)
        width: 280
    });
    meny.addEventListener( 'open', function(){ $('.meny-arrow').animate({
        opacity:0

    },'fast'); } );
    meny.addEventListener( 'close', function(){ $('.meny-arrow').animate({
        opacity:1
    },'fast'); } );

    $('#city').change(function(){
        window.location = 'http://' + $(this).val()+ '.reptochki.by/';

    });
});
