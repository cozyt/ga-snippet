<?php
/**
 * Analytics snippet
 * A snippet region to load the google analytics tracking code
 *
 * @param string $id The analytics account ID
 * @return string
*/
?>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    <?php if ( !isset($init) || $init === true ) { ?>
    ga('create', 'UA-<?php echo $id; ?>', 'auto');
    ga('send', 'pageview');
    <?php } ?>
</script>
