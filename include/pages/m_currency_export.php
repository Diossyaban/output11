<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'currency_name' => array( 'totalsType' => '' ),
'country_id' => array( 'totalsType' => '' ),
'is_active' => array( 'totalsType' => '' ),
'is_delete' => array( 'totalsType' => '' ),
'deleted_date' => array( 'totalsType' => '' ),
'created_date' => array( 'totalsType' => '' ),
'created_by' => array( 'totalsType' => '' ),
'last_update_by' => array( 'totalsType' => '' ),
'last_update_date' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'currency_name',
'country_id',
'is_active',
'is_delete',
'deleted_date',
'created_date',
'created_by',
'last_update_by',
'last_update_date' ),
'exportFields' => array( 'id',
'currency_name',
'country_id',
'is_active',
'is_delete',
'deleted_date',
'created_date',
'created_by',
'last_update_by',
'last_update_date' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'export_field' ),
'currency_name' => array( 'export_field1' ),
'country_id' => array( 'export_field2' ),
'is_active' => array( 'export_field3' ),
'is_delete' => array( 'export_field4' ),
'deleted_date' => array( 'export_field5' ),
'created_date' => array( 'export_field6' ),
'created_by' => array( 'export_field7' ),
'last_update_by' => array( 'export_field8' ),
'last_update_date' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'currency_name',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'country_id',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'is_active',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'is_delete',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'deleted_date',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'created_date',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'created_by',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'last_update_by',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'last_update_date',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>