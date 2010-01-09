<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	  </div>
    <!-- end content -->
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  

    <!-- start footer -->
	  <div class="footer">
	    <ul class="clear">
	      <li><h3>Stay In Touch</h3>
	        <ul class="social">
	          <li class="facebook"><a href="">Facebook</a></li>
  	        <li class="twitter"><a href="http://twitter.com/TrevorAshworth">Twitter</a></li>
            <li class="myspace"><a href="">Myspace</a></li>  
    	      <li class="rss"><a href="">RSS</a></li>
	        </ul>
	      </li>
          <li><h3>Buddys</h3>
	        <ul>
	          <li><a href="">biker one</a></li>
            <li><a href="">biker two</a></li>
            <li><a href="">biker three</a></li>  
    	      <li><a href="">biker four</a></li>
    	      <li><a href="">Geoff Berger</a></li>
    	      <li><a href="http://www.erinkjones.com">Erin K. Jones</a></li>
	        </ul>
	      </li>
	       <li class="last"><h3>I don't know</h3>
	        <ul>
	          <li><a href="">one</a></li>
  	        <li><a href="">two</a></li>
            <li><a href="">three</a></li>  
    	      <li><a href="">four</a></li>
    	      <li><a href="">four</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
    <!-- end footer -->

	  <div class="bottom-text"> 
      <p>www.trevorashworth.com is &copy; 2009 all rights reserved. Site desiged by <a href"http://www.erinkjones.com">erin k. jones</a></p>
	  </div>
		<?php wp_footer(); ?>
  </body>
</html>
