        <div class="footer">
            <div class="row">
                <div class="col-3">
                    <h2>Categoria</h2>
                    <?php
                                $cats = explode("<br />",wp_list_categories('title_li=&echo=0&depth=1&style=none'));
                                $cat_n = count($cats) - 1;
                                for ($i=0;$i< $cat_n;$i++)
                                {
                                              
                            ?>                                                                                                                                                                                                                                                   
                                <li><?= $cats[$i] ?></li>
                            
                            <?php 
                                }
                            ?>
                </div>
                <div class="col-3">
                    <h2>Categoria</h2>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                </div>
                <div class="col-3">
                    <h2>Categoria</h2>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                </div>
                <div class="col-3">
                    <h2>Categoria</h2>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                    <li>subcategoria</li>
                </div>
            </div>
        </div>
  
    
    
    
                                       
        
        
</body>
</html>