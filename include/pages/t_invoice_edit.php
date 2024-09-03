<?php
			$optionsArray = array( 'details' => array( 't_invoice_det' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'invoice_no',
'invoice_date',
'invoice_type',
'invoice_to',
'invoice_term',
'invoice_disc_perc',
'invoice_tax_perc',
'invoice_currency',
'invoice_disc',
'invoice_tax',
'invoice_amount_nett',
'invoice_address',
'invoice_mobile_no',
'invoice_email',
'invoice_term_days',
'invoice_due_date',
'invoice_original_currency' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'invoice_no' => array( 'integrated_edit_field' ),
'invoice_date' => array( 'integrated_edit_field1' ),
'invoice_type' => array( 'integrated_edit_field2' ),
'invoice_to' => array( 'integrated_edit_field3' ),
'invoice_term' => array( 'integrated_edit_field4' ),
'invoice_disc_perc' => array( 'integrated_edit_field5' ),
'invoice_tax_perc' => array( 'integrated_edit_field6' ),
'invoice_currency' => array( 'integrated_edit_field7' ),
'invoice_disc' => array( 'integrated_edit_field10',
'edit_field_label' ),
'invoice_tax' => array( 'integrated_edit_field11',
'edit_field_label1' ),
'invoice_amount_nett' => array( 'integrated_edit_field12',
'edit_field_label3' ),
'invoice_address' => array( 'integrated_edit_field8' ),
'invoice_mobile_no' => array( 'integrated_edit_field9' ),
'invoice_email' => array( 'integrated_edit_field13' ),
'invoice_term_days' => array( 'integrated_edit_field15' ),
'invoice_due_date' => array( 'integrated_edit_field16' ),
'invoice_original_currency' => array( 'integrated_edit_field14',
'edit_field_label2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'custom_button' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'notifications',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array(  ),
'grid' => array( 'section' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field16',
'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field15',
'section2',
'edit_field_label',
'integrated_edit_field5',
'integrated_edit_field10',
'section1',
'edit_field_label1',
'integrated_edit_field6',
'integrated_edit_field11',
'edit_field_label3',
'integrated_edit_field12',
'edit_field_label2',
'integrated_edit_field14' ),
'section1' => array( 'details_preview' ),
'section2' => array( 'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field13' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ),
'top' => array(  ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'custom_button' => 'below-grid',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'section' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field16' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field15' => 'section',
'section2' => 'section',
'edit_field_label' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field10' => 'section',
'section1' => 'section',
'edit_field_label1' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field11' => 'section',
'edit_field_label3' => 'section',
'integrated_edit_field12' => 'section',
'edit_field_label2' => 'section',
'integrated_edit_field14' => 'section',
'details_preview' => 'section1',
'integrated_edit_field3' => 'section2',
'integrated_edit_field8' => 'section2',
'integrated_edit_field9' => 'section2',
'integrated_edit_field13' => 'section2' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field16' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field15' => array( 'location' => 'section',
'cellId' => 'c2' ),
'section2' => array( 'location' => 'section',
'cellId' => 'c5' ),
'edit_field_label' => array( 'location' => 'section',
'cellId' => 'c15' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c15' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c15' ),
'section1' => array( 'location' => 'section',
'cellId' => 'c16' ),
'edit_field_label1' => array( 'location' => 'section',
'cellId' => 'c17' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c17' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c17' ),
'edit_field_label3' => array( 'location' => 'section',
'cellId' => 'c19' ),
'integrated_edit_field12' => array( 'location' => 'section',
'cellId' => 'c19' ),
'edit_field_label2' => array( 'location' => 'section',
'cellId' => 'c20' ),
'integrated_edit_field14' => array( 'location' => 'section',
'cellId' => 'c20' ),
'details_preview' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field3' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field8' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field9' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field13' => array( 'location' => 'section2',
'cellId' => 'c' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field7',
'integrated_edit_field15',
'integrated_edit_field16' ),
'edit_field' => array( 'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field13',
'integrated_edit_field14' ),
'details_preview' => array( 'details_preview' ),
'custom_button' => array( 'custom_button' ),
'section' => array( 'section',
'section1',
'section2' ),
'edit_field_label' => array( 'edit_field_label',
'edit_field_label1',
'edit_field_label3',
'edit_field_label2' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 2 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'edit_field_label2',
'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0 ),
'rows' => array( 3,
4,
5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 1 ),
'rows' => array( 3,
4,
5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'edit_field_label',
'integrated_edit_field5',
'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'edit_field_label1',
'integrated_edit_field6',
'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'edit_field_label3',
'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 6 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section2' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'btn_invoice' ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'btn_invoice' ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close',
'custom_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array(  ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'section' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'rowspan' => 1 ),
array( 'cell' => 'c2',
'rowspan' => 1 ),
array( 'cell' => 'c5',
'rowspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c16',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c18' ),
array( 'cell' => 'c20' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13',
'rowspan' => 3 ),
array( 'cell' => 'c14',
'rowspan' => 3 ),
array( 'cell' => 'c15' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c17' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c19' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field16' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field15' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'section2' ) ),
'c13' => array( 'model' => 'c1',
'items' => array(  ) ),
'c14' => array( 'model' => 'c1',
'items' => array(  ),
'align' => 'right' ),
'c15' => array( 'model' => 'c3',
'items' => array( 'edit_field_label',
'integrated_edit_field5',
'integrated_edit_field10' ),
'orientation' => 'horizontal',
'align' => 'right' ),
'c16' => array( 'model' => 'c1',
'items' => array( 'section1' ) ),
'c17' => array( 'model' => 'c3',
'items' => array( 'edit_field_label1',
'integrated_edit_field6',
'integrated_edit_field11' ),
'orientation' => 'horizontal',
'align' => 'right' ),
'c19' => array( 'model' => 'c3',
'items' => array( 'edit_field_label3',
'integrated_edit_field12' ),
'orientation' => 'horizontal',
'align' => 'right' ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c18' => array( 'model' => 'c1',
'items' => array(  ) ),
'c20' => array( 'model' => 'c3',
'items' => array( 'edit_field_label2',
'integrated_edit_field14' ),
'align' => 'right',
'orientation' => 'horizontal' ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field13' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save',
'icon' => array( 'fa' => 'save' ),
'width' => '100px',
'buttonStyle' => 'default' ),
'edit_back_list' => array( 'type' => 'edit_back_list',
'icon' => array( 'fa' => 'th-list' ) ),
'edit_close' => array( 'type' => 'edit_close',
'icon' => array( 'fa' => 'rotate-left' ),
'width' => '100px' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'integrated_edit_field' => array( 'field' => 'invoice_no',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'invoice_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'invoice_type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'invoice_to',
'type' => 'edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'joined' => false,
'separated' => true ),
'integrated_edit_field4' => array( 'field' => 'invoice_term',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'invoice_disc_perc',
'type' => 'edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'joined' => false,
'separated' => true,
'width' => '70px' ),
'integrated_edit_field6' => array( 'field' => 'invoice_tax_perc',
'type' => 'edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'joined' => false,
'separated' => true,
'width' => '70px' ),
'integrated_edit_field7' => array( 'field' => 'invoice_currency',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field10' => array( 'field' => 'invoice_disc',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'width' => '130px',
'updateOnEdit' => false ),
'integrated_edit_field11' => array( 'field' => 'invoice_tax',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'width' => '130px',
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'invoice_amount_nett',
'type' => 'edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'joined' => false,
'separated' => true,
'width' => '200px' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 't_invoice_det',
'items' => array(  ),
'popup' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 't_invoice_det',
'type' => 7 ) ),
'custom_button' => array( 'eventId' => 'btn_invoice',
'label' => array( 'type' => 0,
'text' => 'Print' ),
'type' => 'custom_button',
'icon' => array( 'fa' => 'print' ),
'width' => '100px' ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Invoice, Edit Form' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'section1' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => '' ),
'location' => 'section1',
'bsStyle' => 'default',
'panelType' => 3 ),
'edit_field_label' => array( 'type' => 'edit_field_label',
'field' => 'invoice_disc',
'separated' => true,
'label' => array( 'field' => 'invoice_disc',
'table' => 't_invoice',
'type' => 3 ) ),
'edit_field_label1' => array( 'type' => 'edit_field_label',
'field' => 'invoice_tax',
'separated' => true,
'label' => array( 'field' => 'invoice_tax',
'table' => 't_invoice',
'type' => 3 ) ),
'edit_field_label3' => array( 'type' => 'edit_field_label',
'field' => 'invoice_amount_nett',
'separated' => true ),
'integrated_edit_field8' => array( 'field' => 'invoice_address',
'type' => 'edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'joined' => false,
'separated' => true ),
'integrated_edit_field9' => array( 'field' => 'invoice_mobile_no',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field13' => array( 'field' => 'invoice_email',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'section2' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'To :' ),
'location' => 'section2',
'bsStyle' => 'default',
'panelType' => 3 ),
'integrated_edit_field15' => array( 'field' => 'invoice_term_days',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field16' => array( 'field' => 'invoice_due_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field14' => array( 'field' => 'invoice_original_currency',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true,
'width' => '200px' ),
'edit_field_label2' => array( 'type' => 'edit_field_label',
'field' => 'invoice_original_currency',
'separated' => true ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageWidth' => 'full',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>