Scars of Service
==============

The SCTimes "Scars of Service" project was a year-long project that followed the lives of veterans around the area. Project will be expanded upon in the near future as the Times continues covering stories and challenges faced by veterans.

Live version viewable here: http://www.sctimes.com/scarsofservice

Project code
==============

Project is primarily running on Foundation. Parallax was done with Skrollr.js, dynamic loading was achieved with a slightly tweaked dynamicpage.js. Grid code came from Codrops.

Chart was generated with Highcharts, while the map of the building boom is a simple slider using Gannett/USAT's Notchbuilder tool.

Ad piece was fixed onto the page with stickyfooter.js.

To-do
==============

* Cleanup and optimize code - heavy load on the page, CSS could do with additional cleaning
* Templating pages more
* Tweaking styling - a great deal of Foundation's basic stylings still remain
* Adapting project over to rdpapp

Contributors
==============
* Reporting - Kirsti Marohn (@kirstimarohn)
* Reporting - Dave Unze (@sctimesunze)
* Graphics and visual elements - Lisa Mueller (@NewsroomPicasso)
* Online elements - Andrew Fraser (@andrewfraser)
* Online elements - Jun-Kai Teoh (@jkteoh)
* Photography - Kimm Anderson (@KimmAnderson)
* Videography - David Brakke (@DBrakke_SCT)
* Digital lead - Mike Knaak (@mknaak)
* Project lead - Lisa Schwarz (@LisaSSchwarz)

DynamicPage.js changes
==============

Check the Prep Football '14 project's readme for a more up-to-date tweak log. This was a pretty crucial piece of the project, but it does break the dropdown modal by foundation.

Issues
==============

* The dropdown modal by Foundation is broken as dynamicpage.js does not re-fire it correctly. 
* Skrollr does not work properly on iOS. iOS emulation works fine, Android works fine. Using some workarounds to show mobile-specific elements instead.