<?php
###############################################################
#                                                             #
# Community Applications copyright 2015-2019, Andrew Zawadzki #
#                    All Rights Reserved                      #
#                                                             #
###############################################################

	header("Content-type: text/css; charset: UTF-8");

	$dynamix = @parse_ini_file("/boot/config/plugins/dynamix/dynamix.cfg",true);
	if ( ! $dynamix['display']['theme'] ) {
		$dynamix = @parse_ini_file("/usr/local/emhttp/plugins/dynamix/default.cfg",true);
	}
	$theme = $dynamix['display']['theme'] ?: "black";

	$unRaidSettings = parse_ini_file("/etc/unraid-version");
	$unRaid66 = version_compare($unRaidSettings['version'],"6.5.3",">");
	$unRaid66color = $unRaid66 ? "#FF8C2F" : "green";
	$linkColor = "#486dba";
	$startupColor = $unRaid66 ? "#FF8C2F" : "purple";
?>
.sortIcons {font-size:2.3rem;margin-right:20px;cursor:pointer;}
ul.caMenu {list-style-type: none;margin:0px 0px 20px 0px;padding: 0;cursor:pointer;font-size:1.5rem;}
li.caMenuItem {padding:0px 0px 5px 0px;}
ul.subCategory {list-style-type:none;margin-left:2rem;padding:0px;cursor:pointer;display:none;}
.menuHeader { font-size:2rem; margin-bottom:1rem;margin-top:1rem;}
.selectedMenu {color:<?=$unRaid66color?>;font-weight:bold;}
.hoverMenu {font-weight:bold;}
table {background-color:transparent;}
table tbody td {line-height:1.4rem;}
.startup-icon {color:lightblue;font-size:1.5rem;cursor:pointer;}
.ca_serverWarning {color:#cecc31}
.ca_template_icon {color:#606E7F;width:37rem;float:left;display:inline-block;background-color: #C7C5CB;margin:0px;height:15rem;padding-top:1rem;border-radius:2rem 20px 0px 0px;}
.ca_holder {display:inline-block;float:left;height:43.2rem;width:37rem;overflow:hidden;padding:0px;margin-bottom:.1rem;margin-right:.3rem;font-size:1.2rem;}
.ca_template {color:#606E7F;border-radius:0px 0px 2rem 2rem;display:inline-block;text-align:left;overflow:auto;height:27rem;width:36rem;padding-left:.5rem;padding-right:.5rem;	background-color:#DDDADF;}
.ca_icon_wide {display:inline-block;float:left;width:9.5rem;margin-left:2.5rem;}
.ca_wide_info {display: inline-block;float:left;text-align:left;margin-left:1rem;margin-top:1.5rem;width:20rem;}
.ca_category {color:<?=$linkColor?>;font-weight:bold;}
.ca_category::before {content:"Category: ";}
.ca_categoryLink {color:<?=$linkColor?>;font-weight:normal;}
.ca_author {color:<?=$linkColor?>;font-weight:bold;cursor:pointer;}
.ca_applicationName {color:black;font-size:2rem;}
.ca_repository {color:black;}
.ca_highlight {color:#0e5d08;font-weight:bold;}
.ca_description {color:#505E6F;}
a.ca_appPopup {text-decoration:none;cursor:pointer;}
input.appButtons {margin:0px;}
input.viewButton {margin:.1rem;}
input.sortButton {margin:.1rem;}
input.dirButton {margin:.1rem;}
input.allButtons {margin:0px;padding:1rem;}
input[type=checkbox] {width:2rem;height:2rem;}
.enabledIcon {cursor:pointer;color:<?=$unRaid66color?>;font-size:2.5rem;opacity:0.75}
.disabledIcon {color:#040404;font-size:2.5rem;}
.pinned {cursor:pointer;font-size:1.5rem;color:green;padding:.3rem;}
.unpinned {cursor:pointer;font-size:1.5rem;color:#820101;padding:.3rem;}
.pinned::after {content:"\f08d";font-family:fontAwesome;}
.unpinned::after {content:"\f08d";font-family:fontAwesome;display:inline-block;-webkit-transform: rotate(20deg);-moz-transform: rotate(20deg);-ms-transform: rotate(20deg);	-o-transform: rotate(20deg);	transform: rotate(20deg);}
.appIcons {font-size:2.5rem;color:<?=$linkColor?>;cursor:pointer;padding-left:.5rem;padding-right:.5rem;}
.appIcons:hover {text-decoration:none;}
.appIconsPopUp {font-size:2.5rem;color:#FF8C2F;cursor:pointer;padding-left:.5rem;padding-right:.5rem;}
.appIconsPopUp:hover {text-decoration:none;}
.myReadmore {text-align:center;}
.myReadmoreButton {color:blue;}
img.displayIcon {height:9.6rem;width:9.6rem;}
i.displayIcon {font-size:8rem;color:#626868;}
.supportLink {font-weight:bold;color:<?=$linkColor?>;padding-left:.5rem;padding-right:.5rem;}
.supportLink::after {content:"Support Thread"}
.projectLink {font-weight:bold;color:<?=$linkColor?>;padding-left:.5rem;padding-right:.5rem;}
.projectLink::after {content:"Project Home Page"}
.webLink {font-weight:bold;color:<?=$linkColor?>;padding-left:.5rem;padding-right:.5rem;}
.webLink::after {content:"Web Page"}
.donateLink {font-size:1.2rem;}
.dockerHubStar {color:<?=$linkColor?>;font-size:1.5rem;}
.dockerDisabled {text-align:center;width:auto;color:purple;}
.separateOfficial {text-align:center;width:auto;font-size:2.5rem;}
.displayBeta {cursor:pointer;}
.newApp {color:red;font-size:1.5rem;cursor:pointer;}
.ca_fa-delete {color:#c70404;font-size:2rem;position:relative;float:right;top:.2rem;cursor:pointer;}
.ca_fa-delete::after {content:"\f2d3";font-family:fontAwesome;}
.ca_fa-install::after {content:"\f019";font-family:fontAwesome;}
.ca_fa-edit::after {content:"\f044";font-family:fontAwesome;}
.ca_fa-globe::after {content:"\f0ac";font-family:fontAwesome;}
.ca_fa-update::after {content:"\f021";font-family:fontAwesome;}
.ca_multiselect {cursor:pointer;}
.pageNumber{margin-left:1rem;margin-right:1rem;cursor:pointer;}
.pageDots{color:grey;cursor:default;}
.pageDots::after {content:"...";}
.pageNavigation {font-size:2rem;font-weight:bold;}
.pageNavNoClick {font-size:2rem;color:grey;cursor:default;}
.pageSelected {cursor:default;}
.pageRight::after {content:"\f138";font-family:fontAwesome;font-weight:bold;}
.pageLeft::after {content:"\f137";font-family:fontAwesome;font-weight:bold;}
.specialCategory {font-size:1.5rem;color:<?=$unRaid66color?>;}
.ca_table { padding:.5rem 2rem .5rem 0; font-size:1.5rem;}
.ca_stat {color:coral; font-size:1.5rem;}
.ca_credit { padding:.5rem 0 1rem 0; font-size:2rem;line-height:3rem;}
.ca_dateUpdated {font-weight:bold;text-align:center;}
.ca_dateUpdated::before {content:"Date Updated: ";}
.ca_dateAdded {font-weight:bold;text-align:center;}
.ca_dateAdded::before {content:"Dated Added: ";}
.ca_dateUpdatedDate {font-weight:normal;}
#cookieWarning {display:none;}
.notice.shift {margin-top:0px;}
#searchBox{top:-0.6rem;padding:0.6rem;}
.searchSubmit{height:3.4rem;}
.startupMessage{font-size:2.5rem;}
.startupMessage2{font-size:1rem;}
.donate {background: #E68321;background: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,0.4) 100%),-webkit-linear-gradient(left, lighten(#E68321, 15%) 0%, #E68321 50%, lighten(#E68321, 15%) 100%);  background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.4) 100%),              linear-gradient(to right, lighten(#E68321, 15%) 0%, #E68321 50%, lighten(#E68321, 15%) 100%);  background-position: 0 0;  background-size: 200% 100%;  border-radius: 15px;  color: #fff;  padding: 1px 10px 1px 10px;  text-shadow: 1px 1px 5px #666;  -webkit-transition: all 800ms;  transition: all 800ms;  }
a.donate {text-decoration:none;font-style:italic;}
<?if ( $theme == "azure" ):?>
.searchSubmit{font-family:'FontAwesome';width:2.9rem;height:2.9rem;border:.1rem solid #dadada;border-radius:4px 4px 4px 4px;font-size:1.1rem;position:relative; top:-.7rem;padding:0px .2rem;background:#DADADA;border:none;cursor:pointer;}
#searchBox{margin-left:1rem;margin-right:0;position:relative;top:-.6rem;border:none;background-color:#DDDADF;}
<?endif;?>
<?if ( $theme == "black" ):?>
.searchSubmit{font-family:'FontAwesome';width:2.9rem;height:2.6rem;border:1px; solid #dadada;border-radius:4px 4px 4px 4px;font-size:1.1rem;position:relative; top:-6px;padding:0px 2px;background:#DADADA;border:none;cursor:pointer;}
#searchBox{margin-left:1rem;margin-right:0;position:relative;top:-.6rem;border:none;background-color:#262626;}
<?endif;?>
<?if ( $theme == "gray" ):?>
.searchSubmit{font-family:'FontAwesome';width:2.9rem;height:2.9rem;border:.1rem solid #dadada;border-radius:4px 4px 4px 4px;font-size:1.1rem;position:relative; top:-.7rem;padding:0px .2rem;background:#DADADA;border:none;cursor:pointer;}
#searchBox{margin-left:1rem;margin-right:0;position:relative;top:-.6rem;border:none;background-color:#12150e;}
<?endif;?>
<?if ( $theme == "white" ):?>
.searchSubmit{font-family:'FontAwesome';width:2.9rem;height:2.6rem;border:1px; solid #dadada;border-radius:4px 4px 4px 4px;font-size:1.1rem;position:relative; top:-6px;padding:0px 2px;background:#DADADA;border:none;cursor:pointer;}
#searchBox{margin-left:1rem;margin-right:0;position:relative;top:-.6rem;border:none;background-color:#e8e8e8}
<?endif;?>
<?if ($unRaid66 && ( $theme == "black" || $theme == "white") ):?>
#searchBox{top:-0.6rem;padding:0.6rem;}
.searchSubmit{height:3.4rem;}
<?endif;?>
@keyframes tooltipster-rotating{25%{transform:rotate(0deg)}75%{transform:rotate(0deg)}100%{transform:rotate(0)}}