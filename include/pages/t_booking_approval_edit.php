<?php
			$optionsArray = array( 'details' => array( 'm_disposition' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 't_booking_remarks',
't_booking_from_date',
't_booking_to_date',
't_booking_destination',
'm_vehicle_id',
'm_vehicle_driver',
'Voucher' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 't_booking_remarks' => array( 'integrated_edit_field' ),
't_booking_from_date' => array( 'integrated_edit_field1' ),
't_booking_to_date' => array( 'integrated_edit_field2' ),
't_booking_destination' => array( 'integrated_edit_field3' ),
'm_vehicle_id' => array( 'm_vehicle_id' ),
'm_vehicle_driver' => array( 'm_vehicle_driver' ),
'Voucher' => array( 'voucher' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'top' => array( 'edit_header' ),
'grid' => array( 'section',
'section1',
'section2' ),
'section' => array( 'integrated_edit_field3',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2' ),
'section1' => array( 'm_vehicle_id',
'm_vehicle_driver',
'voucher' ),
'section2' => array( 'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'edit_header' => 'top',
'section' => 'grid',
'section1' => 'grid',
'section2' => 'grid',
'integrated_edit_field3' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field2' => 'section',
'm_vehicle_id' => 'section1',
'm_vehicle_driver' => 'section1',
'voucher' => 'section1',
'details_preview' => 'section2' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'section2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c5' ),
'm_vehicle_id' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'm_vehicle_driver' => array( 'location' => 'section1',
'cellId' => 'c' ),
'voucher' => array( 'location' => 'section1',
'cellId' => 'c' ),
'details_preview' => array( 'location' => 'section2',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'm_vehicle_id',
'm_vehicle_driver',
'voucher' ),
'details_preview' => array( 'details_preview' ),
'section' => array( 'section',
'section1',
'section2' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section',
'section1',
'section2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'm_vehicle_id' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'm_vehicle_driver',
'voucher' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
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
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section',
'section1',
'section2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c2' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c6' => array( 'model' => 'c1',
'items' => array(  ) ),
'c7' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'm_vehicle_id' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'm_vehicle_driver',
'voucher' ) ),
'c2' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => 't_booking_approval',
'type' => 7 ) ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 't_booking_remarks',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 't_booking_from_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 't_booking_to_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 't_booking_destination',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'm_disposition',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => '' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'section1' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Vehicle' ),
'location' => 'section1',
'bsStyle' => 'default',
'panelType' => 3 ),
'section2' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Disposition' ),
'location' => 'section2',
'bsStyle' => 'default',
'panelType' => 3 ),
'm_vehicle_id' => array( 'field' => 'm_vehicle_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'm_vehicle_driver' => array( 'field' => 'm_vehicle_driver',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'voucher' => array( 'field' => 'Voucher',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>