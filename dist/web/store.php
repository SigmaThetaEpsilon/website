<?php

define('APP_PATH', '../application/');
require(APP_PATH . 'layout.php');

$pageHtml = <<<HTML
<section class='card cell--span-8 cell-center'>
    <h3 class="card-header">Store</h3>
    <p>Sigma Theta Epsilon has partnered with <a href="https://undergroundshirts.com/" target="_blank">Underground Printing</a> to carry branded merchandise. We have worked with a designer to come up with clothing and other merchandise to show off your STE side like never before.</p>
    <p>We have arranged for 2-week ordering periods to collect orders, after which they will be processed as a bulk order. You can always check back here to see if we are in an ordering period or a processing period.</p>
    <p>The ordering form is not live yet, but here is an <a href="https://pogo.undergroundshirts.com/collections/example-business-pogo-form" target="_blank">example order form site</a> so you can see what it will look like.</p>
</section>
HTML;

Layout::renderHTML('Store', '/store.php', $pageHtml);

?>