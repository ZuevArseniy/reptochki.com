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
});
