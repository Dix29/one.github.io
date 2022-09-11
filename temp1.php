 
<!--FOR ZOOM-->
<link rel="stylesheet" href="css_zoom/dg-picture-zoom.css" />
	<script type="text/javascript" src="js_zoom/external/mootools-1.2.4-core-yc.js"></script>
	<script type="text/javascript" src="js_zoom/external/mootools-more.js"></script>
	<script type="text/javascript" src="js_zoom/dg-picture-zoom.js"></script>
	<script type="text/javascript" src="js_zoom/dg-picture-zoom-autoload.js"></script>
	 
<!--ZOOM OVER-->


<?php
			include("connect.php");
					$qg=mysqli_query($a,"select * from photo_gallery order by p_id desc")or die ("QF");
					while($datag=mysqli_fetch_array($qg))
					{
					?>    
						<div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all <?php echo $datag['p_category'];?>">
                            <div class="portfolio-block-two">
                                <div class="inner-box">
                                    <figure class="image-box">
									<img src="photo_gallery/<?php echo $datag['photo'];?>?url=photo_gallery/<?php echo $datag['photo'];?>" alt="" class="dg-picture-zoom">
									
									</figure>
                                     
                                     
                                </div>
                            </div>
                        </div> 
                    <?php
					}
					?>