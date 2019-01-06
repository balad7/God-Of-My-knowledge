<?php
add_action( 'tf_create_options', 'aa_options_creating_function' );
 
function aa_options_creating_function() {
	$titan = TitanFramework::getInstance( 'mac' );
	$adminPanel = $titan->createAdminPanel( array(
		'name' => 'Theme Option',
	));
	
	/* TAB 1 */
	$generalTab1 = $adminPanel->createTab( array(
		'name' => 'Stats',
	));
	$generalTab1->createOption( array(
		'name' => 'Year since',
		'id' => 'since_year',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Stat - 1',
		'type' => 'heading',
	));
	$generalTab1->createOption( array(
		'name' => 'Title',
		'id' => 'stat_1_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Number',
		'id' => 'stat_1_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Stat - 2',
		'type' => 'heading',
	));
	$generalTab1->createOption( array(
		'name' => 'Title',
		'id' => 'stat_2_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Number',
		'id' => 'stat_2_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Stat - 3',
		'type' => 'heading',
	));
	$generalTab1->createOption( array(
		'name' => 'Title',
		'id' => 'stat_3_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Number',
		'id' => 'stat_3_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Stat - 4',
		'type' => 'heading',
	));
	$generalTab1->createOption( array(
		'name' => 'Title',
		'id' => 'stat_4_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'name' => 'Number',
		'id' => 'stat_4_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab1->createOption( array(
		'type' => 'save',
	));
	
	/* TAB 2 */			
	$generalTab2 = $adminPanel->createTab( array(
		'name' => 'Team Stats',
	));
	$generalTab2->createOption( array(
		'name' => 'Section Title',
		'id' => 'team_section_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'CTC Text',
		'id' => 'team_ctc_text',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'CTC Link',
		'id' => 'team_ctc_link',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Background Image',
		'id' => 'team_background_image',
		'type' => 'upload',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Team Stat - 1',
		'type' => 'heading',
	));
	$generalTab2->createOption( array(
		'name' => 'Title',
		'id' => 'team_1_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Number',
		'id' => 'team_1_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Team Stat - 2',
		'type' => 'heading',
	));
	$generalTab2->createOption( array(
		'name' => 'Title',
		'id' => 'team_2_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Number',
		'id' => 'team_2_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Team Stat - 3',
		'type' => 'heading',
	));
	$generalTab2->createOption( array(
		'name' => 'Title',
		'id' => 'team_3_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Number',
		'id' => 'team_3_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Team Stat - 4',
		'type' => 'heading',
	));
	$generalTab2->createOption( array(
		'name' => 'Title',
		'id' => 'team_4_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Number',
		'id' => 'team_4_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Team Stat - 5',
		'type' => 'heading',
	));
	$generalTab2->createOption( array(
		'name' => 'Title',
		'id' => 'team_5_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'name' => 'Number',
		'id' => 'team_5_number',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab2->createOption( array(
		'type' => 'save',
	));
	/* TAB 3 */			
	$generalTab3 = $adminPanel->createTab( array(
		'name' => 'General Info',
	));
	$generalTab3->createOption( array(
		'name' => 'Follow us Title',
		'id' => 'follow_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Follow us Description',
		'id' => 'follow_description',
		'type' => 'textarea',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Facebook',
		'id' => 'facebook',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Twitter',
		'id' => 'twitter',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Pinterest',
		'id' => 'pinterest',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'LinkedIn',
		'id' => 'linkedin',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Google +',
		'id' => 'google_plus',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Tumblr',
		'id' => 'tumblr',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab3->createOption( array(
		'name' => 'Copyright',
		'id' => 'copyright',
		'type' => 'text',
		'desc' => '',
	));
	
	$generalTab3->createOption( array(
		'type' => 'save',
	));
	
	//Tab 4
	/* TAB 4 */			
	$generalTab4 = $adminPanel->createTab( array(
		'name' => 'Why Macronimous',
	));
	$generalTab4->createOption( array(
		'name' => 'Title',
		'id' => 'macronimous_background_image_title',
		'type' => 'text',
		'desc' => '',
	));
	$generalTab4->createOption( array(
		'name' => 'Background Image',
		'id' => 'macronimous_background_image',
		'type' => 'upload',
		'desc' => '',
	));
	$generalTab4->createOption( array(
		'type' => 'save',
	));
	//Tab 5
	/* TAB 5 */			
	$generalTab5 = $adminPanel->createTab( array(
		'name' => 'Common Banner',
	));
	$generalTab5->createOption( array(
		'name' => 'Banner Image',
		'id' => 'banner_image',
		'type' => 'upload',
		'desc' => '',
	));
	$generalTab5->createOption( array(
		'type' => 'save',
	));
}

?>