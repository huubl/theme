<?php
/**
 * Title: Blockify Blog Three Column
 * Slug: blockify/blog-three-column
 * Categories: blog
 * 
 */
?><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1em","top":"2em"}}}} -->
<h2 class="has-text-align-center" style="margin-top:2em;margin-bottom:1em">Latest posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","style":{"spacing":{"padding":{"bottom":"3em"},"blockGap":"1.5em"}},"layout":{"inherit":false}} -->
<div class="wp-block-query alignwide alignwide" style="padding-bottom:3em"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"1em"}}}} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"0.5em","right":"0em","bottom":"0.5em","left":"0em"}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read more"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p class="aligncenter has-text-align-center aligncenter"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->