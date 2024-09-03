<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_t_booking  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$values['flag'] = 0;

if (toPHPTime($values["t_booking_from_date"]) > toPHPTime($values["t_booking_to_date"]))
{
  $message = "Start date can not be later than End date.";
  return false;
}
else
{
  return true;
}
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		
$data = array();
$data["t_disposition_no"] = $values['t_booking_id'];
$data["t_disposition_type"] = 6;
$data["t_disposition_from"] = $userData = Security::getUserName();
$data["t_disposition_from_date"] = date('Y-m-d H:i:s');
$data["t_disposition_to_date"] = date('Y-m-d H:i:s');
$data["t_disposition_to"] = $userData = Security::getUserName();
$data["t_disposition_to_date"] = $values['t_booking_from_date'];
$data["t_disposition_desc"] = "- New T-Booking Registraion -";
$data["t_disposition_status"] = 35;
DB::Insert("m_disposition", $data );



;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		
$tz = 'Asia/Jakarta';

$strdt=$_GET['datestart'];
$frdt = new DateTime($strdt, new DateTimeZone($tz));
$strdt2 = $frdt->format('Y-m-d G:i:s');

$frdt = date( "Y-m-d H:i:s", strtotime($strdt2)) ;
$frtime = date( "H:i:s", strtotime($strdt2)) ;

$values['t_booking_from_date'] = $frdt;
$values['t_booking_to_date'] = $frtime;

$enddt=$_GET['dateend'];
$todt = new DateTime($enddt, new DateTimeZone($tz));
$enddt2 = $todt->format('Y-m-d G:i:s');

$todt = date( "Y-m-d H:i:s", strtotime($enddt2)) ;
$totime = date( "H:i:s", strtotime($enddt2)) ;

$values['t_booking_to_date'] = $todt;
$values['to_time'] = $totime;
// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		

if (toPHPTime($values["t_booking_from_date"]) > toPHPTime($values["t_booking_to_date"]))
{
  $message = "Start date can not be later than End date.";
  return false;
}
else
{
  return true;
}


;
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>