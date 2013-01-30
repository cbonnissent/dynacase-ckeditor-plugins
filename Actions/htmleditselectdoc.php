<?php
/*
 * @author Anakeen
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @package FDL
 */

function htmleditselectdoc(Action $action)
{
    
    $usage = new ActionUsage($action);
    
    $fam = $usage->addRequiredParameter("fam", "fam");
    $docrev = $usage->addOptionalParameter("docrev", "docrev", array() , "latest");
    $initid = $usage->addOptionalParameter("initid", "initid");
    $title = $usage->addOptionalParameter("title", "title");
    $filter = $usage->addOptionalParameter("filter", "filter", array() , "");
    
    $usage->setStrictMode(false);
    
    $usage->verify();
    
    $action->lay->set("FAM", $fam);
    $action->lay->set("DOCREV", $docrev);
    $action->lay->set("INITID", $initid);
    $action->lay->set("TITLE", $title);
    $action->lay->set("FILTER", $filter);
}
?>