<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'grid' => array( 'dashboard-item' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'notifications',
'username_button' ),
'top' => array(  ) ),
'formXtTags' => array( 'top' => array(  ) ),
'itemForms' => array( 'dashboard-item' => 'grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'notifications' => 'supertop',
'username_button' => 'supertop' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'username_button' => array( 'username_button' ),
'changepassword_link' => array( 'changepassword_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'notifications' => array( 'notifications' ),
'dashboard-item' => array( 'dashboard-item' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'dashboard',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dashboard' => array( 'elements' => array( array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'v1',
'dashType' => 7,
'dashName' => 'v1_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => '' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'v1_snippet',
'snippetStyle' => 'right',
'headerColor' => '',
'bodyBg' => '#2780E3',
'bodyColor' => '',
'iconColor' => '',
'panelBorder' => '3px',
'borderColor' => '#2780E3' ),
'elementName' => 'v1_snippet',
'table' => 'v1',
'type' => 7,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'snippetId' => 'v1_snippet',
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ) ) ),
'dashSearch' => array( 'searchFields' => array(  ),
'allSearchFields' => array(  ),
'googleLikeFields' => array(  ) ) );
			$pageArray = array( 'id' => 'dashboard',
'type' => 'dashboard',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'grid' => array( 'modelId' => 'dashboard-grid',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 1 ),
array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c15' ),
array( 'cell' => 'c22' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c25' ) ) ) ),
'cells' => array( 'c2' => array( 'model' => 'c1',
'items' => array( 'dashboard-item' ) ),
'c6' => array( 'model' => 'c1',
'items' => array(  ) ),
'c15' => array( 'model' => 'c1',
'items' => array(  ) ),
'c22' => array( 'model' => 'c1',
'items' => array(  ) ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c25' => array( 'model' => 'c1',
'items' => array(  ),
'width' => '' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-dashboard',
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
'supertop' => array( 'modelId' => 'leftbar-top-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'notifications',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'dashboard-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c4',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'notifications' => array( 'type' => 'notifications' ),
'dashboard-item' => array( 'type' => 'dashboard-item',
'table' => 'v1',
'dashType' => 7,
'dashName' => 'v1_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => '' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'v1_snippet',
'snippetStyle' => 'right',
'headerColor' => '',
'bodyBg' => '#2780E3',
'bodyColor' => '',
'iconColor' => '',
'panelBorder' => '3px',
'borderColor' => '#2780E3' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>