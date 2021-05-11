
<script>
    //============== isotope masonry js with imagesloaded
    document.addEventListener("DOMContentLoaded", function(event) {
        imagesLoaded( '#gallery', function() {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
                }
            });

        });


        var body = document.body;
        var html = document.documentElement;

        var height = 0;
        var h = 0;

        var initiateHeights = function () {
        height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
        h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        console.log("heights were initialised:", height, h);
        }

        initiateHeights();

        var resize = function (e) {
        var scrolled = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
        height > 0 ? e[0].style.width = scrolled/(height-h) * 100 + "%" : e.style.width = 0 + "%";
        }

        document.onscroll = function () {
        resize(document.getElementsByClassName("indicator"));
        };

        window.onresize = function () {
        initiateHeights();
        };
    });


</script>


<script src="{{ asset('js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script src="{{ asset('js/count-up.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
