function parallax() {
    $(document).ready(function(){
        $('div.bgParallax').each(function(){
            var $obj = $(this);

            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $obj.data('speed'));

                var bgpos = '50% '+ yPos + 'px';

                $obj.css('background-position', bgpos );

            });
        });
    });
}

function suavidade() {

    $(function(){

        var $window = $(window);		//Window object

        var scrollTime = 1;			//Scroll time
        var scrollDistance = 120;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

        $window.on("mousewheel DOMMouseScroll", function(event){

            event.preventDefault();

            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);

            TweenMax.to($window, scrollTime, {
                scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
                autoKill: true,
                overwrite: 5
            });

        });

    });

}

function scroll() {
    $(function() {

        function filterPath(string) {
            return string
                .replace(/^\//,'')
                .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
                .replace(/\/$/,'');
        }

        var locationPath = filterPath(location.pathname);
        var scrollElem = scrollableElement('html', 'body');

        // Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
        $('a[href*=#]').each(function() {

            // Ensure it's a same-page link
            var thisPath = filterPath(this.pathname) || locationPath;
            if (  locationPath == thisPath
                && (location.hostname == this.hostname || !this.hostname)
                && this.hash.replace(/#/,'') ) {

                // Ensure target exists
                var $target = $(this.hash), target = this.hash;
                if (target) {

                    // Find location of target
                    var targetOffset = $target.offset().top;
                    $(this).click(function(event) {

                        // Prevent jump-down
                        event.preventDefault();

                        // Animate to target
                        $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {

                            // Set hash in URL after animation successful
                            location.hash = target;

                        });
                    });
                }
            }

        });

        // Use the first element that is "scrollable"  (cross-browser fix?)
        function scrollableElement(els) {
            for (var i = 0, argLength = arguments.length; i <argLength; i++) {
                var el = arguments[i],
                    $scrollElement = $(el);
                if ($scrollElement.scrollTop()> 0) {
                    return el;
                } else {
                    $scrollElement.scrollTop(1);
                    var isScrollable = $scrollElement.scrollTop()> 0;
                    $scrollElement.scrollTop(0);
                    if (isScrollable) {
                        return el;
                    }
                }
            }
            return [];
        }

    });
}