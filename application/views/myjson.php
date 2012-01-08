<?php
//request data from the database
//code here to connect to database and get the data you want

/* Example JSON format 
{
  "item1": "I love jquery4u",
  "item2": "You love jQuery4u",
  "item3": "We love jQuery4u"
}
*/

$d = array('item1' => 'I love jquery4u', 'item2' => 'You love jQuery4u', 'item3' => 'We love jQuery4u');

//return in JSON format
echo json_encode($d);
?>