<?php
class ViewUserControl extends ViewControl
{
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	public $userControl;
	
	public function initUserControl()
	{		
	}
	

	public function addViewPluginJSControl($name)
	{
		if($this->viewFormat == $name)
		{
			$this->AddJSFile("include/runnerJS/controls/".$name.".js", 'include/runnerJS/viewControls/ViewControl.js');
			$this->getJSControl();
			foreach ($this->settings as $settingName => $settingValue)
				$this->addJSControlSetting($settingName, $settingValue);
		}
	}
	/**
	 * Control settings filling
	 */
	public function init()
	{
		$this->userControl = true;
		
		// We need to add this dependencies ViewControl.js - for debug.
		// For build we need to add RunnerAll.js
		//$this->AddJSFile("include/runnerJS/controls/".$this->viewFormat.".js", 'include/runnerJS/viewControls/ViewControl.js');
		
					if($this->container->tName=="t_register" && $this->field=="sign" && $this->container->pageType=="view")
		{
			$this->settings["qr_height"] = 100; // qr height/px
$this->settings["qr_width"] = 100; // qr width/px;
		}	
					if($this->container->tName=="t_register" && $this->field=="sign" && $this->container->pageType=="list")
		{
			$this->settings["qr_height"] = 50; // qr height/px
$this->settings["qr_width"] = 50; // qr width/px;
		}	
					if($this->container->tName=="t_register" && $this->field=="sign" && $this->container->pageType=="print")
		{
			$this->settings["qr_height"] = 50; // qr height/px
$this->settings["qr_width"] = 50; // qr width/px;
		}	
					if($this->container->tName=="t_register" && $this->field=="sign" && $this->container->pageType=="export")
		{
			$this->settings["qr_height"] = 50; // qr height/px
$this->settings["qr_width"] = 50; // qr width/px;
		}	
					if($this->container->tName=="t_in_mail" && $this->field=="sign")
		{
			$this->settings["qr_height"] = 128; // qr height/px
$this->settings["qr_width"] = 128; // qr width/px;
		}	
		$this->addViewPluginJSControl("ViewQRCode");
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Check for need to load the javascript files.
	 * Javascript files for user controls are always loaded.
	 * @return boolean
	 */
	public function neededLoadJSFiles() 
	{
		return true;
	}
	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

}
?>