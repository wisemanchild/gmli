<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--
*-- PHP FILE INFO -------------------------------------------------------------
*  Application: Final Quote database project
*  Description: application function is to ...
*    File Name: enter file name here
*       Author: Norman McWilliams     Tester:
* Date created: 12-12-2017               Date updated: 01-03-2019
* Time created: 10:09:22AM            Time updated: þ10:09:22AM
*    Revisions: X.X
*    Copyright: (c) 2017 Norlab Business Solutions
*-----------------------------------------------------------------------------
//--=>revision history<=--*
//--=>revision history<=--*

// Function/Procedure Prototype Table  -  Last Update: 9/1/98 @ 11:49:02AM
// --------------------------------------------------------------------------
// Return Value         Function/Arguments
// -------------------  -----------------------------------------------------
// NIL                  is_administrator()
-->

<title>Untitled Document</title>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/concise.min.css" rel="stylesheet" type="text/css">
<link href="../css/masthead.css" rel="stylesheet" type="text/css">
<link href="../css/nshift360gmli_lib.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php 
	
/*-- FUNCTION -----------------------------------------------------------------
*         Name: is_administrator()                 Docs: Norman Mc Williams
*  Description: used to check if administrator to allow for database additions
*       Author: Norman Mc Williams
* Date created: 12/03/2017            Date updated: 12/12/2017
* Time created: 12:00pm            Time updated:05:17AM
*    Copyright: NSHIFT360.COM Norlab Business Solutions
*-----------------------------------------------------------------------------
*    Arguments:  $name = 'Samual', $value = 'Clemens'
* Return Value: booleen 
*     See Also:
*-----------------------------------------------------------------------------
*/
	if(isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
		return true;
	}else {
		return false;
	}
	

	?>
</body>
</html>
