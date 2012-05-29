<?php

$app_desc = array(
    "name" => "CKEDITOR_PLUGINS",
    "short_name" => N_("dynacase-ckeditor-plugins name"),
    "description" => N_("dynacase-ckeditor-plugins description"),
    "access_free" => "N",
    "icon" => "dynacase-ckeditor-plugins.png",
    "displayable" => "N",
    "with_frame" => "N",
    "childof" => ""
);

$app_acl = array(
    array(
        "name" => "CKEDITOR_PLUGINS_BASIC",
        "description" => N_("Access to basic action for CKEDITOR plugin")
    )
);

$action_desc = array(
    array(
        "name" => "HTMLEDITSELECTDOC",
        "short_name" => N_("Action to select a doc"),
        "acl" => "CKEDITOR_PLUGINS_BASIC"
    )
);

?>
