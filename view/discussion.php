<div id="disqus_thread"></div>
<script>
<?php if ($page) { ?>
var disqus_config = function () {
	this.page.url = '<?php echo $page->getLink(); ?>';
	this.page.identifier = '<?php echo $page->getId(); ?>';
};
<?php } ?>

(function() {
var d = document, s = d.createElement('script');
s.src = '//<?php echo $shortname; ?>.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
