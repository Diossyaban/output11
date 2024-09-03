<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_m_disposition_register  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		

$rs = DB::Query("SELECT m_disposition.t_disposition_id, m_disposition.t_disposition_no,m_status.status FROM m_disposition INNER JOIN m_status ON m_disposition.t_disposition_status = m_status.m_status_id where m_disposition.t_disposition_id=".$values["t_disposition_id"]);
while( $data = $rs->fetchAssoc() )
{
$status = $data["status"];
$message="You receive a disposition from ".$values["t_disposition_from"];
$title = "[T-Mail] ".$status." In Mail Notification";
$icon = "fa-envelope"; 
$url = "t_in_mail_view.php?editid1=".$values["t_disposition_no"];
$expire = 1440; 
$permissions = $values["t_disposition_to"]; 
$newWindow = false;

addNotification( $message,$title,$icon,$url,$expire,$permissions,$newWindow);  


}


;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$userData = Security::getUserName();
			$tz = 'Asia/Jakarta';
			$dt = new DateTime("now", new DateTimeZone($tz));
			$timestamp = $dt->format('Y-m-d h:i:s');
			$tahun = $dt->format("y");
			$bulan = $dt->format("m");
			$tanggal = $dt->format("d");

			$values["t_disposition_from"] = $userData;
			$values["t_disposition_from_date"] = $timestamp;
			$values["t_disposition_to_date"] = $timestamp;
			$values["t_disposition_type"] = 4;
			return true;
		
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>