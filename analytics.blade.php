{{-----------------------------------------------------------------------------
 * Analytics snippet
 * A snippet region to load the google analytics tracking code
 *
 * @param string $id The analytics account ID
 * @url https://bitbucket.org/cozyt/
 * @author  A. Harvey @since 0.1
 * @version  0.1
 * @since  0.1
 * @return string
-----------------------------------------------------------------------------}}


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    @if( !isset($init) || $init === true )
    ga('create', 'UA-{{ $id }}', 'auto');
    ga('send', 'pageview');
    @endif
</script>
