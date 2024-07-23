<?php
//Workspace data structure
$workspace = array(
    array(
        "ticket_category_id" => "825",
        "ticket_category_name" => " Category 1",
        "ticket_category_order" => "1",
        "ticket_list" => array()),
    array(
        "ticket_category_id" => "826",
        "ticket_category_name" => "testing category for intermediate hub",
        "ticket_category_order" => "1",
        "ticket_list" => array()),
    array(
        "ticket_category_id" => "827",
        "ticket_category_name" => "testing category for intermediate hub",
        "ticket_category_order" => "1",
        "ticket_list" => array()),
    array(
        "ticket_category_id" => "836",
        "ticket_category_name" => "testing category for intermediate hub",
        "ticket_category_order" => "1",
        "ticket_list" => array())
);

//Ticket data structure
$ticket = array(
    array(
        "ticket_id" => "1",
        "ticket_title" => "Fun",
        "ticket_order" => "1",
        "category_id" => "826",
        "due_date" => "2019-04-14 06:32:37",
        "due_timestamp" => "1555194757",
        "created_date" => "2018-01-31 07:11:10",
        "created_timestamp" => "1517353870",
        "edited_date" => "2018-04-10 02:40:54",
        "edited_timestamp"=> "1523299254",
        "updated_date"=> "2018-04-10 02:40:54",
        "updated_timestamp"=> "1523299254",
        "is_complete"=> "0",
        "total_comment"=> "0",
        "total_attachment"=> "0",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items" => "0",
        "label" => array(),
        "people" => array(),
        "module_role"=> "author"
    ),array(
        "ticket_id"=> "2",
        "ticket_title"=> "out摸索",
        "ticket_order"=> "1",
        "category_id"=> "826",
        "due_date"=> "0000-00-00 00:00:00",
        "due_timestamp"=> "0",
        "created_date"=> "2018-01-31 09:24:24",
        "created_timestamp"=> "1517361864",
        "edited_date"=> "2018-01-31 09:24:31",
        "edited_timestamp"=> "1517361871",
        "updated_date"=> "2018-01-31 09:24:31",
        "updated_timestamp"=> "1517361871",
        "is_complete"=> "0",
        "total_comment"=> "0",
        "total_attachment"=> "0",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items"=> "0",
        "label"=> array(),
        "people"=> array(),
        "module_role"=> "author"
    ),array(
        "ticket_id" => "2804",
        "ticket_title" => "asdas",
        "ticket_order" => "6",
        "category_id" => "827",
        "due_date" => "0000-00-00 00:00:00",
        "due_timestamp" => "0",
        "created_date"=> "2018-05-28 02:17:31",
        "created_timestamp"=> "1527445051",
        "edited_date"=> "0000-00-00 00:00:00",
        "edited_timestamp"=> "0",
        "updated_date"=> "0000-00-00 00:00:00",
        "updated_timestamp"=> "0",
        "is_complete"=> "0",
        "total_comment"=> "0",
        "total_attachment"=> "0",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items"=> "0",
        "label"=> array(),
        "people"=> array(),
        "module_role"=> "author"
    ),array(
        "ticket_id"=> "2805",
        "ticket_title"=> "Ticket 12",
        "ticket_order"=> "1",
        "category_id"=> "827",
        "due_date"=> "0000-00-00 00:00:00",
        "due_timestamp"=> "0",
        "created_date"=> "2018-05-29 08:21:10",
        "created_timestamp"=> "1527553270",
        "edited_date"=> "2018-05-29 08:31:49",
        "edited_timestamp"=> "1527553909",
        "updated_date"=> "2018-05-29 08:31:49",
        "updated_timestamp"=> "1527553909",
        "is_complete"=> "0",
        "total_comment"=> "1",
        "total_attachment"=> "1",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items"=> "0",
        "label"=> array(),
        "people"=> array(),
        "module_role"=> "author"
    ),array(
        "ticket_id"=> "3",
        "ticket_title"=> "恶徒摸索",
        "ticket_order"=> "2",
        "category_id"=> "836",
        "due_date"=> "1970-01-01 00:00:00",
        "due_timestamp"=> "0",
        "created_date"=> "2018-01-31 09:24:40",
        "created_timestamp"=> "1517361880",
        "edited_date"=> "2018-01-31 10:26:19",
        "edited_timestamp"=> "1517365579",
        "updated_date"=> "2018-01-31 10:26:19",
        "updated_timestamp"=> "1517365579",
        "is_complete"=> "0",
        "total_comment"=> "0",
        "total_attachment"=> "0",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items"=> "0",
        "label"=> array(),
        "people"=> array(),
        "module_role"=> "author"
    ),array(
        "ticket_id"=> "4",
        "ticket_title"=> "许很多佳迪家",
        "ticket_order"=> "3",
        "category_id"=> "836",
        "due_date"=> "0000-00-00 00:00:00",
        "due_timestamp"=> "0",
        "created_date"=> "2018-01-31 10:26:43",
        "created_timestamp"=> "1517365603",
        "edited_date"=> "2018-01-31 10:26:50",
        "edited_timestamp"=> "1517365610",
        "updated_date"=> "2018-01-31 10:26:50",
        "updated_timestamp"=> "1517365610",
        "is_complete"=> "0",
        "total_comment"=> "0",
        "total_attachment"=> "0",
        "total_checklist_items"=> "0",
        "total_completed_checklist_items"=> "0",
        "label"=> array(),
        "people"=> array(),
        "module_role"=> "author"
    )                
);

//Label data structure
$label = array(
    array(
        "ticket_label_id"=> "272",
        "ticket_label_name"=> "",
        "ticket_color_code"=> "#FF3B30",
        "ticket_id"=> "1"),
    array(
        "ticket_label_id"=> "273",
        "ticket_label_name"=> "Canvas",
        "ticket_color_code"=> "#FF7200",
        "ticket_id"=> "1"),
    array(
        "ticket_label_id"=> "274",
        "ticket_label_name"=> "",
        "ticket_color_code"=> "#FFCC00",
        "ticket_id"=> "1"),
    array(
        "ticket_label_id"=> "282",
        "ticket_label_name"=> "11",
        "ticket_color_code"=> "#FF3B30",
        "ticket_id"=> "4"),
    array(
        "ticket_label_id"=> "283",
        "ticket_label_name"=> "22",
        "ticket_color_code"=> "#FF7200",
        "ticket_id"=> "4"),
    array(
        "ticket_label_id"=> "287",
        "ticket_label_name"=> "33",
        "ticket_color_code"=> "#007AFF",
        "ticket_id"=> "4"
    )
);

//People data structure
$people = array(
    array(
        "user_id"=> "1",
        "user_photo"=> "1521461837035726",
        "is_owner"=> "0",
        "ticket_id"=> "1"),
    array(
        "user_id"=> "3",
        "user_photo"=> "1521776192104019",
        "is_owner"=> "0",
        "ticket_id"=> "1"),
    array(
        "user_id"=> "2",
        "user_photo"=> "1523956274471195",
        "is_owner"=> "0",
        "ticket_id"=> "1"),
    array(
        "user_id"=> "8",
        "user_photo"=> "1521523017963880",
        "is_owner"=> "0",
        "ticket_id"=> "1"),
    array(
        "user_id"=> "17",
        "user_photo"=> "",
        "is_owner"=> "0",
        "ticket_id"=> "2"),
    array(
        "user_id"=> "2",
        "user_photo"=> "1523956274471195",
        "is_owner"=> "0",
        "ticket_id"=> "2"),
    array(
        "user_id"=> "23",
        "user_photo"=> "1520409780677131",
        "is_owner"=> "0",
        "ticket_id"=> "2805"),
    array(
        "user_id"=> "10",
        "user_photo"=> "1520330897067564",
        "is_owner"=> "0",
        "ticket_id"=> "2805"),
    array(
        "user_id"=> "12",
        "user_photo"=> "1517391965854528",
        "is_owner"=> "0",
        "ticket_id"=> "3"
    )
);

?>