<?php get_header()  ?>
                
                <div class="col-9 content">
                    
                    <div class="row">
                        <div class="col-4 bg-white">
                            <button class="btn btn-danger btn-block no-radius">DE BAR EM BAR</button>
                            <!-- post destaque -->
                            
                             <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim do posts destaque -->
                            
                            
                            <!-- posts -->
                            
                            <br><br>
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>6
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>    
                                
                            <div class="row">
                                
                            
                                <div class="col-4">
                                    <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a>
                                </div>
                                <div class="col-8">
                                        <span class="titulo-post" style="font-size:14px; float:left; margin-top:-3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                                    <span class="descricao-post text-justify">
                                        <?= excerpt('8'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            
                            <!-- fim post -->
                            
                            <br><br>
                            
                            <!-- post destaque -->
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim do posts destaque -->
                            
                            
                            <!-- posts -->
                            
                            <br><br>
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>6
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>    
                                
                            <div class="row">
                                
                            
                                <div class="col-4">
                                    <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a>
                                </div>
                                <div class="col-8">
                                        <span class="titulo-post" style="font-size:14px; float:left; margin-top:-3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                                    <span class="descricao-post text-justify">
                                        <?= excerpt('8'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim post -->
                            
                            
                        </div>
                        
                        <div class="col-4 bg-white">
                            <button class="btn btn-info btn-block no-radius">HOJE EU VOU</button>
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            
                            <!-- categoria 2 -->
                            
                            <br><br><br>
                            
                            <!-- post destaque -->
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim do posts destaque -->
                            
                            
                            <!-- posts -->
                            
                            <br><br>
                            
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>6
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>    
                                
                            <div class="row">
                                
                            
                                <div class="col-4">
                                    <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a>
                                </div>
                                <div class="col-8">
                                        <span class="titulo-post" style="font-size:14px; float:left; margin-top:-3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                                    <span class="descricao-post text-justify">
                                        <?= excerpt('8'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim post -->
                            
                            
                            
                            
                            
                        </div>
                   
                        
                        
                        <div class="col-4 bg-white">
                        <button class="btn btn btn-block no-radius">DE BAR EM BAR</button>
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- posts destaque -->
                            
                            <br><br>
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>6
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>    
                                
                            <div class="row">
                                
                            
                                <div class="col-4">
                                    <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a>
                                </div>
                                <div class="col-8">
                                        <span class="titulo-post" style="font-size:14px; float:left; margin-top:-3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                                    <span class="descricao-post text-justify">
                                        <?= excerpt('8'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                            <!-- fim post -->
                            
                            <br><br><br>
                            
                            <?php
                                $args = array(
                                    'category_name'=>'de-bar-em-bar',
                                    'numberposts'=>1
                                    );
                             
                                $my_posts = get_posts($args);
                             
                                if( $my_posts ):
                                foreach( $my_posts as $post ) :	setup_postdata($post); 
                                $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            
                            <a href="<?php the_permalink() ?>"><img src="<?= $image ?>" class="img" alt=""></a><br><br>
                            <span class="titulo-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span><br>
                            <span class="descricao-post text-justify">
                                <?= excerpt('50'); ?>
                            </span>
                            
                            
                            
<!--                            <strong><a href="<?php the_permalink(); ?>">leia mais</a></strong>-->
                            
                            <?php 
                            endforeach; 
                            else:
                            ?>
                            <p>Nada encontrado.</p>
                            <?php endif; ?>
                            
                        </div>
                        
                        
                        
                        
                        
                    </div>
                                        
                </div>
                
            </div>
        
        </div>
        
<?php get_footer() ?>