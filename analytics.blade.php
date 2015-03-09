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
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));{{--

	--}}@if( !isset($init) || $init === true ){{--
    --}}ga('create','UA-{{ $id }}');ga('send','pageview');{{--
    --}}@endif
</script>
