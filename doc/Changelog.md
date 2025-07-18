Changelog: Quick Developer Toolbar for Magento2
====================================
0.3.4
* Add, indetification for unauthorized CSP js inline
* Compatibility 2.4.8 and php 8.4

0.3.3
* Fix, Cannot instantiate abstract class,

0.3.2
* Fix adminhtml renderer
* Add doc screenshots

0.3.1
* Fix the typo in the XML closing tag within the comment, thanks to [hgati](https://github.com/vpietri/magento2-developer-quickdevbar/pull/86)

0.3.0
* Compatibility Magento 2.4.7 with strict CSP policy 
* Hyva and Breeze compatibility (vanilla JS)
* Dynamic SQL profiling with backtrace 
* Code refactoring

0.2.3
* Catch VarDumper in ajax calls
* Code refactoring

0.2.2
* Use config to handle VarDumper
* Move handler for VarDumper
* Do not catch dd()

0.2.1
* Remove hard log /tmp/debug.log

0.2.0
* Full compatibility with FPC
* Full code refactoring
* Handle Symfony VarDumper
* Command to activate SQL backtrace
* New tabs added: Preferences, Cache (PageCache) hits, Debug
* Skin chooser
* Css cleaning
* Remove module fingerprint from page is not allowed
* Open file from url to IDE


0.1.20
* Add command to enable/disable toolbar and activate sql profiler
* Remove Deprecated Warning in Translate Helper, thanks [lefte](https://github.com/vpietri/magento2-developer-quickdevbar/pull/69) and [josue-rmoya](https://github.com/vpietri/magento2-developer-quickdevbar/pull/66)
* Fix must be of type Countable, thanks @bbakalov, closes #70

0.1.19
* Fix M244 compatibility, removed legacy text from readme, thanks [asannikov](https://github.com/vpietri/magento2-developer-quickdevbar/pull/63)
* Compatibility 2.4.4, Closes #60, closes #62

0.1.18.1
* Remove version from composer

0.1.18
* Fix js error 'base is not a constructor', thanks to @asalgado0391, closes #53
* Fix call appConfig->getValue, closes #26 

0.1.17
* Fixed report from Content Security Policies module. Thanks to  [pikulsky and r-martins](https://github.com/vpietri/magento2-developer-quickdevbar/pull/47)

0.1.16
* Replace Deprecated Function. Thanks to [lefte](https://github.com/vpietri/magento2-developer-quickdevbar/pull/42)

0.1.15
* Replace Deprecated Function. Thanks to [lefte](https://github.com/vpietri/magento2-developer-quickdevbar/pull/40)
* Support for modman. Thanks to [MagePsycho](https://github.com/vpietri/magento2-developer-quickdevbar/pull/37)
* PHP < 7.0 backward compatible. Thanks to [tuyennn](https://github.com/vpietri/magento2-developer-quickdevbar/pull/33)

0.1.14
* Specify area where display toolbar. Thanks to [zzarazza] and [tuyennn]
* Small bug fix for users using a proxy with Magento 2. Thanks to [NateSwanson7](https://github.com/vpietri/magento2-developer-quickdevbar/pull/31)
* Fix jquery error dependency in Admin. Thanks to [hoangnm89](https://github.com/vpietri/magento2-developer-quickdevbar/pull/29)
* Update jquery.tablesorter.min.js. Thanks to [sebfie](https://github.com/vpietri/magento2-developer-quickdevbar/pull/27)

0.1.13
* Memorize toolbar state
* Fix on require_js
* Add translation tab. Thanks to [danslo](https://github.com/vpietri/magento2-developer-quickdevbar/pull/23)
* Check whether event observer is disabled. Thanks to [tufahu](https://github.com/vpietri/magento2-developer-quickdevbar/pull/24)


0.1.12
* Fix Wbug when profiler is disabled. Thanks to [rakibabu](https://github.com/vpietri/magento2-developer-quickdevbar/pull/16)

0.1.11
* Improve layout view with a js tree
* Add css lazy load to keep toolbar completly hidden when disabled
* Fix compatibility with Magento 2.1.3. Thanks to [Koc](https://github.com/vpietri/magento2-developer-quickdevbar/pull/15)
* Fix ajax tab load bug 

0.1.10
* Fix conflicts in backend with magento tabs widget
* Improve profiler detection

0.1.9
* Add config list tab
* Use common ajax controller

0.1.8 - 22 Jul 2016
* Add plugin list tab
* Fix bug on action hints. Thanks to [adpeate](https://github.com/vpietri/magento2-developer-quickdevbar/pull/7)

0.1.7 - 7 Jul 2016
* Configuration section improvement
* Code refactoring
* Authorize IPv6 localhost. Thanks to [Dayssam](https://github.com/vpietri/magento2-developer-quickdevbar/pull/5)

0.1.6.1 - 30 Jun 2016
* Fix compatibility bugs with Magento 2.1

0.1.6 - 17 Jun 2016
* UI improvement
* Add Block subtab
* Add icon from [iconsdb.com](http://www.iconsdb.com/)

0.1.5.2 - 22 Apr 2016
* Fit to PHP coding standards

0.1.5.1 - 25 Feb 2016
* Fix tab bug in backoffice

0.1.5 - 12 Dec 2015
* Back office toolbar
* Reorganize tabs
* Add list of collection and model instanciated
* Add [Christian Bach's tablesorter plugin](https://github.com/christianbach/tablesorter)

0.1.4 - 6 Dec 2015
* Fix bug on composer.json with registration.php
* Clean layout display

0.1.3 - 4 Dec 2015
* Compatibility with Magento 2.0.0 Publication
* Add action tab (Template hints, Translate inline, Flush Cache Storage)
* Controller structure cleaning 

0.1.2 -  29 Jun 2015
* Add sub-tab and reorganize existing tabs

0.1.1 - 19 Jun 2015
* Javascript cleaning to meet coding standards
* Add [sunnywalker/filterTable](https://github.com/sunnywalker/jQuery.FilterTable)
* Fix bugs on the log screen
* Css improvements

0.0.1 - 18 Jun 2015
*  module initialization 
