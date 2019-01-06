<?php
$titan = TitanFramework::getInstance( 'mac' );
if($titan->getOption( 'team_background_image' ) || $titan->getOption( 'team_section_title' ) || $titan->getOption( 'team_1_number' ) || $titan->getOption( 'team_1_title' ) || $titan->getOption( 'team_2_title' ) || $titan->getOption( 'team_2_number' ) || $titan->getOption( 'team_3_title' ) || $titan->getOption( 'team_3_number' ) || $titan->getOption( 'team_4_title' ) || $titan->getOption( 'team_4_number' )|| $titan->getOption( 'team_ctc_text' )){?>
    <div  id="team" class="our_team white-text relative_4 relative" <?php if($titan->getOption( 'team_background_image' )){?>style="background-image:url(<?php echo wp_get_attachment_url($titan->getOption( 'team_background_image' ));?>);"<?php }?>>
                <div class="overlay"></div>
                <div class="our_team_inner">
                    <div class="container">
                        <div class="row">
                            <div class="our_team_top col l12 m12 s12 center"><?php
                                if($titan->getOption( 'team_section_title' )){?>
                                    <h2 class="white-text section_title"><?php echo $titan->getOption( 'team_section_title' );?></h2><?php
                                }?>
                            </div><?php
							 if($titan->getOption( 'team_1_number' ) || $titan->getOption( 'team_1_title' ) || $titan->getOption( 'team_2_title' ) || $titan->getOption( 'team_2_number' ) || $titan->getOption( 'team_3_title' ) || $titan->getOption( 'team_3_number' ) || $titan->getOption( 'team_4_title' ) || $titan->getOption( 'team_4_number' )){?>
                            <div class="our_team_count col l12 m12 s12"><?php
                                if($titan->getOption( 'team_1_number' ) || $titan->getOption( 'team_1_title' )){?>
                                    <div class="col l5-1"><?php
                                        if($titan->getOption( 'team_1_number' )){?>
                                            <span class="our_team_title"><?php echo $titan->getOption( 'team_1_number' );?></span><?php
                                        }
                                        if($titan->getOption( 'team_1_title' )){?>
                                            <span><?php echo $titan->getOption( 'team_1_title' );?></span><?php
                                        }?>
                                    </div><?php
                                }
                                 if($titan->getOption( 'team_2_title' ) || $titan->getOption( 'team_2_number' )){?>
                                    <div class="col l5-1"><?php
                                         if($titan->getOption( 'team_2_number' )){?>
                                            <span class="our_team_title"><?php echo $titan->getOption( 'team_2_number' );?></span><?php
                                         }
                                         if($titan->getOption( 'team_2_title' )){?>
                                            <span><?php echo $titan->getOption( 'team_2_title' );?></span><?php
                                         }?>
                                    </div><?php
                                 }
                                 if($titan->getOption( 'team_3_title' ) || $titan->getOption( 'team_3_number' )){?>
                                    <div class="col l5-1"><?php
                                         if($titan->getOption( 'team_3_number' )){?>
                                            <span class="our_team_title"><?php echo $titan->getOption( 'team_3_number' );?></span><?php
                                         }
                                         if($titan->getOption( 'team_3_title' )){?>
                                            <span><?php echo $titan->getOption( 'team_3_title' );?></span><?php
                                         }?>
                                    </div><?php
                                 }
                                 if($titan->getOption( 'team_4_title' ) || $titan->getOption( 'team_4_number' )){?>
                                    <div class="col l5-1"><?php
                                         if($titan->getOption( 'team_4_number' )){?>
                                            <span class="our_team_title"><?php echo $titan->getOption( 'team_4_number' );?></span><?php
                                         }
                                         if($titan->getOption( 'team_4_title' )){?>
                                            <span><?php echo $titan->getOption( 'team_4_title' );?></span><?php
                                         }?>
                                    </div><?php
                                 }
                                 if($titan->getOption( 'team_5_title' ) || $titan->getOption( 'team_5_number' )){?>
                                    <div class="col l5-1"><?php
                                         if($titan->getOption( 'team_5_number' )){?>
                                            <span class="our_team_title"><?php echo $titan->getOption( 'team_5_number' );?></span><?php
                                         }
                                         if($titan->getOption( 'team_5_title' )){?>
                                            <span><?php echo $titan->getOption( 'team_5_title' );?></span><?php
                                         }?>
                                    </div><?php
                                 }?>                            
                            </div><?php
							 }
							 $template = '';
							 $template = basename( get_page_template() );
								if($template != 'about.php'){
                            		if($titan->getOption( 'team_ctc_text' )){?>
                                		<div class="view_all">
                                   			 <a <?php if($titan->getOption( 'team_ctc_link' )){?>href="<?php echo $titan->getOption( 'team_ctc_link' );?>"<?php }?> class="btn orange_bg z-depth-1"><?php echo $titan->getOption( 'team_ctc_text' );?></a>
                                		</div><?php
                           			 }
								 }?>
                        </div>
                    </div>
                </div>
            </div><?php
}?>
