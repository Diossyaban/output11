<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 2 ),
'details' => array( 'm_meeting_room' => array( 'displayPreview' => 2,
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
'totals' => array( 't_meeting_id' => array( 'totalsType' => '' ),
't_meeting_roomid' => array( 'totalsType' => '' ),
't_meeting_no' => array( 'totalsType' => '' ),
't_meeting_user' => array( 'totalsType' => '' ),
't_meeting_desc' => array( 'totalsType' => '' ),
't_meeting_from_date' => array( 'totalsType' => '' ),
't_meeting_to_date' => array( 'totalsType' => '' ),
't_meeting_from_time' => array( 'totalsType' => '' ),
't_meeting_to_time' => array( 'totalsType' => '' ),
'user_participant_list' => array( 'totalsType' => '' ),
't_meeting_participant_type' => array( 'totalsType' => '' ),
't_meeting_total_participant' => array( 'totalsType' => '' ),
't_meeting_isminuman' => array( 'totalsType' => '' ),
't_meeting_issnack' => array( 'totalsType' => '' ),
't_meeting_ismakan' => array( 'totalsType' => '' ),
't_meeting_recurring_flag' => array( 'totalsType' => '' ),
't_meeting_status' => array( 'totalsType' => '' ),
'add_user' => array( 'totalsType' => '' ),
'add_date' => array( 'totalsType' => '' ),
'edit_user' => array( 'totalsType' => '' ),
'edit_date' => array( 'totalsType' => '' ),
'fr_date' => array( 'totalsType' => '' ),
'to_dt' => array( 'totalsType' => '' ),
'fr_time' => array( 'totalsType' => '' ),
'to_time' => array( 'totalsType' => '' ),
'meet_approve' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 't_meeting_from_date',
't_meeting_to_date',
't_meeting_roomid',
't_meeting_user',
't_meeting_desc',
'user_participant_list',
't_meeting_participant_type',
'fr_date',
't_meeting_total_participant' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'add_date',
'fr_date',
'user_participant_list',
't_meeting_user',
't_meeting_total_participant',
't_meeting_to_time',
't_meeting_to_date',
't_meeting_status',
't_meeting_roomid',
't_meeting_recurring_flag',
't_meeting_participant_type',
't_meeting_no',
't_meeting_issnack',
't_meeting_isminuman',
't_meeting_ismakan',
't_meeting_id',
't_meeting_from_time',
't_meeting_from_date',
't_meeting_desc',
'edit_user',
'edit_date',
'add_user' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 't_meeting_roomid' => array( 'simple_grid_field1',
'simple_grid_field22' ),
't_meeting_user' => array( 'simple_grid_field3',
'simple_grid_field24' ),
't_meeting_desc' => array( 'simple_grid_field4',
'simple_grid_field25' ),
't_meeting_from_date' => array( 'simple_grid_field5',
'simple_grid_field26' ),
't_meeting_to_date' => array( 'simple_grid_field6' ),
'user_participant_list' => array( 'simple_grid_field9',
'simple_grid_field30' ),
't_meeting_participant_type' => array( 'simple_grid_field10',
'simple_grid_field31' ),
'fr_date' => array( 'grid_field',
'grid_field_label' ),
't_meeting_total_participant' => array( 'grid_field1',
'grid_field_label1' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'details_found',
'page_size',
'print_panel',
'snippet',
'add' ),
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
'grid' => array( 'simple_grid_field22',
'simple_grid_field1',
'simple_grid_field24',
'simple_grid_field3',
'simple_grid_field25',
'simple_grid_field4',
'simple_grid_field30',
'simple_grid_field9',
'simple_grid_field31',
'simple_grid_field10',
'grid_field_label',
'grid_field',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_view',
'grid_field_label1',
'grid_field1',
'simple_grid_field26',
'simple_grid_field5',
'text',
'simple_grid_field6' ),
'top' => array(  ) ),
'formXtTags' => array( 'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'snippet' => 'above-grid',
'add' => 'above-grid',
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
'simple_grid_field22' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field30' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field31' => 'grid',
'simple_grid_field10' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field5' => 'grid',
'text' => 'grid',
'simple_grid_field6' => 'grid' ),
'itemLocations' => array( 'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field30' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field31' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox2' ),
'text' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox2' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox2' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15',
'search_panel_field16',
'search_panel_field17',
'search_panel_field18',
'search_panel_field19',
'search_panel_field20',
'search_panel_field21' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field9',
'simple_grid_field10',
'grid_field',
'grid_field1' ),
'grid_field_label' => array( 'simple_grid_field22',
'simple_grid_field24',
'simple_grid_field25',
'simple_grid_field26',
'simple_grid_field30',
'simple_grid_field31',
'grid_field_label',
'grid_field_label1' ),
'snippet' => array( 'snippet' ),
'text' => array( 'text' ),
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
'headcell_checkbox1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_from_date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_roomid_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_desc_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'user_participant_list_fieldheadercolumn' ),
'items' => array( 'simple_grid_field30' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_participant_type_fieldheadercolumn' ),
'items' => array( 'simple_grid_field31' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'fr_date_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 't_meeting_total_participant_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
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
'headcell_checkbox2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'simple_grid_field5',
'text',
'simple_grid_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 't_meeting_roomid_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 't_meeting_user_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 't_meeting_desc_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'user_participant_list_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 't_meeting_participant_type_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'fr_date_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 't_meeting_total_participant_fieldcolumn' ),
'items' => array( 'grid_field1' ),
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
'headcell_checkbox3' => array( 'cols' => array( 2 ),
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
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
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
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'snippet' ),
'align' => 'center' ),
'c3' => array( 'model' => 'c1',
'items' => array( 'add' ) ) ),
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
array( 'cell' => 'headcell_checkbox1' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field2' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'headcell_checkbox2' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'headcell_checkbox3' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field2' ) ) ) ),
'cells' => array( 'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 't_meeting_roomid',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 't_meeting_roomid',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 't_meeting_user',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 't_meeting_user',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 't_meeting_desc',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 't_meeting_desc',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field30' ),
'field' => 'user_participant_list',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'user_participant_list',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field31' ),
'field' => 't_meeting_participant_type',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 't_meeting_participant_type',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'fr_date',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'fr_date',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
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
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'field' => 't_meeting_total_participant',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 't_meeting_total_participant',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox1' => array( 'model' => 'headcell_checkbox',
'items' => array( 'simple_grid_field26' ),
'field' => 't_meeting_from_date',
'columnName' => 'field' ),
'headcell_checkbox2' => array( 'model' => 'cell_checkbox',
'items' => array( 'simple_grid_field5',
'text',
'simple_grid_field6' ),
'field' => 't_meeting_from_date',
'columnName' => 'field' ),
'headcell_checkbox3' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
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
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'add_date',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'add_user',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'edit_date',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'edit_user',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 't_meeting_desc',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field5' => array( 'field' => 't_meeting_from_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 't_meeting_from_time',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 't_meeting_id',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field8' => array( 'field' => 't_meeting_ismakan',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 't_meeting_isminuman',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 't_meeting_issnack',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 't_meeting_no',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field12' => array( 'field' => 't_meeting_participant_type',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field13' => array( 'field' => 't_meeting_recurring_flag',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field14' => array( 'field' => 't_meeting_roomid',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field15' => array( 'field' => 't_meeting_status',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field16' => array( 'field' => 't_meeting_to_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field17' => array( 'field' => 't_meeting_to_time',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field18' => array( 'field' => 't_meeting_total_participant',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field19' => array( 'field' => 't_meeting_user',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field20' => array( 'field' => 'user_participant_list',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
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
'add' => array( 'type' => 'add',
'popup' => true,
'customCSS' => '.btn-primary {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.btn-primary:hover, .btn-primary:focus, .btn-group.open .dropdown-toggle.btn-primary {
    background-color: #e7c235;
    border-color: #b6a35d;
}',
'icon' => array( 'fa' => 'plus-circle' ) ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true,
'label' => array( 'type' => 0,
'text' => 'Edit' ),
'buttonStyle' => 'default',
'buttonSize' => 'small',
'icon' => array( 'fa' => 'pencil-square-o' ) ),
'grid_view' => array( 'type' => 'grid_view',
'label' => array( 'type' => 0,
'text' => 'View' ),
'buttonStyle' => 'default',
'buttonSize' => 'small',
'icon' => array( 'fa' => 'question-circle' ),
'popup' => false ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field1' => array( 'field' => 't_meeting_roomid',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field3' => array( 'field' => 't_meeting_user',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field4' => array( 'field' => 't_meeting_desc',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field5' => array( 'field' => 't_meeting_from_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field6' => array( 'field' => 't_meeting_to_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field9' => array( 'field' => 'user_participant_list',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field10' => array( 'field' => 't_meeting_participant_type',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_roomid',
'clickSort' => true ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_user',
'clickSort' => true ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_desc',
'clickSort' => true ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_from_date',
'clickSort' => true,
'label' => array( 'field' => 't_meeting_from_date',
'table' => 't_meeting_book',
'type' => 3 ) ),
'simple_grid_field30' => array( 'type' => 'grid_field_label',
'field' => 'user_participant_list',
'clickSort' => true ),
'simple_grid_field31' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_participant_type',
'clickSort' => true ),
'snippet' => array( 'eventId' => 't_meeting_book_snippet1',
'label' => array( 'text' => 't_meeting_book_snippet',
'type' => 0 ),
'type' => 'snippet' ),
'grid_field' => array( 'field' => 'fr_date',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'fr_date',
'clickSort' => true ),
'search_panel_field21' => array( 'field' => 'fr_date',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'grid_field1' => array( 'field' => 't_meeting_total_participant',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 't_meeting_total_participant',
'clickSort' => true ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '-',
'type' => 0 ),
'editedByRte' => false ),
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
'imagePosition' => 'right' );
		?>