VK.init({
    apiId: 3139786,
    onlyWidgets: true
});
//twit
!function(d,s,id){var js,fjs=d.getElementById('tweeter-share');if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
//fb
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


window.onload = function () {
    //vk sharing and comments
    VK.Widgets.Like('vk_like',
        {
            type:'button',
            pageTitle: 'Репетиционные студии',
            pageUrl:'http://reptochki.by',
            pageImage:'http://reptochki.by/images/logo.png',
            pageDescription: 'Репетиционные базы, цены, аппарат, свободное время'
        }
    );
    VK.Widgets.Comments('vk_comments');
    //google analytics
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32392896-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('head')[0]; s.insertBefore(ga, null);
    })();

}

