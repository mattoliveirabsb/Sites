<?php get_header()  ?>
    
      <div class="container-center">    
        
            <div class="row">
                
                <?php get_sidebar() ?>
                
                <div class="col-9 content">
                    
                    <div class="row bg-black-single">    
                          
                        <span class="title-single">
                            <?php the_title() ?>
                        </span>
                            
                            
                            <?php
                                if(have_posts()){
                                    while (have_posts()) : the_post();
                             ?>
                
                                        <?php the_content(); ?>
                
                
                
                             <?php endwhile; } ?>
                            
                            
                        <br><br><br><br>
                        
                        
                        <div class="bg-comment-single">
                            <span class="title-comment-single">
                                Comentários
                            </span>
                            
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=674024939274253";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            
                            <div class="fb-comments" data-href="<?php the_permalink()  ?>" data-numposts="5" data-width="760"></div>
                        </div>
                        
                        </div>
                        
                    </div>
                    
                </div>
                                        
          </div>
    
        </div>
    
                </div>
                
        
        
    
<?php get_footer() ?>