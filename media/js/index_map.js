L.Icon.Default.imagePath = 'http://reptochki.by/images/';

$(function(){


    map = L.map('map',{
        zoomControl:false,
        minZoom:5,
        maxZoom:5,
        dragging:false
    }).setView([50.836329,30.265438 ], 5);
    var osm = L.tileLayer('http://{s}.tile.cloudmade.com/170820bcc2f3411395f33ab9cdee29df/81094/256/{z}/{x}/{y}.png', {
        attribution:'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    }).addTo(map);
        var info = L.control();

        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };
        info.update = function (props) {
            this._div.innerHTML = '<h4>Город</h4>' +  (props ?
                '<b>' + props.name + '</b><br><b>Баз:</b>' + props.count
                : 'Не выбран');
        };
        info.addTo(map);

    setActive = function(id){
        if(id>0){
            $('ul li.city').removeClass('active');
            $('#city_' + id).addClass('active');
        }else{
            $('ul li.city').removeClass('active');
        }
    }
        $('ul li.city').hover(function(){
            var id = $(this).data('id');
            cities[id].setStyle({
                color:'#94DE00',
                fillOpacity:'0.8',
                opacity:'1'
            });
            info.update(cities[id].options);
            $(this).addClass('active');
        },function(){
            $(this).removeClass('active');
            var id = $(this).data('id');
            cities[id].setStyle({
                color:'#FFC259',
                fillOpacity:'0.6',
                opacity:'0.8'
            });
            info.update();
        });
        $.ajax({
            type:'GET',
            url:'/index/ajax',
            success:function (data) {
                cities = [];
                $.each(data, function (key,city) {
                    var b = new L.CircleMarker([city.lat,city.lon],{
                        color:'#FFC259',
                        fillOpacity:'0.6',
                        opacity:'0.8',
                        id:city.id,
                        name:city.name,
                        count:city.count,
                        alias:city.alias
                    }).setRadius(15);
                    b.on('mouseover',function(){
                        this.setStyle({
                            color:'#94DE00',
                            fillOpacity:'0.8',
                            opacity:'1'
                        });
                        info.update(this.options);
                        setActive(this.options.id);
                    }).on('mouseout',function(){
                            this.setStyle({
                                color:'#FFC259',
                                fillOpacity:'0.6',
                                opacity:'0.8'
                            });
                            info.update();
                            setActive(0);
                        }).on('click',function(){
                            var alias = this.options.alias;
                            window.location = 'http://reptochki.by/goto/' + alias;
                        });
                    map.addLayer(b);
                    cities[city.id] = b;
                   // b = null;

                });
            },
            dataType:'json'
        });

}
);
