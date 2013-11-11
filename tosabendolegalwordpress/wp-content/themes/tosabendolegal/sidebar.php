<div class="col-3 sidebar">
                    
                    <div class="social-sidebar">
                        <br><br>
                        <center>
                            <img src="<?php bloginfo('template_url') ?>/img/social.png" class="img" alt="">
                        </center>
                    </div>
                    
                    <div class="categorias">
                        <h2>Categorias</h2>
                         
                            <?php
                                $cats = explode("<br />",wp_list_categories('title_li=&echo=0&depth=1&style=none'));
                                $cat_n = count($cats) - 1;
                                for ($i=0;$i< $cat_n;$i++)
                                {
                                              
                            ?>                                                                                                                                                                                                                                                   
                                <button class="btn btn-danger btn-block no-radius"><?= $cats[$i] ?></button>
                            
                            <?php 
                                }
                            ?>
                        
                            
                       
                    </div>
                    
                    <br><br>
                    <div class="agenda">
                        <h2>Agenda</h2>
                    </div>
                    
                    
                    
                    <div class="">
                        <img src="http://fakeimg.pl/285x150" class="img" alt="">    <br><br>  
                        <img src="http://fakeimg.pl/285x150" class="img" alt="">    <br><br>  
                        <img src="http://fakeimg.pl/285x150" class="img" alt="">    <br><br>  
                        <img src="http://fakeimg.pl/285x150" class="img" alt="">    <br><br>                    
                    </div>
                    
</div>