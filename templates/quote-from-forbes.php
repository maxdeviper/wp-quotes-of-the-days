<script type="text/template" id="wp-quotes-template">
	<div id="wp-quotes" class="">
		<div class="container clearfix default-template">
			<div class="navigation">
				<div class="navigation-container">
			    

			    
			        <div class="continue-button hidden">Continue to Site <i class="chevron icon icon-chevron-right"></i></div>
			        <div class="countdown ">
			            <span class="lead">
			                Continue In <span class="count">1</span>
			            </span>
			        </div>
			    
				</div>
			</div>
			<div class="content">
				
		
		        <div class="content-container">
		        	<div class="content-inner">
		        		<h1 class="title"><span class="top ">Quote of</span> <span class="bottom ">the Day</span></h1>
		        		<div class="body"> 
		        			<blockquote class="body-content "><?php echo '"'.htmlentities($quoteText).'"'; ?></blockquote>
		        			<p class="body-byline ">-<?php echo htmlentities($quoteAuthor); ?></p> 
		    			</div>
		    		</div>
		    	</div> 
		    </div>
		</div>
	</div>
</script>