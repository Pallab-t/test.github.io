<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD'] = array
(
	// Content modules
	'content' => array
	(
		'article' => array
		(
			'tables'      => array('tl_article', 'tl_content'),
			'table'       => array('Contao\CoreBundle\Controller\BackendCsvImportController', 'importTableWizardAction'),
			'list'        => array('Contao\CoreBundle\Controller\BackendCsvImportController', 'importListWizardAction')
		),
		'form' => array
		(
			'tables'      => array('tl_form', 'tl_form_field'),
			'option'      => array('Contao\CoreBundle\Controller\BackendCsvImportController', 'importOptionWizardAction')
		)
	),

	// Design modules
	'design' => array
	(
		'themes' => array
		(
			'tables'      => array('tl_theme', 'tl_module', 'tl_style_sheet', 'tl_style', 'tl_layout', 'tl_image_size', 'tl_image_size_item'),
			'importTheme' => array('Contao\Theme', 'importTheme'),
			'exportTheme' => array('Contao\Theme', 'exportTheme'),
			'import'      => array('Contao\StyleSheets', 'importStyleSheet'),
			'export'      => array('Contao\StyleSheets', 'exportStyleSheet')
		),
		'page' => array
		(
			'tables'      => array('tl_page')
		),
		'tpl_editor' => array
		(
			'tables'      => array('tl_templates'),
			'new_tpl'     => array('tl_templates', 'addNewTemplate'),
			'compare'     => array('tl_templates', 'compareTemplate')
		)
	),

	// Account modules
	'accounts' => array
	(
		'member' => array
		(
			'tables'                  => array('tl_member')
		),
		'mgroup' => array
		(
			'tables'                  => array('tl_member_group')
		),
		'user' => array
		(
			'tables'                  => array('tl_user')
		),
		'group' => array
		(
			'tables'                  => array('tl_user_group')
		),
		'login' => array
		(
			'tables'                  => array('tl_user'),
			'hideInNavigation'        => true,
			'disablePermissionChecks' => true
		),
		'security' => array
		(
			'callback'                => 'Contao\ModuleTwoFactor',
			'hideInNavigation'        => true,
			'disablePermissionChecks' => true
		)
	),

	// System modules
	'system' => array
	(
		'files' => array
		(
			'tables'                  => array('tl_files')
		),
		'settings' => array
		(
			'tables'                  => array('tl_settings')
		),
		'maintenance' => array
		(
			'callback'                => 'Contao\ModuleMaintenance'
		),
		'log' => array
		(
			'tables'                  => array('tl_log')
		),
		'opt_in' => array
		(
			'tables'                  => array('tl_opt_in'),
			'resend'                  => array('tl_opt_in', 'resendToken'),
		),
		'undo' => array
		(
			'tables'                  => array('tl_undo'),
			'disablePermissionChecks' => true
		)
	)
);

// Front end modules
$GLOBALS['FE_MOD'] = array
(
	'navigationMenu' => array
	(
		'navigation'     => 'Contao\ModuleNavigation',
		'customnav'      => 'Contao\ModuleCustomnav',
		'breadcrumb'     => 'Contao\ModuleBreadcrumb',
		'quicknav'       => 'Contao\ModuleQuicknav',
		'quicklink'      => 'Contao\ModuleQuicklink',
		'booknav'        => 'Contao\ModuleBooknav',
		'articlenav'     => 'Contao\ModuleArticlenav',
		'sitemap'        => 'Contao\ModuleSitemap'
	),
	'user' => array
	(
		'login'          => 'Contao\ModuleLogin',
		'logout'         => 'Contao\ModuleLogout',
		'personalData'   => 'Contao\ModulePersonalData',
		'registration'   => 'Contao\ModuleRegistration',
		'changePassword' => 'Contao\ModuleChangePassword',
		'lostPassword'   => 'Contao\ModulePassword',
		'closeAccount'   => 'Contao\ModuleCloseAccount'
	),
	'application' => array
	(
		'form'           => 'Contao\Form',
		'search'         => 'Contao\ModuleSearch'
	),
	'miscellaneous' => array
	(
		'articlelist'    => 'Contao\ModuleArticleList',
		'randomImage'    => 'Contao\ModuleRandomImage',
		'html'           => 'Contao\ModuleHtml',
		'rssReader'      => 'Contao\ModuleRssReader'
	)
);

// Content elements
$GLOBALS['TL_CTE'] = array
(
	'texts' => array
	(
		'headline'        => 'Contao\ContentHeadline',
		'text'            => 'Contao\ContentText',
		'html'            => 'Contao\ContentHtml',
		'list'            => 'Contao\ContentList',
		'table'           => 'Contao\ContentTable',
		'code'            => 'Contao\ContentCode',
		'markdown'        => 'Contao\ContentMarkdown'
	),
	'accordion' => array
	(
		'accordionSingle' => 'Contao\ContentAccordion',
		'accordionStart'  => 'Contao\ContentAccordionStart',
		'accordionStop'   => 'Contao\ContentAccordionStop'
	),
	'slider' => array
	(
		'sliderStart'     => 'Contao\ContentSliderStart',
		'sliderStop'      => 'Contao\ContentSliderStop'
	),
	'links' => array
	(
		'hyperlink'       => 'Contao\ContentHyperlink',
		'toplink'         => 'Contao\ContentToplink'
	),
	'media' => array
	(
		'image'           => 'Contao\ContentImage',
		'gallery'         => 'Contao\ContentGallery',
		'player'          => 'Contao\ContentMedia',
		'youtube'         => 'Contao\ContentYouTube',
		'vimeo'           => 'Contao\ContentVimeo'
	),
	'files' => array
	(
		'download'        => 'Contao\ContentDownload',
		'downloads'       => 'Contao\ContentDownloads'
	),
	'includes' => array
	(
		'article'         => 'Contao\ContentArticle',
		'alias'           => 'Contao\ContentAlias',
		'form'            => 'Contao\Form',
		'module'          => 'Contao\ContentModule',
		'teaser'          => 'Contao\ContentTeaser'
	)
);

// Back end form fields
$GLOBALS['BE_FFL'] = array
(
	'text'           => 'Contao\TextField',
	'password'       => 'Contao\Password',
	'textStore'      => 'Contao\TextStore',
	'textarea'       => 'Contao\TextArea',
	'select'         => 'Contao\SelectMenu',
	'checkbox'       => 'Contao\CheckBox',
	'checkboxWizard' => 'Contao\CheckBoxWizard',
	'radio'          => 'Contao\RadioButton',
	'radioTable'     => 'Contao\RadioTable',
	'inputUnit'      => 'Contao\InputUnit',
	'trbl'           => 'Contao\TrblField',
	'chmod'          => 'Contao\ChmodTable',
	'picker'         => 'Contao\Picker',
	'pageTree'       => 'Contao\PageTree',
	'pageSelector'   => 'Contao\PageSelector',
	'fileTree'       => 'Contao\FileTree',
	'fileSelector'   => 'Contao\FileSelector',
	'fileUpload'     => 'Contao\Upload',
	'tableWizard'    => 'Contao\TableWizard',
	'listWizard'     => 'Contao\ListWizard',
	'optionWizard'   => 'Contao\OptionWizard',
	'moduleWizard'   => 'Contao\ModuleWizard',
	'keyValueWizard' => 'Contao\KeyValueWizard',
	'imageSize'      => 'Contao\ImageSize',
	'timePeriod'     => 'Contao\TimePeriod',
	'metaWizard'     => 'Contao\MetaWizard',
	'sectionWizard'  => 'Contao\SectionWizard',
	'serpPreview'    => 'Contao\SerpPreview'
);

// Front end form fields
$GLOBALS['TL_FFL'] = array
(
	'explanation'   => 'Contao\FormExplanation',
	'html'          => 'Contao\FormHtml',
	'fieldsetStart' => 'Contao\FormFieldsetStart',
	'fieldsetStop'  => 'Contao\FormFieldsetStop',
	'text'          => 'Contao\FormTextField',
	'password'      => 'Contao\FormPassword',
	'textarea'      => 'Contao\FormTextArea',
	'select'        => 'Contao\FormSelectMenu',
	'radio'         => 'Contao\FormRadioButton',
	'checkbox'      => 'Contao\FormCheckBox',
	'upload'        => 'Contao\FormFileUpload',
	'range'         => 'Contao\FormRange',
	'hidden'        => 'Contao\FormHidden',
	'captcha'       => 'Contao\FormCaptcha',
	'submit'        => 'Contao\FormSubmit',
);

// Page types
$GLOBALS['TL_PTY'] = array
(
	'regular'   => 'Contao\PageRegular',
	'forward'   => 'Contao\PageForward',
	'redirect'  => 'Contao\PageRedirect',
	'root'      => 'Contao\PageRoot',
	'logout'    => 'Contao\PageLogout',
	'error_401' => 'Contao\PageError401',
	'error_403' => 'Contao\PageError403',
	'error_404' => 'Contao\PageError404'
);

// Maintenance
$GLOBALS['TL_MAINTENANCE'] = array
(
	'Contao\Maintenance',
	'Contao\Crawl',
	'Contao\PurgeData'
);

// Purge jobs
$GLOBALS['TL_PURGE'] = array
(
	'tables' => array
	(
		'index' => array
		(
			'callback' => array('Contao\Automator', 'purgeSearchTables'),
			'affected' => array('tl_search', 'tl_search_index')
		),
		'undo' => array
		(
			'callback' => array('Contao\Automator', 'purgeUndoTable'),
			'affected' => array('tl_undo')
		),
		'versions' => array
		(
			'callback' => array('Contao\Automator', 'purgeVersionTable'),
			'affected' => array('tl_version')
		),
		'log' => array
		(
			'callback' => array('Contao\Automator', 'purgeSystemLog'),
			'affected' => array('tl_log')
		),
		'crawl_queue' => array
		(
			'callback' => array('Contao\Automator', 'purgeCrawlQueue'),
			'affected' => array('tl_crawl_queue')
		)
	),
	'folders' => array
	(
		'images' => array
		(
			'callback' => array('Contao\Automator', 'purgeImageCache'),
			'affected' => array(Contao\StringUtil::stripRootDir(Contao\System::getContainer()->getParameter('contao.image.target_dir')))
		),
		'scripts' => array
		(
			'callback' => array('Contao\Automator', 'purgeScriptCache'),
			'affected' => array('assets/js', 'assets/css')
		),
		'search' => array
		(
			'callback' => array('Contao\Automator', 'purgeSearchCache'),
			'affected' => array('%s/contao/search')
		),
		'temp' => array
		(
			'callback' => array('Contao\Automator', 'purgeTempFolder'),
			'affected' => array('system/tmp')
		)
	),
	'custom' => array
	(
		'pages' => array
		(
			'callback' => array('Contao\Automator', 'purgePageCache'),
		),
		'xml' => array
		(
			'callback' => array('Contao\Automator', 'generateXmlFiles')
		),
		'symlinks' => array
		(
			'callback' => array('Contao\Automator', 'generateSymlinks')
		)
	)
);

// Image crop modes
$GLOBALS['TL_CROP'] = array
(
	'image_sizes' => array
	(
		// will be added dynamically
	),
	'relative' => array
	(
		'proportional', 'box'
	),
	'exact' => array
	(
		'crop',
		'left_top',    'center_top',    'right_top',
		'left_center', 'center_center', 'right_center',
		'left_bottom', 'center_bottom', 'right_bottom'
	)
);

// Cron jobs
$GLOBALS['TL_CRON'] = array
(
	'monthly' => array(),
	'weekly' => array(),
	'daily' => array
	(
		'purgeTempFolder' => array('Contao\Automator', 'purgeTempFolder'),
		'purgeSearchCache' => array('Contao\Automator', 'purgeSearchCache'),
		'generateSitemap' => array('Contao\Automator', 'generateSitemap'),
		'purgeRegistrations' => array('Contao\Automator', 'purgeRegistrations'),
		'purgeOptInTokens' => array('Contao\Automator', 'purgeOptInTokens')
	),
	'hourly' => array(),
	'minutely' => array()
);

// Hooks
$GLOBALS['TL_HOOKS'] = array
(
	'getSystemMessages' => array
	(
		array('Contao\Messages', 'maintenanceCheck'),
		array('Contao\Messages', 'languageFallback')
	)
);

// Register the auto_item keywords
$GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');

// Do not index a page if one of the following parameters is set
$GLOBALS['TL_NOINDEX_KEYS'] = array('id', 'file', 'token', 'day', 'month', 'year', 'page', 'page_.*', 'keywords', 'PHPSESSID');

// Register the supported CSS units
$GLOBALS['TL_CSS_UNITS'] = array('px', '%', 'em', 'rem', 'vw', 'vh', 'vmin', 'vmax', 'ex', 'pt', 'pc', 'in', 'cm', 'mm');

// Wrapper elements
$GLOBALS['TL_WRAPPERS'] = array
(
	'start' => array
	(
		'accordionStart',
		'sliderStart',
		'fieldsetStart'
	),
	'stop' => array
	(
		'accordionStop',
		'sliderStop',
		'fieldsetStop'
	),
	'single' => array
	(
		'accordionSingle'
	),
	'separator' => array()
);

// Other global arrays
$GLOBALS['TL_MODELS'] = array();
$GLOBALS['TL_PERMISSIONS'] = array();
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD']['content']['calendar'] = array
(
	'tables'      => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'),
	'table'       => array('Contao\TableWizard', 'importTable'),
	'list'        => array('Contao\ListWizard', 'importList')
);

// Front end modules
$GLOBALS['FE_MOD']['events'] = array
(
	'calendar'    => 'Contao\ModuleCalendar',
	'eventreader' => 'Contao\ModuleEventReader',
	'eventlist'   => 'Contao\ModuleEventlist',
	'eventmenu'   => 'Contao\ModuleEventMenu'
);

// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateCalendarFeeds'] = array('Contao\Calendar', 'generateFeeds');

// Style sheet
if (defined('TL_MODE') && TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaocalendar/calendar.min.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Contao\Calendar', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Contao\Calendar', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('Contao\Calendar', 'generateFeeds');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add content element
$GLOBALS['TL_CTE']['includes']['comments'] = 'Contao\ContentComments';

// Front end modules
$GLOBALS['FE_MOD']['application']['comments'] = 'Contao\ModuleComments';

// Back end modules
$GLOBALS['BE_MOD']['content']['comments'] = array
(
	'tables'     => array('tl_comments'),
	'stylesheet' => 'bundles/contaocomments/comments.min.css'
);

// Cron jobs
$GLOBALS['TL_CRON']['daily']['purgeCommentSubscriptions'] = array('Contao\Comments', 'purgeSubscriptions');
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Add back end modules
$GLOBALS['BE_MOD']['content']['faq'] = array
(
	'tables' => array('tl_faq_category', 'tl_faq')
);

// Front end modules
$GLOBALS['FE_MOD']['faq'] = array
(
	'faqlist'   => 'Contao\ModuleFaqList',
	'faqreader' => 'Contao\ModuleFaqReader',
	'faqpage'   => 'Contao\ModuleFaqPage'
);

// Style sheet
if (defined('TL_MODE') && TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaofaq/faq.min.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Contao\ModuleFaq', 'getSearchablePages');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Front end module
$GLOBALS['FE_MOD']['application']['listing'] = 'Contao\ModuleListing';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD']['content']['news'] = array
(
	'tables'      => array('tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'),
	'table'       => array('Contao\TableWizard', 'importTable'),
	'list'        => array('Contao\ListWizard', 'importList')
);

// Front end modules
$GLOBALS['FE_MOD']['news'] = array
(
	'newslist'    => 'Contao\ModuleNewsList',
	'newsreader'  => 'Contao\ModuleNewsReader',
	'newsarchive' => 'Contao\ModuleNewsArchive',
	'newsmenu'    => 'Contao\ModuleNewsMenu'
);

// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateNewsFeeds'] = array('Contao\News', 'generateFeeds');

// Style sheet
if (defined('TL_MODE') && TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/contaonews/news.min.css|static';
}

// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array('Contao\News', 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Contao\News', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array('Contao\News', 'generateFeeds');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD']['content']['newsletter'] = array
(
	'tables'     => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'),
	'send'       => array('Contao\Newsletter', 'send'),
	'import'     => array('Contao\Newsletter', 'importRecipients'),
	'stylesheet' => 'bundles/contaonewsletter/newsletter.min.css'
);

// Front end modules
$GLOBALS['FE_MOD']['newsletter'] = array
(
	'subscribe'        => 'Contao\ModuleSubscribe',
	'unsubscribe'      => 'Contao\ModuleUnsubscribe',
	'newsletterlist'   => 'Contao\ModuleNewsletterList',
	'newsletterreader' => 'Contao\ModuleNewsletterReader'
);

// Register hooks
$GLOBALS['TL_HOOKS']['createNewUser'][] = array('Contao\Newsletter', 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array('Contao\Newsletter', 'activateAccount');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('Contao\Newsletter', 'getSearchablePages');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array('Contao\Newsletter', 'removeSubscriptions');

// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';

// Cron jobs
$GLOBALS['TL_CRON']['daily']['purgeNewsletterSubscriptions'] = array('Contao\Newsletter', 'purgeSubscriptions');
}

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Back end modules
$GLOBALS['BE_MOD']['accounts']['debug'] = array
(
	'enable'                  => array('Contao\ManagerBundle\Controller\DebugController', 'enableAction'),
	'disable'                 => array('Contao\ManagerBundle\Controller\DebugController', 'disableAction'),
	'hideInNavigation'        => true,
	'disablePermissionChecks' => true
);
}
