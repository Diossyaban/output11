<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 't_delivery_expedition' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
't_delivery_internal' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
't_delivery_feedback_view2' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'm_disposition_inmail_x' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'fields' => array( 'gridFields' => array( 't_delivery_type',
't_location_id',
't_select_table_text',
't_delivery_to_table',
't_delivery_to_text',
't_delivery_address',
't_delivery_desc',
't_delivery_status',
'add_user',
'add_date',
'edit_user',
'edit_date',
't_delivery_location_address' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_delivery_type' => array( 'integrated_edit_field3' ),
't_location_id' => array( 'integrated_edit_field4' ),
't_select_table_text' => array( 'integrated_edit_field5' ),
't_delivery_to_table' => array( 'integrated_edit_field6' ),
't_delivery_to_text' => array( 'integrated_edit_field7' ),
't_delivery_address' => array( 'integrated_edit_field8' ),
't_delivery_desc' => array( 'integrated_edit_field9' ),
't_delivery_status' => array( 'integrated_edit_field10' ),
'add_user' => array( 'integrated_edit_field11' ),
'add_date' => array( 'integrated_edit_field12' ),
'edit_user' => array( 'integrated_edit_field13' ),
'edit_date' => array( 'integrated_edit_field14' ),
't_delivery_location_address' => array( 'integrated_edit_field22' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'notifications',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array(  ),
'grid' => array( 'section',
'section4',
'section1' ),
'section' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'section1' => array( 'details_preview3' ),
'section4' => array( 'section2',
'section3',
'integrated_edit_field3',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14' ),
'section2' => array( 'integrated_edit_field4',
'integrated_edit_field22' ),
'section3' => array( 'integrated_edit_field5',
'integrated_edit_field8',
'integrated_edit_field7',
'integrated_edit_field6' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array( 'back_button',
'close_button' ),
'top' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'section' => 'grid',
'section4' => 'grid',
'section1' => 'grid',
'details_preview' => 'section',
'details_preview1' => 'section',
'details_preview2' => 'section',
'details_preview3' => 'section1',
'section2' => 'section4',
'section3' => 'section4',
'integrated_edit_field3' => 'section4',
'integrated_edit_field9' => 'section4',
'integrated_edit_field10' => 'section4',
'integrated_edit_field11' => 'section4',
'integrated_edit_field12' => 'section4',
'integrated_edit_field13' => 'section4',
'integrated_edit_field14' => 'section4',
'integrated_edit_field4' => 'section2',
'integrated_edit_field22' => 'section2',
'integrated_edit_field5' => 'section3',
'integrated_edit_field8' => 'section3',
'integrated_edit_field7' => 'section3',
'integrated_edit_field6' => 'section3' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'section4' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'details_preview' => array( 'location' => 'section',
'cellId' => 'c1' ),
'details_preview1' => array( 'location' => 'section',
'cellId' => 'c1' ),
'details_preview2' => array( 'location' => 'section',
'cellId' => 'c' ),
'details_preview3' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'section2' => array( 'location' => 'section4',
'cellId' => 'c1' ),
'section3' => array( 'location' => 'section4',
'cellId' => 'c1' ),
'integrated_edit_field3' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field9' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field10' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field11' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field12' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field13' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field14' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field4' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field22' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field5' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field8' => array( 'location' => 'section3',
'cellId' => 'c2' ),
'integrated_edit_field7' => array( 'location' => 'section3',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'section3',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
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
'integrated_edit_field' => array( 'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field22' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2',
'details_preview3' ),
'section' => array( 'section',
'section1',
'section4',
'section2',
'section3' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c8' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 3 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 2 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section4' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section2',
'section3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 1 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 2 ),
'section3' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7',
'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
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
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'c6',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c6' => array( 'model' => 'c3',
'items' => array( 'section' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'section4' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'section1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview',
'details_preview1' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'details_preview2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview3' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section4' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'section2',
'section3' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field22' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7',
'integrated_edit_field6' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_back_list' => array( 'type' => 'view_back_list',
'width' => '100px',
'icon' => array( 'fa' => 'th-list' ) ),
'view_close' => array( 'type' => 'view_close' ),
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
'integrated_edit_field3' => array( 'field' => 't_delivery_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 't_location_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'label' => array( 'field' => 't_location_id',
'table' => 't_delivery_x',
'type' => 3 ) ),
'integrated_edit_field5' => array( 'field' => 't_select_table_text',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 't_delivery_to_table',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 't_delivery_to_text',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 't_delivery_address',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field9' => array( 'field' => 't_delivery_desc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 't_delivery_status',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field11' => array( 'field' => 'add_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'add_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field13' => array( 'field' => 'edit_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field14' => array( 'field' => 'edit_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 't_delivery_internal',
'items' => array(  ),
'popup' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 't_delivery_internal',
'type' => 7 ) ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 't_delivery_expedition',
'items' => array(  ),
'popup' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 't_delivery_expedition',
'type' => 7 ) ),
'integrated_edit_field22' => array( 'field' => 't_delivery_location_address',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Activity' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'section1' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Disposition' ),
'location' => 'section1',
'bsStyle' => 'default',
'panelType' => 3 ),
'section4' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Out Mail Process, Edit Form' ),
'location' => 'section4',
'bsStyle' => 'default',
'panelType' => 3 ),
'section2' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Origin' ),
'location' => 'section2',
'bsStyle' => 'default',
'panelType' => 3 ),
'section3' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Destination' ),
'location' => 'section3',
'bsStyle' => 'default',
'panelType' => 3 ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 't_delivery_feedback_view2',
'items' => array(  ),
'popup' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 't_delivery_feedback_view2',
'type' => 7 ) ),
'details_preview3' => array( 'type' => 'details_preview',
'table' => 'm_disposition_inmail_x',
'items' => array(  ),
'popup' => false,
'pageId' => 'list',
'caption' => array( 'page' => 'list',
'table' => 'm_disposition_inmail_x',
'type' => 7 ) ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageWidth' => 'full',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>