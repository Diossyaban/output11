<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => false,
'editInPopup' => false,
'viewInPopup' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 2 ),
'details' => array( 't_letter_flow' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => false,
'badgeColor' => '',
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => false ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'letter_id' => array( 'totalsType' => '' ),
't_letter_no' => array( 'totalsType' => '' ),
'm_category_code' => array( 'totalsType' => '' ),
'm_category_id' => array( 'totalsType' => '' ),
'letter_reg_date' => array( 'totalsType' => '' ),
'letter_kepada' => array( 'totalsType' => '' ),
'letter_alamat' => array( 'totalsType' => '' ),
'letter_attn' => array( 'totalsType' => '' ),
'add_user' => array( 'totalsType' => '' ),
'add_date' => array( 'totalsType' => '' ),
'letter_perihal' => array( 'totalsType' => '' ),
'letter_ttg' => array( 'totalsType' => '' ),
'letter_ttgjwb' => array( 'totalsType' => '' ),
'letter_kota' => array( 'totalsType' => '' ),
'edit_user' => array( 'totalsType' => '' ),
'edit_date' => array( 'totalsType' => '' ),
'letter_status' => array( 'totalsType' => '' ),
'letter_token' => array( 'totalsType' => '' ),
'm_type_id' => array( 'totalsType' => '' ),
'm_template_id' => array( 'totalsType' => '' ),
'letter_language' => array( 'totalsType' => '' ),
'letter_signature' => array( 'totalsType' => '' ),
'template_file' => array( 'totalsType' => '' ),
'review_file' => array( 'totalsType' => '' ),
'result_file' => array( 'totalsType' => '' ),
'merge_file' => array( 'totalsType' => '' ),
'end_file' => array( 'totalsType' => '' ),
'pdf_file' => array( 'totalsType' => '' ),
'last_user_flow' => array( 'totalsType' => '' ),
'last_user_date' => array( 'totalsType' => '' ),
'qr_sign_text' => array( 'totalsType' => '' ),
'qr_sign_file' => array( 'totalsType' => '' ),
'qr_validation_text' => array( 'totalsType' => '' ),
'qr_validation_file' => array( 'totalsType' => '' ),
'category_no' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 't_letter_no',
'm_category_id',
'letter_reg_date',
'letter_kepada',
'add_user',
'letter_perihal' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'add_date',
'template_file',
't_letter_no',
'review_file',
'result_file',
'qr_validation_text',
'qr_validation_file',
'qr_sign_text',
'qr_sign_file',
'pdf_file',
'merge_file',
'm_type_id',
'm_template_id',
'm_category_id',
'm_category_code',
'letter_ttgjwb',
'letter_ttg',
'letter_token',
'letter_status',
'letter_signature',
'letter_reg_date',
'letter_perihal',
'letter_language',
'letter_kota',
'letter_kepada',
'letter_id',
'letter_attn',
'letter_alamat',
'last_user_flow',
'last_user_date',
'end_file',
'edit_user',
'edit_date',
'category_no',
'add_user' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 't_letter_no' => array( 'simple_grid_field',
'simple_grid_field1' ),
'm_category_id' => array( 'simple_grid_field3',
'simple_grid_field6' ),
'letter_reg_date' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'letter_kepada' => array( 'simple_grid_field5',
'simple_grid_field9' ),
'add_user' => array( 'simple_grid_field8',
'simple_grid_field11' ),
'letter_perihal' => array( 'simple_grid_field10',
'simple_grid_field12' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field3',
'simple_grid_field7',
'simple_grid_field4',
'simple_grid_field9',
'simple_grid_field5',
'simple_grid_field11',
'simple_grid_field8',
'simple_grid_field12',
'simple_grid_field10',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_view' ),
'top' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field10' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'print_panel' => 5,
'breadcrumb' => 5,
'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'add' => array( 'add' ),
'delete' => array( 'delete' ),
'details_found' => array( 'details_found' ),
'page_size' => array( 'page_size' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_records' => array( 'print_records' ),
'print_button' => array( 'print_button' ),
'pagination' => array( 'pagination' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field11',
'simple_grid_field12' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field8',
'simple_grid_field10' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'export_selected' => array( 'export_selected' ),
'delete_selected' => array( 'delete_selected' ),
'-' => array( '-3',
'-1',
'-2',
'-' ),
'advsearch_link' => array( 'advsearch_link' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'export' => array( 'export' ),
'import' => array( 'import' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field34',
'search_panel_field33',
'search_panel_field32',
'search_panel_field31',
'search_panel_field30',
'search_panel_field29',
'search_panel_field28',
'search_panel_field27',
'search_panel_field26',
'search_panel_field25',
'search_panel_field24',
'search_panel_field23',
'search_panel_field22',
'search_panel_field21',
'search_panel_field20',
'search_panel_field19',
'search_panel_field18',
'search_panel_field17',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'notifications' => array( 'notifications' ),
'search_panel' => array( 'search_panel' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 't_letter_no_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'm_category_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'letter_reg_date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'letter_kepada_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'add_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'letter_perihal_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'view_column' ),
'items' => array( 'grid_edit',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 't_letter_no_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'm_category_id_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'letter_reg_date_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'letter_kepada_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'add_user_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'letter_perihal_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 8,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'delete' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
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
'items' => array( 'menu',
'search_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 't_letter_no',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 't_letter_no',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'm_category_id',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'm_category_id',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'letter_reg_date',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'letter_reg_date',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'letter_kepada',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'letter_kepada',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'add_user',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'add_user',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'letter_perihal',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'letter_perihal',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'add' => array( 'type' => 'add',
'popup' => false,
'icon' => array( 'fa' => 'plus-circle' ) ),
'delete' => array( 'type' => 'delete',
'buttonStyle' => 'danger',
'icon' => array( 'fa' => 'times-circle' ) ),
'details_found' => array( 'type' => 'details_found' ),
'page_size' => array( 'type' => 'page_size' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_records' => array( 'type' => 'print_records' ),
'print_button' => array( 'type' => 'print_button' ),
'pagination' => array( 'type' => 'pagination' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 't_letter_no',
'clickSort' => true ),
'simple_grid_field1' => array( 'field' => 't_letter_no',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field3' => array( 'field' => 'm_category_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'letter_reg_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'letter_kepada',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field8' => array( 'field' => 'add_user',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field10' => array( 'field' => 'letter_perihal',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => false,
'icon' => array( 'fa' => 'pencil-square-o' ),
'label' => array( 'type' => 0,
'text' => 'Edit' ),
'buttonStyle' => 'default' ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => false,
'icon' => array( 'fa' => 'question-circle' ),
'label' => array( 'type' => 0,
'text' => 'View' ),
'buttonStyle' => 'default' ),
'export_selected' => array( 'type' => 'export_selected' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'-3' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'-1' => array( 'type' => '-' ),
'export' => array( 'type' => 'export' ),
'-2' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'search_panel_field' => array( 'field' => 'add_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field34' => array( 'field' => 'template_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field33' => array( 'field' => 't_letter_no',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field32' => array( 'field' => 'review_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field31' => array( 'field' => 'result_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field30' => array( 'field' => 'qr_validation_text',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field29' => array( 'field' => 'qr_validation_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field28' => array( 'field' => 'qr_sign_text',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field27' => array( 'field' => 'qr_sign_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field26' => array( 'field' => 'pdf_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field25' => array( 'field' => 'merge_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field24' => array( 'field' => 'm_type_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field23' => array( 'field' => 'm_template_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field22' => array( 'field' => 'm_category_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field21' => array( 'field' => 'm_category_code',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field20' => array( 'field' => 'letter_ttgjwb',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field19' => array( 'field' => 'letter_ttg',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field18' => array( 'field' => 'letter_token',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field17' => array( 'field' => 'letter_status',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field16' => array( 'field' => 'letter_signature',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field15' => array( 'field' => 'letter_reg_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field14' => array( 'field' => 'letter_perihal',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 'letter_language',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field12' => array( 'field' => 'letter_kota',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'letter_kepada',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'letter_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'letter_attn',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'letter_alamat',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'last_user_flow',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'last_user_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'end_file',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'edit_user',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'edit_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'category_no',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'add_user',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'-',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'notifications' => array( 'type' => 'notifications' ),
'-' => array( 'type' => '-' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field34',
'search_panel_field33',
'search_panel_field32',
'search_panel_field31',
'search_panel_field30',
'search_panel_field29',
'search_panel_field28',
'search_panel_field27',
'search_panel_field26',
'search_panel_field25',
'search_panel_field24',
'search_panel_field23',
'search_panel_field22',
'search_panel_field21',
'search_panel_field20',
'search_panel_field19',
'search_panel_field18',
'search_panel_field17',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ),
'_flexiblePanel' => true ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'm_category_id',
'clickSort' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'letter_reg_date',
'clickSort' => true ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'letter_kepada',
'clickSort' => true ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'add_user',
'clickSort' => true ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'letter_perihal',
'clickSort' => true ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'pageWidth' => 'full',
'reorderRows' => false,
'reorderRowsField' => '',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

.alert-warning {
    background-color: #cff4fc;
    border-color: #9eeaf9;
    color: #282a35;
}' );
		?>