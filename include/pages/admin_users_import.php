<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'username',
'password',
'fullname',
'email',
'isactive',
'add_user',
'add_date',
'edit_user',
'edit_date',
'ext_security_id',
'm_employee_id',
'last_login_date',
'apikey',
'is_active',
'is_delete',
'deleted_date',
'created_date',
'created_by',
'last_update_by',
'last_update_date',
'url_calender' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'username' => array( 'import_field1' ),
'password' => array( 'import_field2' ),
'fullname' => array( 'import_field3' ),
'email' => array( 'import_field4' ),
'isactive' => array( 'import_field5' ),
'add_user' => array( 'import_field6' ),
'add_date' => array( 'import_field7' ),
'edit_user' => array( 'import_field8' ),
'edit_date' => array( 'import_field9' ),
'ext_security_id' => array( 'import_field10' ),
'm_employee_id' => array( 'import_field11' ),
'last_login_date' => array( 'import_field12' ),
'apikey' => array( 'import_field13' ),
'is_active' => array( 'import_field14' ),
'is_delete' => array( 'import_field15' ),
'deleted_date' => array( 'import_field16' ),
'created_date' => array( 'import_field17' ),
'created_by' => array( 'import_field18' ),
'last_update_by' => array( 'import_field19' ),
'last_update_date' => array( 'import_field20' ),
'url_calender' => array( 'import_field21' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'username',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'password',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'fullname',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'isactive',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'add_user',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'add_date',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'edit_user',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'edit_date',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'ext_security_id',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'm_employee_id',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'last_login_date',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'apikey',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'is_active',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'is_delete',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'deleted_date',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'created_date',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'created_by',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'last_update_by',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'last_update_date',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'url_calender',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>