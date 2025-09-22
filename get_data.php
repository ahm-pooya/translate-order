<?php
$order = @@txt_order;

$query = "
  SELECT 
    TRANSLATOR_ID AS name,
    TXT_TRANSLATE_COST AS cost,
    TXT_TRANSLATE_TIME AS time
  FROM PMT_ORDERS
  WHERE TXT_ORDER = '$order'
    AND RAD_CONFIRM_TRANSLATE = 1
    AND TRANSLATOR_ID IS NOT NULL
	  AND TXT_TRANSLATE_COST IS NOT NULL
	  AND TXT_TRANSLATE_TIME IS NOT NULL
";

$result = executeQuery($query);
@@grd_translate_offers = $result;
