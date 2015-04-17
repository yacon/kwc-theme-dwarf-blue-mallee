Kwf.Utils.ResponsiveEl('.cssClass', [875, 600]);

Kwf.onJElementWidthChange('.cssClass', function imageBackgroundResize(el) {

    var windowWidth = $('body').width();
    var background = el.find('.background');
    var width = el.parent().width();
    var margin = (windowWidth - width) / 2 * -1;

    if (el.hasClass('gt875') && el.hasClass('fullWidth')) {
        background.css( 'left', margin );
        background.css( 'right', margin );
    } else if (el.hasClass('fullWidth')) {
        background.css( 'left', '-20px' );
        background.css( 'right', '-20px' );
    } else {
        background.css( 'left', '0px' );
        background.css( 'right', '0px' );
    }

    var img = background.children('.paragraphsGroupImage');
    var imgHeight = background.children('.paragraphsGroupImage').height();

    img.css( 'height', el.height);

}, { checkVisibility: true });