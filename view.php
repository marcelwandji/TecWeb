<!DOCTYPE html>
<html  dir="ltr" lang="it" xml:lang="it">
<head>
    <title>TecWeb: Form Inserimento personaggio</title>
    <link rel="shortcut icon" href="https://elearning.unipd.it/math/theme/image.php/dlunipd31/theme/1573817708/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, TecWeb: Form Inserimento personaggio" />
<link rel="stylesheet" type="text/css" href="https://elearning.unipd.it/math/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://elearning.unipd.it/math/theme/styles.php/dlunipd31/1573817708_1/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/elearning.unipd.it\/math","sesskey":"K4oRZ6U7QZ","themerev":"1573817708","slasharguments":1,"theme":"dlunipd31","iconsystemmodule":"core\/icon_system_standard","jsrev":"1573817708","admin":"admin","svgicons":true,"usertimezone":"Europa\/Roma","contextid":57279};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/elearning.unipd.it\/math\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/elearning.unipd.it\/math\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/elearning.unipd.it\/math\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/elearning.unipd.it\/math\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/elearning.unipd.it\/math\/theme\/yui_combo.php?m\/1573817708\/","combine":true,"comboBase":"https:\/\/elearning.unipd.it\/math\/theme\/yui_combo.php?","ext":false,"root":"m\/1573817708\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_dialogue-autocomplete":{"requires":["base","node","json-parse","autocomplete","autocomplete-filters","autocomplete-highlighters","event","event-key"]},"moodle-mod_dialogue-userpreference":{"requires":["base","node","json-parse","userpreference","userpreference-filters","userpreference-highlighters","event","event-key"]},"moodle-mod_dialogue-clickredirector":{"requires":["base","node","json-parse","clickredirector","clickredirector-filters","clickredirector-highlighters","event","event-key"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_kalturamedia-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_wordimport-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-local_kaltura-lticontainer":{"requires":["base","node"]},"moodle-local_kaltura-ltiservice":{"requires":["base","node","node-event-simulate"]},"moodle-local_kaltura-ltitinymcepanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-ltipanel":{"requires":["base","node","panel","node-event-simulate"]}}},"gallery":{"name":"gallery","base":"https:\/\/elearning.unipd.it\/math\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/elearning.unipd.it\/math\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1573817708\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/elearning.unipd.it\/math\/lib\/javascript.php\/1573817708\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/elearning.unipd.it\/math\/lib\/javascript.php\/1573817708\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56490268-40"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-56490268-40');
</script>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    @font-face {
    font-family: 'Raleway Medium';
    font-weight: normal;
    font-style: normal;
    src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Medium.ttf');
    src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Medium.eot') format('embedded-opentype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Medium.woff') format('woff'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Medium.ttf') format('truetype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Medium.svg') format('svg');
}
   @font-face {
    font-family: 'Raleway Regular';
    font-weight: normal;
    font-style: normal;
    src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Regular.ttf');
    src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/font/Raleway-Regular.eot') format('embedded-opentype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Regular.woff') format('woff'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Regular.ttf') format('truetype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-Regular.svg') format('svg');
    }
    @font-face {
    font-family: 'Raleway ExtraLight';
    font-weight: normal;
    font-style: normal;
    src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-ExtraLight.ttf');
      src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-ExtraLight.eot') format('embedded-opentype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-ExtraLight.woff') format('woff'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-ExtraLight.ttf') format('truetype'), 
      			url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Raleway-ExtraLight.svg') format('svg');
   }
 @font-face {
     font-family:'Cuprum';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum.svg#Cuprum') format('svg');
     font-weight: 400;
     font-style: normal;
     font-stretch: normal;
     unicode-range: U+0020-2122;
 }
 
 @font-face {
     font-family:'Cuprum';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold.svg#Cuprum Bold') format('svg');
     font-weight: 700;
     font-style: normal;
     font-stretch: normal;
     unicode-range: U+0020-2122;
 }
 
 @font-face {
     font-family:'Cuprum';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold Italic.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold Italic.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold Italic.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold Italic.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Bold Italic.svg#Cuprum Bold Italic') format('svg');
     font-weight: 700;
     font-style: italic;
     font-stretch: normal;
     unicode-range: U+0020-2122;
 }
 
 @font-face {
     font-family:'Cuprum';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Italic.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Italic.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Italic.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Italic.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Cuprum Italic.svg#Cuprum Italic') format('svg');
     font-weight: 400;
     font-style: italic;
     font-stretch: normal;
     unicode-range: U+0020-2122;
 }
 @font-face {
     font-family:'Open Sans';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold.svg#Open Sans Bold') format('svg');
     font-weight: 700;
     font-style: normal;
     font-stretch: normal;
     unicode-range: U+0020-FFFD;
 }
 
 @font-face {
     font-family:'Open Sans';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold Italic.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold Italic.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold Italic.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold Italic.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Bold Italic.svg#Open Sans Bold Italic') format('svg');
     font-weight: 700;
     font-style: italic;
     font-stretch: normal;
     unicode-range: U+0020-FFFD;
 }
 
 @font-face {
     font-family:'Open Sans';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Italic.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Italic.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Italic.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Italic.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans Italic.svg#Open Sans Italic') format('svg');
     font-weight: 400;
     font-style: italic;
     font-stretch: normal;
     unicode-range: U+0020-FFFD;
 }
 
 @font-face {
     font-family:'Open Sans';
     src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans.eot');
 	src: url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans.eot?#iefix') format('embedded-opentype'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans.woff2') format('woff2'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans.woff') format('woff'),
 		url('https://elearning.unipd.it/dlm/mytheme/dlunipd31/fonts/Open Sans.svg#Open Sans') format('svg');
     font-weight: 400;
     font-style: normal;
     font-stretch: normal;
     unicode-range: U+0020-FFFD;
 }    </style>
    </head>

<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource gecko dir-ltr lang-it yui-skin-sam yui3-skin-sam elearning-unipd-it--math pagelayout-incourse course-420 context-57279 cmid-16706 category-18 has-region-side-pre used-region-side-pre has-region-side-post empty-region-side-post side-pre-only">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Vai al contenuto principale</a>
</div><script type="text/javascript" src="https://elearning.unipd.it/math/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://elearning.unipd.it/math/lib/javascript.php/1573817708/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>

<div id="page" class="text">
<header role="banner" class="navbar navbar-default moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav"><li><a title="UNIPD" href="http://www.unipd.it">UNIPD</a></li><li><a title="E-LEARNING UNIPD" href="https://elearning.unipd.it/">E-LEARNING UNIPD</a></li><li><a title="DIPARTIMENTO" href="http://www.math.unipd.it">DIPARTIMENTO</a></li><li><a title="MOODLE.ORG" href="http://moodle.org/support">MOODLE.ORG</a></li><li><a title="CORSI DI LAUREA" href="http://www.math.unipd.it/it/corsi/">CORSI DI LAUREA</a></li><li class="dropdown langmenu"><a href="" class="dropdown-toggle" data-toggle="dropdown" title="Lingua">Italiano ‎(it)‎<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="English ‎(en)‎" href="https://elearning.unipd.it/math/mod/resource/view.php?id=16706&amp;lang=en">English ‎(en)‎</a></li><li><a title="Italiano ‎(it)‎" href="https://elearning.unipd.it/math/mod/resource/view.php?id=16706&amp;lang=it">Italiano ‎(it)‎</a></li></ul></ul>                <ul class="nav pull-right">
                    <li></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="clearfix"></div>

<div class="row-fluid" id="top-header">
<div class="top container-fluid">
	<div class="span3 datetime"><img src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/theme/1573817708/calendar" alt="calendar" title="calendar" class="img-responsive" />  <span id="date_time"></span>
	</div>
	<div class="span9 contacts">
	  
    
   </div>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
 <div class="clearfix"></div>
    
    <a class="logo pull-left" href="https://elearning.unipd.it/math"><img src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/theme/1573817708//logo"/> </a>
    
      <div class="page-hdng"><a class="brand" href="https://elearning.unipd.it/math">MoodleMath</a></div>
      <div class="usermenu"><div class="moodle-actionmenu nowrap-items" id="action-menu-0" data-enhance="moodle-core-actionmenu">

        <ul class="menubar" id="action-menu-0-menubar" role="menubar">

            <!--

            --><!--

            --><li role="presentation"><a href="#" class=" toggle-display textmenu" id="action-menu-toggle-0" title="Menu utente" role="menuitem"><span class="userbutton"><span class="usertext mr-1">MARCEL JUNIOR WANDJI</span><span class="avatars"><span class="avatar current"><img src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/u/f2" class="userpicture defaultuserpic" width="35" height="35" role="presentation" aria-hidden="true" /></span></span></span><b class="caret"></b></a>
</li>

        </ul>


        <ul class="menu  align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
            <li role="presentation">    <a href="https://elearning.unipd.it/math/my/" class="icon menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/dashboard" /><span class="menu-action-text" id="actionmenuaction-1">Dashboard</span></a>





</li><li role="presentation">
<span class="filler">&nbsp;</span>



</li><li role="presentation">    <a href="https://elearning.unipd.it/math/user/profile.php?id=14985" class="icon menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/user" /><span class="menu-action-text" id="actionmenuaction-2">Profilo</span></a>





</li><li role="presentation">    <a href="https://elearning.unipd.it/math/grade/report/overview/index.php" class="icon menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/t/grades" /><span class="menu-action-text" id="actionmenuaction-3">Valutazioni</span></a>





</li><li role="presentation">    <a href="https://elearning.unipd.it/math/message/index.php" class="icon menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/t/message" /><span class="menu-action-text" id="actionmenuaction-4">Messaggi</span></a>





</li><li role="presentation">    <a href="https://elearning.unipd.it/math/user/preferences.php" class="icon menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/t/preferences" /><span class="menu-action-text" id="actionmenuaction-5">Preferenze</span></a>





</li><li role="presentation">
<span class="filler">&nbsp;</span>



</li><li role="presentation">    <a href="https://elearning.unipd.it/math/login/logout.php?sesskey=K4oRZ6U7QZ" class="icon menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6"><img class="icon " alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/a/logout" /><span class="menu-action-text" id="actionmenuaction-6">Esci</span></a>





</li>
        </ul>
</div></div>
      <div class="clearfix"></div>
    
    </div>
</div>
        <div id="nav-cont">
    <div class="container-fluid">
    <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><span class="accesshide" id="navbar-label">Percorso della pagina</span><nav aria-labelledby="navbar-label"><ul class="breadcrumb"><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://elearning.unipd.it/math/"><span itemprop="title">Home</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">I miei corsi</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="Tecnologie Web a.a. 2019/2020" href="https://elearning.unipd.it/math/course/view.php?id=420"><span itemprop="title">TecWeb</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">PHP</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" title="File" aria-current="page" href="https://elearning.unipd.it/math/mod/resource/view.php?id=16706"><span itemprop="title">Form Inserimento personaggio</span></a></span></li></ul></nav></nav>
            <div class="breadcrumb-button"></div>
        </div>
        </div>
    </div>
  <div class="clearfix"></div>
    <div class="container-fluid">
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                                      <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><h2>Form Inserimento personaggio</h2><div class="resourcecontent resourcegeneral">
  <iframe id="resourceobject" src="https://elearning.unipd.it/math/pluginfile.php/57279/mod_resource/content/1/formPersonaggio.html?embed=1">
    Per visualizzare il file, fai click su questo link: <a href="https://elearning.unipd.it/math/pluginfile.php/57279/mod_resource/content/1/formPersonaggio.html" >formPersonaggio.html</a>
  </iframe>
</div></div>                </section>
                <aside id="block-region-side-pre" class="span4 desktop-first-column block-region" data-blockregion="side-pre" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Salta Navigazione</a><div id="inst646" class="block_navigation block" role="navigation" data-block="navigation" data-instanceid="646" aria-labelledby="instance-646-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-646-header">Navigazione</h2></div></div><div class="content"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch" aria-labelledby="label_1_1"><p class="tree_item branch navigation_node" role="treeitem" aria-expanded="true" aria-owns="random5df9f3bb2935f2_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://elearning.unipd.it/math/">Home</a></p><ul id="random5df9f3bb2935f2_group" role="group"><li class="type_setting depth_2 item_with_icon" aria-labelledby="label_2_2"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://elearning.unipd.it/math/my/"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/dashboard" /><span class="item-content-wrap">Dashboard</span></a></p></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_4"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random5df9f3bb2935f4_group"><span tabindex="-1" id="label_2_4">I miei corsi</span></p><ul id="random5df9f3bb2935f4_group" role="group"><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_5"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5df9f3bb2935f5_group"><a tabindex="-1" id="label_3_5" title="Tecnologie Web a.a. 2019/2020" href="https://elearning.unipd.it/math/course/view.php?id=420">TecWeb</a></p><ul id="random5df9f3bb2935f5_group" role="group"><li class="type_container depth_4 contains_branch" aria-labelledby="label_4_6"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5df9f3bb2935f6_group"><a tabindex="-1" id="label_4_6" href="https://elearning.unipd.it/math/user/index.php?id=420">Partecipanti</a></p><ul id="random5df9f3bb2935f6_group" role="group" aria-hidden="true"><li class="type_user depth_5 item_with_icon" aria-labelledby="label_5_7"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_5_7" href="https://elearning.unipd.it/math/user/view.php?id=14985&amp;course=420"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/navigationitem" /><span class="item-content-wrap">MARCEL JUNIOR WANDJI</span></a></p></li></ul></li><li class="type_setting depth_4 item_with_icon" aria-labelledby="label_4_8"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_8" href="https://elearning.unipd.it/math/badges/view.php?type=2&amp;id=420"><img class="icon navicon" alt="Badge" title="Badge" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/badge" /><span class="item-content-wrap">Badge</span></a></p></li><li class="type_setting depth_4 item_with_icon" aria-labelledby="label_4_9"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_9" href="https://elearning.unipd.it/math/grade/report/index.php?id=420"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/grades" /><span class="item-content-wrap">Valutazioni</span></a></p></li><li class="type_structure depth_4 contains_branch" aria-labelledby="label_4_17"><p class="tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random5df9f3bb2935f10_group"><span tabindex="-1" id="label_4_17">PHP</span></p><ul id="random5df9f3bb2935f10_group" role="group"><li class="type_activity depth_5 item_with_icon current_branch" aria-labelledby="label_5_20"><p class="tree_item hasicon active_tree_node" role="treeitem"><a tabindex="-1" id="label_5_20" title="File" href="https://elearning.unipd.it/math/mod/resource/view.php?id=16706"><img class="icon navicon" alt="File" title="File" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/f/html-24" /><span class="item-content-wrap">Form Inserimento personaggio</span></a></p></li></ul></li><li class="type_system depth_4 item_with_icon" aria-labelledby="label_4_23"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_4_23" href="https://elearning.unipd.it/math/local/kalturamediagallery/index.php?courseid=420"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/navigationitem" /><span class="item-content-wrap">Kaltura Media Gallery</span></a></p></li></ul></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_24"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_393"><a tabindex="-1" id="label_3_24" title="Tecnologie open-source a.a. 2019/2020" href="https://elearning.unipd.it/math/course/view.php?id=393"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">TOS</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_25"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_364"><a tabindex="-1" id="label_3_25" title="Automi e Linguaggi Formali a.a. 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=364"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Bresolin_AutLingForm</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_26"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_357"><a tabindex="-1" id="label_3_26" title="Algoritmi e Strutture Dati - a.a. 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=357"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Baldan_Alg e Strutt Dati</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_27"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_354"><a tabindex="-1" id="label_3_27" title="Probabilità e statistica - aa 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=354"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Collet_Fontana_Prob&amp;Stat</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_28"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_347"><a tabindex="-1" id="label_3_28" title="Calcolo numerico - a.a. 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=347"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Redivo Zaglia_Calc_Num_1819</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_29"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_337"><a tabindex="-1" id="label_3_29" title="Programmazione ad oggetti - a.a. 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=337"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Ranzato_Prog.oggetti</span></a></p></li><li class="type_course depth_3 item_with_icon" aria-labelledby="label_3_30"><p class="tree_item hasicon" role="treeitem" id="expandable_branch_20_327"><a tabindex="-1" id="label_3_30" title="Basi di dati -  a.a. 2018/2019" href="https://elearning.unipd.it/math/course/view.php?id=327"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/course" /><span class="item-content-wrap">Conti_BasiDati</span></a></p></li></ul></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-2" href="#sb-2">Salta Amministrazione</a><div id="inst647" class="block_settings block" role="navigation" data-block="settings" data-instanceid="647" aria-labelledby="instance-647-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-647-header">Amministrazione</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/site_admin_loader"><li class="type_course depth_1 contains_branch" tabindex="-1" aria-labelledby="label_1_1"><p class="tree_item root_node tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random5df9f3bb2935f13_group"><span tabindex="0">Amministrazione del corso</span></p><ul id="random5df9f3bb2935f13_group" role="group" aria-hidden="true"><li class="type_setting depth_2 item_with_icon" tabindex="-1" aria-labelledby="label_2_1"><p class="tree_item hasicon tree_item leaf" role="treeitem"><a href="https://elearning.unipd.it/math/enrol/self/unenrolself.php?enrolid=1343"><img class="icon navicon" alt="" aria-hidden="true" src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/core/1573817708/i/user" />Disiscrivimi da TecWeb</a></p></li></ul></li></ul></div></div></div><span class="skip-block-to" id="sb-2"></span></aside>            </div>
        </div>
        <aside id="block-region-side-post" class="span3 pull-right block-region" data-blockregion="side-post" data-droptarget="1"></aside>    </div>

    </div>
    <div class="clearfix"></div>
    
   <div class="row-fluid" id="top_footer">
<div class="container-fluid">
	<div class="span2">
	  
	<img src="https://elearning.unipd.it/math/theme/image.php/dlunipd31/theme/1573817708/logo_footer" alt="logo" title="logo" />
		</div>
	<div class="span6" id="social-media">
	                

 
  
	</div>
	
</div>
</div>

    <footer id="page-footer">
    <div class="container-fluid">
        
   <p class="copywrite"> <p class="copy">   &copy; 2019 Universit&agrave degli Studi di Padova - Servizio Digital learning e multimedia &#0153</p></p>
            <div id="course-footer"></div>
        <p class="helplink"></p>
        <div class="logininfo">Sei collegato come <a href="https://elearning.unipd.it/math/user/profile.php?id=14985" title="Visualizza">MARCEL JUNIOR WANDJI</a>. (<a href="https://elearning.unipd.it/math/login/logout.php?sesskey=K4oRZ6U7QZ">Esci</a>)</div><div class="tool_dataprivacy"><a href="https://elearning.unipd.it/math/admin/tool/dataprivacy/summary.php">Riepilogo della conservazione dei dati</a></div><a href="https://download.moodle.org/mobile?version=2018051706.01&amp;lang=it&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Ottieni l'app mobile</a>        </div>
    </footer>


    <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://elearning.unipd.it/math/lib/requirejs.php/1573817708/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://elearning.unipd.it/math/lib/javascript.php/1573817708/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://elearning.unipd.it/math/lib/javascript.php/1573817708/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://elearning.unipd.it/math/lib/javascript.php/1573817708/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://elearning.unipd.it/math/lib/javascript.php/1573817708/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://elearning.unipd.it/math/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("it",{
 "Play": "Play",
 "Pause": "Pausa",
 "Current Time": "Orario attuale",
 "Duration Time": "Durata",
 "Remaining Time": "Tempo rimanente",
 "Stream Type": "Tipo del Streaming",
 "LIVE": "LIVE",
 "Loaded": "Caricato",
 "Progress": "Stato",
 "Fullscreen": "Schermo intero",
 "Non-Fullscreen": "Chiudi schermo intero",
 "Mute": "Muto",
 "Unmute": "Audio",
 "Playback Rate": "Tasso di riproduzione",
 "Subtitles": "Sottotitoli",
 "subtitles off": "Senza sottotitoli",
 "Captions": "Sottotitoli non udenti",
 "captions off": "Senza sottotitoli non udenti",
 "Chapters": "Capitolo",
 "You aborted the media playback": "La riproduzione del filmato è stata interrotta.",
 "A network error caused the media download to fail part-way.": "Il download del filmato è stato interrotto a causa di un problema rete.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Il filmato non può essere caricato a causa di un errore nel server o nella rete o perché il formato non viene supportato.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La riproduzione del filmato è stata interrotta a causa di un file danneggiato o per l’utilizzo di impostazioni non supportate dal browser.",
 "No compatible source was found for this media.": "Non ci sono fonti compatibili per questo filmato."
});

    });
});;
require(["block_navigation/navblock"], function(amd) { amd.init("646"); });;
require(["block_settings/settingsblock"], function(amd) { amd.init("647", null); });;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

require(['jquery'], function($) {
    $('#single_select5df9f3bb2935f17').change(function() {
        var ignore = $(this).find(':selected').attr('data-ignore');
        if (typeof ignore === typeof undefined) {
            $('#single_select_f5df9f3bb2935f16').submit();
        }
    });
});
;

require(['core/yui'], function(Y) {
    Y.use('moodle-core-actionmenu', function() {
        M.core.actionmenu.init();
    });
});
;
require(["core/notification"], function(amd) { amd.init(57279, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript" src="https://elearning.unipd.it/math/theme/javascript.php/dlunipd31/1573817708/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Ultime modifiche","name":"Nome","error":"Errore","info":"Informazioni","yes":"S\u00ec","no":"No","ok":"OK","viewallcourses":"Visualizza tutti i corsi","cancel":"Annulla","morehelp":"Aiuto ulteriore","loadinghelp":"Caricamento in corso...","confirm":"Conferma","areyousure":"Sei sicuro?","closebuttontitle":"Chiudi","unknownerror":"Errore sconosciuto"},"repository":{"type":"Tipo","size":"Dimensione","invalidjson":"Stringa JSON non valida","nofilesattached":"Non sono presenti file allegati","filepicker":"File picker","logout":"Logout","nofilesavailable":"Non sono presenti file","norepositoriesavailable":"Spiacente, nessuno dei repostory disponibili pu\u00f2 restituire file nel formato richiesto.","fileexistsdialogheader":"Il file esiste gi\u00e0","fileexistsdialog_editor":"Un file con lo stesso nome \u00e8 gi\u00e0 stato allegato al testo che stai modificando.","fileexistsdialog_filemanager":"Un file con lo stesso nome \u00e8 gi\u00e0 stato allegato","renameto":"Rinomina in \"{$a}\"","referencesexist":"Sono presenti {$a} alias\/scorciatoie collegate a questo file","select":"Scegli"},"admin":{"confirmdeletecomments":"Stai per eliminare commenti, sei sicuro ?","confirmation":"Conferma"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() { M.util.js_pending('random5df9f3bb2935f1'); Y.on('domready', function() { M.util.init_maximised_embed(Y, "resourceobject");  M.util.js_complete('random5df9f3bb2935f1'); });
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"it"});
});
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
 M.util.js_pending('random5df9f3bb2935f26'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5df9f3bb2935f26'); });
})();
//]]>
</script>
     <a href="#" class="back-to-top"><em class="icon-chevron-up icon-white"></em></a>
</div>
</div>

 </body>
</html>
