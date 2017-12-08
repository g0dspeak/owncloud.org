<div class="page-header">
	<h1>ownCloud Server Changelog</h1>
</div>
<p>We recommend you follow our <a href="/release-channels">Release Channels</a> to always have the latest ownCloud Server version which fits your needs.</p>
Go directly to the latest maintenance release of:
<ul>
<li><a href="#latest10.0">ownCloud 10.0</a></li>
<li><a href="#latest9.1">ownCloud 9.1</a></li>
<li><a href="#latest9.0">ownCloud 9.0 (unsupported!)</a></li>
<li><a href="#latest8.2">ownCloud 8.2 (unsupported!)</a></li>
<li><a href="#latest8.1">ownCloud 8.1 (unsupported!)</a></li>
<li><a href="#latest8.0">ownCloud 8.0 (unsupported!)</a></li>
<li><a href="#latest7">ownCloud 7 (unsupported!)</a></li>
<li><a href="#latest6">ownCloud 6 (unsupported!)</a></li>
</ul>


<a name="latest10.0"></a></li>
<h3>Version 10.0.4 <small>Dec 6 2017</small></h3>
   <h3>Added</h3>
   <ul>
      <li>Added support for eml mimetype - <a  href="https://github.com/owncloud/core/issues/29204">#29204</a></li>
      <li>Added "occ dav:cleanup-chunks" command to clean up expired uploads - <a  href="https://github.com/owncloud/core/issues/29180">#29180</a></li>
      <li>Added "occ files:scan" repair mode to repair mismatch filecache paths - <a  href="https://github.com/owncloud/core/issues/29074">#29074</a> <a  href="https://github.com/owncloud/core/issues/29232">#29232</a></li>
      <li>Added occ command to change/recreate master-key - <a  href="https://github.com/owncloud/core/issues/29260">#29260</a> <a  href="https://github.com/owncloud/core/issues/29735">#29735</a></li>
      <li>Detailed mode for "occ security:routes" - <a  href="https://github.com/owncloud/core/issues/29095">#29095</a></li>
      <li>Webdav property to retrieve a private link to files or folders - <a  href="https://github.com/owncloud/core/issues/29041">#29041</a></li>
      <li>CORS support for public API routes - <a  href="https://github.com/owncloud/core/issues/28852">#28852</a> <a  href="https://github.com/owncloud/core/issues/29741">#29741</a> <a  href="https://github.com/owncloud/core/issues/29749">#29749</a></li>
      <li>More "files_sharing" capabilities entries - <a  href="https://github.com/owncloud/core/issues/29040">#29040</a></li>
      <li>Display server name in admin page, don't show in status.php - <a  href="https://github.com/owncloud/core/issues/28938">#28938</a></li>
      <li>Validate public link mail on the client side - <a  href="https://github.com/owncloud/core/issues/29042">#29042</a></li>
      <li>Expose XHR response in share dialog autocomplete callback for extensions - <a  href="https://github.com/owncloud/core/issues/29231">#29231</a></li>
      <li>Let apps provide icons for settings sections - <a  href="https://github.com/owncloud/core/issues/29358">#29358</a></li>
      <li>Added cancellable prehooks for logout operation - <a  href="https://github.com/owncloud/core/issues/29352">#29352</a></li>
      <li>Markdown support for app descriptions in apps settings panel - <a  href="https://github.com/owncloud/core/issues/29333">#29333</a></li>
      <li>Add option to allow user to share only with the groups they belong to - <a  href="https://github.com/owncloud/core/issues/29391">#29391</a></li>
      <li>Cacheable storage adapter for use by Flysystem based external storage backends - <a  href="https://github.com/owncloud/core/issues/29414">#29414</a></li>
      <li>Add user additional info field for share autocomplete - <a  href="https://github.com/owncloud/core/issues/29457">#29457</a></li>
      <li>Add dispatcher event for remote fed shares - <a  href="https://github.com/owncloud/core/issues/29482">#29482</a></li>
      <li>Adding mode of operations - either single-instance or clus… - <a  href="https://github.com/owncloud/core/issues/29492">#29492</a></li>
      <li>Added support for MariaDB 10.2.7+ - <a  href="https://github.com/owncloud/core/issues/29240">#29240</a></li>
      <li>Admins can now exclude files from integrity check in config.php - <a  href="https://github.com/owncloud/core/issues/29460">#29460</a></li>
      <li>Use X-Request-ID header as request id if provided by client, useful for logging - <a  href="https://github.com/owncloud/core/issues/29434">#29434</a></li>
      <li>Added authentication headers verification to validate the session - <a  href="https://github.com/owncloud/core/issues/29525">#29525</a></li>
      <li>Added IServiceLoader on server container to load app service classes from XML tags in info.xml - <a  href="https://github.com/owncloud/core/issues/29525">#29525</a></li>
      <li>Trigger events for federated shares - <a  href="https://github.com/owncloud/core/issues/29566">#29566</a></li>
   </ul>
   <h3>Changed</h3>
   <ul>
      <li>Exclude mimetypelist.js from integrity check - <a  href="https://github.com/owncloud/core/issues/29048">#29048</a> <a  href="https://github.com/owncloud/core/issues/29316">#29316</a></li>
      <li>Refactor set and reset of capabilities - <a  href="https://github.com/owncloud/core/issues/29200">#29200</a></li>
      <li>All amazon locations support v4 now - v3 deprecated - <a  href="https://github.com/owncloud/core/issues/29153">#29153</a></li>
      <li>Modified time value of files is now 64 bits long - <a  href="https://github.com/owncloud/core/issues/28961">#28961</a></li>
      <li>User names must now be at least 3 characters long - <a  href="https://github.com/owncloud/core/issues/29237">#29237</a></li>
      <li>AccountMapper get by email is now case insensitive - <a  href="https://github.com/owncloud/core/issues/29341">#29341</a></li>
      <li>Remove deprecated federated share API warning as it needlessly pollutes logs - <a  href="https://github.com/owncloud/core/issues/29364">#29364</a></li>
      <li>Improve UI for public link sharing permissions for folders - <a  href="https://github.com/owncloud/core/issues/29413">#29413</a></li>
      <li>Replace notify user for local shares with button - <a  href="https://github.com/owncloud/core/issues/29463">#29463</a></li>
      <li>Log out current user after submitting form in password reset page - <a  href="https://github.com/owncloud/core/issues/29464">#29464</a></li>
      <li>Update minimum supported browser versions - <a  href="https://github.com/owncloud/core/issues/29507">#29507</a></li>
      <li>Admins can now change display name even when its modification is disallowed for regular users - <a  href="https://github.com/owncloud/core/issues/29442">#29442</a></li>
   </ul>
   <h3>Removed</h3>
   <ul>
      <li>Remove AvatarPermissions repair step - <a  href="https://github.com/owncloud/core/issues/29202">#29202</a></li>
      <li>Remove unused FTP code - <a  href="https://github.com/owncloud/core/issues/29186">#29186</a></li>
      <li>Remove app store related code obsoleted by market app - <a  href="https://github.com/owncloud/core/issues/29249">#29249</a></li>
      <li>Remove a route to removed script - <a  href="https://github.com/owncloud/core/issues/29553">#29553</a></li>
   </ul>
   <h3></a>Fixed</h3>
   <ul>
      <li>Corrected namespace for OC\Memcache\ArrayCache which caused errors on some environments - <a  href="https://github.com/owncloud/core/issues/29219">#29219</a></li>
      <li>External storage Javascript code from apps is now loaded correctly (fixes Dropbox app and others) - <a  href="https://github.com/owncloud/core/issues/29225">#29225</a></li>
      <li>Use product name from theme - <a  href="https://github.com/owncloud/core/issues/29251">#29251</a></li>
      <li>Make sure the external storage folder name is editable when returning from OAuth authorization - <a  href="https://github.com/owncloud/core/issues/29253">#29253</a></li>
      <li>Fix duplicate external storage config that appear sometimes when returning from OAuth authorization - <a  href="https://github.com/owncloud/core/issues/29254">#29254</a></li>
      <li>Log exceptions in decrypt-all command - <a  href="https://github.com/owncloud/core/issues/29248">#29248</a></li>
      <li>SFTP key pair mode now works again - <a  href="https://github.com/owncloud/core/issues/29156">#29156</a></li>
      <li>Use correct class namespace for ownCloud ext storage - <a  href="https://github.com/owncloud/core/issues/28935">#28935</a></li>
      <li>Fix generated zip file to avoid errors with some zip tools - <a  href="https://github.com/owncloud/core/issues/29149">#29149</a></li>
      <li>Fix position of dialog boxes - <a  href="https://github.com/owncloud/core/issues/29133">#29133</a> <a  href="https://github.com/owncloud/core/issues/29467">#29467</a></li>
      <li>Move 64bit mtime migration from dav to core - <a  href="https://github.com/owncloud/core/issues/29121">#29121</a></li>
      <li>Allow 0 byte quota to be entered on UI - <a  href="https://github.com/owncloud/core/issues/29113">#29113</a></li>
      <li>Don't display warning about limited commands when running maintenance:install - <a  href="https://github.com/owncloud/core/issues/28968">#28968</a></li>
      <li>Handle no user session in isSharingDisabledForUser() - <a  href="https://github.com/owncloud/core/issues/28915">#28915</a></li>
      <li>Fix icon format for federated cloud sharing - <a  href="https://github.com/owncloud/core/issues/28972">#28972</a></li>
      <li>Fix for decrypting user specific keys - <a  href="https://github.com/owncloud/core/issues/29189">#29189</a></li>
      <li>Remove alternate keys storage during user delete - <a  href="https://github.com/owncloud/core/issues/29155">#29155</a></li>
      <li>Fix error logs due to deletion of keys - <a  href="https://github.com/owncloud/core/issues/28934">#28934</a></li>
      <li>Fix encryption panel to properly detect current mode after upgrade to ownCloud 10 - <a  href="https://github.com/owncloud/core/issues/29049">#29049</a></li>
      <li>Fix quota check when uploading to federated shares - <a  href="https://github.com/owncloud/core/issues/29325">#29325</a> <a  href="https://github.com/owncloud/core/issues/29424">#29424</a></li>
      <li>Fix issue when mounting another encrypted ownCloud - <a  href="https://github.com/owncloud/core/issues/29360">#29360</a></li>
      <li>AccountMapper get by email is now case insensitive - <a  href="https://github.com/owncloud/core/issues/29341">#29341</a></li>
      <li>Fix order of apps to be deterministic during install process - <a  href="https://github.com/owncloud/core/issues/29267">#29267</a></li>
      <li>Only initiate connection to federated share when necessary - <a  href="https://github.com/owncloud/core/issues/29314">#29314</a></li>
      <li>Allow group named "0" to be deleted - <a  href="https://github.com/owncloud/core/issues/29323">#29323</a></li>
      <li>Do not translate CORS header in settings page - <a  href="https://github.com/owncloud/core/issues/29313">#29313</a></li>
      <li>Disable background scan for home storage/cache - <a  href="https://github.com/owncloud/core/issues/29306">#29306</a></li>
      <li>Fixed double escaping in full page error messages - <a  href="https://github.com/owncloud/core/issues/29304">#29304</a></li>
      <li>Updated davclient.js which fixes issue whenever an app extends Array prototype - <a  href="https://github.com/owncloud/core/issues/29305">#29305</a></li>
      <li>Fix OCS apps API to correctly include attributes into generated XML - <a  href="https://github.com/owncloud/core/issues/29303">#29303</a></li>
      <li>Make enum type mapping work with migrations - <a  href="https://github.com/owncloud/core/issues/29268">#29268</a></li>
      <li>Handle invalid storage when getting storage root id - <a  href="https://github.com/owncloud/core/issues/29278">#29278</a></li>
      <li>Fix storing/retrieval for dav properties of non files - <a  href="https://github.com/owncloud/core/issues/29273">#29273</a></li>
      <li>Remove double quotes from boolean values in status.php output - <a  href="https://github.com/owncloud/core/issues/29271">#29271</a></li>
      <li>Tidy code in DAV related classes - <a  href="https://github.com/owncloud/core/issues/29272">#29272</a></li>
      <li>Fix the missing argument to DecryptAll - <a  href="https://github.com/owncloud/core/issues/29371">#29371</a></li>
      <li>Skip copying skeleton files if skeleton dir is not accessible - <a  href="https://github.com/owncloud/core/issues/29379">#29379</a></li>
      <li>Use chunked DB query when preloading directory content for DAV properties - <a  href="https://github.com/owncloud/core/issues/29416">#29416</a></li>
      <li>Fix failure when checking integrity signature for non-existing files - <a  href="https://github.com/owncloud/core/issues/29433">#29433</a></li>
      <li>Prevent uploading of part files through WebDav - <a  href="https://github.com/owncloud/core/issues/29432">#29432</a></li>
      <li>Only trigger "changeUser" event if account object really changed - <a  href="https://github.com/owncloud/core/issues/29429">#29429</a></li>
      <li>Only load app type once in app manager classes - <a  href="https://github.com/owncloud/core/issues/29428">#29428</a></li>
      <li>Use efficient startsWith implementation in server container - <a  href="https://github.com/owncloud/core/issues/29427">#29427</a></li>
      <li>Fix race condition in browser when uploading folder tree - <a  href="https://github.com/owncloud/core/issues/29435">#29435</a></li>
      <li>Disable nginx buffering for file downloads to avoid huge memory usage in some scenarios - <a  href="https://github.com/owncloud/core/issues/29403">#29403</a></li>
      <li>Fix many issues related to session removal - <a  href="https://github.com/owncloud/core/issues/28879">#28879</a></li>
      <li>Fix SMB to better detect when overwriting through rename - <a  href="https://github.com/owncloud/core/issues/29564">#29564</a></li>
      <li>Fix files scan repair in bulk warning - <a  href="https://github.com/owncloud/core/issues/29631">#29631</a></li>
      <li>Fix federated share import from public link - <a  href="https://github.com/owncloud/core/issues/29677">#29677</a></li>
      <li>Fix status.php to properly display product name - <a  href="https://github.com/owncloud/core/issues/29728">#29728</a></li>
      <li>Sort allowed storages checkbox list - <a  href="https://github.com/owncloud/core/issues/29746">#29746</a></li>
   </ul>


<a name="latest9.1"></a></li>
      <h3>Version 9.1.7 <small>Dec 5 2017</small></h3>
      <ul>
         <li>Fix user deletion for LDAP users <a  href="https://github.com/owncloud/core/pull/28008">#28008</a></li>
         <li>Added “occ files:scan” repair mode to repair mismatch filecache paths - <a  href="https://github.com/owncloud/core/pull/29487">#29487</a></li>
         <li>Add extra check in case of missing home storage - <a  href="https://github.com/owncloud/core/issues/28505">#28505</a></li>
         <li>Add cache for new card uri&lt;-&gt;id to fix db cluster execution - <a  href="https://github.com/owncloud/core/issues/28304">#28304</a></li>
         <li>Create new birthday calendar without VTODO and give order 100 - <a  href="https://github.com/owncloud/core/issues/28550">#28550</a></li>
         <li>Username must be at least 3 characters long - <a  href="https://github.com/owncloud/core/issues/29239">#29239</a></li>
         <li>Use correct class namespace for ownCloud ext storage - <a  href="https://github.com/owncloud/core/issues/28978">#28978</a></li>
         <li>Remove input autofocus on Internet Explorer - <a  href="https://github.com/owncloud/core/issues/28830">#28830</a></li>
         <li>PHP 5.5 is EOL as well by now - <a  href="https://github.com/owncloud/core/issues/28766">#28766</a></li>
         <li>Do not reset quota to “default” whe no LDAP quota attributes configured - <a  href="https://github.com/owncloud/core/pull/28404">#28404</a></li>
         <li>Add check for empty result in storage memcache - <a  href="https://github.com/owncloud/core/issues/28229">#28229</a></li>
         <li>Only use IndexIgnore if mod_autoindex.c is enabled/loaded. - <a  href="https://github.com/owncloud/core/issues/28592">#28592</a></li>
         <li>Make setValues use insertIfNotExists - <a  href="https://github.com/owncloud/core/issues/28484">#28484</a></li>
         <li>Add emitting of hook post_unshareFromSelf to Share 2.0 - <a  href="https://github.com/owncloud/core/issues/28412">#28412</a></li>
         <li>Data is not properly set in case of OCS Result object - <a  href="https://github.com/owncloud/core/issues/28199">#28199</a></li>
         <li>Check that the most recent app version is loaded - <a  href="https://github.com/owncloud/core/issues/28222">#28222</a></li>
         <li>Add Win10 User Agent for FakeLockerPlugin. Add missing response status. - <a  href="https://github.com/owncloud/core/issues/28288">#28288</a></li>
         <li>Fix cross storage move info - <a  href="https://github.com/owncloud/core/issues/28238">#28238</a></li>
         <li>Fix SMB to better detect when overwriting through rename - <a  href="https://github.com/owncloud/core/issues/29565">#29565</a></li>
      </ul>

<a name="latest9.0"></a></li>
      <h3>Version 9.0.11 <small>Dec 5 2017</small></h3>
      <ul>
         <li>Added “occ files:scan” repair mode to repair mismatch filecache paths - <a  href="https://github.com/owncloud/core/pull/29491">#29491</a></li>
         <li>Add extra check in case of missing home storage - <a  href="https://github.com/owncloud/core/issues/29046">#29046</a></li>
         <li>Only use IndexIgnore if mod_autoindex.c is enabled/loaded. - <a  href="https://github.com/owncloud/core/issues/28593">#28593</a></li>
         <li>Make setValues use insertIfNotExists - <a  href="https://github.com/owncloud/core/issues/28485">#28485</a></li>
         <li>Stop processing in case of filecache loop inside propagator - <a  href="https://github.com/owncloud/core/issues/28320">#28320</a></li>
         <li>Fix cross-storage move info - <a  href="https://github.com/owncloud/core/issues/28284">#28284</a></li>
         <li>Fix default quota - <a  href="https://github.com/owncloud/core/issues/28302">#28302</a></li>
         <li>Always load most recent app from dirs - <a  href="https://github.com/owncloud/core/issues/28224">#28224</a></li>
      </ul>

<h3>Version 10.0.3 <small>Sep 15 2017</small></h3></li>
Release notes: <a href="https://doc.owncloud.org/server/10.0/admin_manual/release_notes.html#changes-in-10-0-3">Release notes</a></br>

<h4>Added</h4>
<ul>
<li>[added] It is now possible to upgrade from 8.2.11 directly to 10 - <a href="https://github.com/owncloud/core/issues/28655">core/#28655</a> <a href="https://github.com/owncloud/core/issues/28673">core/#28673</a></li>
<li>[added] Added extra check in case of missing home storage - <a href="https://github.com/owncloud/core/issues/28504">core/#28504</a></li>
<li>[added] Added Shield and Workflow icons - <a href="https://github.com/owncloud/core/issues/28588">core/#28588</a></li>
<li>[added] Enable chunking for big files in web UI when logged in - <a href="https://github.com/owncloud/core/issues/28547">core/#28547</a></li>
<li>[added] Added emitting of hook "post_unshareFromSelf" to Share 2.0 - <a href="https://github.com/owncloud/core/issues/28413">core/#28413</a></li>
<li>[added] Added occ user:inactive command to list inactive users - <a href="https://github.com/owncloud/core/issues/28294">core/#28294</a></li>
<li>[added] Added internal setting for the periodic credentials validity check - <a href="https://github.com/owncloud/core/issues/28298">core/#28298</a></li>
<li>[added] Added jquery events for external storage settings UI when using OAuth - <a href="https://github.com/owncloud/core/issues/28210">core/#28210</a></li>
<li>[added] Added public IThemeService which allows apps like the template editor to interact with the current theme - <a href="https://github.com/owncloud/core/issues/28647">core/#28647</a> <a href="https://github.com/owncloud/core/issues/28926">core/#28926</a></li>
<li>[added] Added "passwordEnabled" field to hook data of link shares - <a href="https://github.com/owncloud/core/issues/28827">core/#28827</a></li>
<li>[added] Add new option to disable sharing in every user-mounted external storages - <a href="https://github.com/owncloud/core/issues/28706">core/#28706</a></li>
<li>[added] Added default user and group share permissions - <a href="https://github.com/owncloud/core/issues/28903">core/#28903</a></li>
<li>[added] Added occ command to list routes - <a href="https://github.com/owncloud/core/issues/28907">core/#28907</a></li>
<li>[added] Added mime types for m3u, m3u8, pls mappings to audio streams - <a href="https://github.com/owncloud/core/issues/28885">core/#28885</a></li>
</ul>

<h4>Changed</h4>
<ul>
<li>[changed] Transfer ownership now works with master key encryption - <a href="https://github.com/owncloud/core/issues/28537">core/#28537</a> <a href="https://github.com/owncloud/core/issues/28845">core/#28845</a></li>
<li>[changed] Reenable medial search by default - <a href="https://github.com/owncloud/core/issues/28064">core/#28064</a></li>
<li>[changed] The LoginController now emits "failedLogin" hook signal after a failed login - <a href="https://github.com/owncloud/core/issues/28631">core/#28631</a></li>
<li>[changed] All columns that use the fileid have been changed to bigint (64-bits) - <a href="https://github.com/owncloud/core/issues/28581">core/#28581</a></li>
<li>[changed] Added search pattern for the occ app:list command - <a href="https://github.com/owncloud/core/issues/28653">core/#28653</a></li>
<li>[changed] Allow phpredis develop branch - <a href="https://github.com/owncloud/core/issues/28717">core/#28717</a></li>
<li>[changed] Default minimum desktop version in config.php is now 2.2.4 - <a href="https://github.com/owncloud/core/issues/28540">core/#28540</a></li>
<li>[changed] Reallow negative mtimes by default in storage implementations - <a href="https://github.com/owncloud/core/issues/28697">core/#28697</a></li>
</ul>

<h4>Removed</h4>
<ul>
<li>[removed] Removed "themes" folder - <a href="https://github.com/owncloud/core/issues/28617">core/#28617</a> <a href="https://github.com/owncloud/core/issues/28999">core/#28999</a></li>
<li>[removed] Removed unused Windows checks - <a href="https://github.com/owncloud/core/issues/28612">core/#28612</a></li>
<li>[removed] Removed "appstoreenabled" from config.php - <a href="https://github.com/owncloud/core/issues/28714">core/#28714</a></li>
<li>[removed] Slash in filename when renaming is not allowed any more in the frontend (unintended "feature") - <a href="https://github.com/owncloud/core/issues/28490">core/#28490</a></li>
<li>[removed] Using old chunking protocol on new DAV endpoint is now disallowed - <a href="https://github.com/owncloud/core/issues/28637">core/#28637</a></li>
</ul>

<h4>Fixed</h4>

<h5>Platform</h5>
<ul>
<li>Fix issue with folder sizes on 32-bit systems - <a href="https://github.com/owncloud/core/issues/28654">#28654</a></li>
<li>Fix null error in ActivityManager on some setups - <a href="https://github.com/owncloud/core/issues/28420">#28420</a></li>
<li>Load app code before running app specific migrations - <a href="https://github.com/owncloud/core/issues/28391">#28391</a></li>
<li>Prevent certificate manager to access FS too early, fixes 8.2 to 10 migration issue - <a href="https://github.com/owncloud/core/pull/28668">#28668</a></li>
<li>Clustering: Better support of read only config file and apps folder - <a href="https://github.com/owncloud/core/issues/28594">#28594</a> <a href="https://github.com/owncloud/core/issues/28601">#28601</a></li>
<li>Only use IndexIgnore in htaccess if mod_autoindex.c is enabled/loaded - <a href="https://github.com/owncloud/core/issues/28591">#28591</a></li>
<li>Fix app enable of not existing app - <a href="https://github.com/owncloud/core/issues/28317">#28317</a></li>
<li>Keep redirect information when logging in with wrong password - <a href="https://github.com/owncloud/core/issues/28511">#28511</a></li>
<li>Use SwiftMailer antiflood plugin to reconnect after multiple emails sent - <a href="https://github.com/owncloud/core/issues/28180">#28180</a></li>
<li>Theme is now properly loaded when displaying full page error messages - <a href="https://github.com/owncloud/core/pull/28622">#28622</a></li>
<li>Adjusted warning for PHP 5.5 EOL - <a href="https://github.com/owncloud/core/issues/28765">#28765</a></li>
<li>Don't enable market app on upgrade from OC &lt; 10 if "appstoreenabled" was false in config.php - <a href="https://github.com/owncloud/core/issues/28757">#28757</a></li>
<li>Use different CSS comment style for IE11 support - <a href="https://github.com/owncloud/core/issues/28752">#28752</a></li>
<li>Adjust default slogan - <a href="https://github.com/owncloud/core/issues/28724">#28724</a></li>
<li>Catch filecache inconsistencies instead of logging warnings - <a href="https://github.com/owncloud/core/issues/28710">#28710</a></li>
<li>Check for null when traversing app passwords table rows - <a href="https://github.com/owncloud/core/issues/28894">#28894</a></li>
<li>Improve market upgrade messages + new switch - <a href="https://github.com/owncloud/core/issues/28871">#28871</a></li>
<li>Make occ upgrade verbose by default - <a href="https://github.com/owncloud/core/issues/28876">#28876</a></li>
<li>Add more information to updatechecker config doc - <a href="https://github.com/owncloud/core/issues/28867">#28867</a></li>
</ul>

<h5>Database</h5>
<ul>
<li>All columns that use the fileid have been changed to bigint (64-bits) - <a href="https://github.com/owncloud/core/issues/28581">#28581</a></li>
<li>Fix length of account search term column which broke installs on some DB setups - <a href="https://github.com/owncloud/core/issues/28576">#28576</a></li>
<li>Fix column lengths on migrations table to fix index - <a href="https://github.com/owncloud/core/issues/28254">#28254</a></li>
<li>Fixed some repeated duplicate key errors relate to oc_preferences table - <a href="https://github.com/owncloud/core/issues/28486">#28486</a></li>
<li>Add migration step to fix birthday calendars - <a href="https://github.com/owncloud/core/issues/28338">#28338</a></li>
<li>Added cache for new card uri-id mapping to fix db cluster execution - <a href="https://github.com/owncloud/core/issues/28308">#28308</a></li>
</ul>

<h5>Performance</h5>
<ul>
<li>Optimize upload - don't fetch info of non-existing file - <a href="https://github.com/owncloud/core/issues/28704">#28704</a></li>
<li>Optimize upload - don't check if file exists if already known - <a href="https://github.com/owncloud/core/issues/28704">#28704</a></li>
<li>Optimize upload - do not fetch metadata for part file during checksuming - <a href="https://github.com/owncloud/core/issues/28633">#28633</a></li>
<li>Optimize shares retrieval logic with complex scenarios - <a href="https://github.com/owncloud/core/issues/28524">#28524</a></li>
<li>Optimize query logger - <a href="https://github.com/owncloud/core/issues/28220">#28220</a></li>
<li>Remove initial scanning overhead to speed up federated shares with lots of entries - <a href="https://github.com/owncloud/core/issues/28604">#28604</a></li>
<li>Improve contact search performance - <a href="https://github.com/owncloud/core/issues/28042">#28042</a></li>
<li>Improved search performance for federated instance users - <a href="https://github.com/owncloud/core/issues/28209">#28209</a></li>
<li>Add database index on "oc_share.share_with" column - <a href="https://github.com/owncloud/core/issues/28856">#28856</a></li>
</ul>

<h5>Filesystem/storage</h5>
<ul>
<li>Don't trigger hooks for every new dav chunk, only for final file - <a href="https://github.com/owncloud/core/issues/28817">#28817</a></li>
<li>Prevent creating file cache inconsistencies when moving a subtree in or out of a share - <a href="https://github.com/owncloud/core/issues/28219">#28219</a></li>
<li>Add check for empty result in storage memcache - <a href="https://github.com/owncloud/core/issues/28548">#28548</a></li>
<li>Fix error message when accessing of non-existing file on external storage - <a href="https://github.com/owncloud/core/issues/28613">#28613</a></li>
<li>Fixed OAuth frontend logic when connecting to external storage - <a href="https://github.com/owncloud/core/issues/28496">#28496</a> <a href="https://github.com/owncloud/core/issues/28400">#28400</a></li>
<li>Fix quota handling on new Webdav endpoint (affects desktop client 2.2+) - <a href="https://github.com/owncloud/core/issues/28261">#28261</a></li>
<li>Fix mounting Webdav as drive in Windows 10 - <a href="https://github.com/owncloud/core/issues/28243">#28243</a></li>
<li>Fix rare error that happens when mounting invalid shares - <a href="https://github.com/owncloud/core/issues/28342">#28342</a></li>
<li>Handle BSD case for 32 bit filemtime and install warning - <a href="https://github.com/owncloud/core/issues/28790">#28790</a></li>
<li>Properly check target rename path in new dav endpoint - <a href="https://github.com/owncloud/core/issues/28737">#28737</a></li>
<li>Increment required only when encryption is enabled - <a href="https://github.com/owncloud/core/issues/28880">#28880</a></li>
</ul>

<h5>Files app</h5>
<ul>
<li>Make sure passed upload mtime is always an int - <a href="https://github.com/owncloud/core/issues/28186">#28186</a></li>
<li>Fix directory mime type in trashbin list - <a href="https://github.com/owncloud/core/issues/28803">#28803</a></li>
<li>Properly highlight files when opening private link - <a href="https://github.com/owncloud/core/issues/28681">#28681</a></li>
<li>Fix overlapping selectively in default fileslist - <a href="https://github.com/owncloud/core/issues/28906">#28906</a></li>
<li>Better timeout detection in web UI uploads + chunked uploads - <a href="https://github.com/owncloud/core/issues/28896">#28896</a></li>
<li>Fix getting drop target when dragging from file manager  - <a href="https://github.com/owncloud/core/issues/28882">#28882</a></li>
<li>Improve file upload progress bar - <a href="https://github.com/owncloud/core/issues/28861">#28861</a></li>
</ul>

<h5>Sharing</h5>
<ul>
<li>Creating link shares now doesn't forget "Allow editing" permission any more - <a href="https://github.com/owncloud/core/issues/28065">#28065</a></li>
<li>Fix "notify user" checkbox in share panel - <a href="https://github.com/owncloud/core/issues/28237">#28237</a></li>
<li>Proper message shown when accessing unreachable private links - <a href="https://github.com/owncloud/core/issues/28600">#28600</a></li>
<li>Fix exact search term match for LDAP in share autocomplete - <a href="https://github.com/owncloud/core/issues/28851">#28851</a></li>
<li>Add tooltip to public shares panel - <a href="https://github.com/owncloud/core/issues/28781">#28781</a></li>
<li>Validate share link password even if unchanged when updating share - <a href="https://github.com/owncloud/core/issues/28713">#28713</a></li>
<li>Fix DiscoveryManager error during upgrade by untangling federated share app dependencies - <a href="https://github.com/owncloud/core/pull/28858">#28858</a></li>
</ul>

<h5>User management</h5>
<ul>
<li>Don't set email if invalid in user:add command - <a href="https://github.com/owncloud/core/issues/28577">#28577</a></li>
<li>Group admins can now properly edit members' email addresses - <a href="https://github.com/owncloud/core/issues/28366">#28366</a></li>
<li>Fixed "settings_ajax_changegroupname" typo in route name - <a href="https://github.com/owncloud/core/issues/28746">#28746</a></li>
<li>Use IProvidesEMailBackend to fix syncing with LDAP backend - <a href="https://github.com/owncloud/core/issues/28736">#28736</a></li>
</ul>

<h5>API related</h5>
<ul>
<li>Make Backbone PROPPATCH work with options.wait mode - <a href="https://github.com/owncloud/core/issues/28791">#28791</a> <a href="https://github.com/owncloud/core/issues/28837">#28837</a></li>
<li>Detect PROPPATCH failure by parsing multistatus in Backbone Webdav adapter - <a href="https://github.com/owncloud/core/issues/28628">#28628</a></li>
<li>Error messages from the server on upload are now displayed in the web UI instead of generic messages - <a href="https://github.com/owncloud/core/issues/28635">#28635</a></li>
<li>Properly set the status text in OCS API v2 calls - <a href="https://github.com/owncloud/core/issues/28595">#28595</a></li>
<li>Data was not properly set in case of OCS Result object - <a href="https://github.com/owncloud/core/issues/28198">#28198</a></li>
</ul>

<h5>Other</h5>
<ul>
<li>Only reload file list when switching navigation sections - <a href="https://github.com/owncloud/core/issues/28843">#28843</a></li>
<li>Make new text file tooltip messages update properly - <a href="https://github.com/owncloud/core/issues/28151">#28151</a></li>
<li>Fix trashbin preview icons - <a href="https://github.com/owncloud/core/issues/28158">#28158</a></li>
<li>Allow user "0" as in comments - <a href="https://github.com/owncloud/core/issues/28422">#28422</a></li>
<li>Better description for occ files:scan command - <a href="https://github.com/owncloud/core/issues/28839">#28839</a></li>
<li>Better description for occ files:cleanup command - <a href="https://github.com/owncloud/core/issues/28841">#28841</a></li>
<li>Reworded upgrade message for admin with big instance - <a href="https://github.com/owncloud/core/issues/28828">#28828</a></li>
<li>Make lost password errors distinguishable - <a href="https://github.com/owncloud/core/issues/28756">#28756</a></li>
<li>Add height to menutoggler - <a href="https://github.com/owncloud/core/issues/28723">#28723</a></li>
<li>Remove apostrophe from full page file read error text - <a href="https://github.com/owncloud/core/issues/28702">#28702</a></li>
<li>Added missing "fatal" log level to occ log:manage level command - <a href="https://github.com/owncloud/core/issues/28683">#28683</a></li>
</ul>

Download: <a href="<?php echo $DOWNLOAD_SERVER_STABLE_TAR; ?>">owncloud-10.0.3.tar.bz2</a> or <a href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP ?>">owncloud-10.0.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-10.0.3.tar.bz2.md5">owncloud-10.0.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.3.zip.md5">owncloud-10.0.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-10.0.3.tar.bz2.sha256">owncloud-10.0.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.3.zip.sha256">owncloud-10.0.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-10.0.3.tar.bz2.asc">owncloud-10.0.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.3.zip.asc">owncloud-10.0.3.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/10.0/owncloud">10.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.6 <small>May 30 2017</small></h3></li>
<ul>
<li>[major] Default quota display in users page now works correctly again - <a href="https://github.com/owncloud/core/issues/27896">core/#27896</a></li>
<li>[major] Maintenance mode now properly blocks access on new DAV endpoint - <a href="https://github.com/owncloud/core/issues/27821">core/#27821</a></li>
<li>[minor] Escape filter in search - <a href="https://github.com/owncloud/core/issues/27900">core/#27900</a></li>
<li>[minor] Fix file name output in error pages - <a href="https://github.com/owncloud/core/issues/27808">core/#27808</a></li>
<li>[minor] Fix PDF download button in embedded viewer - <a href="https://github.com/owncloud/core/issues/27521">core/#27521</a></li>
<li>[minor] Fix rare issue where one cannot comment due to inconsistent mount cache table with deleted users - <a href="https://github.com/owncloud/core/issues/27012">core/#27012</a></li>
<li>[minor] Trashbin restore warnings due to missing entries now logged as debug - <a href="https://github.com/owncloud/core/issues/27826">core/#27826</a></li>
<li>[minor] Remove own shares from "Shared with you" section - <a href="https://github.com/owncloud/core/issues/27972">core/#27972</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.6.tar.bz2">owncloud-9.1.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.6.zip">owncloud-9.1.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.6.tar.bz2.md5">owncloud-9.1.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.6.zip.md5">owncloud-9.1.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.6.tar.bz2.sha256">owncloud-9.1.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.6.zip.sha256">owncloud-9.1.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.6.tar.bz2.asc">owncloud-9.1.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.6.zip.asc">owncloud-9.1.6.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.10 <small>May 30 2017</small></h3></li>
<ul>
<li>[minor] Escape filter in search - <a href="https://github.com/owncloud/core/issues/27900">core/#27900</a></li>
<li>[minor] Fix file name output in error pages - <a href="https://github.com/owncloud/core/issues/27808">core/#27808</a></li>
<li>[minor] Fix PDF download button in embedded viewer - <a href="https://github.com/owncloud/core/issues/27521">core/#27521</a></li>
<li>[minor] Fix rare issue where one cannot comment due to inconsistent mount cache table with deleted users - <a href="https://github.com/owncloud/core/issues/27012">core/#27012</a></li>
<li>[minor] Remove own shares from "Shared with you" section - <a href="https://github.com/owncloud/core/issues/27972">core/#27972</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.10.tar.bz2">owncloud-9.0.10.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.10.zip">owncloud-9.0.10.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.10.tar.bz2.md5">owncloud-9.0.10.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.10.zip.md5">owncloud-9.0.10.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.10.tar.bz2.sha256">owncloud-9.0.10.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.10.zip.sha256">owncloud-9.0.10.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.10.tar.bz2.asc">owncloud-9.0.10.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.10.zip.asc">owncloud-9.0.10.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 10.0.2 <small>May 30 2017</small></h3></li>
Release notes: <a href="https://doc.owncloud.org/server/10.0/admin_manual/release_notes.html#changes-in-10-0-2">Release notes</a></br>
<ul>
<li>[major] Fix issue with database.xml migration being triggered twice on market app install - <a href="https://github.com/owncloud/core/issues/27982">core/#27982</a></li>
<li>[major] Apps formerly marked as shipped can now be uninstalled - <a href="https://github.com/owncloud/core/issues/27985">core/#27985</a></li>
<li>[major] Market now properly updates app version when using multiple apps paths - <a href="https://github.com/owncloud/core/issues/28002">core/#28002</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-10.0.2.tar.bz2">owncloud-10.0.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.2.zip">owncloud-10.0.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-10.0.2.tar.bz2.md5">owncloud-10.0.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.2.zip.md5">owncloud-10.0.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-10.0.2.tar.bz2.sha256">owncloud-10.0.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.2.zip.sha256">owncloud-10.0.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-10.0.2.tar.bz2.asc">owncloud-10.0.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.2.zip.asc">owncloud-10.0.2.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/10.0/owncloud">10.0 Release Channel</a><!-- and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>-->. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 10.0.1 <small>May 23 2017</small></h3></li>
Release notes: <a href="https://doc.owncloud.org/server/10.0/admin_manual/release_notes.html#changes-in-10-0-1">Release notes</a></br>
<ul>
<li>[major] Clear cached app info before installing app - <a href="https://github.com/owncloud/core/issues/27953">core/#27953</a></li>
<li>[major] Fix to allow admin login when using home object store mode - <a href="https://github.com/owncloud/core/issues/27963">core/#27963</a></li>
<li>[major] Skeleton files correct copied for shibboleth - <a href="https://github.com/owncloud/core/issues/27935">core/#27935</a></li>
<li>[major] Automatically enable market app when upgrading from OC < 10 - <a href="https://github.com/owncloud/core/issues/27930">core/#27930</a></li>
<li>[major] Fix issue where market would run app migrations twice in some scenarios - <a href="https://github.com/owncloud/market/issues/76">market/#76</a></li>
<li>[major] Fetch search terms from user backend (ex: LDAP) for more extended user search ability - <a href="https://github.com/owncloud/core/issues/27906">core/#27906</a></li> 
<li>[major] Added support for upload-only link shares - <a href="https://github.com/owncloud/core/issues/27548">core/#27548</a></li>
<li>[major] When enabling default encryption module the admin must now explicitly choose encryption type (master key vs user key) - <a href="https://github.com/owncloud/core/issues/27512">core/#27512</a></li>
<li>[major] Fix missing "publicuri" field when upgrading from 9.1.5 - <a href="https://github.com/owncloud/core/issues/27754">core/#27754</a></li>
<li>[major] Add options to the user:sync command to handle missing accounts - <a href="https://github.com/owncloud/core/issues/27798">core/#27798</a></li>
<li>[major] Maintenance mode now properly blocks syncing on new DAV endpoint - <a href="https://github.com/owncloud/core/issues/27821">core/#27821</a></li>
<li>[major] Copy button for multiple link share now copies the correct link - <a href="https://github.com/owncloud/core/issues/27863">core/#27863</a></li>
<li>[major] Fix upload issues with IE11 - <a href="https://github.com/owncloud/core/issues/27875">core/#27875</a></li>
<li>[major] Allow apps to register multiple settings panels - <a href="https://github.com/owncloud/core/issues/27885">core/#27885</a></li>
<li>[major] Account table doesn't sync from user backends that have no listing support - <a href="https://github.com/owncloud/core/issues/27862">core/#27862</a></li>
<li>[major] Add events for password validation - <a href="https://github.com/owncloud/core/issues/27883">core/#27883</a></li>
<li>[major] Add JS event after external storage mount config is loaded, for UI extensions - <a href="https://github.com/owncloud/core/issues/27740">core/#27740</a></li>
<li>[major] Fix theming of setup page by autoloading default_enable theme apps - <a href="https://github.com/owncloud/core/issues/27819">core/#27819</a></li>
<li>[major] Allow apps to register custom settings page sections in info.xml - <a href="https://github.com/owncloud/core/issues/27634">core/#27634</a></li>
<li>[major] Add admin sharing option to restrict autocomplete to membership groups but still allow typing full name if known - <a href="https://github.com/owncloud/core/issues/27869">core/#27869</a></li>
<li>[minor] Market app update now doesn't overwrite local git checkouts - <a href="https://github.com/owncloud/core/issues/27973">core/#27973</a></li>
<li>[minor] Delete "appstoreenabled" config value when enabling market - <a href="https://github.com/owncloud/core/issues/27956">core/#27956</a></li>
<li>[minor] Do not verify email address when entered by an admin on their personal page - <a href="https://github.com/owncloud/core/issues/27921">core/#27921</a></li>
<li>[minor] Fix default share permission issue in public API <a href="https://github.com/owncloud/core/issues/27927">core/#27927</a></li>
<li>[minor] Properly rethrow exception when error occurred when enabling an app - <a href="https://github.com/owncloud/core/issues/27970">core/#27970</a></li>
<li>[minor] Remove own shares from "Shared with you" section - <a href="https://github.com/owncloud/core/issues/27972">core/#27972</a></li>
<li>[minor] Fix updating to daily from 10.0.0 with web updater - <a href="https://github.com/owncloud/updater/issues/422">updater/#422</a></li>
<li>[minor] Fix updating to 10.0.1 with web updater - <a href="https://github.com/owncloud/core/issues/27965">core/#27965</a></li>
<li>[minor] Removed unused and non-working auto-login after setup - <a href="https://github.com/owncloud/core/issues/27971">core/#27971</a></li>
<li>[minor] Fix SMB storage to return false if stat failed - <a href="https://github.com/owncloud/core/issues/27859">core/#27859</a></li>
<li>[minor] Update swiftmailer - <a href="https://github.com/owncloud/core/issues/27897">core/#27897</a></li>
<li>[minor] Escape filter in search - <a href="https://github.com/owncloud/core/issues/27900">core/#27900</a></li>
<li>[minor] Fix file name output in error pages - <a href="https://github.com/owncloud/core/issues/27808">core/#27808</a></li>
<li>[minor] Support for alternative login buttons through config.php - <a href="https://github.com/owncloud/core/issues/27607">core/#27607</a></li>
<li>[minor] Example theme app renamed to "theme-example" by convention - <a href="https://github.com/owncloud/core/issues/27632">core/#27632</a></li>
<li>[minor] Fix missing translation of built-in section names - <a href="https://github.com/owncloud/core/issues/27645">core/#27645</a></li>
<li>[minor] Add ability to disable password reset form in config - <a href="https://github.com/owncloud/core/issues/27676">core/#27676</a></li>
<li>[minor] Add support for themed radio buttons - <a href="https://github.com/owncloud/core/issues/27681">core/#27681</a></li>
<li>[minor] Fix customjs extension handling for external storage apps - <a href="https://github.com/owncloud/core/issues/27683">core/#27683</a></li>
<li>[minor] Fix upgrade error with mod_fcgid and PHP 7 - <a href="https://github.com/owncloud/core/issues/27553">core/#27553</a></li>
<li>[minor] Remove sharing subtab when link sharing is disallowed - <a href="https://github.com/owncloud/core/issues/27708">core/#27708</a></li>
<li>[minor] Add privacy warning in link shares panel - <a href="https://github.com/owncloud/core/issues/27844">core/#27844</a></li>
<li>[minor] Fix files app name in navigation menu - <a href="https://github.com/owncloud/core/issues/27843">core/#27843</a></li>
<li>[minor] Fix mimetype table code to ignore folder extensions - <a href="https://github.com/owncloud/core/issues/27668">core/#27668</a></li>
<li>[minor] Automatically focus the password field in password reset page - <a href="https://github.com/owncloud/core/issues/27889">core/#27889</a></li>
<li>[minor] Trashbin restore warnings due to missing entries now logged as debug - <a href="https://github.com/owncloud/core/issues/27826">core/#27826</a></li>
<li>[minor] Remove obsolete repair step RemoveOldShares - <a href="https://github.com/owncloud/core/issues/27737">core/#27737</a></li>
<li>[minor] "local link" was renamed to "private link" - <a href="https://github.com/owncloud/core/issues/27594">core/#27594</a></li>
<li>[minor] Fix column sorting in public file list page - <a href="https://github.com/owncloud/core/issues/27308">core/#27308</a></li>
<li>[minor] Don't display error when not connected to market - <a href="https://github.com/owncloud/market/issues/51">market/#51</a></li>
<li>[minor] Fix issue with some apps info formats - <a href="https://github.com/owncloud/market/issues/49">market/#49</a></li>
<li>[minor] Add ability to uninstall apps in market app UI - <a href="https://github.com/owncloud/market/issues/67">market/#67</a></li>
<li>[minor] Improve visual feedback when installing market apps - <a href="https://github.com/owncloud/market/issues/64">market/#64</a></li>
<li>[minor] Don't display license key in config report - <a href="https://github.com/owncloud/configreport/issues/27">configreport/#27</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-10.0.1.tar.bz2">owncloud-10.0.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.1.zip">owncloud-10.0.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-10.0.1.tar.bz2.md5">owncloud-10.0.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.1.zip.md5">owncloud-10.0.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-10.0.1.tar.bz2.sha256">owncloud-10.0.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.1.zip.sha256">owncloud-10.0.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-10.0.1.tar.bz2.asc">owncloud-10.0.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.1.zip.asc">owncloud-10.0.1.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/10.0/owncloud">10.0 Release Channel</a><!-- and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>-->. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 10.0.0 <small>Apr 27 2017</small></h3></li>
<b>General</b>

<ul>
<li>Allows users to add the app to the Android homescreen - <a href="https://github.com/owncloud/core/issues/25438">core/#25438</a></li>
<li>Compatible with PHP 7.1 - <a href="https://github.com/owncloud/core/issues/25436">core/#25436</a></li>
<li>MySQL 4-byte UTF8 support: (utf8mb4 for e.g. Emoticons) - <a href="https://github.com/owncloud/core/issues/17978">core/#17978</a></li>
<li>Admin, personal pages and app management are now merged together into a single "Settings" entry - <a href="https://github.com/owncloud/core/issues/26449">core/#26449</a></li>
<li>Admin page displays the output of the server's status.php - <a href="https://github.com/owncloud/core/issues/27238">core/#27238</a></li>
<li>Also allow using email address for password recovery - <a href="https://github.com/owncloud/core/issues/27168">core/#27168</a></li>
<li>Support Redis Cluster - <a href="https://github.com/owncloud/core/issues/26407">core/#26407</a></li>
<li>ownCloud log entry reorder - <a href="https://github.com/owncloud/core/issues/27562">core/#27562</a></li>
<li>ownCloud log file rules to split into separate files - <a href="https://github.com/owncloud/core/issues/27443">core/#27443</a></li>
<li>occ scanner optimized memory usage for large scans by using autocommits - <a href="https://github.com/owncloud/core/issues/27527">core/#27527</a></li>
</ul>

<b>Filesystem</b>

<ul>
<li>Ability to exclude folders from being processed, like snapshot folders - <a href="https://github.com/owncloud/core/issues/19235">core/#19235</a></li>
<li>Checksum is computed on the fly and verified - <a href="https://github.com/owncloud/core/issues/26655">core/#26655</a></li>
</ul>

<b>Files App</b>

<ul>
<li>Share Link can be copied to the clipboard - <a href="https://github.com/owncloud/core/issues/25418">core/#25418</a></li>
<li>Display version sizes in versions panel - <a href="https://github.com/owncloud/core/issues/26511">core/#26511</a></li>
<li>Transfer ownership now works for individual folders - <a href="https://github.com/owncloud/core/issues/27343">core/#27343</a></li>
<li>Favorite star indicator now visible in the file lists related to sharing (ex: "Shared with you") - <a href="https://github.com/owncloud/core/issues/19753">core/#19753</a></li>
</ul>

<b>User management</b>

<ul>
<li>Ability to disable users in the users page (enable column first under cog icon) - <a href="https://github.com/owncloud/core/issues/27333">core/#27333</a></li>
<li>When changing personal email, an email confirmation is now sent - <a href="https://github.com/owncloud/core/issues/7326">core/#7326</a></li>
<li>When password is changed through any means, the user will now receive an email - <a href="https://github.com/owncloud/core/issues/27498">core/#27498</a></li>
<li>Change user preferences through OCC - <a href="https://github.com/owncloud/core/issues/24770">core/#24770</a></li>
</ul>

<b>External storage</b>

<ul>
<li>"Local" storage type can now be disabled by sysadmin in config.php - <a href="https://github.com/owncloud/core/issues/26653">core/#26653</a></li>
<li>External storage backends must use the <a href="https://doc.owncloud.org/server/10.0/developer_manual/app/extstorage.html">core external storage API</a> to work without files_external - <a href="https://github.com/owncloud/core/issues/18160">core/#18160</a></li>
<li>FTP external storage moved to a separate app <a href="https://github.com/owncloud/files_external_ftp">files_external_ftp</a>
</ul>

<b>Dav App</b>

<ul>
<li>CalDAV calendar public sharing - <a href="https://github.com/owncloud/core/issues/25351">core/#25351</a></li>
</ul>

<b>Sharing</b>

<ul>
<li>Support for multiple link shares - <a href="https://github.com/owncloud/core/issues/27337">core/#27337</a></li>
<li>When a recipient moves a file or folder out of a received share, the owner now receives a backup in their trashbin - <a href="https://github.com/owncloud/core/issues/27042">core/#27042</a></li>
<li>User avatars now visible in sharing autocomplete dropdown - <a href="https://github.com/owncloud/core/issues/25976">core/#25976</a></li>
</ul>

<b>Minor changes</b>

<ul>
<li>status.php now returns whether an instance requires a DB update - <a href="https://github.com/owncloud/core/issues/26209">core/#26209</a></li>
<li>config option to hide server version in status.php - <a href="https://github.com/owncloud/core/issues/27473">core/#27473</a></li>
<li>provisioning API now also returns the user's home path - <a href="https://github.com/owncloud/core/issues/26850">core/#26850</a></li>
<li>web updater shows link to changelog in admin page - <a href="https://github.com/owncloud/core/issues/26796">core/#26796</a></li>
</ul>

<b>For developers</b>

<ul>
<li>Users from all user backends are now stored in a central account table, improves performance by reducing recurring backend traffic - <a href="https://github.com/owncloud/core/issues/23558">core/#23558</a></li>
<li>Added event whenever a user is enabled or disabled - <a href="https://github.com/owncloud/core/issues/23970">core/#23970</a></li>
<li>Added first login event - <a href="https://github.com/owncloud/core/issues/26206">core/#26206</a></li>
<li>Added postLogout hook - <a href="https://github.com/owncloud/core/issues/27048">core/#27048</a></li>
<li>New column in oc_jobs table to store last duration - <a href="https://github.com/owncloud/core/issues/27144">core/#27144</a></li>
<li>Ability to specify offset and limit when doing a REPORT query on a files endpoint - <a href="https://github.com/owncloud/core/issues/26507">core/#26507</a></li>
<li>Avatar API via WebDAV - <a href="https://github.com/owncloud/core/issues/26872">core/#26872</a></li>
<li>Improve return value support for two factor auth providers API - <a href="https://github.com/owncloud/core/issues/26593">core/#26593</a></li>
<li>Apps can now register Sabre plugins in info.xml - <a href="https://github.com/owncloud/core/issues/26195">core/#26195</a></li>
<li>REPORT method for files endpoint now allows searching for favorites - <a href="https://github.com/owncloud/core/issues/26099">core/#26099</a></li>
<li>Group backends can now return group display names (partial support, only used by sharing autocomplete) - <a href="https://github.com/owncloud/core/issues/26750">core/#26750</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-10.0.0.tar.bz2">owncloud-10.0.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.0.zip">owncloud-10.0.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-10.0.0.tar.bz2.md5">owncloud-10.0.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.0.zip.md5">owncloud-10.0.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-10.0.0.tar.bz2.sha256">owncloud-10.0.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.0.zip.sha256">owncloud-10.0.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-10.0.0.tar.bz2.asc">owncloud-10.0.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-10.0.0.zip.asc">owncloud-10.0.0.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/10.0/owncloud">10.0 Release Channel</a><!-- and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>-->. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.5 <small>Apr 18 2017</small></h3></li>
<ul>
<li>[major] Fix potential DB crash due to DB locks with Galera Cluster - <a href="https://github.com/owncloud/core/issues/27071">core/#27071</a></li>
<li>[major] Renaming SMB mount point now does not delete its contents - <a href="https://github.com/owncloud/core/issues/27377">core/#27377</a></li>
<li>[major] Fix quota behavior inconsistencies with LDAP quota - <a href="https://github.com/owncloud/core/issues/27420">core/#27420</a></li>
<li>[major] Prevent useless queries to local DB users table when using LDAP - <a href="https://github.com/owncloud/core/issues/27068">core/#27068</a></li>
<li>[major] Reduce queries to storages table by caching known entries in memcache - <a href="https://github.com/owncloud/core/issues/27312">core/#27312</a></li>
<li>[major] Optimize long-running jobs by only running them for users who actually logged in before - <a href="https://github.com/owncloud/core/issues/26361">core/#26361</a></li>
<li>[major] Link shares now work correctly when using master key encryption - <a href="https://github.com/owncloud/core/issues/27261">core/#27261</a></li>
<li>[major] Delete files tooltip now  shows the original file path again - <a href="https://github.com/owncloud/core/issues/27271">core/#27271</a></li>
<li>[major] Keep file id when overwriting files when using home object store - <a href="https://github.com/owncloud/core/issues/27281">core/#27281</a></li>
<li>[major] Add support for custom Sabre auth plugin registration in core - <a href="https://github.com/owncloud/core/issues/27370">core/#27370</a></li>
<li>[major] Fix home folder deletion which could fail with LDAP and home attribute in some cases - <a href="https://github.com/owncloud/core/issues/26848">core/#26848</a></li>
<li>[major] Enable exponential backoff in GDrive SDK library to reduce API rate limit issues - <a href="https://github.com/owncloud/core/issues/20481">core/#20481</a></li>
<li>[minor] Fix web updater on some setups that show error message about session already closed - <a href="https://github.com/owncloud/core/issues/27647">core/#27647</a></li>
<li>[minor] Updated ca-bundle.crt - <a href="https://github.com/owncloud/core/issues/27513">core/#27513</a></li>
<li>[minor] Remove useless warning about contact id when sharing with email - <a href="https://github.com/owncloud/core/issues/27225">core/#27225</a></li>
<li>[minor] Don't store empty groups in system tags table - <a href="https://github.com/owncloud/core/issues/27295">core/#27295</a></li>
<li>[minor] When running cron the log now contains each job's last duration - <a href="https://github.com/owncloud/core/issues/27239">core/#27239</a></li>
<li>[minor] Do not rerun slow unmerged shares repair routine on upgrade when it already ran before - <a href="https://github.com/owncloud/core/issues/27176">core/#27176</a></li>
<li>[minor] SMB storage now properly skips DFS links to forbidden shares - <a href="https://github.com/owncloud/core/issues/26845">core/#26845</a></li>
<li>[minor] Sharing field now does not show remote entry when entering local account/email address - <a href="https://github.com/owncloud/core/issues/26647">core/#26647</a></li>
<li>[minor] Fix integrity check warning about gitignore when updating from a previous 9.1 version - <a href="https://github.com/owncloud/updater/issues/41">updater/#41</a></li>
<li>[minor] Fix mixed translations for LDAP users on some setups - <a href="https://github.com/owncloud/core/issues/27328">core/#27328</a></li>
<li>[minor] Fix theme resource caching with memcache - <a href="https://github.com/owncloud/core/issues/27288">core/#27288</a></li>
<li>[minor] Output exceptions from occ files:scan - <a href="https://github.com/owncloud/core/issues/27136">core/#27136</a></li>
<li>[minor] Fix useless log entry when mounting an orphaned share from a deleted user - <a href="https://github.com/owncloud/core/issues/27026">core/#27026</a></li>
<li>[minor] Fix inconsistent default value for share dialog user enumeration setting - <a href="https://github.com/owncloud/core/issues/27224">core/#27224</a></li>
<li>[minor] Redirect unlink to rmdir when unlinking directories to avoid potential underlying issues - <a href="https://github.com/owncloud/core/issues/27101">core/#27101</a></li>
<li>[minor] Fix log message with monochrome BMP preview - <a href="https://github.com/owncloud/core/issues/27044">core/#27044</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.5.tar.bz2">owncloud-9.1.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.5.zip">owncloud-9.1.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.5.tar.bz2.md5">owncloud-9.1.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.5.zip.md5">owncloud-9.1.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.5.tar.bz2.sha256">owncloud-9.1.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.5.zip.sha256">owncloud-9.1.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.5.tar.bz2.asc">owncloud-9.1.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.5.zip.asc">owncloud-9.1.5.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.9 <small>Apr 18 2017</small></h3></li>
<ul>
<li>[major] Renaming SMB mount point now does not delete its contents - <a href="https://github.com/owncloud/core/issues/27377">core/#27377</a></li>
<li>[major] Fix quota behavior inconsistencies with LDAP quota - <a href="https://github.com/owncloud/core/issues/27420">core/#27420</a></li>
<li>[major] Prevent useless queries to local DB users table when using LDAP - <a href="https://github.com/owncloud/core/issues/27068">core/#27068</a></li>
<li>[major] Reduce queries to storages table by caching known entries in memcache - <a href="https://github.com/owncloud/core/issues/27312">core/#27312</a></li>
<li>[minor] Updated ca-bundle.crt - <a href="https://github.com/owncloud/core/issues/27513">core/#27513</a></li>
<li>[minor] Sharing field now does not show remote entry when entering local account/email address - <a href="https://github.com/owncloud/core/issues/26647">core/#26647</a></li>
<li>[minor] Fix integrity check warning about gitignore when updating to 9.1 - <a href="https://github.com/owncloud/updater/issues/418">updater/#418</a></li>
<li>[minor] Fix mixed translations for LDAP users on some setups - <a href="https://github.com/owncloud/core/issues/27328">core/#27328</a></li>
<li>[minor] Fix theme resource caching with memcache - <a href="https://github.com/owncloud/core/issues/27288">core/#27288</a></li>
<li>[minor] Output exceptions from occ files:scan - <a href="https://github.com/owncloud/core/issues/27136">core/#27136</a></li>
<li>[minor] Fix useless log entry when mounting an orphaned share from a deleted user - <a href="https://github.com/owncloud/core/issues/27026">core/#27026</a></li>
<li>[minor] Fix inconsistent default value for share dialog user enumeration setting - <a href="https://github.com/owncloud/core/issues/27224">core/#27224</a></li>
<li>[minor] Redirect unlink to rmdir when unlinking directories to avoid potential underlying issues - <a href="https://github.com/owncloud/core/issues/27101">core/#27101</a></li>
<li>[minor] Fix log message with monochrome BMP preview - <a href="https://github.com/owncloud/core/issues/27044">core/#27044</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.9.tar.bz2">owncloud-9.0.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.9.zip">owncloud-9.0.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.9.tar.bz2.md5">owncloud-9.0.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.9.zip.md5">owncloud-9.0.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.9.tar.bz2.sha256">owncloud-9.0.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.9.zip.sha256">owncloud-9.0.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.9.tar.bz2.asc">owncloud-9.0.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.9.zip.asc">owncloud-9.0.9.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<a name="latest8.2"></a></li>
<h3>Version 8.2.11 <small>Apr 18 2017</small></h3></li>
<ul>
<li>[major] Use proxy settings when connecting to remote shares - <a href="https://github.com/owncloud/core/issues/27410">core/#27410</a></li>
<li>[major] Fix issue with non-deletable SMB folders when trashbin is disabled - <a href="https://github.com/owncloud/core/issues/27101">core/#27101</a></li>
<li>[minor] Updated ca-bundle.crt - <a href="https://github.com/owncloud/core/issues/27513">core/#27513</a></li>
<li>[minor] Fix inconsistent default value for share dialog user enumeration setting - <a href="https://github.com/owncloud/core/issues/27224">core/#27224</a></li>
<li>[minor] Fix small autoloader issue in rare situations - <a href="https://github.com/owncloud/core/issues/27108">core/#27108</a></li>
<li>[minor] Fix log message with monochrome BMP preview - <a href="https://github.com/owncloud/core/issues/27044">core/#27044</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.11.tar.bz2">owncloud-8.2.11.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.11.zip">owncloud-8.2.11.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.11.tar.bz2.md5">owncloud-8.2.11.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.11.zip.md5">owncloud-8.2.11.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.11.tar.bz2.sha256">owncloud-8.2.11.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.11.zip.sha256">owncloud-8.2.11.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.11.tar.bz2.asc">owncloud-8.2.11.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.11.zip.asc">owncloud-8.2.11.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.4 <small>Feb 2 2017</small></h3></li>
<ul>
<li>[major] Make error message for password reset form more generic - <a href="https://github.com/owncloud/core/issues/27011">core/#27011</a></li>
<li>[major] When sharing autocomplete is disabled, also disable for the email field - <a href="https://github.com/owncloud/core/issues/26504">core/#26504</a></li>
<li>[major] Add command to clean up invalid/expired remote storages - <a href="https://github.com/owncloud/core/issues/26379">core/#26379</a></li>
<li>[major] Fix encryption key storage when using LDAP home folder rules - <a href="https://github.com/owncloud/core/issues/26820">core/#26820</a></li>
<li>[major] Properly react on memcache errors - <a href="https://github.com/owncloud/core/issues/25692">core/#25692</a></li>
<li>[major] Fix random normalizedPathCache log messages / garbage collection issues from PHP 7 - <a href="https://github.com/owncloud/core/issues/22370">core/#22370</a></li>
<li>[major] Properly deal with inconsistent LDAP/memcache or user/group manager responses - <a href="https://github.com/owncloud/core/issues/26871">core/#26871</a></li>
<li>[major] Added configreport app which will help with better bug reports - <a href="https://github.com/owncloud/configreport/issues/6">configreport/#6</a></li>
<li>[minor] Fix syncing of file names with colon followed by a number - <a href="https://github.com/owncloud/core/issues/25479">core/#25479</a></li>
<li>[minor] Prevent empty user uid from LDAP - <a href="https://github.com/owncloud/user_ldap/issues/6">user_ldap/#6</a></li>
<li>[minor] Prevent repeated log messages when dealing with broken picture files - <a href="https://github.com/owncloud/core/issues/26758">core/#26758</a></li>
<li>[minor] Fix group-enable option in apps page when memcache is enabled - <a href="https://github.com/owncloud/core/issues/26638">core/#26638</a></li>
<li>[minor] Add AVMaxFileSize config option - <a href="https://github.com/owncloud/files_antivirus/issues/133">files_antivirus/#133</a></li>
<li>[minor] Reduce number of federated share requests when dealing with non-existing entries - <a href="https://github.com/owncloud/core/issues/26324">core/#26324</a></li>
<li>[minor] Remove obsolete legacy storage repair routine - <a href="https://github.com/owncloud/core/issues/26774">core/#26774</a></li>
<li>[minor] Fix broken remote avatar image in activities tab - <a href="https://github.com/owncloud/activity/issues/529">activity/#529</a></li>
<li>[minor] When grouping duplicate shares, sort by stime then id - <a href="https://github.com/owncloud/core/issues/25830">core/#25830</a></li>
<li>[minor] Make file upload post hooks consistent between chunking and non-chunking mode - <a href="https://github.com/owncloud/core/issues/26387">core/#26387</a></li>
<li>[minor] Fix wrong German translation in upload progress bar by using momentjs library - <a href="https://github.com/owncloud/core/issues/26804">core/#26804</a></li>
<li>[minor] Skip unavailable storages in background file scan instead of failing - <a href="https://github.com/owncloud/core/issues/26055">core/#26055</a></li>
<li>[minor] Update PHP 7.1 incompatibility warning - <a href="https://github.com/owncloud/core/issues/26982">core/#26982</a></li>
<li>[minor] Warning notification when uploading 4+ GB file in IE11 - <a href="https://github.com/owncloud/core/issues/27004">core/#27004</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.4.tar.bz2">owncloud-9.1.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.4.zip">owncloud-9.1.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.4.tar.bz2.md5">owncloud-9.1.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.4.zip.md5">owncloud-9.1.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.4.tar.bz2.sha256">owncloud-9.1.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.4.zip.sha256">owncloud-9.1.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.4.tar.bz2.asc">owncloud-9.1.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.4.zip.asc">owncloud-9.1.4.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.8 <small>Feb 2 2017</small></h3></li>
<ul>
<li>[major] Make error message for password reset form more generic - <a href="https://github.com/owncloud/core/issues/27011">core/#27011</a></li>
<li>[major] When sharing autocomplete is disabled, also disable for the email field - <a href="https://github.com/owncloud/core/issues/26504">core/#26504</a></li>
<li>[major] Add command to clean up invalid/expired remote storages - <a href="https://github.com/owncloud/core/issues/26379">core/#26379</a></li>
<li>[major] Fix encryption key storage when using LDAP home folder rules - <a href="https://github.com/owncloud/core/issues/26820">core/#26820</a></li>
<li>[major] Properly react on memcache errors - <a href="https://github.com/owncloud/core/issues/25692">core/#25692</a></li>
<li>[major] Fix performance regression with many received shares - <a href="https://github.com/owncloud/core/issues/26912">core/#26912</a></li>
<li>[major] Fix random normalizedPathCache log messages / garbage collection issues from PHP 7 - <a href="https://github.com/owncloud/core/issues/22370">core/#22370</a></li>
<li>[major] Prevent LDAP avatar to be duplicated repeatedly in vCard - <a href="https://github.com/owncloud/core/issues/26242">core/#26242</a></li>
<li>[major] Added configreport app which will help with better bug reports - <a href="https://github.com/owncloud/configreport/issues/6">configreport/#6</a></li>
<li>[minor] Fix syncing of file names with colon followed by a number - <a href="https://github.com/owncloud/core/issues/25479">core/#25479</a></li>
<li>[minor] Prevent empty user uid from LDAP - <a href="https://github.com/owncloud/user_ldap/issues/6">user_ldap/#6</a></li>
<li>[minor] Prevent repeated log messages when dealing with broken picture files - <a href="https://github.com/owncloud/core/issues/26758">core/#26758</a></li>
<li>[minor] Fix group-enable option in apps page when memcache is enabled - <a href="https://github.com/owncloud/core/issues/26638">core/#26638</a></li>
<li>[minor] Add AVMaxFileSize config option - <a href="https://github.com/owncloud/files_antivirus/issues/133">files_antivirus/#133</a></li>
<li>[minor] Reduce number of federated share requests when dealing with non-existing entries - <a href="https://github.com/owncloud/core/issues/26324">core/#26324</a></li>
<li>[minor] Remove obsolete legacy storage repair routine - <a href="https://github.com/owncloud/core/issues/26774">core/#26774</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.8.tar.bz2">owncloud-9.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.8.zip">owncloud-9.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.8.tar.bz2.md5">owncloud-9.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.8.zip.md5">owncloud-9.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.8.tar.bz2.sha256">owncloud-9.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.8.zip.sha256">owncloud-9.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.8.tar.bz2.asc">owncloud-9.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.8.zip.asc">owncloud-9.0.8.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.10 <small>Feb 2 2017</small></h3></li>
<ul>
<li>[major] Make error message for password reset form more generic - <a href="https://github.com/owncloud/core/issues/27011">core/#27011</a></li>
<li>[major] When sharing autocomplete is disabled, also disable for the email field - <a href="https://github.com/owncloud/core/issues/26504">core/#26504</a></li>
<li>[major] Fix LDAP "undefined OfflineUser::composeAndStoreDisplayName()" - <a href="https://github.com/owncloud/core/issues/25588">core/#25588</a></li>
<li>[minor] Prevent repeated log messages when dealing with broken picture files - <a href="https://github.com/owncloud/core/issues/26758">core/#26758</a></li>
<li>[minor] Add AVMaxFileSize config option - <a href="https://github.com/owncloud/files_antivirus/issues/133">files_antivirus/#133</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.10.tar.bz2">owncloud-8.2.10.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.10.zip">owncloud-8.2.10.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.10.tar.bz2.md5">owncloud-8.2.10.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.10.zip.md5">owncloud-8.2.10.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.10.tar.bz2.sha256">owncloud-8.2.10.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.10.zip.sha256">owncloud-8.2.10.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.10.tar.bz2.asc">owncloud-8.2.10.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.10.zip.asc">owncloud-8.2.10.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<a name="latest8.1"></a></li>
<h3>Version 8.1.12 <small>Feb 2 2017</small></h3></li>
<ul>
<li>[major] Make error message for password reset form more generic - <a href="https://github.com/owncloud/core/issues/27011">core/#27011</a></li>
<li>[major] When sharing autocomplete is disabled, also disable for the email field - <a href="https://github.com/owncloud/core/issues/26504">core/#26504</a></li>
<li>[minor] Prevent repeated log messages when dealing with broken picture files - <a href="https://github.com/owncloud/core/issues/26758">core/#26758</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.12.tar.bz2">owncloud-8.1.12.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.12.zip">owncloud-8.1.12.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.12.tar.bz2.md5">owncloud-8.1.12.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.12.zip.md5">owncloud-8.1.12.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.12.tar.bz2.sha256">owncloud-8.1.12.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.12.zip.sha256">owncloud-8.1.12.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.12.tar.bz2.asc">owncloud-8.1.12.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.12.zip.asc">owncloud-8.1.12.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.3 <small>Dec 13 2016</small></h3></li>
<ul>
<li>[major] UI: File list now works properly with many hidden entries - <a href="https://github.com/owncloud/core/issues/26518">core/#26518</a></li>
<li>[major] Transfer ownership fails in some sharing scenario - <a href="https://github.com/owncloud/core/issues/26523">core/#26523</a></li>
<li>[major] Transfer ownership fails if external storage with user-specified password - <a href="https://github.com/owncloud/core/issues/26530">core/#26530</a></li>
<li>[major] Transfer ownership fails with file shares with invalid permissions - <a href="https://github.com/owncloud/core/issues/26541">core/#26541</a></li>
<li>[major] Transfer ownership must skip trashed shares - <a href="https://github.com/owncloud/core/issues/26525">core/#26525</a></li> 
<li>[major] Versions on external storage never expire - <a href="https://github.com/owncloud/core/issues/24161">core/#24161</a></li>
<li>[major] Properly convert public upload OCS params - <a href="https://github.com/owncloud/core/issues/26691">core/#26691</a></li>
<li>[major] Properly load object store apps at install time when required in config - <a href="https://github.com/owncloud/core/issues/26299">core/#26299</a></li>
<li>[major] Fix issue in sharing API that can happen with Galera Cluster - <a href="https://github.com/owncloud/core/issues/26700">core/#26700</a></li>
<li>[major] Cannot delete file in share link from global external storage - <a href="https://github.com/owncloud/core/issues/25618">core/#25618</a></li>
<li>[major] Fix issue where first run wizard made web UI unusable in IE11 - <a href="https://github.com/owncloud/core/issues/26438">core/#26438</a></li>
<li>[major] Cannot upload to federated share when only create/update permission given - <a href="https://github.com/owncloud/core/issues/26173">core/#26173</a></li>
<li>[major] Auth header in new DAV endpoint can break with Windows Webdav - <a href="https://github.com/owncloud/core/issues/26412">core/#26412</a></li>
<li>[minor] Transfer ownership don't bail out on error - <a href="https://github.com/owncloud/core/issues/26524">core/#26524</a></li>
<li>[minor] Don't scan received shares in OCC files scan or background jobs - <a href="https://github.com/owncloud/core/issues/26590">core/#26590</a></li>
<li>[minor] Remove useless warning in log when accessing public shares - <a href="https://github.com/owncloud/core/issues/25455">core/#25455</a></li>
<li>[minor] Fix disappearance of share info when clicking favorite star - <a href="https://github.com/owncloud/core/issues/26241">core/#26241</a></li>
<li>[minor] Don't bother fetching preview images if previews disabled in config.php - <a href="https://github.com/owncloud/core/issues/26705">core/#26705</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.3.tar.bz2">owncloud-9.1.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.3.zip">owncloud-9.1.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.3.tar.bz2.md5">owncloud-9.1.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.3.zip.md5">owncloud-9.1.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.3.tar.bz2.sha256">owncloud-9.1.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.3.zip.sha256">owncloud-9.1.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.3.tar.bz2.asc">owncloud-9.1.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.3.zip.asc">owncloud-9.1.3.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.7 <small>Dec 13 2016</small></h3></li>
<ul>
<li>[major] Transfer ownership fails in some sharing scenario - <a href="https://github.com/owncloud/core/issues/26523">core/#26523</a></li>
<li>[major] Transfer ownership fails if external storage with user-specified password - <a href="https://github.com/owncloud/core/issues/26530">core/#26530</a></li>
<li>[major] Transfer ownership fails with file shares with invalid permissions - <a href="https://github.com/owncloud/core/issues/26541">core/#26541</a></li>
<li>[major] Transfer ownership must skip trashed shares - <a href="https://github.com/owncloud/core/issues/26525">core/#26525</a></li>
<li>[major] Versions on external storage never expire - <a href="https://github.com/owncloud/core/issues/24161">core/#24161</a></li>
<li>[major] Properly convert public upload OCS params - <a href="https://github.com/owncloud/core/issues/26691">core/#26691</a></li>
<li>[major] Properly load object store apps at install time when required in config - <a href="https://github.com/owncloud/core/issues/26299">core/#26299</a></li>
<li>[major] Fix issue in sharing API that can happen with Galera Cluster - <a href="https://github.com/owncloud/core/issues/26700">core/#26700</a></li>
<li>[major] Cannot delete file in share link from global external storage - <a href="https://github.com/owncloud/core/issues/25618">core/#25618</a></li>
<li>[major] Auth header in new DAV endpoint can break with Windows Webdav - <a href="https://github.com/owncloud/core/issues/26412">core/#26412</a></li>
<li>[minor] Transfer ownership don't bail out on error - <a href="https://github.com/owncloud/core/issues/26524">core/#26524</a></li>
<li>[minor] Don't scan received shares in occ files:scan or background jobs - <a href="https://github.com/owncloud/core/issues/26590">core/#26590</a></li>
<li>[minor] Fix disappearance of share info when clicking favorite star - <a href="https://github.com/owncloud/core/issues/26241">core/#26241</a></li>
<li>[minor] Don't bother fetching preview images if previews disabled in config.php - <a href="https://github.com/owncloud/core/issues/26705">core/#26705</a></li>
<li>[minor] Fix Webdav auth realm - <a href="https://github.com/owncloud/core/issues/26721">core/#26721</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.7.tar.bz2">owncloud-9.0.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.7.zip">owncloud-9.0.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.7.tar.bz2.md5">owncloud-9.0.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.7.zip.md5">owncloud-9.0.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.7.tar.bz2.sha256">owncloud-9.0.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.7.zip.sha256">owncloud-9.0.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.7.tar.bz2.asc">owncloud-9.0.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.7.zip.asc">owncloud-9.0.7.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.2 <small>Nov 8 2016</small></h3></li>
<ul>
<li>Core: Adjusted documentation link to issue template - <a href="https://github.com/owncloud/core/issues/26087">core/#26087</a></li>
<li>Core: Display feedback in users page when changing password - <a href="https://github.com/owncloud/core/issues/25532">core/#25532</a></li>
<li>Core: Fix mime type detection in hidden directories - <a href="https://github.com/owncloud/core/issues/26133">core/#26133</a></li>
<li>Core: Change forum URL to central - <a href="https://github.com/owncloud/core/issues/25644">core/#25644</a></li>
<li>Core: Fix share array format passed to "post_unshareFromSelf" hook - <a href="https://github.com/owncloud/core/issues/26390">core/#26390</a></li>
<li>Core: Release mount info memory after running background jobs - <a href="https://github.com/owncloud/core/issues/26223">core/#26223</a></li>
<li>Core: Improve users page performance by not sorting after every add - <a href="https://github.com/owncloud/core/issues/26234">core/#26234</a></li>
<li>Core: Escape special chars in some queries - <a href="https://github.com/owncloud/core/issues/25429">core/#25429</a></li>
<li>Core: Redirect to two factor challenge page when only a single provider exists - <a href="https://github.com/owncloud/core/issues/26134">core/#26134</a></li>
<li>Core: Fix bogus PasswordLoginForbidden DAV error when logging in as non-existing user - <a href="https://github.com/owncloud/core/issues/26123">core/#26123</a></li>
<li>Core: Change the minimum log level to FATAL - <a href="https://github.com/owncloud/core/issues/26131">core/#26131</a></li>
<li>Core: Fix issue with "(2)" appearing on shares when querying avatar with wrong casing - <a href="https://github.com/owncloud/core/issues/26271">core/#26271</a></li>
<li>Core: Enabling an app now also analyzes dependencies at this time instead of only at install - <a href="https://github.com/owncloud/core/issues/26295">core/#26295</a></li>
<li>Core: Reuse cached app info to avoid high load on some environments - <a href="https://github.com/owncloud/core/issues/25603">core/#25603</a></li>
<li>Core: Show warning instead of exception when trying to run ownCloud on Windows - <a href="https://github.com/owncloud/core/issues/26208">core/#26208</a></li>
<li>Core: Fix misleading SSL/TLS SMTP email configuration - <a href="https://github.com/owncloud/core/issues/26447">core/#26447</a></li>
<li>Core: Fix malformed attribute in files app page - <a href="https://github.com/owncloud/core/issues/26480">core/#26480</a></li>
<li>DAV: Improve chunk assembly performance for new DAV endpoint - <a href="https://github.com/owncloud/core/issues/26062">core/#26062</a></li>
<li>DAV: New chunking now returns Etag and OC-Etag on the final MOVE - <a href="https://github.com/owncloud/core/issues/25682">core/#25682</a></li>
<li>DAV: Do not print exception messages in HTML - <a href="https://github.com/owncloud/core/issues/26460">core/#26460</a></li>
<li>DAV: Sanitize length headers when validating quota - <a href="https://github.com/owncloud/core/issues/26366">core/#26366</a></li>
<li>Files: Allow uploading empty files in the web UI - <a href="https://github.com/owncloud/core/issues/19116">core/#19116</a></li>
<li>Files: Properly translate file summary in lists - <a href="https://github.com/owncloud/core/issues/26221">core/#26221</a></li>
<li>Files: Exclude more invalid chars in path - <a href="https://github.com/owncloud/core/issues/26461">core/#26461</a></li>
<li>Sharing: Let the share owner increase permissions - <a href="https://github.com/owncloud/core/issues/25542">core/#25542</a></li>
<li>Federation: Fix sharing with remote user names containing spaces - <a href="https://github.com/owncloud/core/issues/25955">core/#25955</a></li>
<li>Federation: Save some memory in sync job by releasing mount info after each user - <a href="https://github.com/owncloud/core/issues/26204">core/#26204</a></li>
<li>Federation: Fix federated address book syncing by using the correct background job name - <a href="https://github.com/owncloud/core/issues/26202">core/#26202</a></li>
<li>CalDAV: Add Schedule and IMip plugins when receiving webdav v1 api calendar calls - <a href="https://github.com/owncloud/core/issues/23600">core/#23600</a></li>
<li>CardDAV: Unset photo before setting a new one - <a href="https://github.com/owncloud/core/issues/26242">core/#26242</a></li>
<li>CardDAV: Fix for birthday entries - <a href="https://github.com/owncloud/core/issues/25636">core/#25636</a></li>
<li>CardDAV: Limit image export mime types - <a href="https://github.com/owncloud/core/issues/26459">core/#26459</a></li>
<li>Updater: Fix web UI update in some environments - <a href="https://github.com/owncloud/updater/issues/378">updater/#378</a></li>
<li>Updater: Retrigger integrity check after update - <a href="https://github.com/owncloud/updater/issues/405">updater/#405</a></li>
<li>User_LDAP: Added OCC command to update group mappings - <a href="https://github.com/owncloud/user_ldap/issues/14">user_ldap/#14</a></li>
<li>User_LDAP: Fix issue with "(2)" appearing on shares when refreshing users in some scenarios - <a href="https://github.com/owncloud/core/issues/25718">core/#25718</a></li>
<li>User_external: Double verify the SMB response - <a href="https://github.com/owncloud/apps/issues/2198">apps/#2198</a></li>
<li>Firstrunwizard: Only display the wizard when in files app - <a href="https://github.com/owncloud/firstrunwizard/issues/52">firstrunwizard/#52</a></li>
<li>Gallery: Do not display technical error messages - <a href="https://github.com/owncloud/gallery/issues/707">gallery/#707</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.2.tar.bz2">owncloud-9.1.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.2.zip">owncloud-9.1.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.2.tar.bz2.md5">owncloud-9.1.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.2.zip.md5">owncloud-9.1.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.2.tar.bz2.sha256">owncloud-9.1.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.2.zip.sha256">owncloud-9.1.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.2.tar.bz2.asc">owncloud-9.1.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.2.zip.asc">owncloud-9.1.2.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.6 <small>Nov 8 2016</small></h3></li>
<ul>
<li>Core: Adjusted documentation link to issue template - <a href="https://github.com/owncloud/core/issues/26087">core/#26087</a></li>
<li>Core: Display feedback in users page when changing password - <a href="https://github.com/owncloud/core/issues/25532">core/#25532</a></li>
<li>Core: Fix mime type detection in hidden directories - <a href="https://github.com/owncloud/core/issues/26133">core/#26133</a></li>
<li>Core: Change forum URL to central - <a href="https://github.com/owncloud/core/issues/25644">core/#25644</a></li>
<li>Core: Fix share array format passed to "post_unshareFromSelf" hook - <a href="https://github.com/owncloud/core/issues/26389">core/#26389</a></li>
<li>Core: Release mount info memory after running background jobs - <a href="https://github.com/owncloud/core/issues/26223">core/#26223</a></li>
<li>Core: Improve users page performance by not sorting after every add - <a href="https://github.com/owncloud/core/issues/26234">core/#26234</a></li>
<li>Core: Escape special chars in some queries - <a href="https://github.com/owncloud/core/issues/25429">core/#25429</a></li>
<li>Core: Fix misleading SSL/TLS SMTP email configuration - <a href="https://github.com/owncloud/core/issues/26447">core/#26447</a></li>
<li>DAV: Do not print exception messages in HTML - <a href="https://github.com/owncloud/core/issues/26460">core/#26460</a></li>
<li>DAV: Sanitize length headers when validating quota - <a href="https://github.com/owncloud/core/issues/26366">core/#26366</a></li>
<li>Files: Allow uploading empty files in the web UI - <a href="https://github.com/owncloud/core/issues/19116">core/#19116</a></li>
<li>Files: Exclude more invalid chars in path - <a href="https://github.com/owncloud/core/issues/26461">core/#26461</a></li>
<li>Sharing: Let the share owner increase permissions - <a href="https://github.com/owncloud/core/issues/25542">core/#25542</a></li>
<li>Federation: Fix sharing with remote user names containing spaces - <a href="https://github.com/owncloud/core/issues/25955">core/#25955</a></li>
<li>Federation: Save some memory in sync job by releasing mount info after each user - <a href="https://github.com/owncloud/core/issues/26204">core/#26204</a></li>
<li>CardDAV: Unset photo before setting a new one - <a href="https://github.com/owncloud/core/issues/26242">core/#26242</a></li>
<li>CardDAV: Limit image export mime types - <a href="https://github.com/owncloud/core/issues/26459">core/#26459</a></li>
<li>Updater: Fix web UI update in some environments - <a href="https://github.com/owncloud/updater/issues/378">updater/#378</a></li>
<li>Updater: Retrigger integrity check after update - <a href="https://github.com/owncloud/updater/issues/405">updater/#405</a></li>
<li>User_LDAP: Added OCC command to update group mappings - <a href="https://github.com/owncloud/user_ldap/issues/14">user_ldap/#14</a></li>
<li>User_external: Double verify the SMB response - <a href="https://github.com/owncloud/apps/issues/2198">apps/#2198</a></li>
<li>Antivirus: Fix background scan - <a href="https://github.com/owncloud/files_antivirus/issues/128">files_antivirus/#128</a></li>
<li>Gallery: Do not display technical error messages - <a href="https://github.com/owncloud/gallery/issues/707">gallery/#707</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.6.tar.bz2">owncloud-9.0.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.6.zip">owncloud-9.0.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.6.tar.bz2.md5">owncloud-9.0.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.6.zip.md5">owncloud-9.0.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.6.tar.bz2.sha256">owncloud-9.0.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.6.zip.sha256">owncloud-9.0.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.6.tar.bz2.asc">owncloud-9.0.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.6.zip.asc">owncloud-9.0.6.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.9 <small>Nov 8 2016</small></h3></li>
<ul>
<li>Core: Adjusted documentation link to issue template - <a href="https://github.com/owncloud/core/issues/26087">core/#26087</a></li>
<li>Core: Display feedback in users page when changing password - <a href="https://github.com/owncloud/core/issues/25532">core/#25532</a></li>
<li>Core: Fix mime type detection in hidden directories - <a href="https://github.com/owncloud/core/issues/26133">core/#26133</a></li>
<li>Core: Change forum URL to central - <a href="https://github.com/owncloud/core/issues/25644">core/#25644</a></li>
<li>Core: Fix unshare from self etag propagation - <a href="https://github.com/owncloud/core/issues/26346">core/#26346</a></li>
<li>Core: Fix misleading SSL/TLS SMTP email configuration - <a href="https://github.com/owncloud/core/issues/26447">core/#26447</a></li>
<li>DAV: Sanitize length headers when validating quota - <a href="https://github.com/owncloud/core/issues/26366">core/#26366</a></li>
<li>Updater: Fix signature data not found error when updating to 9.0 - <a href="https://github.com/owncloud/updater/issues/384">updater/#384</a></li>
<li>Updater: Clicking notification now updates doc in new tab - <a href="https://github.com/owncloud/core/issues/26260">core/#26260</a></li>
<li>User_external: Double verify the SMB response - <a href="https://github.com/owncloud/apps/issues/2198">apps/#2198</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.9.tar.bz2">owncloud-8.2.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.9.zip">owncloud-8.2.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.9.tar.bz2.md5">owncloud-8.2.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.9.zip.md5">owncloud-8.2.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.9.tar.bz2.sha256">owncloud-8.2.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.9.zip.sha256">owncloud-8.2.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.9.tar.bz2.asc">owncloud-8.2.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.9.zip.asc">owncloud-8.2.9.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.11 <small>Nov 8 2016</small></h3></li>
<ul>
<li>Core: Adjusted documentation link to issue template - <a href="https://github.com/owncloud/core/issues/26087">core/#26087</a></li>
<li>Core: Fix misleading SSL/TLS SMTP email configuration - <a href="https://github.com/owncloud/core/issues/26447">core/#26447</a></li>
<li>DAV: Sanitize length headers when validating quota - <a href="https://github.com/owncloud/core/issues/26366">core/#26366</a></li>
<li>Updater: Fixed to properly use update server URL from config - <a href="https://github.com/owncloud/updater/issues/381">updater/#381</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.11.tar.bz2">owncloud-8.1.11.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.11.zip">owncloud-8.1.11.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.11.tar.bz2.md5">owncloud-8.1.11.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.11.zip.md5">owncloud-8.1.11.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.11.tar.bz2.sha256">owncloud-8.1.11.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.11.zip.sha256">owncloud-8.1.11.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.11.tar.bz2.asc">owncloud-8.1.11.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.11.zip.asc">owncloud-8.1.11.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<a name="latest8.0"></a></li>
<h3>Version 8.0.16 <small>Nov 8 2016</small></h3></li>
<ul>
<li>Core: Adjusted documentation link to issue template - <a href="https://github.com/owncloud/core/issues/26087">core/#26087</a></li>
<li>DAV: Sanitize length headers when validating quota - <a href="https://github.com/owncloud/core/issues/26366">core/#26366</a></li>
<li>Updater: Fixed to properly use update server URL from config - <a href="https://github.com/owncloud/updater/issues/382">updater/#382</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.16.tar.bz2">owncloud-8.0.16.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.16.zip">owncloud-8.0.16.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.16.tar.bz2.md5">owncloud-8.0.16.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.16.zip.md5">owncloud-8.0.16.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.16.tar.bz2.sha256">owncloud-8.0.16.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.16.zip.sha256">owncloud-8.0.16.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.16.tar.bz2.asc">owncloud-8.0.16.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.16.zip.asc">owncloud-8.0.16.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.


<h3>Version 9.1.1 <small>Sep 20 2016</small></h3>
<ul>
<li>Core: Remove OCS response body for HTTP status 204 and 304 which disturbed some firewalls - <a href="https://github.com/owncloud/core/issues/25835">core/#25835</a></li>
<li>Core: Map Oracle driver options to params - <a href="https://github.com/owncloud/core/issues/23938">core/#23938</a></li>
<li>Core: Log cron job class name for easier troubleshooting - <a href="https://github.com/owncloud/core/issues/25743">core/#25743</a></li>
<li>Core: Skip version and trash expiry for users that never logged in - <a href="https://github.com/owncloud/core/issues/25741">core/#25741</a></li>
<li>Core: Added white download icons for apps to use - <a href="https://github.com/owncloud/core/issues/23891">core/#23891</a></li>
<li>Core: Fix warning about undefined offset in LoginController - <a href="https://github.com/owncloud/core/issues/25714">core/#25714</a></li>
<li>Core: Fix warning about undefined two factor providers - <a href="https://github.com/owncloud/core/issues/25606">core/#25606</a></li>
<li>Core: Load app before executing its repair steps - <a href="https://github.com/owncloud/core/issues/25674">core/#25674</a></li>
<li>Core: Fix "defaultapp" setting - <a href="https://github.com/owncloud/core/issues/25562">core/#25562</a></li>
<li>Core: Fix issue when opening some file app links received in share emails - <a href="https://github.com/owncloud/core/issues/25200">core/#25200</a></li>
<li>Core: Reconnect DB in occ files:scan to avoid DB timeouts - <a href="https://github.com/owncloud/core/issues/25853">core/#25853</a></li>
<li>Core: Fix status.php page redirection with non-standard port - <a href="https://github.com/owncloud/core/issues/25946">core/#25946</a></li>
<li>Core: Improve users page loading performance with many groups - <a href="https://github.com/owncloud/core/issues/25922">core/#25922</a></li>
<li>Core: Don't log credentials from tryLogin - <a href="https://github.com/owncloud/core/issues/25895">core/#25895</a></li>
<li>Core: Fix password recovery with case sensitive user names - <a href="https://github.com/owncloud/core/issues/25684">core/#25684</a></li>
<li>Core: Fix two factor page cyclic reload with some providers - <a href="https://github.com/owncloud/core/issues/25893">core/#25893</a></li>
<li>Core: Add visual feedback when updating password in users page - <a href="https://github.com/owncloud/core/issues/25532">core/#25532</a></li>
<li>Core: Fix useless warning when overwriting file when open_basedir is set - <a href="https://github.com/owncloud/core/issues/26033">core/#26033</a></li>
<li>Files: Display hidden files in footer and selection summary - <a href="https://github.com/owncloud/core/issues/25855">core/#25855</a></li>
<li>Files: Fix hidden files handling with insertion or selection - <a href="https://github.com/owncloud/core/issues/25856">core/#25856</a></li>
<li>DAV: Faster classification migration in CalDAV - <a href="https://github.com/owncloud/core/issues/25638">core/#25638</a></li>
<li>DAV: Error message about forbidden password login is now logged in debug level - <a href="https://github.com/owncloud/core/issues/25486">core/#25486</a></li>
<li>DAV: Return "data-fingerprint" property on any file related element - <a href="https://github.com/owncloud/core/issues/25482">core/#25482</a></li>
<li>DAV: Fix missing properties in CalDAV subscriptions - <a href="https://github.com/owncloud/core/issues/24469">core/#24469</a></li>
<li>DAV: Improve performance of chunking in new DAV endpoint- <a href="https://github.com/owncloud/core/issues/26072">core/#26072</a></li>
<li>Sharing: Fixed wrong insufficient storage error - <a href="https://github.com/owncloud/core/issues/25582">core/#25582</a></li>
<li>Sharing: Prevent shared storage recursions to avoid memory issues and crashes - <a href="https://github.com/owncloud/core/issues/25557">core/#25557</a></li>
<li>Sharing: Group received shares which have same source and target - <a href="https://github.com/owncloud/core/issues/25113">core/#25113</a></li>
<li>Sharing: Fix sharing over API when dealing with trailing slashes - <a href="https://github.com/owncloud/core/issues/25464">core/#25464</a></li>
<li>Sharing: Fix public upload issue with quota in some scenarios - <a href="https://github.com/owncloud/core/issues/24751">core/#24751</a></li>
<li>Sharing: Fix issue where videos did not play from share links with PHP 7 - <a href="https://github.com/owncloud/core/issues/25483">core/#25483</a></li>
<li>Sharing: Fix BadMethodCallException in cron or scanner - <a href="https://github.com/owncloud/core/issues/25506">core/#25506</a></li>
<li>Sharing: Prevent ghost mounts for deleted/orphaned shares - <a href="https://github.com/owncloud/core/issues/26001">core/#26001</a></li>
<li>Sharing: Fix fatal error for users with older existing shares from OC <= 8.2 - <a href="https://github.com/owncloud/core/issues/25933">core/#25933</a></li>
<li>Sharing: Always allow share owner to increase permissions - <a href="https://github.com/owncloud/core/issues/25542">core/#25542</a></li>
<li>Sharing: Properly retry federated shares after they were unavailable - <a href="https://github.com/owncloud/core/issues/26037">core/#26037</a></li>
<li>Sharing: Reallow spaces in federated share autocomplete in share dialog - <a href="https://github.com/owncloud/core/issues/25955">core/#25955</a></li>
<li>Encryption: OCC command for decryption now doesn't decrypt received shares - <a href="https://github.com/owncloud/core/issues/25599">core/#25599</a></li>
<li>Files_external: Removed reference magic to avoid potential infinite loops - <a href="https://github.com/owncloud/core/issues/25844">core/#25844</a></li>
<li>Files_external: Added conditional trace logging for debugging SMB on production systems - <a href="https://github.com/owncloud/core/issues/25758">core/#25758</a></li>
<li>Files_external: Fix config database issue when using Oracle - <a href="https://github.com/owncloud/core/issues/25764">core/#25764</a></li>
<li>Files_external: SMB subfolders with read-only attribute are now writeable in OC to match spec - <a href="https://github.com/owncloud/core/issues/24608">core/#24608</a></li>
<li>Files_external: Fix "save in session" mode when using Webdav without cookies/session - <a href="https://github.com/owncloud/core/issues/25511">core/#25511</a></li>
<li>Files_external: Respect theme for external folder icon - <a href="https://github.com/owncloud/core/issues/25461">core/#25461</a></li>
<li>Files_external: Disable NFD encoding wrapper that was enabled by mistake for local storages - <a href="https://github.com/owncloud/core/issues/25819">core/#25819</a></li>
<li>Files_external: Some SMB fixes and better debug logging - <a href="https://github.com/owncloud/core/issues/25817">core/#25817</a></li>
<li>Files_trashbin: Add occ command to trigger trashbin retention expiration - <a href="https://github.com/owncloud/core/issues/25878">core/#25878</a></li>
<li>Files_versions: Add occ command to trigger versions retention expiration - <a href="https://github.com/owncloud/core/issues/25878">core/#25878</a></li>
<li>LDAP: Fix login issue when dealing with display name of deleted users - <a href="https://github.com/owncloud/core/issues/23248">core/#23248</a></li>
<li>LDAP: Prevent triggering email change events at login time for unchanged email - <a href="https://github.com/owncloud/core/issues/25553">core/#25553</a></li>
<li>LDAP: Fix login and logging issue with big avatars by reducing their size - <a href="https://github.com/owncloud/core/issues/25857">core/#25857</a></li>
<li>LDAP: Hide LDAP admin password in wizard - <a href="https://github.com/owncloud/core/issues/25702">core/#25702</a></li>
<li>Provisioning API: Fixed issue where subadmins could not change group memberships - <a href="https://github.com/owncloud/core/issues/25496">core/#25496</a></li>
<li>Provisioning API: Added flag to enable/disable two-factor auth for users - <a href="https://github.com/owncloud/core/issues/25876">core/#25876</a></li>
<li>Activity: Fix owner name processing for received federated shares - <a href="https://github.com/owncloud/core/issues/24938">core/#24938</a></li>
<li>Updater: Fix web update issue with filesystem apps - <a href="https://github.com/owncloud/updater/issues/371">updater/#371</a></li>
<li>Antivirus: Fix incorrect report of file size - <a href="https://github.com/owncloud/files_antivirus/issues/120">files_antivirus/#120</a></li>
<li>Antivirus: Fix background scan - <a href="https://github.com/owncloud/files_antivirus/issues/109">files_antivirus/#109</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.1.tar.bz2">owncloud-9.1.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.1.zip">owncloud-9.1.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.1.tar.bz2.md5">owncloud-9.1.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.1.zip.md5">owncloud-9.1.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.1.tar.bz2.sha256">owncloud-9.1.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.1.zip.sha256">owncloud-9.1.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.1.tar.bz2.asc">owncloud-9.1.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.1.zip.asc">owncloud-9.1.1.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.1/owncloud">9.1 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.5 <small>Sep 20 2016</small></h3>
<ul>
<li>Core: Remove OCS response body for HTTP status 204 and 304 which disturbed some firewalls - <a href="https://github.com/owncloud/core/issues/25835">core/#25835</a></li>
<li>Core: Sanitize more data in config report - <a href="https://github.com/owncloud/core/issues/23728">core/#23728</a></li>
<li>Core: Map Oracle driver options to params - <a href="https://github.com/owncloud/core/issues/23938">core/#23938</a></li>
<li>Core: Log cron job class name for easier troubleshooting - <a href="https://github.com/owncloud/core/issues/25743">core/#25743</a></li>
<li>Core: Skip version and trash expiry for users that never logged in - <a href="https://github.com/owncloud/core/issues/25741">core/#25741</a></li>
<li>Core: Added white download icons for apps to use - <a href="https://github.com/owncloud/core/issues/23891">core/#23891</a></li>
<li>Core: Reconnect DB in occ files:scan to avoid DB timeouts - <a href="https://github.com/owncloud/core/issues/25853">core/#25853</a></li>
<li>Core: Fix status.php page redirection with non-standard port - <a href="https://github.com/owncloud/core/issues/25946">core/#25946</a></li>
<li>Core: Improve users page loading performance with many groups - <a href="https://github.com/owncloud/core/issues/25922">core/#25922</a></li>
<li>DAV: Added quota plugin to new DAV files endpoint - <a href="https://github.com/owncloud/core/issues/25646">core/#25646</a></li>
<li>Sharing: Group received shares which have same source and target - <a href="https://github.com/owncloud/core/issues/25113">core/#25113</a></li>
<li>Sharing: Fix public upload issue with quota in some scenarios - <a href="https://github.com/owncloud/core/issues/24751">core/#24751</a></li>
<li>Sharing: Fix sharing over API when dealing with trailing slashes - <a href="https://github.com/owncloud/core/issues/25464">core/#25464</a></li>
<li>Sharing: Fix path sent by shared storage hooks, could affect some apps like gallery - <a href="https://github.com/owncloud/core/issues/23620">core/#23620</a></li>
<li>Sharing: Fix issue where videos did not play from share links with PHP 7 - <a href="https://github.com/owncloud/core/issues/25483">core/#25483</a></li>
<li>Encryption: OCC command for decryption now doesn't decrypt received shares - <a href="https://github.com/owncloud/core/issues/25599">core/#25599</a></li>
<li>Files_external: Removed reference magic to avoid potential infinite loops - <a href="https://github.com/owncloud/core/issues/25844">core/#25844</a></li>
<li>Files_external: Added conditional trace logging for debugging SMB on production systems - <a href="https://github.com/owncloud/core/issues/25758">core/#25758</a></li>
<li>Files_external: Fix config database issue when using Oracle - <a href="https://github.com/owncloud/core/issues/25764">core/#25764</a></li>
<li>Files_external: SMB subfolders with read-only attribute are now writeable in OC to match spec - <a href="https://github.com/owncloud/core/issues/24608">core/#24608</a></li>
<li>Files_external: Fix "save in session" mode when using Webdav without cookies/session - <a href="https://github.com/owncloud/core/issues/25511">core/#25511</a></li>
<li>Files_external: Respect theme for external folder icon - <a href="https://github.com/owncloud/core/issues/25461">core/#25461</a></li>
<li>Files_external: Some SMB fixes and better debug logging - <a href="https://github.com/owncloud/core/issues/25817">core/#25817</a></li>
<li>Files_trashbin: Add occ command to trigger trashbin retention expiration - <a href="https://github.com/owncloud/core/issues/25878">core/#25878</a></li>
<li>Files_versions: Add occ command to trigger versions retention expiration - <a href="https://github.com/owncloud/core/issues/25878">core/#25878</a></li>
<li>LDAP: Fix login issue when dealing with display name of deleted users - <a href="https://github.com/owncloud/core/issues/23248">core/#23248</a></li>
<li>LDAP: Fix login and logging issue with big avatars by reducing their size - <a href="https://github.com/owncloud/core/issues/25857">core/#25857</a></li>
<li>LDAP: Prevent triggering email change events at login time for unchanged email - <a href="https://github.com/owncloud/core/issues/25553">core/#25553</a></li>
<li>LDAP: Hide LDAP admin password in wizard - <a href="https://github.com/owncloud/core/issues/25702">core/#25702</a></li>
<li>Provisioning API: Fixed issue where subadmins could not change group memberships - <a href="https://github.com/owncloud/core/issues/25496">core/#25496</a></li>
<li>Activity: Fix owner name processing for received federated shares - <a href="https://github.com/owncloud/core/issues/24938">core/#24938</a></li>
<li>Updater: Fix web update issue with filesystem apps - <a href="https://github.com/owncloud/updater/issues/371">updater/#371</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.5.tar.bz2">owncloud-9.0.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.5.zip">owncloud-9.0.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.5.tar.bz2.md5">owncloud-9.0.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.5.zip.md5">owncloud-9.0.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.5.tar.bz2.sha256">owncloud-9.0.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.5.zip.sha256">owncloud-9.0.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.5.tar.bz2.asc">owncloud-9.0.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.5.zip.asc">owncloud-9.0.5.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.8 <small>Sep 20 2016</small></h3></li>
<ul>
<li>Core: Sanitize more data in config report - <a href="https://github.com/owncloud/core/issues/23728">core/#23728</a></li>
<li>Core: Reconnect DB in occ files:scan to avoid DB timeouts - <a href="https://github.com/owncloud/core/issues/25853">core/#25853</a></li>
<li>Files_trashbin: Add occ command to trigger trashbin retention expiration - <a href="https://github.com/owncloud/core/issues/25878">core/#25878</a></li>
<li>Sharing: Fix path sent by shared storage hooks, could affect some apps like gallery - <a href="https://github.com/owncloud/core/issues/23620">core/#23620</a></li>
<li>LDAP: Fix user cleanup tool deletion detection accuracy - <a href="https://github.com/owncloud/core/issues/25338">core/#25338</a></li>
<li>Updater: Fix "unable to extract package Array" - <a href="https://github.com/owncloud/updater/issues/134">updater/#134</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.8.tar.bz2">owncloud-8.2.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.8.zip">owncloud-8.2.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.8.tar.bz2.md5">owncloud-8.2.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.8.zip.md5">owncloud-8.2.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.8.tar.bz2.sha256">owncloud-8.2.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.8.zip.sha256">owncloud-8.2.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.8.tar.bz2.asc">owncloud-8.2.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.8.zip.asc">owncloud-8.2.8.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.10 <small>Sep 20 2016</small></h3></li>
<ul>
<li>LDAP: Fix user cleanup tool deletion detection accuracy - <a href="https://github.com/owncloud/core/issues/25338">core/#25338</a></li>
<li>Updater: Properly copy ca-bundle.crt when updating to 8.1.x - <a href="https://github.com/owncloud/updater/issues/164">updater/#164</a></li>
<li>Updater: Fix "unable to extract package Array" - <a href="https://github.com/owncloud/updater/issues/134">updater/#134</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.10.tar.bz2">owncloud-8.1.10.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.10.zip">owncloud-8.1.10.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.10.tar.bz2.md5">owncloud-8.1.10.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.10.zip.md5">owncloud-8.1.10.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.10.tar.bz2.sha256">owncloud-8.1.10.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.10.zip.sha256">owncloud-8.1.10.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.10.tar.bz2.asc">owncloud-8.1.10.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.10.zip.asc">owncloud-8.1.10.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.15 <small>Sep 20 2016</small></h3></li>
<ul>
<li>Updater: Properly copy ca-bundle.crt when updating to 8.1.x - <a href="https://github.com/owncloud/updater/issues/164">updater/#164</a></li>
<li>Updater: Fix "unable to extract package Array" - <a href="https://github.com/owncloud/updater/issues/134">updater/#134</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.15.tar.bz2">owncloud-8.0.15.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.15.zip">owncloud-8.0.15.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.15.tar.bz2.md5">owncloud-8.0.15.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.15.zip.md5">owncloud-8.0.15.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.15.tar.bz2.sha256">owncloud-8.0.15.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.15.zip.sha256">owncloud-8.0.15.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.15.tar.bz2.asc">owncloud-8.0.15.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.15.zip.asc">owncloud-8.0.15.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.1.0 <small>Jul 21 2016</small></h3>

<b>General</b>

<ul>
<li>Background jobs (cron) can now run in parallel</li>
<li>Update notifications in client via API - You can now be notified in your desktop client about available updates for core and apps. The notifications are made available via the notifications API. </li>
<li>Multi bucket support for primary objectstore integration</li>
</ul>

<b>Authentication</b>

<ul>
<li>Pluggable authentication: plugin system that supports different authentication schemes</li>
<li>Token-based authentication</li>
<li>Ability to invalidate sessions</li>
<li>List connected browsers/devices in the personal settings page. Allows the user to disconnect browsers/devices.</li>
<li>Device-specific passwords/tokens, can be generated in the personal page and revoked</li>
<li>Disable users and automatically revoke their sessions</li>
<li>Detect disabled LDAP users or password changes and revoke their sessions</li>
<li>Log in with email address</li>
<li>Configuration option to enforce token-based login outside the web UI</li>
<li>Two Factor authentication plug-in system</li>
<li>OCC command added to (temporarily) disable/enable two-factor authentication for single users </li>
</ul>

<i>Note:</i> the current desktop and mobile client versions do not support two-factor yet, this will be added later.
It is already possible to generate a device specific password and enter that in the current client versions.<br/>

<b>Files app</b>

<ul>
<li>Ability to toggle displaying hidden files</li>
<li>Remember sort order</li>
<li>Permalinks for internal shares</li>
<li>Visual cue when dragging in files app</li>
<li>Autoscroll file list when dragging files</li>
<li>Upload progress estimate</li>
</ul>

<b>Federated sharing</b>

<ul>
<li>Ability to create federated shares with CRUDS permissions</li>
<li>Resharing a federated share does not create a chain of shares any more but connects the share owner's server to the reshare recipient</li>
</ul>

<b>External storage</b>

<ul>
<li>UTF-8 NFD encoding compatibility support for NFD file names stored directly on external storages (new mount option in external storage admin page)</li>
<li>Direct links to the configuration pages for setting up a GDrive or Dropbox app for use with ownCloud </li>
<li>Some performance and memory usage improvements for GDrive, stream download and chunk upload</li>
<li>Performance and memory usage improvements for Dropbox with stream download</li>
<li>GDrive library update provides exponential backoff which will reduce rate limit errors</li>
</ul>

<b>Minor additions</b>

<ul>
<li>Support for print style sheets</li>
<li>Command line based update will now be suggested if the instance is bigger to avoid potential timeouts</li>
<li>Web updater will be disabled if LDAP or shibboleth are installed</li>
<li>DB/app update process now shows better progress information</li>
<li>Added <code>occ files:scan --unscanned</code> to only scan folders that haven't yet been explored on external storages</li>
<li>Chunk cache TTL can now be configured</li>
<li>Added warning for wrongly configured database transactions, helps prevent "database is locked" issues</li>
<li>Use a capped memory cache to reduce memory usage especially in background jobs and the file scanner</li>
<li>Allow login by email</li>
<li>Respect CLASS property in calendar events</li>
<li>Allow addressbook export using VCFExportPlugin</li>
<li>Birthdays are also generated based on shared addressbooks</li>
</ul>

<b>For developers</b>

<ul>
<li>New DAV endpoint with a new chunking protocol aiming to solve many issues like timeouts (not used by clients yet)</li>
<li>New webdav property for share permissions</li>
<li>Background repair steps can be specified info.xml</li>
<li>Background jobs (cron) can now be declared in info.xml </li>
<li>Apps can now define repair steps to run at install/uninstall time </li>
<li>Export contact images via sabre dav plugin </li>
<li>Sabre DAV's browser plugin is available in debug mode to allow easier development around webdav </li>
</ul>

<b>Technical debt</b>

<ul>
<li>PSR-4 autoloading forced for <code>OC\</code> and <code>OCP\</code>, optional for <code>OCA\</code>  docs at https://doc.owncloud.org/server/9.1/developer_manual/app/classloader.html</li>
<li>More cleanup of the sharing code (ongoing)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.1.0.tar.bz2">owncloud-9.1.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.0.zip">owncloud-9.1.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.1.0.tar.bz2.md5">owncloud-9.1.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.0.zip.md5">owncloud-9.1.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.1.0.tar.bz2.sha256">owncloud-9.1.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.0.zip.sha256">owncloud-9.1.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.1.0.tar.bz2.asc">owncloud-9.1.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.1.0.zip.asc">owncloud-9.1.0.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.


<h3>Version 9.0.4 <small>Jul 19 2016</small></h3>
<ul>
<li>Files: Prepend slash to paths in file list UI to prevent issues with links from share emails - <a href="https://github.com/owncloud/core/issues/25200">core/#25200</a></li>
<li>Files: Ignore invalid paths in the JS file list - <a href="https://github.com/owncloud/core/issues/25368">core/#25368</a></li>
<li>Files: Fix system tags search query - <a href="https://github.com/owncloud/core/issues/25380">core/#25380</a></li>
<li>Files: Can now properly create folders in IE11 - <a href="https://github.com/owncloud/core/issues/24453">core/#24453</a></li>
<li>DAV: Additional perm check in Webdav - <a href="https://github.com/owncloud/core/issues/25449">core/#25449</a></li>
<li>DAV: Get only vcards which match both the address book id and the vcard uri - <a href="https://github.com/owncloud/core/issues/25294">core/#25294</a></li>
<li>DAV: Suppress warnings from DAV migration if there's nothing to do - <a href="https://github.com/owncloud/core/issues/25279">core/#25279</a></li>
<li>DAV: Contacts API: replace raw image data with url - <a href="https://github.com/owncloud/core/issues/25081">core/#25081</a></li>
<li>Sharing: Fix issue with share ids not being strings on some envs with public links - <a href="https://github.com/owncloud/core/issues/23066">core/#23066</a></li>
<li>Sharing: Fix permission check issue when creating direct shares to users who already have access through group - <a href="https://github.com/owncloud/core/issues/25359">core/#25359</a></li>
<li>Encryption: Fix misleading decrypt-all command message - <a href="https://github.com/owncloud/core/issues/23695">core/#23695</a></li>
<li>Admin: Adding certificate revocation list and validate if the app certificate is revoked - <a href="https://github.com/owncloud/core/issues/25469">core/#25469</a></li>
<li>Admin: Fixes htaccess check on environments that blocks data folder with redirects - <a href="https://github.com/owncloud/core/issues/25416">core/#25416</a></li>
<li>Admin: Prevent endless reload in admin page during setup check - <a href="https://github.com/owncloud/core/issues/24309">core/#24309</a></li>
<li>Admin: Set content type when downloading log file to force download on some browser - <a href="https://github.com/owncloud/core/issues/25382">core/#25382</a></li>
<li>LDAP: Cap memory usage when iterating over all users, eg in a sync job - <a href="https://github.com/owncloud/core/issues/25323">core/#25323</a></li>
<li>LDAP: Fix user cleanup tool deletion detection accuracy - <a href="https://github.com/owncloud/core/issues/25338">core/#25338</a></li>
<li>Versions: Log version expiration as INFO instead of DEBUG to be consistent with trashbin - <a href="https://github.com/owncloud/core/issues/25367">core/#25367</a></li>
<li>Versions: Hide rollback button in versions app when no permission to revert - <a href="https://github.com/owncloud/core/issues/25288">core/#25288</a></li>
<li>Search: Fix search when operating on share file list sections - <a href="https://github.com/owncloud/core/issues/23774">core/#23774</a></li>
<li>Updater: Now uses web requests, useful for environments without CLI or proc_open access - <a href="https://github.com/owncloud/core/issues/21085">core/#21085</a></li>
<li>Updater: fix cleanup routine that failed with some apps - <a href="https://github.com/owncloud/core/issues/24453">core/#24453</a></li>
<li>Updater: fix integrity check issue when updating from 9.0.0 or 9.0.1 - <a href="https://github.com/owncloud/updater/issues/358">updater/#358</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.4.tar.bz2">owncloud-9.0.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.4.zip">owncloud-9.0.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.4.tar.bz2.md5">owncloud-9.0.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.4.zip.md5">owncloud-9.0.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.4.tar.bz2.sha256">owncloud-9.0.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.4.zip.sha256">owncloud-9.0.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.4.tar.bz2.asc">owncloud-9.0.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.4.zip.asc">owncloud-9.0.4.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.7 <small>Jul 19 2016</small></h3></li>
<ul>
<li>Files: fix locking issue with too long key names - <a href="https://github.com/owncloud/core/issues/25376">core/#25376</a></li>
<li>DAV: Additional perm check in Webdav - <a href="https://github.com/owncloud/core/issues/25449">core/#25449</a></li>
<li>Admin: Set content type when downloading log file to force download on some browser - <a href="https://github.com/owncloud/core/issues/25382">core/#25382</a></li>
<li>Versions: Log version expiration as INFO instead of DEBUG to be consistent with trashbin - <a href="https://github.com/owncloud/core/issues/25367">core/#25367</a></li>
<li>Versions: Hide rollback button in versions app when no permission to revert - <a href="https://github.com/owncloud/core/issues/25288">core/#25288</a></li>
<li>Sharing: Use display name instead of LDAP user id in sharing error messages - <a href="https://github.com/owncloud/core/issues/25305">core/#25305</a></li>
<li>Search: Fix search when operating on share file list sections - <a href="https://github.com/owncloud/core/issues/23774">core/#23774</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.7.tar.bz2">owncloud-8.2.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.7.zip">owncloud-8.2.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.7.tar.bz2.md5">owncloud-8.2.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.7.zip.md5">owncloud-8.2.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.7.tar.bz2.sha256">owncloud-8.2.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.7.zip.sha256">owncloud-8.2.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.7.tar.bz2.asc">owncloud-8.2.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.7.zip.asc">owncloud-8.2.7.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.9 <small>Jul 19 2016</small></h3></li>
<ul>
<li>Files: Properly update quota information when moving files from/to shared folders - <a href="https://github.com/owncloud/core/issues/21236">core/#21236</a></li>
<li>DAV: Additional perm check in Webdav - <a href="https://github.com/owncloud/core/issues/25449">core/#25449</a></li>
<li>DAV: Fix issue with chunks that got cleared too early - <a href="https://github.com/owncloud/core/issues/24653">core/#24653</a></li>
<li>Users: Capped cache in the user database backend - <a href="https://github.com/owncloud/core/issues/24414">core/#24414</a></li>
<li>Admin: Set content type when downloading log file to force download on some browser - <a href="https://github.com/owncloud/core/issues/25382">core/#25382</a></li>
<li>Admin: Added warning in admin page when using unsupported transaction mode - <a href="https://github.com/owncloud/core/issues/24889">core/#24889</a></li>
<li>LDAP: Fix writing to cache when fallback server should be used immediately - <a href="https://github.com/owncloud/core/issues/23282">core/#23282</a></li>
<li>Versions: Prevent rollback when no permission to revert - <a href="https://github.com/owncloud/core/issues/25288">core/#25288</a></li>
<li>Versions: Properly adjust cached size when reverting versions with encryption - <a href="https://github.com/owncloud/core/issues/23928">core/#23928</a></li>
<li>Search: Don't update search onResize - <a href="https://github.com/owncloud/core/issues/24682">core/#24682</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.9.tar.bz2">owncloud-8.1.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.9.zip">owncloud-8.1.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.9.tar.bz2.md5">owncloud-8.1.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.9.zip.md5">owncloud-8.1.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.9.tar.bz2.sha256">owncloud-8.1.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.9.zip.sha256">owncloud-8.1.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.9.tar.bz2.asc">owncloud-8.1.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.9.zip.asc">owncloud-8.1.9.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.14 <small>Jul 19 2016</small></h3></li>
<ul>
<li>Core: Fix app loading order to load authentication apps first, fixes mail app issue - <a href="https://github.com/owncloud/core/issues/25126">core/#25126</a></li>
<li>Files: Fix getting mount points when passing a path to the files:scan command - <a href="https://github.com/owncloud/core/issues/24901">core/#24901</a></li>
<li>DAV: Additional perm check in Webdav - <a href="https://github.com/owncloud/core/issues/25449">core/#25449</a></li>
<li>DAV: Fix issue with chunks that got cleared too early - <a href="https://github.com/owncloud/core/issues/24653">core/#24653</a></li>
<li>Admin: Added warning in admin page when using unsupported transaction mode - <a href="https://github.com/owncloud/core/issues/24889">core/#24889</a></li>
<li>Versions: Prevent rollback when no permission to revert - <a href="https://github.com/owncloud/core/issues/25288">core/#25288</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.14.tar.bz2">owncloud-8.0.14.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.14.zip">owncloud-8.0.14.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.14.tar.bz2.md5">owncloud-8.0.14.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.14.zip.md5">owncloud-8.0.14.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.14.tar.bz2.sha256">owncloud-8.0.14.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.14.zip.sha256">owncloud-8.0.14.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.14.tar.bz2.asc">owncloud-8.0.14.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.14.zip.asc">owncloud-8.0.14.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.


<h3>Version 9.0.3 <small>Jun 30 2016</small></h3>
<ul>
<li>Don't reload page in case of auth errors during setup checks <a href="https://github.com/owncloud/core/issues/25309">core/#25309</a></li>
<li>On mount make sure multiple shares with same target map to unique one <a href="https://github.com/owncloud/core/issues/25244">core/#25244</a></li>
<li>Wrong file size for encrypted file when reverting version <a href="https://github.com/owncloud/core/issues/23928">core/#23928</a></li>
<li>Fix null pointer exception in user_ldap <a href="https://github.com/owncloud/core/issues/25062">core/#25062</a></li>
<li>Catch exceptions while creating shared mounts <a href="https://github.com/owncloud/core/issues/25199">core/#25199</a></li>
<li>Capped cache for the user/group cache <a href="https://github.com/owncloud/core/issues/24958">core/#24958</a></li>
<li>Capped cache for user config <a href="https://github.com/owncloud/core/issues/25165">core/#25165</a></li>
<li>Capped cache for cache info in UserMountCache <a href="https://github.com/owncloud/core/issues/25118">core/#25118</a></li>
<li>Capped cache for normalized paths <a href="https://github.com/owncloud/core/issues/24340">core/#24340</a></li>
<li>Capped cache for encryption's user access list <a href="https://github.com/owncloud/core/issues/25084">core/#25084</a></li>
<li>Capped cache in the user database backend <a href="https://github.com/owncloud/core/issues/24414">core/#24414</a></li>
<li>Improve memory usage when doing operation on users iteratively <a href="https://github.com/owncloud/core/issues/24327">core/#24327</a></li>
<li>Repair job to fix permissions for avatars, fixes missing avatars <a href="https://github.com/owncloud/core/issues/22978">core/#22978</a></li>
<li>Fix OCS Share API path response, UI showing wrong folder names <a href="https://github.com/owncloud/core/issues/24997">core/#24997</a></li>
<li>Fix federated share upload from link share when quota is unlimited <a href="https://github.com/owncloud/core/issues/24961">core/#24961</a></li>
<li>Added warning in admin page when using unsupported transaction mode <a href="https://github.com/owncloud/core/issues/24889">core/#24889</a></li>
<li>Delay files_sharing's registerMountProviders to fix some update issues <a href="https://github.com/owncloud/core/issues/25187">core/#25187</a></li>
<li>Do not recurse link share fetching to avoid endless loops on Oracle <a href="https://github.com/owncloud/core/issues/25160">core/#25160</a></li>
<li>Emit correct signal when disabling an app <a href="https://github.com/owncloud/core/issues/25149">core/#25149</a></li>
<li>Fix app loading order to load authentication apps first, fixes mail app issue <a href="https://github.com/owncloud/core/issues/25126">core/#25126</a></li>
<li>Fix Dropbox error handling to avoid ownCloud believing that there are no files in some cases <a href="https://github.com/owncloud/core/issues/24739">core/#24739</a></li>
<li>Fix grouped input fields, make sure they take precedence <a href="https://github.com/owncloud/core/issues/25143">core/#25143</a></li>
<li>DAV now returns file name with Content-Disposition header for Chrome with XML files <a href="https://github.com/owncloud/core/issues/25052">core/#25052</a></li>
<li>Decrease initially loaded users in users page <a href="https://github.com/owncloud/core/issues/24734">core/#24734</a></li>
<li>Allow empty host when installing on oracle via CLI <a href="https://github.com/owncloud/core/issues/25106">core/#25106</a></li>
<li>Fix duplicate entries in language selector <a href="https://github.com/owncloud/core/issues/24536">core/#24536</a></li>
<li>Fixed dynamic group ldap access <a href="https://github.com/owncloud/core/issues/24950">core/#24950</a></li>
<li>Fix cron job error related to versions <a href="https://github.com/owncloud/core/issues/22450">core/#22450</a></li>
<li>Delay reloading the page if an ajax error occurs, show notification <a href="https://github.com/owncloud/core/issues/25035">core/#25035</a></li>
<li>Move datadir protection check back from .ocdata to htaccess.txt for more accurate check in some setups <a href="https://github.com/owncloud/core/issues/25045">core/#25045</a></li>
<li>Skip scanning for a user when the user is not setup yet <a href="https://github.com/owncloud/core/issues/25044">core/#25044</a></li>
<li>Catch the ForbiddenException from storage wrappers to make sure it gets handled <a href="https://github.com/owncloud/core/issues/24949">core/#24949</a></li>
<li>Fix file not found in web UI when downloading a single file in a folder <a href="https://github.com/owncloud/core/issues/24783">core/#24783</a></li>
<li>Fix 'lost_password_link' from config.php that did not work as expected <a href="https://github.com/owncloud/core/issues/24789">core/#24789</a></li>
<li>Fix thumbnail download issue with external storage due to inaccurate path handling <a href="https://github.com/owncloud/core/issues/21173">core/#21173</a></li>
<li>Fix endless loading loop in public share in some env when password is set <a href="https://github.com/owncloud/core/issues/23066">core/#23066</a></li>
<li>Propagate size changes when running files:scan with explicit path <a href="https://github.com/owncloud/core/issues/24271">core/#24271</a></li>
<li>Properly check for mbstring extension <a href="https://github.com/owncloud/core/issues/24906">core/#24906</a></li>
<li>Enable range requests for public download, fixes video streaming <a href="https://github.com/owncloud/files_videoplayer/issues/45">files_videoplayer/#45</a>, <a href="https://github.com/owncloud/core/issues/24830">core/#24830</a></li>
<li>Fix performance for isLocal in SharedStorage <a href="https://github.com/owncloud/core/issues/24651">core/#24651</a></li>
<li>Clarify filesystem_check_changes in config.sample.php <a href="https://github.com/owncloud/core/issues/24817">core/#24817</a></li>
<li>Fix IApacheBackend issue due to wrong initialization order <a href="https://github.com/owncloud/core/issues/23899">core/#23899</a></li>
<li>Fix SSO + master key encryption issue due to wrong initialization order <a href="https://github.com/owncloud/core/issues/24182">core/#24182</a></li>
<li>Properly check "installed" config field which was a boolean string in some older setups <a href="https://github.com/owncloud/core/issues/24714">core/#24714</a></li>
<li>Remove more sensitive values from log when logging objects <a href="https://github.com/owncloud/core/issues/24328">core/#24328</a></li>
<li>Free up memory when releasing the last shared lock <a href="https://github.com/owncloud/core/issues/24705">core/#24705</a></li>
<li>Fix issue with chunks that got cleared too early <a href="https://github.com/owncloud/core/issues/24653">core/#24653</a></li>
<li>Fix issue with language detection for apps <a href="https://github.com/owncloud/core/issues/24441">core/#24441</a></li>
<li>Do not automatically enable index.php-less urls, use "htaccess.RewriteBase" config <a href="https://github.com/owncloud/core/issues/24539">core/#24539</a></li>
<li>Show proper error message when trying to create users with invalid characters <a href="https://github.com/owncloud/core/issues/24512">core/#24512</a></li>
<li>Updater server URL can now be specified in config.php <a href="https://github.com/owncloud/core/issues/24500">core/#24500</a></li>
<li>Help Translate link in personal settings is wrong <a href="https://github.com/owncloud/core/issues/23594">core/#23594</a></li>
<li>Fix infinite loop issue when moving files over Webdav in some envs <a href="https://github.com/owncloud/core/issues/24318">core/#24318</a></li>
<li>Remove "en@pirate" locale which caused issues <a href="https://github.com/owncloud/core/issues/24545">core/#24545</a></li>
<li>Make getShareFolder use given view instead of static FS, fixes LDAP issues with mail attr <a href="https://github.com/owncloud/core/issues/25150">core/#25150</a></li>
<li>Add support to know where the storage test comes from <a href="https://github.com/owncloud/core/issues/25166">core/#25166</a></li>
<li>Don't update search onResize <a href="https://github.com/owncloud/core/issues/24682">core/#24682</a></li>
<li>Removed repair steps for broken updater repair <a href="https://github.com/owncloud/core/issues/24438">core/#24438</a></li>
<li>Put back pcntl warning <a href="https://github.com/owncloud/core/issues/24295">core/#24295</a></li>
<li>Disable integrity check failure message in UI when check is disabled <a href="https://github.com/owncloud/core/issues/24752">core/#24752</a></li>
<li>Fix LDAP login with encryption after changing password <a href="https://github.com/owncloud/core/issues/24832">core/#24832</a></li>
<li>Fix displaying of the date in the activity panel in the sidebar <a href="https://github.com/owncloud/activity/issues/517">activity/#517</a></li>
<li>Updater: move __apps temp folder into data folder <a href="https://github.com/owncloud/updater/issues/332">updater/#332</a></li>
<li>Fix updater issue when encryption was enabled <a href="https://github.com/owncloud/update/issues/350">update/#350</a></li>
<li>Gallery: tokens are too loose <a href="https://github.com/owncloud/gallery/issues/669">gallery/#669</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.3.tar.bz2">owncloud-9.0.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.3.zip">owncloud-9.0.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.3.tar.bz2.md5">owncloud-9.0.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.3.zip.md5">owncloud-9.0.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.3.tar.bz2.sha256">owncloud-9.0.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.3.zip.sha256">owncloud-9.0.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.3.tar.bz2.asc">owncloud-9.0.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.3.zip.asc">owncloud-9.0.3.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.6 <small>June 30 2016</small></h3>
<ul>
<li>Fix oc_appconfig fetching performance <a href="https://github.com/owncloud/core/issues/25226">core/#25226</a></li>
<li>Wrong file size for encrypted file when reverting version <a href="https://github.com/owncloud/core/issues/23928">core/#23928</a></li>
<li>Fix app loading order to load authentication apps first, fixes mail app issue <a href="https://github.com/owncloud/core/issues/25126">core/#25126</a></li>
<li>Fix occ files:scan locking issue with shared folder <a href="https://github.com/owncloud/core/issues/24507">core/#24507</a></li>
<li>Fix quota update after moving files to shared folder in webinterface <a href="https://github.com/owncloud/core/issues/21236">core/#21236</a></li>
<li>Show a proper error message when handling "storage not available" situations <a href="https://github.com/owncloud/core/issues/25037">core/#25037</a></li>
<li>Fix cron job error related to versions <a href="https://github.com/owncloud/core/issues/22450">core/#22450</a></li>
<li>Fix thumbnail download issue with external storage due to inaccurate path handling <a href="https://github.com/owncloud/core/issues/21173">core/#21173</a></li>
<li>Capped cache for the user/group cache <a href="https://github.com/owncloud/core/issues/24958">core/#24958</a></li>
<li>Capped cache for normalized paths <a href="https://github.com/owncloud/core/issues/24340">core/#24340</a></li>
<li>Fix 'lost_password_link' from config.php that did not work as expected <a href="https://github.com/owncloud/core/issues/24789">core/#24789</a></li>
<li>Fix IApacheBackend issue due to wrong initialization order <a href="https://github.com/owncloud/core/issues/23899">core/#23899</a></li>
<li>Fix SSO + master key encryption issue due to wrong initialization order <a href="https://github.com/owncloud/core/issues/24182">core/#24182</a></li>
<li>Read available l10n files also from theme folder <a href="https://github.com/owncloud/core/issues/23571">core/#23571</a></li>
<li>Propagate size changes when running files:scan with explicit path <a href="https://github.com/owncloud/core/issues/24271">core/#24271</a></li>
<li>Fix performance for isLocal in SharedStorage <a href="https://github.com/owncloud/core/issues/24651">core/#24651</a></li>
<li>Clarify filesystem_check_changes in config.sample.php <a href="https://github.com/owncloud/core/issues/24817">core/#24817</a></li>
<li>Free up memory when releasing the last shared lock <a href="https://github.com/owncloud/core/issues/24704">core/#24704</a></li>
<li>Fix issue with chunks that got cleared too early <a href="https://github.com/owncloud/core/issues/24653">core/#24653</a></li>
<li>Fix federated share checkboxes to correctly display disabled state <a href="https://github.com/owncloud/core/issues/24547">core/#24547</a></li>
<li>LDAP: do not attempt to process user records without display name <a href="https://github.com/owncloud/core/issues/20804">core/#20804</a></li>
<li>Updater server URL can now be specified in config.php <a href="https://github.com/owncloud/core/issues/24500">core/#24500</a></li>
<li>Remove "en@pirate" locale which caused issues <a href="https://github.com/owncloud/core/issues/24545">core/#24545</a></li>
<li>Added warning in admin page when using unsupported transaction mode <a href="https://github.com/owncloud/core/issues/24889">core/#24889</a></li>
<li>Don't update search onResize <a href="https://github.com/owncloud/core/issues/24682">core/#24682</a></li>
<li>Gallery: tokens are too loose <a href="https://github.com/owncloud/gallery/issues/669">gallery/#669</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.6.tar.bz2">owncloud-8.2.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.6.zip">owncloud-8.2.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.6.tar.bz2.md5">owncloud-8.2.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.6.zip.md5">owncloud-8.2.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.6.tar.bz2.sha256">owncloud-8.2.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.6.zip.sha256">owncloud-8.2.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.6.tar.bz2.asc">owncloud-8.2.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.6.zip.asc">owncloud-8.2.6.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.8 <small>May 13 2016</small></h3>
<ul>
	<li>Addressed XSS issues in the files_videoviewer app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.8.tar.bz2">owncloud-8.1.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.8.zip">owncloud-8.1.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.8.tar.bz2.md5">owncloud-8.1.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.8.zip.md5">owncloud-8.1.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.8.tar.bz2.sha256">owncloud-8.1.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.8.zip.sha256">owncloud-8.1.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.8.tar.bz2.asc">owncloud-8.1.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.8.zip.asc">owncloud-8.1.8.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.13 <small>May 13 2016</small></h3>
<ul>
	<li>Addressed XSS issues in the files_videoviewer app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.13.tar.bz2">owncloud-8.0.13.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.13.zip">owncloud-8.0.13.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.13.tar.bz2.md5">owncloud-8.0.13.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.13.zip.md5">owncloud-8.0.13.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.13.tar.bz2.sha256">owncloud-8.0.13.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.13.zip.sha256">owncloud-8.0.13.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.13.tar.bz2.asc">owncloud-8.0.13.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.13.zip.asc">owncloud-8.0.13.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<a name="latest7"></a>
<h3>Version 7.0.15 <small>May 13 2016</small></h3>
<ul>
	<li>Addressed XSS issues in the files_videoviewer app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.tar.bz2">owncloud-7.0.15.tar.bz2</a> or <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.zip">owncloud-7.0.15.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.tar.bz2.md5">owncloud-7.0.15.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.zip.md5">owncloud-7.0.15.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.tar.bz2.sha256">owncloud-7.0.15.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.zip.sha256">owncloud-7.0.15.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.tar.bz2.asc">owncloud-7.0.15.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/7.0/owncloud-7.0.15.zip.asc">owncloud-7.0.15.zip.asc</a></br>
<p>Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">7.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.</p>
<p><strong>Note</strong> that this is the last ownCloud 7.0 update and you should upgrade as soon as possible to ownCloud 8.0 or newer to ensure the security and safety of your data.</p>

<h3>Version 9.0.2 <small>May 4 2016</small></h3>
<ul>
<li>Open sidebar when clicking in the right part of rows in files view - <a href="https://github.com/owncloud/core/issues/23381">#23381</a></li>
<li>user_ldap: Call to a member function setEMailAddress() on a non-object - <a href="https://github.com/owncloud/core/issues/23759">#23759</a></li>
<li>Fatal error in dav app while running cron job - <a href="https://github.com/owncloud/core/issues/23496">#23496</a></li>
<li>Desktop sync fails with big files (OC 8.2.0, client 2.0.2) - <a href="https://github.com/owncloud/core/issues/20261">#20261</a></li>
<li>Wrong image rotation - <a href="https://github.com/owncloud/core/issues/21485">#21485</a></li>
<li>Restrict autoloaded paths to loaded apps (and other enhancements) - <a href="https://github.com/owncloud/core/issues/18839">#18839</a></li>
<li>Exclude autoload_static.php - <a href="https://github.com/owncloud/core/issues/23935">#23935</a></li>
<li>[encryption] Recovery key feature doesn't work when a non-default "User Home Folder Naming Rule" is used - <a href="https://github.com/owncloud/core/issues/23632">#23632</a></li>
<li>Federated sharing: volatile edit permission - <a href="https://github.com/owncloud/core/issues/24032">#24032</a></li>
<li>Transfer ownership with encryption breaks files -> bad signature - <a href="https://github.com/owncloud/core/issues/24095">#24095</a></li>
<li>TextEditor: Checksum not invalidated on file change - <a href="https://github.com/owncloud/core/issues/23782">#23782</a></li>
<li>occ files:scan does not invalidate checksums if file changed on disk. - <a href="https://github.com/owncloud/core/issues/23783">#23783</a></li>
<li>[9.0] handle completely unscanned storages in the background scanner - <a href="https://github.com/owncloud/core/issues/23576">#23576</a></li>
<li>[stable9] Write .htaccess also from CLI - <a href="https://github.com/owncloud/core/issues/24136">#24136</a></li>
<li>Share link: user mail is disappearing after selecting expiration date - <a href="https://github.com/owncloud/core/issues/22947">#22947</a></li>
<li>Folder size not propagated when uploading as share recipient with encryption enabled - <a href="https://github.com/owncloud/core/issues/24105">#24105</a></li>
<li>Can create events in contacts_birthday calendar - <a href="https://github.com/owncloud/core/issues/24154">#24154</a></li>
<li>[stable9] Ignore certificate file if it starts with file:// - <a href="https://github.com/owncloud/core/issues/24172">#24172</a></li>
<li>[stable9] remember email when setting expiration date - <a href="https://github.com/owncloud/core/issues/24149">#24149</a></li>
<li>cron.php does not exit, consumes RAM - <a href="https://github.com/owncloud/core/issues/23621">#23621</a></li>
<li>Cron gives errors on getQuota() on null in apps/files_versions/lib/storage.php on line 691 - <a href="https://github.com/owncloud/core/issues/23513">#23513</a></li>
<li>[9.0] Change the sort order of background jobs to be DESC instead of ASC - <a href="https://github.com/owncloud/core/issues/24196">#24196</a></li>
<li>No "Personal" calendar created for installing user - <a href="https://github.com/owncloud/core/issues/24082">#24082</a></li>
<li>[9.0] dont do optimized size propagation for encrypted files - <a href="https://github.com/owncloud/core/issues/24158">#24158</a></li>
<li>[stable9] on clone Connection, do not take over the existing LDAP resource - <a href="https://github.com/owncloud/core/issues/24236">#24236</a></li>
<li>[stable9] Fix LDAP race conditions - <a href="https://github.com/owncloud/core/issues/24242">#24242</a></li>
<li>Catching undefined exception in versions expire - <a href="https://github.com/owncloud/core/issues/24233">#24233</a></li>
<li>[9.0] Call private cache methods only for `OC\Files\Cache\Cache` - <a href="https://github.com/owncloud/core/issues/24202">#24202</a></li>
<li>"Deadlock found when trying to get lock" in file locking - <a href="https://github.com/owncloud/core/issues/20555">#20555</a></li>
<li>[stable9] don't get the config for the same mount multiple times - <a href="https://github.com/owncloud/core/issues/24259">#24259</a></li>
<li>Scanner doesn't propagate etags any more when file changed - <a href="https://github.com/owncloud/core/issues/24255">#24255</a></li>
<li>Undefined index: extension at /var/www/owncloud/lib/private/installer.php#272 - <a href="https://github.com/owncloud/core/issues/24228">#24228</a></li>
<li>[stable9] Disable pastezone for jquery.fileupload - <a href="https://github.com/owncloud/core/issues/24281">#24281</a></li>
<li>Can't upgrade to 9.0.1 (daily) in CentOS 6.6 - <a href="https://github.com/owncloud/core/issues/24276">#24276</a></li>
<li>[9.0] error out if a local storage isn't setup correctly - <a href="https://github.com/owncloud/core/issues/24289">#24289</a></li>
<li>[Stable 9] Make ownCloud work again in php 7.0.6 - <a href="https://github.com/owncloud/core/issues/24343">#24343</a></li>
<li>After switching to Postgresql changing any activity checkbox checks all of the boxes - <a href="https://github.com/owncloud/core/issues/23761">#23761</a></li>
<li>Upgrade from o.C. 8.2.X to 9.0.X. Cannot access oC if an LDAP user that made a share was deleted from the LDAP server. - <a href="https://github.com/owncloud/core/issues/24090">#24090</a></li>
<li>Update sabre/dav to 3.0.9 for windows 10 support - <a href="https://github.com/owncloud/3rdparty/issues/269">3rdparty/#269</a></li>
<li>Update sabre/dav to 3.0.9 on stable9 - <a href="https://github.com/owncloud/3rdparty/issues/270">3rdparty/#270</a></li>
<li>Spinning wheel OC 9 - <a href="https://github.com/owncloud/activity/issues/481">activity/#481</a></li>
<li>wrong links in RSS feed - <a href="https://github.com/owncloud/activity/issues/508">activity/#508</a></li>
<li>Announcementcenter is listing only the last 5 announcements - <a href="https://github.com/owncloud/announcementcenter/issues/67">announcementcenter/#67</a></li>
<li>Export Addressbook - <a href="https://github.com/owncloud/contacts/issues/248">contacts/#248</a></li>
<li>[stable9] Redirect page if not shown in an iframe - <a href="https://github.com/owncloud/files_pdfviewer/issues/109">files_pdfviewer/#109</a></li>
<li>Fix wrong path to lost password template - <a href="https://github.com/owncloud/templateeditor/issues/43">templateeditor/#43</a></li>
<li>3rdparty folder not overwritten on update - <a href="https://github.com/owncloud/updater/issues/316">updater/#316</a></li>
<li>getExtractionBaseDir should be deleted before code signature is verified - <a href="https://github.com/owncloud/updater/issues/318">updater/#318</a></li>
<li>BrokenUpdaterRepair SQL issue - <a href="https://github.com/owncloud/updater/issues/331">updater/#331</a></li>
<li>Wrong app path when optional PCNTL module was not enabled - <a href="https://github.com/owncloud/updater/issues/335">updater/#335</a></li>
<li>integrity-check command shows error after running updater from 9.0.1 stable to daily stable9 - <a href="https://github.com/owncloud/updater/issues/342">updater/#342</a></li>
<li>updater/update.log has to be stored in the data folder - <a href="https://github.com/owncloud/updater/issues/317">updater/#317</a></li>
<li>3rdparty folder not overwritten on update - <a href="https://github.com/owncloud/updater/issues/316">updater/#316</a></li>
<li>getExtractionBaseDir should be deleted before code signature is verified - <a href="https://github.com/owncloud/updater/issues/318">updater/#318</a></li>
<li>Upgrade from 9.0 to 9.1 fails - <a href="https://github.com/owncloud/updater/issues/336">updater/#336</a></li>
<li>Wrong app path when optional PCNTL module was not enabled - <a href="https://github.com/owncloud/updater/issues/335">updater/#335</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.2.tar.bz2">owncloud-9.0.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.2.zip">owncloud-9.0.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.2.tar.bz2.md5">owncloud-9.0.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.2.zip.md5">owncloud-9.0.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.2.tar.bz2.sha256">owncloud-9.0.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.2.zip.sha256">owncloud-9.0.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.2.tar.bz2.asc">owncloud-9.0.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.2.zip.asc">owncloud-9.0.2.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.5 <small>May 13 2016</small></h3>
<ul>
       <li>webdav / files broken after upgrade to 8.2.4 <a href="https://github.com/owncloud/core/issues/24487">#24487</a></li>
       <li>Addressed XSS issues in the files_videoviewer app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.5.tar.bz2">owncloud-8.2.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.5.zip">owncloud-8.2.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.5.tar.bz2.md5">owncloud-8.2.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.5.zip.md5">owncloud-8.2.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.5.tar.bz2.sha256">owncloud-8.2.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.5.zip.sha256">owncloud-8.2.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.5.tar.bz2.asc">owncloud-8.2.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.5.zip.asc">owncloud-8.2.5.zip.asc</a></br>


<h3>Version 8.2.4 <small>May 4 2016</small></h3>
<ul>
<li>[stable8.2] Remove browser autocomplete in new file menu - <a href="https://github.com/owncloud/core/issues/22927">#22927</a></li>
<li>owncloud-8.2.3.tar.bz2 contains /apps/dav folder - <a href="https://github.com/owncloud/core/issues/22962">#22962</a></li>
<li>The download archive should be named after the name of the current folder - <a href="https://github.com/owncloud/core/issues/22836">#22836</a></li>
<li>[Stable 8.2] Rename and move permissions are set when a file is updatable - <a href="https://github.com/owncloud/core/issues/22842">#22842</a></li>
<li>[stable8.2] Remove disabled autocorrect for new file names - <a href="https://github.com/owncloud/core/issues/23025">#23025</a></li>
<li>Windows Office files via SMB mount through WebDAV is prompting for authentication - <a href="https://github.com/owncloud/core/issues/22596">#22596</a></li>
<li>Received share to local user disappears from Webdav when LDAP server unavailable - <a href="https://github.com/owncloud/core/issues/20536">#20536</a></li>
<li>[stable8.2] Update error text for link passwords - <a href="https://github.com/owncloud/core/issues/22934">#22934</a></li>
<li>Renaming and moving displays an error in public shared folder with edit permissions. - <a href="https://github.com/owncloud/core/issues/21678">#21678</a></li>
<li>Sharing to AD group fails when not all users have logged in - <a href="https://github.com/owncloud/core/issues/22907">#22907</a></li>
<li>"Allow editing" capability in share by link not disabled - <a href="https://github.com/owncloud/core/issues/23325">#23325</a></li>
<li>Full name is not shown just after modifying it in the Personal Page - <a href="https://github.com/owncloud/core/issues/20455">#20455</a></li>
<li>Position of edit options in sharing menu confuses user - <a href="https://github.com/owncloud/core/issues/18163">#18163</a></li>
<li>Password-link shares listed in "Shared in ... with ..." section of sidebar - <a href="https://github.com/owncloud/core/issues/22128">#22128</a></li>
<li>Users with LDAP photos unable to see SMB external storage on OwnCloud Android app - <a href="https://github.com/owncloud/core/issues/21555">#21555</a></li>
<li>Webdav invalid request error with samba share - <a href="https://github.com/owncloud/core/issues/22187">#22187</a></li>
<li>Cannot upload file from OC <= 8.2 through fed share to OC 9.0 with unlimited quota - <a href="https://github.com/owncloud/core/issues/23547">#23547</a></li>
<li>Encryption + ext storage + versions broken - <a href="https://github.com/owncloud/core/issues/23681">#23681</a></li>
<li>Desktop sync fails with big files (OC 8.2.0, client 2.0.2) - <a href="https://github.com/owncloud/core/issues/20261">#20261</a></li>
<li>[stable8.2] Fix conditional check in MySQL setup - <a href="https://github.com/owncloud/core/issues/23807">#23807</a></li>
<li>[stable8.2] Fixes a possible infinite change-dir-loop - <a href="https://github.com/owncloud/core/issues/23984">#23984</a></li>
<li>Orientation for shared images broken - <a href="https://github.com/owncloud/core/issues/20484">#20484</a></li>
<li>[encryption] Recovery key feature doesn't work when a non-default "User Home Folder Naming Rule" is used - <a href="https://github.com/owncloud/core/issues/23632">#23632</a></li>
<li>Share Dialog Problems repeating user list - <a href="https://github.com/owncloud/core/issues/18910">#18910</a></li>
<li>Federated sharing: volatile edit permission - <a href="https://github.com/owncloud/core/issues/24032">#24032</a></li>
<li>Share link: user mail is disappearing after selecting expiration date - <a href="https://github.com/owncloud/core/issues/22947">#22947</a></li>
<li>Cannot upload file from OC <= 8.2 through fed share to OC 9.0 with unlimited quota - <a href="https://github.com/owncloud/core/issues/23547">#23547</a></li>
<li>[stable8.2] Ignore certificate file if it starts with file:// - <a href="https://github.com/owncloud/core/issues/24171">#24171</a></li>
<li>[stable8.2] remember email when setting expiration date - <a href="https://github.com/owncloud/core/issues/24150">#24150</a></li>
<li>Error output when passing --data-dir during command line installation - <a href="https://github.com/owncloud/core/issues/23637">#23637</a></li>
<li>cron.php does not exit, consumes RAM - <a href="https://github.com/owncloud/core/issues/23621">#23621</a></li>
<li>[stable8.2] Fix LDAP race conditions - <a href="https://github.com/owncloud/core/issues/24243">#24243</a></li>
<li>"Deadlock found when trying to get lock" in file locking - <a href="https://github.com/owncloud/core/issues/20555">#20555</a></li>
<li>Undefined index: extension at /var/www/owncloud/lib/private/installer.php#272 - <a href="https://github.com/owncloud/core/issues/24228">#24228</a></li>
<li>[8.2] error out if a local storage isn't setup correctly - <a href="https://github.com/owncloud/core/issues/24288">#24288</a></li>
<li>[Stable 8.2] Make ownCloud work again in php 7.0.6 - <a href="https://github.com/owncloud/core/issues/24344">#24344</a></li>
<li>After switching to Postgresql changing any activity checkbox checks all of the boxes - <a href="https://github.com/owncloud/core/issues/23761">#23761</a></li>
<li>Wrong documentation link (Performance Tuning) - <a href="https://github.com/owncloud/core/issues/22985">#22985</a></li>
<li>Activities not loading (Autoload path not allowed) - <a href="https://github.com/owncloud/activity/issues/491">activity/#491</a></li>
<li>Correct use of passed argument - <a href="https://github.com/owncloud/apps/issues/2157">apps/#2157</a></li>
<li>[stable8.2] Redirect page if not shown in an iframe - <a href="https://github.com/owncloud/files_pdfviewer/issues/110">files_pdfviewer/#110</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.4.tar.bz2">owncloud-8.2.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.4.zip">owncloud-8.2.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.4.tar.bz2.md5">owncloud-8.2.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.4.zip.md5">owncloud-8.2.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.4.tar.bz2.sha256">owncloud-8.2.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.4.zip.sha256">owncloud-8.2.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.4.tar.bz2.asc">owncloud-8.2.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.4.zip.asc">owncloud-8.2.4.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.7 <small>May 4 2016</small></h3>
<ul>
<li>[Stable 8.1] Rename and move permissions are set when a file is updatable - <a href="https://github.com/owncloud/core/issues/22843">#22843</a></li>
<li>[stable8.1] Fix broken scanner call in ajax/scan.php - <a href="https://github.com/owncloud/core/issues/23149">#23149</a></li>
<li>Received share to local user disappears from Webdav when LDAP server unavailable - <a href="https://github.com/owncloud/core/issues/20536">#20536</a></li>
<li>Renaming and moving displays an error in public shared folder with edit permissions. - <a href="https://github.com/owncloud/core/issues/21678">#21678</a></li>
<li>Sharing to AD group fails when not all users have logged in - <a href="https://github.com/owncloud/core/issues/22907">#22907</a></li>
<li>"Allow editing" capability in share by link not disabled - <a href="https://github.com/owncloud/core/issues/23325">#23325</a></li>
<li>[encryption] Recovery key feature doesn't work when a non-default "User Home Folder Naming Rule" is used - <a href="https://github.com/owncloud/core/issues/23632">#23632</a></li>
<li>Cannot upload file from OC <= 8.2 through fed share to OC 9.0 with unlimited quota - <a href="https://github.com/owncloud/core/issues/23547">#23547</a></li>
<li>[stable8.1] Ignore certificate file if it starts with file:// - <a href="https://github.com/owncloud/core/issues/24170">#24170</a></li>
<li>Undefined index: extension at /var/www/owncloud/lib/private/installer.php#272 - <a href="https://github.com/owncloud/core/issues/24228">#24228</a></li>
<li>[stable8.1] Redirect page if not shown in an iframe - <a href="https://github.com/owncloud/files_pdfviewer/issues/111">files_pdfviewer/#111</a></li>
<li>[8.1.x] Video can't be played if video file is placed inside parent folder - <a href="https://github.com/owncloud/files_videoplayer/issues/42">files_videoplayer/#42</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.7.tar.bz2">owncloud-8.1.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.7.zip">owncloud-8.1.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.7.tar.bz2.md5">owncloud-8.1.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.7.zip.md5">owncloud-8.1.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.7.tar.bz2.sha256">owncloud-8.1.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.7.zip.sha256">owncloud-8.1.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.7.tar.bz2.asc">owncloud-8.1.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.7.zip.asc">owncloud-8.1.7.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.12 <small>May 4 2016</small></h3>
<ul>
<li>[Stable 8] Rename and move permissions are set when a file is updatable - <a href="https://github.com/owncloud/core/issues/22844">#22844</a></li>
<li>"Allow editing" capability in share by link not disabled - <a href="https://github.com/owncloud/core/issues/23325">#23325</a></li>
<li>[stable8] Workaround to be able to recognize unlimited quota in fed shares - <a href="https://github.com/owncloud/core/issues/24148">#24148</a></li>
<li>[stable8] Ignore certificate file if it starts with file:// - <a href="https://github.com/owncloud/core/issues/24168">#24168</a></li>
<li>[stable8] Redirect page if not shown in an iframe - <a href="https://github.com/owncloud/files_pdfviewer/issues/112">files_pdfviewer/#112</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.12.tar.bz2">owncloud-8.0.12.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.12.zip">owncloud-8.0.12.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.12.tar.bz2.md5">owncloud-8.0.12.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.12.zip.md5">owncloud-8.0.12.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.12.tar.bz2.sha256">owncloud-8.0.12.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.12.zip.sha256">owncloud-8.0.12.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.12.tar.bz2.asc">owncloud-8.0.12.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.12.zip.asc">owncloud-8.0.12.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 7.0.14 <small>May 4 2016</small></h3>
<ul>
<li>[stable7] Ignore certificate file if it starts with file:// - <a href="https://github.com/owncloud/core/issues/24167">#24167</a></li>
<li>[stable7] Redirect page if not shown in an iframe  - <a href="https://github.com/owncloud/files_pdfviewer/issues/113">files_pdfviewer/#113</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.14.tar.bz2">owncloud-7.0.14.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.14.zip">owncloud-7.0.14.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.14.tar.bz2.md5">owncloud-7.0.14.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.14.zip.md5">owncloud-7.0.14.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.14.tar.bz2.sha256">owncloud-7.0.14.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.14.zip.sha256">owncloud-7.0.14.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.14.tar.bz2.asc">owncloud-7.0.14.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.14.zip.asc">owncloud-7.0.14.zip.asc</a></br>
<p>Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">7.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.</p>
<p><strong>Note</strong> 7.0.15 is the last ownCloud 7.0 update and you should upgrade as soon as possible to ownCloud 8.0 or newer.</p>

<h3>Version 9.0.1 <small>April 6 2016</small></h3>
<ul>
<li>Sharing
	<ul>
	<li>Add mimetype to OCS Share API output <a href="https://github.com/owncloud/core/issues/23060">#23060</a></li>
	<li>Allow group shares, even if not all public keys are available <a href="https://github.com/owncloud/core/issues/23264">#23264</a></li>
	<li>Allow blocking of group sharing <a href="https://github.com/owncloud/core/issues/23473">#23473</a></li>
	<li>API share returns the shares that I make even if API is disabled <a href="https://github.com/owncloud/core/issues/22668">#22668</a></li>
	<li>Return remote shares in oc:share-types Webdav property <a href="https://github.com/owncloud/core/issues/23570">#23570</a></li>
	<li>"Allow editing" capability in share by link not disabled <a href="https://github.com/owncloud/core/issues/23325">#23325</a></li>
	<li>Fix archive file name when downloading public share <a href="https://github.com/owncloud/core/issues/22922">#22922</a></li>
	<li>Link to the folder/file is broken/wrong in the email sent via internal share. <a href="https://github.com/owncloud/core/issues/23197">#23197</a></li>
	<li>Dont break when there is an invalid share <a href="https://github.com/owncloud/core/issues/23252">#23252</a></li>
	<li>Add webdav share-types property to fix favorites/tags share status icon <a href="https://github.com/owncloud/core/issues/23384">#23384</a></li>
	<li>In files view, the user that made the shares is not shown <a href="https://github.com/owncloud/core/issues/23645">#23645</a></li>
	<li>files:transfer-ownership command does not work in some scenarios with shares <a href="https://github.com/owncloud/core/issues/23686">#23686</a></li>
	<li>Sharing to AD group fails when not all users have logged in <a href="https://github.com/owncloud/core/issues/22907">#22907</a></li>
	<li>Case insensitive group sharing <a href="https://github.com/owncloud/core/issues/23223">#23223</a></li>
	<li>Position of edit options in sharing menu confuses user <a href="https://github.com/owncloud/core/issues/18163">#18163</a></li>
	<li>Cannot download shared albums that were shared via link <a href="https://github.com/owncloud/gallery/issues/554">gallery/#554</a></li>
	</li></ul>
<li>CalDAV/CardDAV, Calendar and Contacts
	<ul>
	<li>Allow to migrate calendars of all users <a href="https://github.com/owncloud/core/issues/23113">#23113</a></li>
	<li>Missing contacts_birthday calendar after upgrade to 9.0 <a href="https://github.com/owncloud/core/issues/23203">#23203</a></li>
	<li>Add title and color to birthday calendar <a href="https://github.com/owncloud/core/issues/23128">#23128</a></li>
	<li>CalDAV / CardDAV URLs no longer working after upgrading to 9.0 <a href="https://github.com/owncloud/core/issues/22988">#22988</a></li>
	<li>Group calendars can't be edited by group members <a href="https://github.com/owncloud/core/issues/23011">#23011</a></li>
	<li>Contact birthdays of untouched contacts not displayed in calendar <a href="https://github.com/owncloud/core/issues/22971">#22971</a></li>
	<li>Shared addressbook is always writable independently of "can edit" checkbox <a href="https://github.com/owncloud/core/issues/23273">#23273</a></li>
	<li>Calendar: Shared Calendars Aren't Visible After Upgrading From 8.2.2 -> 9.0.0{beta2,RC1,final} <a href="https://github.com/owncloud/core/issues/22678">#22678</a></li>
	<li>Calendar doesn't support dates before Unix epoch => can't import contact birthdays <a href="https://github.com/owncloud/core/issues/23004">#23004</a></li>
	<li>The birthday_calendar is read-only <a href="https://github.com/owncloud/core/issues/23105">#23105</a></li>
	<li>Prevent calendar proppatch for share recipients <a href="https://github.com/owncloud/core/issues/22909">#22909</a></li>
	<li>Fix syncing of all birthday calendars in one go <a href="https://github.com/owncloud/core/issues/23035">#23035</a></li>
	</li></ul>
<li>External storage
	<ul>
	<li>Chunk upload for GDrive <a href="https://github.com/owncloud/core/issues/23361">#23361</a></li>
	<li>Files on external storage can't be opened in 9.0.0 <a href="https://github.com/owncloud/core/issues/23145">#23145</a></li>
	<li>fix creation of versions of encrypted files on external storages <a href="https://github.com/owncloud/core/issues/23710">#23710</a></li>
	<li>Display external storage GUI even if user mounting disabled <a href="https://github.com/owncloud/core/issues/23335">#23335</a></li>
	<li>External FTP storage doesn't work with encryption enabled <a href="https://github.com/owncloud/core/issues/22286">#22286</a></li>
	<li>Dropbox stream download with RetryWrapper <a href="https://github.com/owncloud/core/issues/23522">#23522</a></li>
	</li></ul>
<li>LDAP
	<ul>
	<li>A lot of 'noise' in owncloud.log showing LDAP users in users view <a href="https://github.com/owncloud/core/issues/22770">#22770</a></li>
	<li>Received share to local user disappears from Webdav when LDAP server unavailable <a href="https://github.com/owncloud/core/issues/20536">#20536</a></li>
	<li>Users with LDAP photos unable to see SMB external storage on OwnCloud Android app <a href="https://github.com/owncloud/core/issues/21555">#21555</a></li>
	<li>Remove deprecated ldap_sort <a href="https://github.com/owncloud/core/issues/23086">#23086</a></li>
	</li></ul>
<li>Encryption
	<ul>
	<li>[Encryption] Encryption no longer working after update from 8.2.2 to 9.0.0 <a href="https://github.com/owncloud/core/issues/23181">#23181</a></li>
	<li>[Encryption] "Bad Signature" error after activating encryption <a href="https://github.com/owncloud/core/issues/23078">#23078</a></li>
	<li>[Encryption] Make sure that the encrypted version is set <a href="https://github.com/owncloud/core/issues/23709">#23709</a></li>
	<li>[Encryption] OCA\\Encryption\\Controller\\SettingsController->updatePrivateKeyPassword displays password in plain text when logged <a href="https://github.com/owncloud/core/issues/23717">#23717</a></li>
	</li></ul>
<li>Federation
	<ul>
	<li>[FEDERATION] ownCloud not responsive because of inaccessible federated share <a href="https://github.com/owncloud/core/issues/22987">#22987</a></li>
	<li>[FEDERATION] Multiple federated unsharing removes the last, not the removed one <a href="https://github.com/owncloud/core/issues/23148">#23148</a></li>
	<li>[FEDERATION] OwnCloud not responsive because of inaccessible federated share <a href="https://github.com/owncloud/core/issues/22987">#22987</a></li>
	</li></ul>
<li>Chunked Files: Optimize checking if all chunks are there <a href="https://github.com/owncloud/core/issues/22601">#22601</a></li>
<li>Remove browser autocomplete in new file menu <a href="https://github.com/owncloud/core/issues/22784">#22784</a></li>
<li>Integrity check stumbles over lost+found special directory <a href="https://github.com/owncloud/core/issues/23341">#23341</a></li>
<li>Code integrity failure when modifying .user.ini <a href="https://github.com/owncloud/core/issues/23144">#23144</a></li>
<li>Admin page down after update to 9.0 <a href="https://github.com/owncloud/core/issues/22960">#22960</a></li>
<li>Remove browser autocomplete in new file menu <a href="https://github.com/owncloud/core/issues/22784">#22784</a></li>
<li>Redirect loop on session timeout when exploring trashbin <a href="https://github.com/owncloud/core/issues/21140">#21140</a></li>
<li>Fix tooltip for versions mtime <a href="https://github.com/owncloud/core/issues/22924">#22924</a></li>
<li>The download archive should be named after the name of the current folder <a href="https://github.com/owncloud/core/issues/22836">#22836</a></li>
<li>Undefined index: newVersionString <a href="https://github.com/owncloud/core/issues/22917">#22917</a></li>
<li>Rename and move permissions are set when a file is updatable <a href="https://github.com/owncloud/core/issues/22841">#22841</a></li>
<li>Files Sidebar shows no entries <a href="https://github.com/owncloud/core/issues/22980">#22980</a></li>
<li>Class 'XMLReader' not found in Reader.php (after upgrade from 8.2.2) <a href="https://github.com/owncloud/core/issues/23003">#23003</a></li>
<li>Fix call to disk_free_space when a file is provided <a href="https://github.com/owncloud/core/issues/22912">#22912</a></li>
<li>Missing document icons in filter views <a href="https://github.com/owncloud/core/issues/23044">#23044</a></li>
<li>Remove disabled autocorrect for new file names <a href="https://github.com/owncloud/core/issues/23024">#23024</a></li>
<li>Getting a 404 when calling url/owncloud; fine when calling url/owncloud/index.php <a href="https://github.com/owncloud/core/issues/22970">#22970</a></li>
<li>Call to a member function getRequest() on null <a href="https://github.com/owncloud/core/issues/23031">#23031</a></li>
<li>Windows Office files via SMB mount through WebDAV is prompting for authentication <a href="https://github.com/owncloud/core/issues/22596">#22596</a></li>
<li>php fatal error during upgrade from 8.2.2.2 to 9.0.0.1 <a href="https://github.com/owncloud/core/issues/23020">#23020</a></li>
<li>500 on PROPFIND with "oc:owner-display-name" <a href="https://github.com/owncloud/core/issues/23116">#23116</a></li>
<li>Explicitly check for port <a href="https://github.com/owncloud/core/issues/23156">#23156</a></li>
<li>Windows Office files via SMB mount through WebDAV is prompting for authentication <a href="https://github.com/owncloud/core/issues/22596">#22596</a></li>
<li>memcached error - no activities are being shown <a href="https://github.com/owncloud/core/issues/23076">#23076</a></li>
<li>Fix errors in memcached implementation <a href="https://github.com/owncloud/core/issues/23229">#23229</a></li>
<li>Search broken <a href="https://github.com/owncloud/core/issues/23136">#23136</a></li>
<li>Update error text for link passwords <a href="https://github.com/owncloud/core/issues/22933">#22933</a></li>
<li>The API of the Thumbnails invalidate the Session Cookie on WebDAV on OC9 <a href="https://github.com/owncloud/core/issues/22893">#22893</a></li>
<li>Logtimezone <a href="https://github.com/owncloud/core/issues/23134">#23134</a></li>
<li>Unescaped column identifier in join breaks oracle <a href="https://github.com/owncloud/core/issues/22835">#22835</a></li>
<li>Chunked Files: Optimize checking if all chunks are there <a href="https://github.com/owncloud/core/issues/22601">#22601</a></li>
<li>Delay the check if the remote is an owncloud instance till we actually use the scanner <a href="https://github.com/owncloud/core/issues/22973">#22973</a></li>
<li>Mod_php7.c reference missing in .htaccess <a href="https://github.com/owncloud/core/issues/21146">#21146</a></li>
<li>500 error instead of 503 when SMB not available <a href="https://github.com/owncloud/core/issues/22826">#22826</a></li>
<li>Prevent certain DBs throwing exceptions on same-value updates <a href="https://github.com/owncloud/core/issues/23309">#23309</a></li>
<li>Add setup check for libxml2 >= 2.7.0 <a href="https://github.com/owncloud/core/issues/23168">#23168</a></li>
<li>Give swift 15 seconds after startup <a href="https://github.com/owncloud/core/issues/23324">#23324</a></li>
<li>Some typo corrections in occ command output <a href="https://github.com/owncloud/core/issues/23358">#23358</a></li>
<li>Full name is not shown just after modifying it in the Personal Page <a href="https://github.com/owncloud/core/issues/20455">#20455</a></li>
<li>No files shown in the web interface and many JavaScript errors in the console after fresh ownCloud 9.0.0 installation <a href="https://github.com/owncloud/core/issues/23199">#23199</a></li>
<li>Update 3rdparty submodule for sabre 3.0.8 update <a href="https://github.com/owncloud/core/issues/23307">#23307</a></li>
<li>Detection of existing tags doesn't allow to create tags named like a prefix substring of an existing tag. <a href="https://github.com/owncloud/core/issues/22064">#22064</a></li>
<li>Accept- or Deny-Link of Notifications Lack Webroot Part <a href="https://github.com/owncloud/core/issues/22786">#22786</a></li>
<li>Fix writing to cache when fallback server should be used immediately <a href="https://github.com/owncloud/core/issues/23401">#23401</a></li>
<li>Non-ending background job <a href="https://github.com/owncloud/core/issues/22887">#22887</a></li>
<li>Log more information by default <a href="https://github.com/owncloud/core/issues/23464">#23464</a></li>
<li>Properly use smb permissions <a href="https://github.com/owncloud/core/issues/23447">#23447</a></li>
<li>Update from 8.2.2 to 9.0.0-1.1 failed - Doctrine\DBAL\Exception\TableExistsException Table 'oc_gallery_sharing' already exists <a href="https://github.com/owncloud/core/issues/22993">#22993</a></li>
<li>Query the cache when checking if a node exists <a href="https://github.com/owncloud/core/issues/23520">#23520</a></li>
<li>Menu language can't be changed <a href="https://github.com/owncloud/core/issues/22695">#22695</a></li>
<li>open_basedir issue in router.php <a href="https://github.com/owncloud/core/issues/23533">#23533</a></li>
<li>Dont die when we cant save the resized avatar, log instead <a href="https://github.com/owncloud/core/issues/23582">#23582</a></li>
<li>Themes background don't stick with local images <a href="https://github.com/owncloud/core/issues/23239">#23239</a></li>
<li>Activity notification in OC9.0.0 does not specify what was accessed <a href="https://github.com/owncloud/core/issues/23503">#23503</a></li>
<li>Correct form of upload-white icon to be same as upload icon <a href="https://github.com/owncloud/core/issues/23631">#23631</a></li>
<li>Only remove avatars from the folder we store them in <a href="https://github.com/owncloud/core/issues/23641">#23641</a></li>
<li>XCache isAvailable check fails in OC9 <a href="https://github.com/owncloud/core/issues/23653">#23653</a></li>
<li>Use the shipped cacerts.pem instead of the global one <a href="https://github.com/owncloud/core/issues/23662">#23662</a></li>
<li>RemoveMount should lock <a href="https://github.com/owncloud/core/issues/17144">#17144</a></li>
<li>Current-user-principal returns incorrect href. <a href="https://github.com/owncloud/core/issues/23306">#23306</a></li>
<li>Trying to activate app on production stable9, doesn’t work (dependency analyzer) <a href="https://github.com/owncloud/core/issues/23668">#23668</a></li>
<li>User trapped in app management screen <a href="https://github.com/owncloud/core/issues/23482">#23482</a></li>
<li>Read available l10n files also from theme folder <a href="https://github.com/owncloud/core/issues/23567">#23567</a></li>
<li>CSS isn't loaded correctly in ownCloud 9 version of the player <a href="https://github.com/owncloud/files_videoplayer/issues/36">files_videoplayer/#36</a></li>
<li>Only load for apps/files and apps/files_sharing <a href="https://github.com/owncloud/gallery/issues/635">gallery/#635</a></li>
<li>Fix order of Gallery app in app navigation <a href="https://github.com/owncloud/gallery/issues/640">gallery/#640</a></li>
<li>Issue migration from 8.2.2 to 9.0.0 <a href="https://github.com/owncloud/updater/issues/270">updater/#270</a></li>
<li>Date of checkpoint/backup missing <a href="https://github.com/owncloud/updater/issues/268">updater/#268</a></li>
<li>[New updater] Checkpoints aren't deleted after restoring them <a href="https://github.com/owncloud/updater/issues/259">updater/#259</a></li>
<li>[New updater] Updater tries to do a md5 of a missing file <a href="https://github.com/owncloud/updater/issues/260">updater/#260</a></li>
<li>Updater breaks OC leaving apps empty <a href="https://github.com/owncloud/updater/issues/280">updater/#280</a></li>
<li>Invalid password/updater.secret + Login UI broken <a href="https://github.com/owncloud/updater/issues/263">updater/#263</a></li>
<li>Fix message style in activity view <a href="https://github.com/owncloud/activity/issues/474">activity/#474</a></li>
<li>Remove left margin from files tabview <a href="https://github.com/owncloud/activity/issues/475">activity/#475</a></li>
<li>Activities not loading (Autoload path not allowed) <a href="https://github.com/owncloud/activity/issues/491">activity/#491</a></li>
<li>Clicking files doesn't direct to file <a href="https://github.com/owncloud/activity/issues/482">activity/#482</a></li>
<li>Infinite scrolldown in OC9 <a href="https://github.com/owncloud/activity/issues/483">activity/#483</a></li>
<li>Trim long messages in the UI? <a href="https://github.com/owncloud/notifications/issues/74">notifications/#74</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.1.tar.bz2">owncloud-9.0.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.1.zip">owncloud-9.0.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.1.tar.bz2.md5">owncloud-9.0.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.1.zip.md5">owncloud-9.0.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.1.tar.bz2.sha256">owncloud-9.0.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.1.zip.sha256">owncloud-9.0.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.1.tar.bz2.asc">owncloud-9.0.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.1.zip.asc">owncloud-9.0.1.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a> and <a href="https://download.owncloud.org/download/repositories/stable/owncloud/">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 9.0.0 <small>March 8 2016</small></h3>
Major new ownCloud release, more info <a href="https://owncloud.org/blog/owncloud-server-9-0-released/" target="_blank">announcement</a> and <a href="https://owncloud.org/blog/time-to-upgrade-to-owncloud-9-0/" target="_blank">upgrading</a> blogs. Summary:
<ul>
	<li>New: Comments on files</li>
	<li>New: Tags for files</li>
	<li>New: Notifications (separate from Activity feed)</li>
	<li>New: (Federation) Auto-complete of user names</li>
	<li>New: (Federation) Trusted Servers</li>
	<li>New: Code signing, checked when updating or installing core and apps</li>
	<li>New: Stand-alone updater for more reliable upgrading</li>
	<li>Improved sharing behavior and performance</li>
	<li>New External Storage API's for improved scalability</li>
	<li>Calendar and Contacts Apps were rewritten. The CalDAV and CardDAV backends are now part of core</li>
	<li>Security hardening</li>
	<li>ownCloud API work to improve scalability</li>
	<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-9.0.0.tar.bz2">owncloud-9.0.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.0.zip">owncloud-9.0.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-9.0.0.tar.bz2.md5">owncloud-9.0.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.0.zip.md5">owncloud-9.0.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-9.0.0.tar.bz2.sha256">owncloud-9.0.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.0.zip.sha256">owncloud-9.0.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-9.0.0.tar.bz2.asc">owncloud-9.0.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-9.0.0.zip.asc">owncloud-9.0.0.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/9.0/owncloud">9.0 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.3 <small>March 8 2016</small></h3>
<ul>
	<li>Object of class OC\\Connector\\Sabre\\Directory could not be converted to string - <a href="https://github.com/owncloud/core/issues/21230">github issue</a></li>
	<li>Files: show 405 Method Not Allowed - <a href="https://github.com/owncloud/core/issues/20713">github issue</a></li>
	<li>enforce-home-folder_naming_rule cannot be configured in config.php - <a href="https://github.com/owncloud/core/issues/21261">github issue</a></li>
	<li>User management: Password change error display behavior - <a href="https://github.com/owncloud/core/issues/21239">github issue</a></li>
	<li>Initialize l10n instance earlier, fixes an undefined var warning followed by a PHP error - <a href="https://github.com/owncloud/core/issues/21262">github issue</a></li>
	<li>Enable user backends to show a different page when login failed (e.g password wrong or needs to change) - <a href="https://github.com/owncloud/core/issues/12215">github issue</a></li>
	<li>Two requests using FolderSync (FolderSync uploads files twice) - <a href="https://github.com/owncloud/core/issues/21486">github issue</a></li>
	<li>Make Swift URL type configurable - <a href="https://github.com/owncloud/core/issues/21118">github issue</a></li>
	<li>Mail notification checkbox not shown in sharee list - <a href="https://github.com/owncloud/core/issues/21511">github issue</a></li>
	<li>Use ISession::clear - <a href="https://github.com/owncloud/core/issues/21585">github issue</a></li>
	<li>Public share fails when master key is enabled - <a href="https://github.com/owncloud/core/issues/21598">github issue</a></li>
	<li>Always use an LDAP URL when connecting to LDAP - <a href="https://github.com/owncloud/core/issues/22766">github issue</a>, <a href="https://github.com/owncloud/core/issues/21631">github issue</a></li>
	<li>Sharing with LDAP users not working on subsequent attempts when cache is enabled - <a href="https://github.com/owncloud/core/issues/21896">github issue</a></li>
	<li>Setting enable_avatar to false with occ causes some bugs - <a href="https://github.com/owncloud/core/issues/21949">github issue</a></li>
	<li>Shares moving back to default "landing" dir - <a href="https://github.com/owncloud/core/issues/12385">github issue</a></li>
	<li>Add some mimetypes - <a href="https://github.com/owncloud/core/issues/21766">github issue</a></li>
	<li>LDAP second display name - <a href="https://github.com/owncloud/core/issues/22250">github issue</a></li>
	<li>No error when Home Directory is missing - <a href="https://github.com/owncloud/core/issues/10419">github issue</a></li>
	<li>occ command can only be called from ownCloud root directory - <a href="https://github.com/owncloud/core/issues/21251">github issue</a></li>
	<li>Old file versions seem to be corrupted (Win 8.1, chrome, openSUSE) - <a href="https://github.com/owncloud/core/issues/22073">github issue</a></li>
	<li>Scan the file in the write lock when uploading over dav - <a href="https://github.com/owncloud/core/issues/22325">github issue</a></li>
	<li>Sharing with LDAP users not working on subsequent attempts when cache is enabled - <a href="https://github.com/owncloud/core/issues/21896">github issue</a></li>
	<li>Share autocomplete produces warning in log - <a href="https://github.com/owncloud/core/issues/20095">github issue</a></li>
	<li>Files app cannot show thumbnails of BMP pictures - <a href="https://github.com/owncloud/core/issues/16461">github issue</a></li>
	<li>Selecting several files in small windows requires to close sidebar per each file selected - <a href="https://github.com/owncloud/core/issues/21698">github issue</a></li>
	<li>IE 11: Pagination doesn't work on Public Link - <a href="https://github.com/owncloud/core/issues/20044">github issue</a></li>
	<li>Fix on shared groups assignment - <a href="https://github.com/owncloud/core/issues/22557">github issue</a></li>
	<li>IE public page footer appears in the middle - <a href="https://github.com/owncloud/core/issues/22560">github issue</a></li>
	<li>Removing files from trash: Undefined index: permissions at /var/www/owncloud/lib/private/files/fileinfo.php#177 - <a href="https://github.com/owncloud/core/issues/21378">github issue</a></li>
	<li>LDAP configuration, groups filter cannot be changed - <a href="https://github.com/owncloud/core/issues/22278">github issue</a></li>
	<li>It is not possible to unshare or delete an accepted federated folder - <a href="https://github.com/owncloud/core/issues/22483">github issue</a></li>
	<li>backgroundScan must ignore root storage - <a href="https://github.com/owncloud/core/issues/22501">github issue</a></li>
	<li>Heal unencrypted file sizes at download time - <a href="https://github.com/owncloud/core/issues/22626">github issue</a></li>
	<li>Can load empty folder of "not available" external storage - <a href="https://github.com/owncloud/core/issues/21125">github issue</a></li>
	<li>Call to a member function file_exists() on a non-object in owncloud/lib/private/files/filesystem.php on line 688 - <a href="https://github.com/owncloud/core/issues/18499">github issue</a></li>
	<li>Command line occ add user group issue - <a href="https://github.com/owncloud/core/issues/20663">github issue</a></li>
	<li>Federated shared subfolder not syncing - <a href="https://github.com/owncloud/core/issues/20329">github issue</a></li>
	<li>Skip users with no trashbin - <a href="https://github.com/owncloud/core/issues/22628">github issue</a></li>
	<li>Update sabre/dav to 2.1.9 and sabre/vobject to 3.5.0 for PHP7 compatibility - <a href="https://github.com/owncloud/core/issues/21914">github issue</a></li>
	<li>Lazy loading doesn't work - <a href="https://github.com/owncloud/activity/issues/441">github issue</a></li>
	<li>No email notification - <a href="https://github.com/owncloud/core/issues/20962">github issue</a></li>
	<li>Add more supported mimes read ODF formats - <a href="https://github.com/owncloud/documents/issues/615">github issue</a></li>
	<li>Save path for new documents cannot be set in preferences with oc8.2 - <a href="https://github.com/owncloud/documents/issues/600">github issue</a></li>
	<li>Scrolling file lists in public share greater than windows size not possible - <a href="https://github.com/owncloud/files_pdfviewer/issues/90">github issue</a></li>
	<li>Fix for IE to remove second scrollbar - <a href="https://github.com/owncloud/files_pdfviewer//99">github issue</a></li>
	<li>Sharing permissions cannot be modified because checkboxes are not shown - <a href="https://github.com/owncloud/gallery/issues/538">github issue</a></li>
	<li>Error logged on admin settings page - <a href="https://github.com/owncloud/updater/issues/199">github issue</a></li>
	<li>Error when enabling app - <a href="https://github.com/owncloud/announcementcenter/issues/31">github issue</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.3.tar.bz2">owncloud-8.2.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.3.zip">owncloud-8.2.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.3.tar.bz2.md5">owncloud-8.2.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.3.zip.md5">owncloud-8.2.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.3.tar.bz2.sha256">owncloud-8.2.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.3.zip.sha256">owncloud-8.2.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.3.tar.bz2.asc">owncloud-8.2.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.3.zip.asc">owncloud-8.2.3.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.6 <small>March 8 2016</small></h3>
<ul>
	<li>User management: Password change error display behavior - <a href="https://github.com/owncloud/core/issues/21239">github issue</a></li>
	<li>Files: show 405 Method Not Allowed - <a href="https://github.com/owncloud/core/issues/20713">github issue</a></li>
	<li>Object of class OC\\Connector\\Sabre\\Directory could not be converted to string - <a href="https://github.com/owncloud/core/issues/21230">github issue</a></li>
	<li>Initialize l10n instance earlier to fix an undefined var warning followed by a PHP error - <a href="https://github.com/owncloud/core/issues/21263">github issue</a></li>
	<li>Prevent 0 byte downloads when storage returns false - <a href="https://github.com/owncloud/core/issues/21296">github issue</a></li>
	<li>Skip unavailable storages in scanner - <a href="https://github.com/owncloud/core/issues/21314">github issue</a></li>
	<li>SMB not working in "official" Click&Go VM - <a href="https://github.com/owncloud/core/issues/19479">github issue</a></li>
	<li>Keep scroll position in user's page when sorting - <a href="https://github.com/owncloud/core/issues/21694">github issue</a></li>
	<li>Handle return code of streamCopy in WebDAV put - <a href="https://github.com/owncloud/core/issues/21748">github issue</a></li>
	<li>Sync certificates with upstream - <a href="https://github.com/owncloud/core/issues/21864">github issue</a></li>
	<li>Shares moving back to default "landing" dir - <a href="https://github.com/owncloud/core/issues/12385">github issue</a></li>
	<li>Share autocomplete produces warning in log - <a href="https://github.com/owncloud/core/issues/20095">github issue</a></li>
	<li>Files app can't show thumbnails for BMP pictures - <a href="https://github.com/owncloud/core/issues/16461">github issue</a></li>
	<li>Google Drive external storage has some missing files in its root folder - <a href="https://github.com/owncloud/core/issues/16267">github issue</a></li>
	<li>Fix on shared groups assignment - <a href="https://github.com/owncloud/core/issues/22558">github issue</a></li>
	<li>Removing files from trash: Undefined index: permissions at /var/www/owncloud/lib/private/fileifo.php#177 - <a href="https://github.com/owncloud/core/issues/21378">github issue</a></li>
	<li>LDAP configuration, groups filter cannot be changed - <a href="https://github.com/owncloud/core/issues/22278">github issue</a></li>
	<li>Get rid of 'unserialize' in LDAP caching - <a href="https://github.com/owncloud/core/issues/16498">github issue</a></li>
	<li>It is not possible to unshare or deleted an accepted federated folder - <a href="https://github.com/owncloud/core/issues/22483">github issue</a></li>
	<li>Sharing with LDAP users not working on subsequent attempts when cache is enabled - <a href="https://github.com/owncloud/core/issues/21896">github issue</a></li>
	<li>backgroundScan must ignore root storage <a href="https://github.com/owncloud/core/issues/22501">github issue</a></li>
	<li>Heal unencrypted file sizes at download time - <a href="https://github.com/owncloud/core/issues/22627">github issue</a></li>
	<li>Cap the number of entries we cache in SMB's statcache - <a href="https://github.com/owncloud/core/issues/21648">github issue</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.6.tar.bz2">owncloud-8.1.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.6.zip">owncloud-8.1.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.6.tar.bz2.md5">owncloud-8.1.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.6.zip.md5">owncloud-8.1.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.6.tar.bz2.sha256">owncloud-8.1.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.6.zip.sha256">owncloud-8.1.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.6.tar.bz2.asc">owncloud-8.1.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.6.zip.asc">owncloud-8.1.6.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.11 <small>March 8 2016</small></h3>
<ul>
	<li>Prevent 0 byte downloads when storage returns false - <a href="https://github.com/owncloud/core/issues/19081">github issue</a></li>
	<li>Keep scroll position in user's page when sorting - <a href="https://github.com/owncloud/core/issues/21634">github issue</a></li>
	<li>Always use an LDAP URL when connecting to LDAP - <a href="https://github.com/owncloud/core/issues/21634">github issue</a></li>
	<li>Shares moving back to default "landing" dir - <a href="https://github.com/owncloud/core/issues/12385">github issue</a></li>
	<li>PHPMailer address validation fix - <a href="https://github.com/owncloud/3rdparty/issues/253">github issue</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.11.tar.bz2">owncloud-8.0.11.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.11.zip">owncloud-8.0.11.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.11.tar.bz2.md5">owncloud-8.0.11.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.11.zip.md5">owncloud-8.0.11.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.11.tar.bz2.sha256">owncloud-8.0.11.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.11.zip.sha256">owncloud-8.0.11.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.11.tar.bz2.asc">owncloud-8.0.11.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.11.zip.asc">owncloud-8.0.11.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 7.0.13 <small>March 8 2016</small></h3>
<ul>
<li>PHPMailer address validation - <a href="https://github.com/owncloud/3rdparty/issues/253">github issue</a></li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.13.tar.bz2">owncloud-7.0.13.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.13.zip">owncloud-7.0.13.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.13.tar.bz2.md5">owncloud-7.0.13.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.13.zip.md5">owncloud-7.0.13.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.13.tar.bz2.sha256">owncloud-7.0.13.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.13.zip.sha256">owncloud-7.0.13.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.13.tar.bz2.asc">owncloud-7.0.13.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.13.zip.asc">owncloud-7.0.13.zip.asc</a></br>
<p>Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">7.0 Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.</p>

<h3>Version 8.2.2 <small>December 22 2015</small></h3>
<ul>
	<li>Sharing improvements</li>
	<ul>
		<li>Passing an empty base in this diagnosis call will not result in LDAP errors</li>
		<li>Send sharing link to more than one recipient</li>
		<li>Cannot share at all when share with link is disabled globally</li>
		<li>Delete share hotspot not wide enough</li>
		<li>Can't access a shared folder on external storage</li>
		<li>Fix S2S error handling, making WebDAV work and get rid of undeletable files</li>
		<li>Files/folders created while the users group was included in 'Exclude groups from sharing' cannot be shared even if the group is removed from the excluded groups.</li>
		<li>"unshare" action should be called "unshare" in the action menu and not "delete"</li>
		<li>Fix shared files of deleted users, detect DN change when checking for existence on LDAP</li>
		<li>Etag isn't propagated to the root of the share owner if the file is uploaded to a group reshare</li>
		<li>Empty etag after moving shared file into a commonly received share</li>
		<li>The ajax code path unshares a link share when updating the password</li>
	</ul>
	<li>Other fixes</li>
	<ul>
		<li>MySQL file socket not working during initial setup</li>
		<li>Multiple PUT requests to new DAV backend results in locked file</li>
		<li>Dont output paths in scan.php</li>
		<li>Activity oracle sql error for favorites</li>
		<li>Check the expiration date for null</li>
		<li>Stray locks not being cleaned: server replied: Locked</li>
		<li>Login attributes tab. Other attributes combobox does not keep the selection if the users click away</li>
		<li>Fix trashbin wrapper when no user is logged in</li>
		<li>Handle non existing files in version previews</li>
		<li>Properly preserve home folder naming enforcement setting</li>
		<li>User details not saved unless click Enter</li>
		<li>User management: Password change error display behavior</li>
		<li>Add listener for URL change and then close the PDF viewer - files_pdfviewer</li>
		<li>Remove white area below pdf viewer on public page - files_pdfviewer</li>
		<li>Unable to move /srv/http/owncloud/_oc-upgrade/8.2.1.4/core/resources to /srv/http/owncloud/resources - updater</li>
		<li>Fix minification quirks - updater</li>
		<li>Accessibility Bug for 8.2 UI</li>
	</ul>
	<li>Several UI improvements</li>
	<li>Security improvements</li>
	<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.2.tar.bz2">owncloud-8.2.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.2.zip">owncloud-8.2.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.2.tar.bz2.md5">owncloud-8.2.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.2.zip.md5">owncloud-8.2.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.2.tar.bz2.sha256">owncloud-8.2.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.2.zip.sha256">owncloud-8.2.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.2.tar.bz2.asc">owncloud-8.2.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.2.zip.asc">owncloud-8.2.2.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.5 <small>December 22 2015</small></h3>
Note that the packages no longer automatically execute the <code>occ upgrade</code> command, this has to be done manually. See the <a href="https://doc.owncloud.org/server/8.1/admin_manual/maintenance/package_upgrade.html">documentation for upgrading ownCloud 8.1</a>.
<ul>
	<li>LDAP improvements</li>
	<ul>
		<li>LDAP wizard 'Could not connect to LDAP'</li>
		<li>Backup Host for LDAP server does not automatically connect</li>
		<li>Passing an empty base in this diagnosis call will not result in LDAP errors</li>
		<li>LDAP Wizard Group Tab: infinite loop when having more than 400 groups</li>
		<li>User management: Password change error display behavior</li>
	</ul>
	<li>Sharing improvements</li>
	<ul>
		<li>Fix Group Sharing</li>
		<li>Mount fed share as same user, move source into received folder, must be forbidden</li>
		<li>Files/folders created while the users group was included in 'Exclude groups from sharing' cannot be shared even if the group is removed from the excluded groups.</li>
		<li>Fix shared files of deleted users, detect DN change when checking for existence on LDAP</li>
		<li>Recursive external shares kill web server</li>
		<li>Send sharing link to more than one recipient</li>
	</ul>
	<li>Other fixes</li>
	<ul>
		<li>Force approval in GDrive oauth to get refresh_token</li>
		<li>Show the language code in personal settings for unknown languages</li>
		<li>Login attributes tab. Other attributes combobox does not keep the selection if the users click away</li>
		<li>Empty etag after moving shared file into a commonly received share</li>
		<li>Fix trashbin wrapper when no user is logged in</li>
		<li>Handle non existing files in version previews</li>
		<li>User details not saved unless click Enter</li>
		<li>Properly handle enforce home folder naming rule setting</li>
		<li>X-Sendfile likely required for video streaming - to be documented - apps</li>
		<li>Allow seeking for non-public videos. - apps</li>
		<li>Skip version check for daily builds - updater</li>
	</ul>
	<li>Several UI improvements</li>
	<li>Security improvements</li>
	<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.5.tar.bz2">owncloud-8.1.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.5.zip">owncloud-8.1.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.5.tar.bz2.md5">owncloud-8.1.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.5.zip.md5">owncloud-8.1.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.5.tar.bz2.sha256">owncloud-8.1.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.5.zip.sha256">owncloud-8.1.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.5.tar.bz2.asc">owncloud-8.1.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.5.zip.asc">owncloud-8.1.5.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">8.1 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.0.10 <small>December 22 2015</small></h3>
Note that the packages no longer automatically execute the <code>occ upgrade</code> command, this has to be done manually. See the <a href="https://doc.owncloud.org/server/8.0/admin_manual/maintenance/upgrade.html">documentation for upgrading ownCloud 8.0</a>.
<ul>
	<li>LDAP wizard 'Could not connect to LDAP' fix</li>
	<li>Backup Host for LDAP server does not automatically connect</li>
	<li>Fix shared files of deleted users, detect DN change when checking for existence on LDAP</li>
	<li>Hardening home folder retrieval in user_ldap</li>
	<li>Force approval in GDrive oauth to get refresh_token</li>
	<li>escape like parameter in cache operations</li>
	<li>Node API: search operations don't work on the top folder of external shares</li>
	<li>Use new updater URL</li>
	<li>CLI scan ignores passed user / options parser seems broken</li>
	<li>Prevent 0 byte downloads when storage returns false</li>
	<li>Handle non existing files in version previews</li>
	<li>Mount fed share as same user, move source into received folder, must be forbidden</li>
	<li>Allow seeking for non-public videos - apps</li>
	<li>Several UI improvements</li>
	<li>Security improvements</li>
	<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.10.tar.bz2">owncloud-8.0.10.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.10.zip">owncloud-8.0.10.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.10.tar.bz2.md5">owncloud-8.0.10.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.10.zip.md5">owncloud-8.0.10.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.10.tar.bz2.sha256">owncloud-8.0.10.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.10.zip.sha256">owncloud-8.0.10.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.10.tar.bz2.asc">owncloud-8.0.10.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.10.zip.asc">owncloud-8.0.10.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">8.0 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 7.0.12 <small>December 22 2015</small></h3>
Note that the packages no longer automatically execute the <code>occ upgrade</code> command, this has to be done manually. See the <a href="https://doc.owncloud.org/server/7.0/admin_manual/maintenance/upgrade.html">documentation for upgrading ownCloud 7.0</a>.
<ul>
	<li>Handle non existing files in version previews</li>
	<li>Use XMLWriter to generate response</li>
	<li>Use a correctly initialized JobList in antivirus update</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.12.tar.bz2">owncloud-7.0.12.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.12.zip">owncloud-7.0.12.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.12.tar.bz2.md5">owncloud-7.0.12.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.12.zip.md5">owncloud-7.0.12.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.12.tar.bz2.sha256">owncloud-7.0.12.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.12.zip.sha256">owncloud-7.0.12.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.12.tar.bz2.asc">owncloud-7.0.12.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.12.zip.asc">owncloud-7.0.12.zip.asc</a></br>
Packages on the openSUSE Build Service: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">7.0 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.2.1 <small>November 18 2015</small></h3>
<ul>
	<li>Sharing improvements:</li>
	<ul>
		<li>Show path to file in error message about sharing with owner</li>
		<li>Replaced error numbers with details in the sharing error message</li>
		<li>Fix pagination on public link share page</li>
		<li>Deal with NoUserException in sharing code</li>
		<li>Fix cannot change share info after switching sections</li>
		<li>Fix changing expiration date of shared link breaks password</li>
		<li>Various other fixes</li>
	</ul>
	<li>Performance improvements:</li>
	<ul>
		<li>Optimize multiple shared locks for a single process</li>
		<li>Don't lock if we're only reading cache metadata</li>
		<li>Escape like parameter in cache operations</li>
	</ul>
	<li>Storage improvements:</li>
	<ul>
		<li>Improve dealing with Dropbox and Google Drive</li>
		<li>Moving files makes them disappear (SWIFT object store)</li>
		<li>Transactional file locking database backend warning is only shown when there is another warning.</li>
		<li>Don't lock /$user/files</li>
		<li>Include the final update in the transaction when moving a folder in the cache</li>
		<li>WebDAV MOVE on a non existing file results in Internal Server Error #20069</li>
		<li>Catch all exception if table doesn't exist #19884 #19893</li>
		<li>Various other objectstore fixes</li>
	</ul>
	<li>Usability and UI:</li>
	<ul>
		<li>Made error message about file not found more specific in federated sharing</li>
		<li>Improved CSS, fonts, text color on various buttons, login screen, menu and settings</li>
		<li>Hide strength indication after password change and hide notifications after time-out or on delete</li>
		<li>Fixes to inconsistent language and translation support, show language code for unknown languages</li>
		<li>Fix icons for share/public folders, fix spinner positions in share tab</li>
		<li>Close user menu when clicking on other menus</li>
		<li>Sidebar fixes and hiding sidebar for trashbin view</li>
		<li>Move alt text for favorite action to image</li>
		<li>Sidebar should not open, when renaming a file on mobile</li>
		<li>Do not register sidebar panels when no sidebar</li>
		<li>Update process: state which step we are going to start and warn if it might be slow</li>
	</ul>
	<li>User Management and LDAP fixes:</li>
	<ul>
		<li>LDAP fixes for quota, user mapper, initial user creation and connectivity</li>
		<li>Fix group admin settings, group assignment when group name is a number</li>
		<li>Enable proper CardDAV cookie authentication</li>
	</ul>
	<li>Documentation, reliability and stability fixes:</li>
	<ul>
		<li>Expose syslog tag in the configuration</li>
		<li>Update list of deprecated methods (documentation)</li>
		<li>Fixes to text editor</li>
		<li>Fixes to activity app</li>
		<li>Create several repair steps in update process to clean up shares</li>
		<li>Update certificate bundle</li>
		<li>Fix multiple issues for IE 8 and 9</li>
		<li>Memcache warning with memcached</li>
		<li>Fix File versioning with encryption</li>
		<li>Update the unencrypted size for versions</li>
		<li>Fix mtime PROPPATCH to be "lastmodified" instead of "getlastmodified"</li>
		<li>Make sure that remote shares use the correct uid casing</li>
		<li>Variables don't have a class, so we can't use toString() on it</li>
		<li>Use IRequest's `getScriptName` functionality instead of $_SERVER</li>
		<li>Don't trigger the scroll event of every single item we filter in the file list</li>
	</ul>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.1.tar.bz2">owncloud-8.2.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.1.zip">owncloud-8.2.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.1.tar.bz2.md5">owncloud-8.2.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.1.zip.md5">owncloud-8.2.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.1.tar.bz2.sha256">owncloud-8.2.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.1.zip.sha256">owncloud-8.2.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.1.tar.bz2.asc">owncloud-8.2.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.1.zip.asc">owncloud-8.2.1.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.4 <small>October 30 2015</small></h3>
<ul>
	<li>Stop when PHP 7 is used, only ownCloud 8.2 is compatible</li>
	<li>Allow public webdav auth to recognize sesssion, (WebDAV can be used with publicly shared links)</li>
	<li>Make it possible to change the syslog_tag</li>
	<li>Enable limiting resharing when using Federated Cloud Sharing</li>
	<li>Improved Memcached compatibility</li>
	<li>Optimized ./occ performance and decrease space usage</li>
	<li>Several improvements to LDAP reliability</li>
	<li>Switch to debug logging on upgrade</li>
	<li>improve Documents compatibility</li>
	<li>IE/Win 10 compatibility fix</li>
	<li>WebDAV won't create empty folders on incorrect copy commands</li>
	<li>Crypto error fix</li>
	<li>Improve email sending compatibility</li>
	<li>Download tar on Mac instead of zip</li>
	<li>Fix search operations for Node</li>
	<li>Block downgrades as they are unsupported</li>
	<li>Fixed password reset from admin account</li>
	<li>Fixes related to various PHP versions</li>
	<li>Fixes to PDF viewer and text editor</li>
	<li>Several UI improvements</li>
	<li>Security improvements</li>
	<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.4.tar.bz2">owncloud-8.1.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.4.zip">owncloud-8.1.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.4.tar.bz2.md5">owncloud-8.1.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.4.zip.md5">owncloud-8.1.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.4.tar.bz2.sha256">owncloud-8.1.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.4.zip.sha256">owncloud-8.1.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.4.tar.bz2.asc">owncloud-8.1.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.4.zip.asc">owncloud-8.1.4.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.9 <small>October 30 2015</small></h3>
Several fixes, including:
<ul>
	<li>Stop when PHP 7 is used, only ownCloud 8.2 is compatible</li>
	<li>Improve LDAP and Memcached compatibility</li>
	<li>Switch to debug logging on upgrade</li>
	<li>optimize ./occ performance and decrease space usage</li>
	<li>WebDAV won't create empty folders on incorrect copy commands</li>
	<li>improve Documents compatibility</li>
	<li>IE/Win 10 compatibility fix</li>
	<li>Security improvements</li>
	<li>Small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.9.tar.bz2">owncloud-8.0.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.9.zip">owncloud-8.0.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.9.tar.bz2.md5">owncloud-8.0.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.9.zip.md5">owncloud-8.0.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.9.tar.bz2.sha256">owncloud-8.0.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.9.zip.sha256">owncloud-8.0.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.9.tar.bz2.asc">owncloud-8.0.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.9.zip.asc">owncloud-8.0.9.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.11 <small>October 30 2015</small></h3>
Several fixes, including:
<ul>
<li>Stop when PHP 7 is used, only ownCloud 8.2 is compatible</li>
<li>Improve PHP 5.3 support</li>
<li>Switch to debug logging on upgrade</li>
<li>Improve LDAP and Memcached compatibility</li>
<li>WebDAV won't create empty folders on incorrect copy commands</li>
<li>Security improvements</li>
<li>Small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.11.tar.bz2">owncloud-7.0.11.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.11.zip">owncloud-7.0.11.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.11.tar.bz2.md5">owncloud-7.0.11.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.11.zip.md5">owncloud-7.0.11.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.11.tar.bz2.sha256">owncloud-7.0.11.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.11.zip.sha256">owncloud-7.0.11.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.11.tar.bz2.asc">owncloud-7.0.11.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.11.zip.asc">owncloud-7.0.11.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.2.0 <small>October 20th 2015</small></h3>
Major new ownCloud release, more info <a href="https://owncloud.org/blog/owncloud-server-8-2-brings-renewed-user-interface-and-more-control" target="_blank">in announcement blog</a>. Summary:
<ul>
<li>Updated design</li>
<li>New sidebar</li>
<li>Rewritten Gallery app</li>
<li>Updated text editor</li>
<li>Notifications</li>
<li>Policy for retaining deleted files and file versions</li>
<li>Encrypt/decrypt commands</li>
<li>Many additions to occ command tool for admins</li>
<li>Improved mime type handling</li>
<li>Security Hardening</li>
<li>ownCloud API work: Modular Authentication support, Capabilities Manager and Query Builder and more</li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.2.0.tar.bz2">owncloud-8.2.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.0.zip">owncloud-8.2.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.2.0.tar.bz2.md5">owncloud-8.2.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.0.zip.md5">owncloud-8.2.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.2.0.tar.bz2.sha256">owncloud-8.2.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.0.zip.sha256">owncloud-8.2.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.2.0.tar.bz2.asc">owncloud-8.2.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.2.0.zip.asc">owncloud-8.2.0.zip.asc</a></br>
Packages on our Build Service: <a href="https://download.owncloud.org/download/repositories/8.2/owncloud">8.2 Release Channel</a>, <a href="https://download.owncloud.org/download/repositories/stable/owncloud">Stable Release Channel</a>. Learn more about <a href="/release-channels">Release Channels</a>.

<h3>Version 8.1.3 <small>September 15 2015</small></h3>
<ul>
<li>Sharing improvments:<ul>
<li>New share dialog autocomplete option</li>
<li>Public shared folder upload fix</li>
<li>Sharing by link fix</li>
<li>Public link page conflict fix</li>
<li>Remove share permissions on failed mount points</li>
<li>Quota warning in shared storage fix</li>
<li>External sharing fix</li>
<li>Shared folders fix</li>
</ul></li>
<li>Install and upgrade fixes:<ul>
<li>Dependency check on install fix</li>
<li>Upgrade log fix</li>
<li>Upgrade with enabled search fix</li>
<li>And more</li>
</ul></li>
<li>Other fixes:<ul>
<li>App download fix</li>
<li>File move fix</li>
<li>Fixes related to PHP older than 5.6</li>
<li>Regular expressions fix</li>
<li>WebDAV folder size fix</li>
<li>Handling rmdir for ftp</li>
<li>Empty content message fix</li>
<li>Capabilities API fixes</li>
<li>Mobile scrolling and UX issue fix</li>
<li>SMB fixes</li>
<li>Non-existing CA bundle warning on upgrade</li>
<li>IE8 rendering fixes</li>
<li>Object store setting fix</li>
<li>Multiple LDAP group member count fix</li>
<li>Configure visibility of SSL root certs</li>
<li>Long-lived certificate fix</li>
<li>Admin page fix with enabled LDAP Home Connector app</li>
<li>Domain info fix for windows network drive</li>
<li>User display fix in windows network drive</li>
<li>Fix error messages in syslog</li>
<li>Notification and activity mail language fixes</li>
</ul></li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.3.tar.bz2">owncloud-8.1.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.3.zip">owncloud-8.1.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.3.tar.bz2.md5">owncloud-8.1.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.3.zip.md5">owncloud-8.1.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.3.tar.bz2.sha256">owncloud-8.1.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.3.zip.sha256">owncloud-8.1.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.3.tar.bz2.asc">owncloud-8.1.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.3.zip.asc">owncloud-8.1.3.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.8 <small>September 15 2015</small></h3>
Several fixes, including:
<ul>
<li>App download fix</li>
<li>“Enforce HTTPS” description fix</li>
<li>Handle rmdir for ftp</li>
<li>Mobile scrolling and UX issue fix</li>
<li>Doc fixes</li>
<li>Remote ownCloud instance check behind proxy</li>
<li>Dependency check on install fix</li>
<li>Object store setting fix</li>
<li>Public shared folder upload fix</li>
<li>Admin page fix with enabled LDAP Home Connector app</li>
<li>User display fix in windows network drive</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.8.tar.bz2">owncloud-8.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.8.zip">owncloud-8.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.8.tar.bz2.md5">owncloud-8.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.8.zip.md5">owncloud-8.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.8.tar.bz2.sha256">owncloud-8.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.8.zip.sha256">owncloud-8.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.8.tar.bz2.asc">owncloud-8.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.8.zip.asc">owncloud-8.0.8.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.10 <small>September 15 2015</small></h3>
Several fixes, including:
<ul>
<li>App download fix</li>
<li>Repair info during upgrade fix</li>
<li>Object store setting fix</li>
<li>Improved error messages in text editing</li>
<li>Check FileActions in test editing</li>
<li>Add versions to JS files in PDF viewer</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.10.tar.bz2">owncloud-7.0.10.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.10.zip">owncloud-7.0.10.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.10.tar.bz2.md5">owncloud-7.0.10.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.10.zip.md5">owncloud-7.0.10.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.10.tar.bz2.sha256">owncloud-7.0.10.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.10.zip.sha256">owncloud-7.0.10.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.10.tar.bz2.asc">owncloud-7.0.10.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.10.zip.asc">owncloud-7.0.10.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.1.1 <small>August 11th 2015</small></h3>
<ul>
<li>Fix infinite loops with propagating etags on reshares</li>
<li>Let the encryption storage wrapper always update the file cache</li>
<li>Only update database on the first run</li> 
<li>Add error handlers for avatar setup</li>
<li>Fix Search box in user management only appears when making the font bigger or smaller</li>
<li>Detect old NSS and OpenSSL versions</li>
<li>Double slash for SMB storage id for compatibility</li>
<li>Encryption migration improvements</li>
<li>Only set is encrypted when encryption is enabled</li>
<li>Adding error handling in case setting the password fails</li>
<li>Fix mount point detection</li>
<li>Allow upgrade of not enabled apps</li>
<li>Ensure groups match filter when using memberOf to read users group</li>
<li>Fixing 'Undefined index: REMOTE_ADDR'</li>
<li>Add repair step for outdated OCS IDs</li>
<li>Do not try clearing locked files in cache folder</li>
<li>Fix "undefined index" and "file_exists() on a non-object" messages</li>
<li>Fixing error logging</li>
<li>Add verbosity check and show repair info & steps</li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2">owncloud-8.1.1.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip">owncloud-8.1.1.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.md5">owncloud-8.1.1.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.md5">owncloud-8.1.1.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.sha256">owncloud-8.1.1.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.sha256">owncloud-8.1.1.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.1.tar.bz2.asc">owncloud-8.1.1.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.1.zip.asc">owncloud-8.1.1.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.6 <small>August 11th 2015</small></h3>
Several fixes, including:
<ul>
<li>remove duplicate ID in HTML template for public shares</li>
<li>Scan check path correctly</li>
<li>Fix php ldap segfault when some users login</li>
<li>Do not restrict permissions for the original owner</li>
<li>Fix thumbnails on public pages are blurry on high DPI devices</li>
<li>Properly handle NotPermittedException in SabreDAV</li>
<li>Fix version rename with files and folders</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2">owncloud-8.0.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip">owncloud-8.0.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.md5">owncloud-8.0.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.md5">owncloud-8.0.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.sha256">owncloud-8.0.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.sha256">owncloud-8.0.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.6.tar.bz2.asc">owncloud-8.0.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.6.zip.asc">owncloud-8.0.6.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.8 <small>August 11th 2015</small></h3>
Several fixes, including:
<ul>
<li>Fix runtime caching in ldap's user manager</li>
<li>Fix "undefined index" and "file_exists() on a non-object" messages</li>
<li>Only rescan versions once in trashbin</li>
<li>Return correct user count when the group has none</li>
<li>Several smaller fixes and improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2">owncloud-7.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip">owncloud-7.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.md5">owncloud-7.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.md5">owncloud-7.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.sha256">owncloud-7.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.sha256">owncloud-7.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.8.tar.bz2.asc">owncloud-7.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.8.zip.asc">owncloud-7.0.8.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.1.0 <small>July 6th 2015</small></h3>
<ul>
<li>Much polishing, stability and performance improvements</li>
<li>Encryption 2.0</li>
<li>Updated Documents</li>
<li>New Mount Options for External Storage</li>
<li>Federated Cloud ID</li>
<li>Integrated documentation</li>
<li>LDAP Wizard Improvements</li>
<li>Security Improvements</li>
<li>App store improvements</li>
<li>Release channels</li>
<li>ownCloud API work: 190 new calls, 50 replaced</li>
<li>Many small improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2">owncloud-8.1.0.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip">owncloud-8.1.0.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.md5">owncloud-8.1.0.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.md5">owncloud-8.1.0.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.sha256">owncloud-8.1.0.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.sha256">owncloud-8.1.0.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.1.0.tar.bz2.asc">owncloud-8.1.0.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.1.0.zip.asc">owncloud-8.1.0.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.1&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.5 <small>July 6th 2015</small></h3>
Over 30 fixes, including:
<ul>
<li>Upgrade fixes</li>
<li>Dropbox logs error fixes</li>
<li>File scan fixes</li>
<li>Security fixes</li>
<li>OCS API fix</li>
<li>Control bar width no longer overlays scrollbar</li>
<li>Only load commands of enabled apps</li>
<li>Port detection when using LDAP</li>
<li>LDAP wizard improvements</li>
<li>MultiSelect fixes</li>
<li>Upgrade jquery-migrate</li>
<li>Shared file deletion fix</li>
<li>Fix sync from client to external SMB storage</li>
<li>Video streaming fix</li>
<li>File path fix</li>
<li>LDAP user deletion fix</li>
<li>Parsing fix in AppFramework</li>
<li>File overwrite fix for external storage</li>
<li>Disallow cookie auth in API</li>
<li>Fix versions when restoring a deleted file</li>
<li>Fix shares of unavailable users</li>
<li>Unset password of a link share</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2">owncloud-8.0.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip">owncloud-8.0.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.md5">owncloud-8.0.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.md5">owncloud-8.0.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.sha256">owncloud-8.0.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.sha256">owncloud-8.0.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.5.tar.bz2.asc">owncloud-8.0.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.5.zip.asc">owncloud-8.0.5.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.7 <small>July 6th 2015</small></h3>
Over 20 fixes, including:
<ul>
<li>Fix port detection when using LDAP</li>
<li>External storage reload fix</li>
<li>Dropbox logs error files</li>
<li>Video streaming fix</li>
<li>Fix sync from client to external SMB storage</li>
<li>DB performance improvement</li>
<li>File path fix</li>
<li>Upgrade fixes</li>
<li>LDAP user deletion fix</li>
<li>Parsing fix in AppFramework</li>
<li>Disallow cookie auth in API</li>
<li>Fix shares of unavailable users</li>
<li>IE8 fixes</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2">owncloud-7.0.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip">owncloud-7.0.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.md5">owncloud-7.0.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.md5">owncloud-7.0.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.sha256">owncloud-7.0.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.sha256">owncloud-7.0.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.7.tar.bz2.asc">owncloud-7.0.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.7.zip.asc">owncloud-7.0.7.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<a name="latest6"></a>
<h3>Release 6.0.9 <small>July 6th 2015</small></h3>
Half a dozen fixes, including:
<ul>
<li>Dropbox logs error files</li>
<li>Fix sync from client to external SMB storage</li>
<li>File path fix</li>
<li>App store application fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.tar.bz2">owncloud-6.0.9.tar.bz2</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.zip">owncloud-6.0.9.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.tar.bz2.md5">owncloud-6.0.9.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.zip.md5">owncloud-6.0.9.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.tar.bz2.sha256">owncloud-6.0.9.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.zip.sha256">owncloud-6.0.9.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.tar.bz2.asc">owncloud-6.0.9.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.9.zip.asc">owncloud-6.0.9.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>
<p>Note that this is the very last release of ownCloud 6 and this release is now unsupported. Security problems have been found since this release was published and we strongly urge you to upgrade to a supported release to ensure the safety and security of your data!</p>

<h3>Version 8.0.4 <small>July 6th 2015</small></h3>
<ul>
<li>occ can now optionally run the update routines without disabling all third party apps</li>
<li>Database handling changes which should improve performance on big systems</li>
<li>better support for very old cURL versions (for QNAP users)</li>
<li>Extended X-Accel-Redirect functionality in nginx</li>
<li>Added work-around for file transfers on 32bit systems</li>
<li>Improved quota calculation</li>
<li>Many fixes and improvements to sharing</li>
<li>Several fixes to upgrade process</li>
<li>Fix deleted folders on client not showing up in trash</li>
<li>fix inability to delete files when quota is 0</li>
<li>Change WebDAV error to 500 instead of 403 on denying overwrite of read-only file</li>
<li>Fixed enforcing expiration date</li>
<li>Fix to Provisioning API</li>
<li>Fixing shared document editing by shared LDAP users</li>
<li>IE 8/9 fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2">owncloud-8.0.4.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip">owncloud-8.0.4.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.md5">owncloud-8.0.4.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.md5">owncloud-8.0.4.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.sha256">owncloud-8.0.4.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.sha256">owncloud-8.0.4.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.4.tar.bz2.asc">owncloud-8.0.4.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.4.zip.asc">owncloud-8.0.4.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.6 <small>June 9th 2015</small></h3>
<ul>
<li>Improve upgrade process</li>
<li>Improved quota calculation</li>
<li>Added work-around for file transfers on 32bit systems</li>
<li>Some fixes to sharing</li>
<li>Fix issue with broken encryption key when deleting file shared by other user</li>
<li>Fix incompatibility bugwith PHP 5.3</li>
<li>Fixed several LDAP and AD issues</li>
<li>Fix movie indexing</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2">owncloud-7.0.6.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip">owncloud-7.0.6.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.md5">owncloud-7.0.6.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.md5">owncloud-7.0.6.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.sha256">owncloud-7.0.6.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.sha256">owncloud-7.0.6.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.6.tar.bz2.asc">owncloud-7.0.6.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.6.zip.asc">owncloud-7.0.6.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 6.0.8 <small>June 9th 2015</small></h3>
<ul>
<li>versioning and deletion fix that solves "unable to rename, file is not writeable" bug</li>
<li>fixed the long execution time of the key migration</li>
<li>Remove hacky Substring support for MSSQL</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.tar.bz2">owncloud-6.0.8.tar.bz2</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.zip">owncloud-6.0.8.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.tar.bz2.md5">owncloud-6.0.8.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.zip.md5">owncloud-6.0.8.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.tar.bz2.sha256">owncloud-6.0.8.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.zip.sha256">owncloud-6.0.8.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.tar.bz2.asc">owncloud-6.0.8.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.8.zip.asc">owncloud-6.0.8.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.3 <small>May 1st 2015</small></h3>
<ul>
<li>Fix several Constrain Violation Exceptions</li>
<li>Fix misleading Maintenance mode message</li>
<li>Timezone fixes for countries with 0.5 and 0.75 offsets</li>
<li>Fix usage of default share folder location</li>
<li>Reenable trashbin after failed rename</li>
<li>Fix disabling of APCu</li>
<li>Do not show update notification on mobile</li>
<li>Fix "Only variables should be passed by reference" error log spam</li>
<li>Add timeout to curl</li>
<li>Makes repair errors and warnings visible for the user when upgrading on the command line or in the web UI</li>
<li>Cron shall not operate in case we are in maintenance mode</li>
<li>Disable the cache updater when doing the encryption migration</li>
<li>Fix "Error while updating app" error</li>
<li>Internal Server Error after attempting to do "occ files:scan" </li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2">owncloud-8.0.3.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip">owncloud-8.0.3.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.md5">owncloud-8.0.3.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.md5">owncloud-8.0.3.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.sha256">owncloud-8.0.3.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.sha256">owncloud-8.0.3.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.3.tar.bz2.asc">owncloud-8.0.3.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.3.zip.asc">owncloud-8.0.3.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.2 <small>March 11th 2015</small></h3>
<ul>
<li>Prevent DB errors in certain high load situations</li>
<li>Fix installation and updating of apps from the app store</li>
<li>Fix documentation links</li>
<li>Fix file move/copy when out of storage space</li>
<li>Disable 3rd party apps during upgrade to prevent breaking ownCloud if incompatible apps are used</li>
<li>Fix compatibility with certain MariaDB versions</li>
<li>Print app upgrade information to console</li>
<li>Detect broken APC versions</li>
<li>Fix certain incompatibilities with older PHP 5.4 versions</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2">owncloud-8.0.2.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip">owncloud-8.0.2.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.md5">owncloud-8.0.2.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.md5">owncloud-8.0.2.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.sha256">owncloud-8.0.2.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.sha256">owncloud-8.0.2.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-8.0.2.tar.bz2.asc">owncloud-8.0.2.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-8.0.2.zip.asc">owncloud-8.0.2.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 7.0.5 <small>March 11th 2015</small></h3>
<ul>
<li>LDAP user cleanup</li>
<li>Improved MSSQL compatibility</li>
<li>Add note about external user app to config.sample.php</li>
<li>Fix creation of ghost directories in certain situations</li>
<li>Fixes for password protected links</li>
<li>Fix upgrade with LDAP in certain situations</li>
<li>Fix Server2Server sharing if trailing slashes are missing</li>
<li>add config-option for an image's maximum file size when generating previews</li>
<li>Increase initial user count in user management to 50</li>
<li>Note in config.sample.php that certain previews are not available on Windows</li>
<li>Drop useless "No reuse of etag" log output</li>
<li>Fix retrieval of LDAP user group in certain situations</li>
<li>Better cleanup temporary files</li>
<li>Show spinner on file upload in IE8 and IE9</li>
<li>Fix links to app store</li>
<li>Return real mime type in PROPFIND</li>
<li>Check if files are deletable before trying to delete them</li>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2">owncloud-7.0.5.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip">owncloud-7.0.5.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.md5">owncloud-7.0.5.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.md5">owncloud-7.0.5.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.sha256">owncloud-7.0.5.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.sha256">owncloud-7.0.5.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/owncloud-7.0.5.tar.bz2.asc">owncloud-7.0.5.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-7.0.5.zip.asc">owncloud-7.0.5.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 6.0.7 <small>March 11th 2015</small></h3>
<ul>
<li>Remove some not needed error log messages</li>
<li>Removes the bogus leading slash in some sharing situations</li>
<li>Better cleanup temporary files</li>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.tar.bz2">owncloud-6.0.7.tar.bz2</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.zip">owncloud-6.0.7.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.tar.bz2.md5">owncloud-6.0.7.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.zip.md5">owncloud-6.0.7.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.tar.bz2.sha256">owncloud-6.0.7.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.zip.sha256">owncloud-6.0.7.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.tar.bz2.asc">owncloud-6.0.7.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/6/owncloud-6.0.7.zip.asc">owncloud-6.0.7.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Release 5.0.19 <small>March 11th 2015</small></h3>
<ul>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Several smaller fixes</li>
</ul>
<strong>Notice</strong>: this is the last 5.0.x release. Upgrading to a supported major release is highly recommended.</br>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.19.tar.bz2">owncloud-5.0.19.tar.bz2</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip">owncloud-5.0.19.zip</a></br>
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.19.tar.bz2.md5">owncloud-5.0.19.tar.bz2.md5</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.md5">owncloud-5.0.19.zip.md5</a></br>
SHA256: <a href="https://download.owncloud.org/community/5/owncloud-5.0.19.tar.bz2.sha256">owncloud-5.0.19.tar.bz2.sha256</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.sha256">owncloud-5.0.19.zip.sha256</a></br>
PGP (<a href="https://owncloud.org/owncloud.asc">Key</a>): <a href="https://download.owncloud.org/community/5/owncloud-5.0.19.tar.bz2.asc">owncloud-5.0.19.tar.bz2.asc</a> or <a href="https://download.owncloud.org/community/owncloud-5.0.19.zip.asc">owncloud-5.0.19.zip.asc</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:5.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 8.0.0 <small>Feb 9th 2015</small></h3>
<ul>
<li>Favorites</li>
<li>Federated Cloud sharing (Server 2 Server Sharing Version 2)</li>
<li>Improved apps management page</li>
<li>Improved updater app</li>
<li>Improved search</li>
<li>Direct download support, Broker</li>
<li>More fine grain storage configuration</li>
<li>Provisioning API will be released as part of the community edition</li>
<li>Apps can now specify their dependencies in info.xml</li>
<li>Accessibility improvements</li>
<li>Improved Documents</li>
<li>LDAP/AD: command line functions for creating and deleting LDAP configurations.</li>
<li>LDAP/AD: subtle configuration wizard improvements, including user name attribute detection.</li>
<li>PDF viewer has been updated to a new version of PDF.js</li>
<li>Sharing links are now shorter and "look better"</li>
<li>User management improvements</li>
<li>Better structured settings and admin page</li>
<li>Performance improvements</li>
<li>App container can now automatically resolve dependencies</li>
<li>Various app API deprecations and features</li>
<li>Improved import for contacts</li>
<li>App development tutorial for building a notes app</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-8.0.0.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:8.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.4 <small>Dec 9th 2014</small></h3>
<ul>
<li>Added XMLWriter check</li>
<li>Better deleted outdated previews</li>
<li>Store storage credential in session only if needed</li>
<li>Don't disclose relative directory path for single shared files of user</li>
<li>Password reset fixes</li>
<li>Fix enable app only for a specific group</li>
<li>fixing port configuration in trusted domains</li>
<li>LDAP fixes</li>
<li>Make group search case sensitive</li>
<li>Allow admin to change users display name </li>
<li>ldap performance improvements</li>
<li>config.php can now be read only</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.4.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.3 <small>November 13th 2014</small></h3> 
<ul>
<li>Some OS X server fixes</li>
<li>Several external storage fixes and improvements</li>
<li>Close session early to speedup apps page loading</li>
<li>Add overwrite.cli.url config option</li>
<li>Fix finding old versions in special cases</li>
<li>Make versions and encryption aware of copy operations</li>
<li>Force loading encryption app in all needed cases</li>
<li>Better filesystem scanning error messages</li>
<li>LDAP wizard fixes</li>
<li>Add configuration switch to enable preview mimetypes</li>
<li>Create backup of all encryption keys before recovery</li>
<li>Add displayname for admins</li>
<li>Better config.sample documentation</li>
<li>Better apps descriptions</li>
<li>Improve visual feedback if recovery key password gets changed</li>
<li>Fix some object store integration issues</li>
<li>Improved data directory configuration</li>
<li>Fix DAV permissions without create permissions</li>
<li>Fix filepicker home icon being partly hidden</li>
<li>Do only follow http and https redirects</li>
<li>Properly delete old previews</li>
<li>Prevent upgrades between more than one major versions</li>
<li>Several security fixes</li>
<li>Lots of smaller improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.3.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.6 <small>November 13th 2014</small></h3> 
<ul>
<li>Fix finding old versions in special cases</li>
<li>Make versions and encryption aware of copy operations</li>
<li>Force loading encryption app in all needed cases</li>
<li>Better filesystem scanning error messages</li>
<li>LDAP wizard fixes</li>
<li>Add configuration switch to enable preview mimetypes</li>
<li>Create backup of all encryption keys before recovery</li>
<li>Add displayname for admins</li>
<li>Several security fixes</li>
<li>Lots of smaller improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.6.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.6.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.6.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.6.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 5.0.18 <small>November 13th 2014</small></h3> 
<ul>
<li>Only allow http and https redirects</li>
<li>Documentation fixes</li>
<li>Several security fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.18.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.18.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.18.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:5.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.2 <small>August 28th 2014</small></h3> 
<ul>
<li>App upgrading stability improvements</li>
<li>Make default share folder configurable</li>
<li>Improve readability of error messages</li>
<li>Log failed authentication</li>
<li>S3 key fixes</li>
<li>Fix range requests with encryption</li>
<li>Several LDAP fixes</li>
<li>Remove obsolete 'Download preparing' message for zip downloads</li>
<li>Remove not working checks from code checker</li>
<li>No error if we try to delete a file which no longer exists</li>
<li>Fix detection of system wide mount points</li>
<li>Simplify App navigation</li>
<li>Add group management to public api</li>
<li>Remove confusing 'automatic logon rejected' message</li>
<li>Implement a txt preview fallback for the case that ttf is not support</li>
<li>Fix tiny thumbnail bug</li>
<li>Don't display share permission if resharing was disabled by the admin</li>
<li>Close session right before the download starts</li>
<li>Fix date display in filepicker</li>
<li>Don't touch non-oc tables when doing the InnoDB repair step</li>
<li>Several Documents fixes</li>
<li>Correctly handle public uploads activities</li>
<li>Add better 4 image previews to gallery</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.2.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.5 <small>August 28th 2014</small></h3>
<ul>
<li>Documentation improvements</li>
<li>fix anonymous upload if logged-in </li>
<li>Fix handling of special characters in group names</li>
<li>Fix downloading of big files in special situations</li>
<li>More consistent handling of debug mode</li>
<li>Fix sharing email notifications</li>
<li>Disabling upload button if upload is not possible</li>
<li>Fix detection of system wide mount points</li>
<li>Handle video viewer in sharing links correctly</li>
<li>Update encryption keys recursively if a folder was moved</li>
<li>Enable download button for public folders</li>
<li>Handle exceptions if file to too big for trash-bin correctly</li>
<li>Quota fixes</li>
<li>Avoid unnecessary writing to the DB when preferences are not changed</li>
<li>Disable download button if zip download is disabled</li>
<li>Fix searching for users in special situations</li>
<li>Mount-point handling fixes</li>
<li>Correctly handle storage stats for trash bin</li>
<li>Remove etag warning for trash bin</li>
<li>Hardened SFTP host verification</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.5.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.5.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.5.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.5.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:6.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.1 <small>August 4th 2014</small></h3>
<ul>
<li>Set maximum width for notification so they don't overlap the whole header</li>
<li>Don't preload videos on public sharing</li>
<li>Fix preview size calculation under certain conditions</li>
<li>Fix to always show all available versions in the versions dropdown</li>
<li>Support WebDAV copy operation and make encryption aware of it</li>
<li>Make sure to set the expire date if a date is set as default</li>
<li>Improved link icon for better UX</li>
<li>Fix rendering of blank template</li>
<li>Only call exec if is is enabled by PHP</li>
<li>Limit app menu icon size</li>
<li>Show a warning in the personal settings and admin settins if the encyption keys are not yet initialized</li>
<li>Always remove share permission if user is excluded from sharing</li>
<li>Add OCS api call to set expire date for link shares</li>
<li>Improved db schema migration for sqlite</li>
<li>Don't try to execute background jobs that no longer exist</li>
<li>Improve look of search on mobile, save space in top bar</li>
<li>Set core version after a successful update to make upgrade more robust of app upgrades fail</li>
<li>Verify whether download URLs are valid</li>
<li>Fix preview animation on uploading</li>
<li>Prevent cron.php to trigger apps updating</li>
<li>Fix remote share when remote server is installed at the root</li>
<li>Fix files sorting</li>
<li>Fix calendar import</li>
<li>Fix gallery pause icon</li>
<li>Several contacts fixes specifically for PHP 5.3</li>
<li>Make updater more robust</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.1.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 7.0.0 <small>June 23rd 2014</small></h3>
<ul>
<li>New files view including sorting and endless scrolling</li>
<li>Server to Server sharing</li>
<li>Sharing overview</li>
<li>Improved sharing admin control</li>
<li>No more mandatory Shared folder</li>
<li>Improved ownCloud Documents features</li>
<li>Hugely improved Activity app including email notifications</li>
<li>Mobile optimized webinterface</li>
<li>Password strength indicator</li>
<li>Significant speed improvements</li>
<li>New user-management</li>
<li>Support for Swift object stores</li>
<li>Email configuration wizard</li>
<li>Email template editor</li>
<li>Improved upgrade process</li>
</ul>
Download: <a href="https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-7.0.0.tar.bz2.md5</a></br>
Packages: <a href="http://software.opensuse.org/download/package?project=isv:ownCloud:community:7.0&package=owncloud">on the Open Build Service</a></br>

<h3>Version 6.0.4 <small>June 23rd 2014</small></h3>
<ul>
<li>Fixed a security issue (Will be disclosed two weeks after this release)
<li>Several LDAP fixes and improvements
<li>Add deprecated warning to load function
<li>File scanner fixes
<li>Heart beat fixes
<li>Encryption fixes for some corner cases
<li>Fix conflict dialog translations
<li>Fix button text overflow
<li>Fix search with Oracle
<li>Php upload errors are written to log
<li>OCS status code fixes
<li>Add PostgreSQL version warning
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.4.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.4.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.4.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.4.tar.bz2.md5</a></br>
<h3>Version 5.0.17 <small>June 23rd 2014</small></h3>
<ul>
<li>Fixed a security issue (Will be disclosed two weeks after this release)
<li>Add deprecated warning to load function
<li>Fix button text overflow
<li>Fix search with Oracle
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.17.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2</a></br>
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.17.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.17.tar.bz2.md5</a></br>
<h3>Version 6.0.3 <small>April 29th 2014</small></h3>
<ul>
<li>Several security fixes. (Will be disclosed 2 weeks after the release)</li>
<li>Appframework extensions to improve the compatibility with 3rdparty apps</li>
<li>LDAP performance improvements</li>
<li>Fix updating of email adresses from LDAP</li>
<li>Fix WebDAV timestamp format handling</li>
<li>Disable internet connection check if a proxy is configured</li>
<li>Fix a potential file chunking problem on a server that is running out of storage</li>
<li>Do not expire file chunks while checking their existence</li>
<li>Fix loading of authentication apps in any case</li>
<li>Performance improvements by reducing the number of chmod operations.</li>
<li>Make the trusted domain upgrade feature more robust.</li>
<li>Don't allow creating a "Shared" folder.</li>
<li>Fixed "select all" + download on public page</li>
<li>Fix share as link with email multiple users</li>
<li>Reset time of last update feed polling to fix the updater</li>
<li>Share API fixes</li>
<li>Admin option for public upload with encryption enabled</li>  
<li>Fix CIFS with home shares</li>
<li>Detect a missing "data" directory mount</li>
<li>Fix the filesize calculation of encrypted files</li>
<li>Fixes in the OpenStack support</li>
<li>Fixes in the SWIFT support</li>
<li>Don't block PHP sessions during download</li>
<li>Fix sharing oc addressbooks</li>
<li>Several ownCloud Documents improvements and fixes</li>
<li>Several smaller bugfixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.3.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.3.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.3.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.3.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.16 <small>April 29th 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Make the trusted domain upgrade feature more robust.</li>
<li>Fix group restore</li>
<li>Don't block PHP sessions during download</li>
<li>Several smaller bugfixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.16.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.16.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.16.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.2 <small>March 3rd 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Improved trash bin performance for deleting lots of files</li>
<li>Mobile interface improvements</li>
<li>Fix key problems in encryption mode in rare situations</li>
<li>Smaller LDAP improvements</li>
<li>Fix the keep-alive ping for non standard php session lifetimes</li>
<li>Cleanup storage table when deleting an entry</li>
<li>Fix compatibility with xsendfile mode</li>
<li>Fix file size calculation in encryption mode</li>
<li>Fix image previews in trash bin </li>
<li>Fix public upload with enabled enryption</li>
<li>Added APC enabled check</li>
<li>Correctly localise date in notification emails</li>
<li>Improve compatibility with some CIFS servers</li>
<li>Fix shared files and Gallery</li>
<li>Several Contacts compatibility improvements</li>
<li>Several Documents improvements</li>
<li>A lot of smaller bug fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.2.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.2.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.2.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.2.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.15 <small>March 3rd 2014</small></h3>
<ul>
<li>Several security fixes</li>
<li>Improved trash bin performance for deleting lots of files</li>
<li>Mobile interface improvements</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.15.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.15.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.15.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.1 <small>Jan 22th 2014</small></h3>
<ul>
<li>Fix handling of encryption keys</li>
<li>Disable xcache in case admin auth is disabled</li>
<li>Speed DB improvements in user home directory location fetching</li>
<li>Fix some APC configuration problems </li>
<li>Fix duplicate .exe mime-type detection</li>
<li>Support DECIMAL DB schema statement</li>
<li>Fix some API response code problems</li>
<li>Added download workaround for some Android versions.</li> 
<li>Turn off not working mod_pagespeed extension</li>
<li>Command line tool option to show user number</li>
<li>Some LDAP fixes for certain configurations</li>
<li>Fix previews for reshared files</li>
<li>Fix unshare on delete behaviour</li>
<li>Fix a CIFS mounting timezone problem</li>
<li>File Trash handling fixes</li>
<li>Fix potential data corruption problem during massive parallel uploads of the same file</li>
<li>Fix versions expiration logic</li>
<li>Fix public upload progress bar</li>
<li>Fix issues with intermittent "Insufficient Storage" message when quota is enabled</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.1.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.1.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.1.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.1.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.14a <small>Dec 17th 2013</small></h3>
<ul>
<li>Fix bug that triggers a regeneration of the etags and redownload of files</li>
<li>Don't check migration status if a file is accessed by a public link</li>
<li>Fix unsharing of files</li>
<li>Several external filesystem improvements and fixes</li>
<li>A lot of quota calculation fixes</li>
<li>Login cookie handling fixes</li>
<li>Fix WebDAV url</li>
<li>Fix updating of cached permissions</li>
<li>Reverse proxy fixes</li>
<li>Fix handling of touch for external filesystems</li>
<li>Fix setting of display names</li>
<li>IIS fixes</li>
<li>Fix some Oracle corner cases</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.14a.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.14a.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.14a.tar.bz2.md5</a><br />
<br />


<h3>Version 6.0.0a <small>Dec 14th 2013</small></h3>
<ul>
<li>Remove wrong warnings from logfile</li>
<li>Fix LDAP authentication</li>
<li>Fix LDAP configuration</li>
<li>Fix Share dialog</li>
<li>Fix migration under certain conditions</li>
<li>Fix database encoding for old PHP versions</li>
<li>Fix select all checkbox</li>
<li>Fix migration with lucene search enabled</li>
<li>Fix migration for postgresql</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.0a.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.0a.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.0a.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.0a.tar.bz2.md5</a><br />
<br />

<h3>Version 6.0.0 <small>Dec 11th 2013</small></h3>
<ul>
<li>User Avatars</li>
<li>Previews in files app and other places</li>
<li>Updated design, less clutter and more whitespace</li>
<li>Public gallery sharing</li>
<li>Activities</li>
<li>Better file conflict handling dialog</li>
<li>Improved public App API</li>
<li>Sharing API</li>
<li>Example Files</li>
<li>Share Email Notifications</li>
<li>New Doctrine based database layer</li>
<li>Plural translations</li>
<li>Refactored OC.dialogs (both code and design wise)</li>
<li>Priorize often used languages in personal-settings language selection</li>
<li>Update jquery to 1.10.0 and add jquery-migrate 1.2.1</li>
<li>Show a summary as the last filelist entry</li>
<li>Improve app-management (more verbose error-messages)</li>
<li>Show 'More apps' link to app administration directly in app navigation</li>
<li>Templates for newly created files</li>
<li>Add MB indicator to size column</li>
<li>Google Drive external storage uses a new library</li>
<li>New icons for shared and external folders</li>
<li>File uploads conflicts dialog</li>
<li>Possibility to prepopulate a new users home with a skeleton</li>
<li>Public upload with encryption enabled</li>
<li>Users now can decrypt the files again if their encryption app was enabled</li>
<li>Many quota related fixes</li>
<li>Total used space (with quota) now only counts user's own files</li>
<li>Many external storage fixes, improved performance</li>
<li>Improved file navigation performance by using Ajax calls (no full page reload for each folder)</li>
<li>The file owner can now also restore deleted shared files</li>
<li>New version drop-down with previews and the ability to downloading versions directly</li>
</ul>
Download: <a href="https://download.owncloud.org/community/6/owncloud-6.0.0.tar.bz2">https://download.owncloud.org/community/6/owncloud-6.0.0.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/6/owncloud-6.0.0.tar.bz2.md5">https://download.owncloud.org/community/6/owncloud-6.0.0.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.13 <small>Nov 8th 2013</small></h3>
<ul>
<li>SECURITY: Fix a possible security bypass on admin page under certain circumstances and MariaDB</li>
<li>Correctly update database schema during app update</li>
<li>Fix automatic login rejecion error message</li>
<li>Several Oracle fixes</li>
<li>Fixing serverroot/webroot calculation</li>
<li>Adding detection for aborted uploads for chunked uploads</li>
<li>Fixing directory handling that end with a space</li>
<li>Fixing home storage handling</li>
<li>Allow to share a file/folder as public link also if one of it parents was already shared as link</li>
<li>Fix search in shared folders</li>
<li>Fix check for uploads into Shared folder</li>
<li>Several Shared folder handling fixes</li>
<li>Prefere them PNGs over core SVGs</li>
<li>Fall back to default log file of specified logfile doesn't exist</li>
<li>Several IE fixes</li>
<li>Fix LDAP login for certain circumstances</li> 
<li>Fixed chunk size calculation for encrypted files</li>
<li>Fix recursive delete for smb</li>
<li>Fix using touch for creating files for smb</li>
<li>Support OCS Share API</li>
<li>Fix updating ETAGs</li>
<li>Don't write user passwords into logfile</li>
<li>Enable configuration of timezones for logfile timestamps</li>
<li>Cleanup share database table for files that no longer exist</li>
<li>Adding privilege check on move and rename operations</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.13.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.13.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.12 <small>Oct 4th 2013</small></h3>
<ul>
<li>Usermanagement interface fixes</li>
<li>Allow numeric group names</li>
<li>Improved IE compatibiliy</li>
<li>Fix database upgrade error</li>
<li>Sharing permission interface fixes</li>
<li>Small visual fixes</li>
<li>File scanner fixes to handle deleted files correctly</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.12.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.12.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.12.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.11 <small>Sep 10th 2013</small></h3>
<ul>
<li>Fixing upload in shared folders with create privileges</li>
<li>Making ldap more robust in certain situations</li>
<li>Handing quota violation earlier to make the desktop clients more robust</li>
<li>Several quota fixes</li>
<li>Fix issues with certain file names like 0 or false</li>
<li>Disable smb in files_External on windows servers</li>
<li>Enable user to decrypt files again after encryption app was disabled</li>
<li>Improved Encryption messages</li>
<li>Add a searchByMime call to API</li>
<li>Fix multiselects for Firefox on Mac in groups management</li>
<li>Reduce the number of ldap connections</li>
<li>Show a "password incorrect" notice when used shared password is wrong</li>
<li>Switch to the completely new Google Drive SDK.</li>
<li>Scanner: additional tests for reusing etags during scanning</li>
<li>Fix accessing files that are newly created by setting the right mime type</li>
<li>Several Calendar bugfixes</li>
<li>Fixed "Show on Map" in Contacts</li>
<li>A lof of Contacts fixes</li>
<li>Several "Tasks" fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.11.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.11.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.11.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.10 <small>Aug 12th 2013</small></h3>
<ul>
<li>Configurable logfile date format</li>
<li>Several Oracle fixes</li>
<li>Several MSSQL fixes</li>
<li>Make default language configurable</li>
<li>New CLI upgrade script</li>
<li>Correctly calculate folder size</li>
<li>Fix display of search results</li>
<li>Database upgrade fixes</li>
<li>Smaller filesystem cache fixes</li>
<li>Remember password fixes</li>
<li>Encryption fixes</li>
<li>Fix problems with german "Umlauts" in folder name</li>
<li>IE fixes</li>
<li>Improved upgrade logging</li>
<li>Improved external storage status display</li>
<li>Flicker free versions dropdown</li>
<li>Don't create empty versions</li>
<li>Less noisy debug logfile</li>
<li>Don't show firstrunwizard during upgrade</li>
<li>Several Calendar fixes</li>
<li>Contacts fixes</li>
<li>Fixes for Gallery</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.10.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.10.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.10.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.9 <small>July 15th 2013</small></h3>
<ul>
 <li>Fixes for mounting an WebDAV into an ownCloud</li>
 <li>Improved expiration of older versions in the case of a full storage</li>
 <li>IE8 fixes</li>
 <li>Increased speed when syncing shared files</li>
 <li>Oracle compatibility fixes</li>
 <li>Make upgrade routine more robust</li>
 <li>Fix gallery for certain php configurations</li>
 <li>Fix pdf viewer close button</li>
 <li>user_external fixes</li>
 <li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.9.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.9.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.9.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.8 <small>July 10th 2013</small></h3>
<ul>
<li>SECURITY: XSS vulnerability in "Share Interface" (<a href="/security/advisory/?id=oC-SA-2013-029">oC-SA-2013-029</a>)</li>
<li>SECURITY: Authentication bypass in "user_webdavauth" (<a href="/security/advisory/?id=oC-SA-2013-030">oC-SA-2013-030</a>)</li>
<li>New anonymous upload feature</li>
Fix syncing of external filesystems</li>
<li>External filesystems performance improvements</li>
<li>Improve compatibility with Oracle</li>
<li>Improved and simplified theming</li>
<li>Internet explorer 8 fixes</li>
<li>Fixes for partial file uploads</li>
<li>LDAP: fix handling of User and Group Bases</li>
<li>Improved and more robust upgrade system</li>
<li>A lot of encryption system fixes</li>
<li>Do not add groups if user has no groups</li>
<li>Several Contacts fixes</li>
<li>A lot of smaller bugfixes all over the place</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.8.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.8.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.8.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.13 <small>July 10th 2013</small></h3>
<ul>
<li>SECURITY: Authentication bypass in "user_webdavauth" (<a href="/security/advisory/?id=oC-SA-2013-030">oC-SA-2013-030</a>)</li>
<li>Fixed deleting old files versions</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.13.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.13.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.7 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
<li>New encryption app as preview included. WARNING: This is not yet ready for production use but testing and feedback is welcome.</li>
<li>Several LDAP compatibility fixes</li>
<li>Several performance improvements of file handling</li>
<li>Trashbin fixes for Safari</li>
<li>Internet Explorer fixes</li>
<li>Several Contacts fixes</li>
<li>New check for magic_quotes</li>
<li>External Filesystem fixes</li>
<li>Add support for copying/moving folders between storages</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.7.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.7.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.7.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.12 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
<li>Several Contacts fixes</li>
<li>Several Calendar fixes</li>
<li>Several smaller fixes</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.12.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.12.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.12.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.16 <small>June 6th 2013</small></h3>
<ul>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-028">oC-SA-2013-028</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.0.16.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.0.16.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.16.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.6 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-019">oC-SA-2013-019)</a></li>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
<li>SECURITY: Open redirector (<a href="/security/advisory/?id=oC-SA-2013-022">oC-SA-2013-022</a>)</li>
<li>SECURITY: Password autocompletion (<a href="/security/advisory/?id=oC-SA-2013-023">oC-SA-2013-023</a>)</li>
<li>SECURITY: Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-024">oC-SA-2013-024</a>)</li>
<li>SECURITY: Privilege escalation and CSRF in the API (<a href="/security/advisory/?id=oC-SA-2013-025">oC-SA-2013-025</a>)</li>
<li>SECURITY: Incomplete blacklist vulnerability (<a href="/security/advisory/?id=oC-SA-2013-026">oC-SA-2013-026</a>)</li>
<li>SECURITY: Information disclosure: CSRF token + username (<a href="/security/advisory/?id=oC-SA-2013-027">oC-SA-2013-027</a>)</li>
<li>Fix renaming of shared files</li>
<li>Fix UUID handling with LDAP</li>
<li>Fix several undelete files issues</li>
<li>Fix LDAP cachekey handling</li>
<li>Several OCS API fixes</li>
<li>Dropbox mounting fixes</li>
<li>Remove ldap group name restrictions</li>
<li>Fix fetching of the userlist with multiple user backends</li>
<li>Turn off password autocompletion</li>
<li>Translation fixes of the Shared folder</li>
<li>Fix the fileactions order for filetypes</li>
<li>Allow to ship a default theme</li>
<li>Disallow URLs containing "@"</li>
<li>Smaller layout improvemens</li>
<li>Log an upgrade warning</li>
<li>Log a trash bin cleanup message</li> 
<li>Improved quota calculation</li>
<li>Allow to set Quota to zero</li>
<li>Fix performance regression for uploading of big files</li>
<li>Several Calendar fixes</li>
<li>Use displaynames in contacts</li>
<li>Check for existing address books during migrate->import</li>
<li>Texteditor fixes</li>
<li>Increase the SQLite database timeout</li>
<li>Order images in Gallery</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.6.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.6.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.6.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.11 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-019">oC-SA-2013-019</a>)</li>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
<li>SECURITY: Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-024">oC-SA-2013-024</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.11.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.11.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.11.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.15 <small>May 14th 2013</small></h3>
<ul>
<li>SECURITY: Multiple directory traversals (<a href="/security/advisory/?id=oC-SA-2013-020">oC-SA-2013-020</a>)</li>
<li>SECURITY: Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-021">oC-SA-2013-021</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.0.15.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.0.15.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.15.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.5 <small>April 19th 2013</small></h3>
<ul>
<li>Fix navigation hover effect</li>
<li>Fix database migration</li>
<li>Add a warning in the logfile when doing a migration</li>
<li>Fix renaming of shared files</li>
<li>Improved quota calculation</li>
<li>Fix free space calculation</li>
<li>Several layout fixes</li>
<li>Better save mode check</li>
<li>Cleanup database after user deletion</li>
<li>Fix touch for creating new files</li>
<li>Several trash bin fixes</li>
<li>Update MediaElement.js</li>
<li>Fix double address book problem</li>
<li>Fix layout problem triggered by impress</li>
<li>Several smaller fixes</li>
<li>Security: XSS in flashmediaelement.swf (<a href="/security/advisory/?id=oC-SA-2013-017">oC-SA-2013-017</a>)</li>
<li>Security: Authentication bypass in Contacts (<a href="/security/advisory/?id=oC-SA-2013-018">oC-SA-2013-018</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.5.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.5.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.5.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.10 <small>April 19th 2013</small></h3>
<ul>
<li>Security: XSS in flashmediaelement.swf (<a href="/security/advisory/?id=oC-SA-2013-017">oC-SA-2013-017</a>)</li>
<li>Security: Authentication bypass in calendar (<a href="/security/advisory/?id=oC-SA-2013-018">oC-SA-2013-018</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.10.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.10.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.10.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.4 <small>April 11th 2013</small></h3>
<ul>
<li>Fix file renames</li>
<li>Improved compatibility with PostgreSQL</li>
<li>Fixed upgrade for PostgreSQL users</li>
<li>Improved LDAP compatibility</li>
<li>Fix the upgrade hint</li>
<li>Make upgrade more robust fix maintainance mode</li> 
<li>Smaller CSS fixes</li>
<li>Fix internet check for proxy users</li> 
<li>Manually disable files_archive app to fix upgrade</li>
<li>Fix touch() for local storage</li>
<li>Fix versioning check to allow installation of 3rd party apps</li>
<li>Fix default quota</li>
<li>Several contacts fixes</li>
<li>Several calendar fixes</li>
<li>Fixed ampache support in media player</li>
<li>Improve mail function in antivirus app</li>
<li>Fix setting of user quotas</li>
<li>Fix deleted files size calculation</li>
<li>Fix "You do not have write permissions here" warning</li>
<li>Fix asynchronous loading of users</li>
<li>Fix notice from the nullbyte check</li>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.4.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.4.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.4.tar.bz2.md5</a><br />
<br />

<h3>Version 4.5.9 <small>April 11th 2013</small></h3>
<ul>
<li>Fix public sharing</li>
<li>Improved LDAP error reporting</li>
<li>Don't show share action for Shared folder</li>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.9.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.9.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.9.tar.bz2.md5</a><br />
<br />

<h3>Version 4.0.14 <small>April 11th 2013</small></h3>
<ul>
<li>XSS vulnerability in jPlayer (<a href="/security/advisory/?id=oC-SA-2013-014">oC-SA-2013-014</a>)</li>
<li>PostgreSQL: Insecure database password generator (<a href="/security/advisory/?id=oC-SA-2013-015">oC-SA-2013-015)</a></li>
<li>Windows: Local file disclosure (<a href="/security/advisory/?id=oC-SA-2013-016">oC-SA-2013-016</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.0.14.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.0.14.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.14.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.3 <small>April 3th 2013</small></h3>
<ul>
<li>Correctly handle .part files</li>
<li>Improve PostgreSQL support</li>
<li>Fix database upgrading from old versions</li>
<li>Improved app styles</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.3.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.3.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.3.tar.bz2.md5</a><br />
<br />

<h3>Version 5.0.2 <small>April 2th 2013</small></h3>
<ul>
<li>Fix versioning string</li>
<li>Fix compatibility with older MySQL versions</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.2.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.2.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.2.tar.bz2.md5</a><br />
<br />


<h3>Version 5.0.1 <small>April 2th 2013</small></h3>
<ul>
<li>Fixed classnames and improved autoloaded to improve compatibility with older PHP versions</li>
<li>Show a warning if an insecure PHP version is used</li>
<li>Filesizes are displayed correctly</li>
<li>Fixed groups in usermanagement</li>
<li>Several Internet Explorer fixes</li>
<li>Use display-names in more places</li>
<li>Fix upgrading of cache</li>
<li>Fix navigation scrollbar for lots of apps</li>
<li>Fixed ETag handling to prevent wrong conflict files</li>
<li>Fix public link handling</li>
<li>Better indexes to improve performance</li>
<li>Several Windows server fixes</li>
<li>Fix renames of shared files</li>
<li>Fix PostgreSQL compatibility</li>
<li>Improve error reporting for app installation</li>
<li>Improved compatibility with Novell eDirectory</li>
<li>Several LDAP fixes</li>
<li>Improved sorting in usermanagement</li>
<li>Improved background jobs</li>
<li>Several CardDAV contacts fixes</li>
<li>Several mediaplayer fixes</li> 
<li>Fixes for text editor</li>
<li>Several lucene search fixes</li>
<li>Several smaller fixes</li>
<li>Contacts: SQL Injection (<a href="/security/advisory/?id=oC-SA-2013-012">oC-SA-2013-012</a>)</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-011">oC-SA-2013-011</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.1.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.1.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.1.tar.bz2.md5</a><br />


<h3>Version 5.0.0 <small>March 14th 2013</small></h3>
<ul>
<li>New design</li>
<li>Restore deleted files</li> 
<li>New fulltext search</li>
<li>Display names</li>
<li>New photo gallery</li>
<li>Improved calendar and contacts</li>
<li>Improved bookmarks</li>
<li>New documentation system</li>
<li>Improved file cache</li>
<li>Improved security checks</li>
<li>Security hardening in templates</li> 
<li>Security hardening: Implemented Content Security Policy</li>
<li>Better versioning of better autoexpire</li>
<li>Extended external storage</li>
<li>New OCS REST API support</li>
<li>Improved apps management</li>
</ul>
Download: <a href="https://download.owncloud.org/community/5/owncloud-5.0.0.tar.bz2">https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/5/owncloud-5.0.0.tar.bz2.md5">https://download.owncloud.org/community/owncloud-5.0.0.tar.bz2.md5</a><br />

<h3>Version 4.5.8 <small>March 14th 2013</small></h3>
<ul>
<li>Fix foldersize checks to validate zip input size</li>
<li>Offer download of shared dir as zip only if zip size limit is not exceeded</li>
<li>Escape more characters for LDAP search</li>
<li>Fix versioning together with real home directories</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-008">oC-SA-2013-008</a>)</li>
<li>Contacts: Bypass of file blacklist (<a href="/security/advisory/?id=oC-SA-2013-009">oC-SA-2013-009</a>)</li>
<li>user_migrate: Local file  disclosure (<a href="/security/advisory/?id=oC-SA-2013-010">oC-SA-2013-010</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.5.8.tar.bz2">https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.5.8.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.5.8.tar.bz2.md5</a><br />


<h3>Version 4.0.13 <small>March 14th 2013</small></h3>
<ul>
<li>Contacts: Bypass of file blacklist (<a href="/security/advisory/?id=oC-SA-2013-009">oC-SA-2013-009)</a></li>
<li>user_migrate: Local file  disclosure (<a href="/security/advisory/?id=oC-SA-2013-010">oC-SA-2013-010</a>)</li>
</ul>
Download: <a href="https://download.owncloud.org/community/4/owncloud-4.0.13.tar.bz2">https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2</a><br />
MD5: <a href="https://download.owncloud.org/community/4/owncloud-4.0.13.tar.bz2.md5">https://download.owncloud.org/community/owncloud-4.0.13.tar.bz2.md5</a><br />




<h3>Version 4.5.7 <small>Feb 20th 2013</small></h3>
<ul>
<li>Fix for 3rd party apps dropping the database</li>
<li>Fix SubAdmins management</li>
<li>Fix PHP warnings</li>
<li>Fix compatibility with some CIFS shares</li>
<li>More robust apps management</li>
<li>Remove not needed AWS tests</li>
<li>Improved mime type parsing</li>
<li>Several sharing fixes</li>
<li>Offer the option to change the password only supported by the backend</li>
<li>More robust auto language detection</li>
<li>Revoke DB rights on install only if the db is newly created</li>
<li>Fix rendering of database connection error page</li>
<li>LDAP: update quota more often</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-003">oC-SA-2013-003</a>)</li>
<li>Multiple CSRF vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-004">oC-SA-2013-004</a>)</li>
<li>PHP settings disclosure (<a href="/security/advisory/?id=oC-SA-2013-005">oC-SA-2013-005</a>)</li>
<li>Multiple code executions (<a href="/security/advisory/?id=oC-SA-2013-006">oC-SA-2013-006</a>)</li>
<li>Privilege escalation in the calendar application (<a href="/security/advisory/?id=oC-SA-2013-007">oC-SA-2013-007</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.7.tar.bz2.md5</a><br />



<h3>Version 4.0.12 <small>Feb 20th 2013</small></h3>
<ul>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-003">oC-SA-2013-003</a>)</li>
<li>Multiple CSRF vulnerabilities (<a href="/security/advisory/?id=oC-SA-2013-004">oC-SA-2013-004</a>)</li>
<li>Multiple code executions (<a href="/security/advisory/?id=oC-SA-2013-006">oC-SA-2013-006</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.12.tar.bz2.md5</a><br />


<h3>Version 4.5.6 <small>Jan 22th 2013</small></h3>
<ul>
<li>Improved language detection</li>
<li>Improved translations</li>
<li>Fix link to bugtracker</li>
<li>Several IE 6/7/8 fixes</li>
<li>SabreDAV updated to 1.6.6</li>
<li>Improved error reporting</li>
<li>Support special characters in mountpoint</li>
<li>Interpret https 403 and 401 as not authorized in user_webdavauth</li>
<li>Several fixes for special characters in files and folders</li>
<li>Improved PostgreSQL support</li>
<li>Check database names for valid characters</li>
<li>Fix default email address calculation</li>
<li>Remove debug output on send password page</li>
<li>Add SMTP port configuration option</li>
<li>Only show the max possible upload of 2GB on a 32 bit system</li>
<li>Show progress during file downloads</li>
<li>Security: Fix multiple XSS problems: <a href="/security/advisory/?id=oC-SA-2013-001">CVE-2013-0201,  CVE-2013-0202, CVE-2013-0203</a></li>
<li>Security: Fix Code execution in external storage: <a href="/security/advisory/?id=oc-sa-2013-002">CVE-2013-0204</a></li>
<li>Security: Removed remoteStorage app because of unfixed security problems.</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.6.tar.bz2.md5</a><br />


<h3>Version 4.0.11 <small>Jan 22th 2013</small></h3>
<ul>
<li>Security: Fix multiple XSS problems: <a href="/security/advisory/?id=oC-SA-2013-001">CVE-2013-0201,  CVE-2013-0202, CVE-2013-0203</a></li>
<li>Security: Removed remoteStorage app because of unfixed security problems.</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.11.tar.bz2.md5</a><br />

<h3>Version 4.5.5 <small>Dec 20th 2012</small></h3>
<ul>
<li>Show drag and drop shadow for Firefox</li>
<li>Fix Knowledgebase under certain conditions</li>
<li>Fix setting of sharing password</li>
<li>Fix setting of sharing password</li>
<li>Several sharing fixes</li>
<li>Fixversioning during sharing</li>
<li>Fix mounting of external filesystems especially CIFS</li>
<li>Fix several PHP warnings</li>
<li>Show /Shared as standard directory</li>
<li>Fix session management for running several ownClouds on the same host</li>
<li>Fix WebDAV quota enforement</li>
<li>Fix CalDAV with LDAP users</li>
<li>Better warning about missing dependencies</li>
<li>Add warning about conflicting WebDAV auth and LDAP backend</li>
<li>Restore send sharing link my email</li>
<li>Fix encoding problem with mounting of CIFS filesystems</li>
<li>Fix mimetype icons for new files</li>
<li>Fix the folder size calculation</li>
<li>Fix for deleting multiple files</li>
<li>Fix for controling the data dir with LDAP</li>
<li>Security: Auth bypass in user_webdavauth and user_ldap (<a href="/security/advisory/?id=oC-SA-2012-006">oC-SA-2012-006)</li>
<li>Security: XSS vulnerability in bookmarks (<a href="/security/advisory/?id=oC-SA-2012-007">oC-SA-2012-007)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.5.tar.bz2.md5</a>

<h3>Version 4.0.10 <small>Dec 20th 2012</small></h3>
<ul>
<li>Security: Auth bypass in user_webdavauth and user_ldap (<a href="/security/advisory/?id=oC-SA-2012-006">oC-SA-2012-006)</li>
<li>Security: XSS vulnerability in bookmarks (<a href="/security/advisory/?id=oC-SA-2012-007">oC-SA-2012-007)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.10.tar.bz2.md5</a>

<h3>Version 4.5.4 <small>Dec 3th 2012</small></h3>
<ul>
<li>Fix a regression for system where output buffering is disabled</li>
<li>Fix a problem with old file versions stored in the filesystem cache</li> 
<li>Fix group and subadmin ajax bug</li>
<li>Important LDAP fix</li>
<li>Improved Updater</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.4.tar.bz2.md5</a>


<h3>Version 4.5.3 <small>Nov 27th 2012</small></h3>
<ul>
<li>Fix the new from url button</li>
<li>Fix a memory overflow with downloading of big files via WebDAV</li>
<li>Better error output in case of DB problems</li>
<li>Fix problems with uploading files who have special characters in the name</li>
<li>Improved reverse proxy and load balancer support</li>
<li>Fix wrong folder size calculation</li>
<li>Improved share link generation</li>
<li>Fix the syncing of the Shared folder</li>
<li>Fix Sharing by link from within Shared folder</li>
<li>Several LDAP integration fixes</li>
<li>Fix support for PostgreSQL </li>
<li>Several WebDAV fixes</li>
<li>Fix drag and drop uploading</li>
<li>Improved translations</li>
<li>Several Gallery fixes</li>
<li>Several Contacts fixes</li>
<li>Smaller fixes</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.3.tar.bz2.md5</a>

<h3>Version 4.5.2 <small>Nov 14th 2012</small></h3>
<ul>
<li>Fix syncing of shared folder</li>
<li>Various sharing bugs fixed</li>
<li>Fix bug with deleting users</li>
<li>Fix check if resharing is allowed</li>
<li>Fix webdavauth app</li>
<li>Several ldap fixes</li>
<li>Fix data migration</li>
<li>Fix folder uploads</li>
<li>Fix generatino of etags</li>
<li>Fix user specific mount configuration</li>
<li>Several PostgreSQL fixes</li>
<li>Improved performance of file updates</li>
<li>Fix some php warnings</li>
<li>Fix filesize calculation</li>
<li>Add visual feedback if password is set</li>
<li>Various smaller fixes</li>
<li>Several critical security fixes</li>
<li>XSS vulnerability in user_webdavauth (<a href="/security/advisory/?id=oC-SA-2012-003">oC-SA-2012-003</a>)</li>
<li>Code Execution in /lib/migrate.php (<a href="/security/advisory/?id=oC-SA-2012-004">oC-SA-2012-004</a>)</li>
<li>Code Execution in /lib/filesystem.php (<a href="/security/advisory/?id=oC-SA-2012-005">oC-SA-2012-005</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.2.tar.bz2.md5</a>

<h3>Version 4.0.9 <small>Nov 14th 2012</small></h3>
<ul>
<li>Several critical security fixes</li>
<li>Multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2012-001">oC-SA-2012-001</a>)</li>
<li>Timing attack in the "Lost Password" implementation (<a href="/security/advisory/?id=oC-SA-2012-002">oC-SA-2012-002</a>)</li>
<li>Code Execution in /lib/migrate.php (<a href="/security/advisory/?id=oC-SA-2012-004">oC-SA-2012-004</a>)</li>
<li>Code Execution in /lib/filesystem.php (<a href="/security/advisory/?id=oC-SA-2012-005">oC-SA-2012-005</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.9.tar.bz2.md5</a>

<h3>Version 4.5.1 <small>Oct 24th 2012</small></h3>
<ul>
	<li>Fix path encoding in breadcrumb</li>
	<li>Fix sharing of files with special characters</li>
	<li>Fix upercase/lowercase probelm in usernames with WebDAV</li>
	<li>Fix LDAP plugin with Postgres</li>
	<li>Fix userID migration</li>
	<li>Fix sharing of mounted Files</li>
	<li>Delete userfiles after deleting a user</li>
	<li>Make Webinterface work with nonstandard path</li>
	<li>Fix retrieval of Quota, Email via LDAP</li>
	<li>Show a warning in installer if .htaccess is not working</li>
	<li>Fix Shared folder caching</li>
	<li>Increase security by using openssl random number generator</li>
	<li>Fix syncing of rollback files</li>
	<li>Fix the swift files backend</li>
	<li>Disallow user to delete own account</li>
	<li>Security: Fix multiple XSS vulnerabilities (<a href="/security/advisory/?id=oC-SA-2012-001">oC-SA-2012-001</a>)</li>
	<li>Security: Fix a timing attack in the "Lost Password" implementation (<a href="/security/advisory/?id=oC-SA-2012-002">oC-SA-2012-002</a>)</li>
	<li>Various smaller fixes</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.1.tar.bz2.md5</a>
<h3>Version 4.5.0 <small>Oct 10th 2012</small></h3>
<ul>
	<li>Faster Syncing</li>
	<li>Sub Administrators</li>
	<li>GUI for mounting of external storage</li>
	<li>Improved File Versioning</li>
	<li>Enhanced Sharing</li>
	<li>Reworked LDAP</li>
	<li>Big File Chunking</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.5.0.tar.bz2.md5</a>
<h3>Version 4.0.8 <small>Oct 10th 2012</small></h3>
<ul>
	<li>Show Login Button when user and password are autocompleted</li>
	<li>Sanitize LDAP base, user and groups</li>
	<li>Security: Fix for insufficiently Random Values (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2008-4107&type=Code">CVE-2008-4107</a>)</li>
	<li>Security: Fixed multiple XSS vulnerabilities (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-5056&type=Code">CVE-2012-5056</a>)</li>
	<li>Security: Fixed a https header injection (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-5057&type=Code">CVE-2012-5057</a>)</li>
	<li>Security: Fixed an Auth bypass in /lib/base.php (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-5336&type=Code">CVE-2012-5336</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.8.tar.bz2.md5</a>
<h3>Version 4.0.7 <small>Aug 15th 2012</small></h3>
<ul>
	<li>Show Login Button when user and password are auto-completed</li>
	<li>Sanitize LDAP base, user and groups</li>
	<li>Fix non active Adressbooks</li>
	<li>Calendar: Remove double html encoding</li>
	<li>Fix label for versioning in admin settings</li>
	<li>Add parent directory into filecache if it doesn't exist</li>
	<li>Handle non writable files correctly</li>
	<li>Disable webfinger completely if not activated</li>
	<li>Security: Disable user listings in DAV (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4390&type=Code">CVE-2012-4390</a>)</li>
	<li>Security: Check file blacklist for file renames (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4389&type=Code">CVE-2012-4389</a>)</li>
	<li>Security: CSRF fix for appconfig.php (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4391&type=Code">CVE-2012-4391</a>)</li>
	<li>Security: Validate cookie to prevent auth bypasses (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4392&type=Code">CVE-2012-4392</a>)</li>
	<li>Special thanks to Julien Cayssol for reporting several security problems</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.7.tar.bz2.md5</a>
<h3>Version 4.0.6 <small>Aug 1th 2012</small></h3>
<ul>
	<li>More robust LDAP integration during unexpected collisions</li>
	<li>Fix sharing for users with @ in username</li>
	<li>Additional error handling for emailing of private links</li>
	<li>Cleanup old session files</li>
	<li>Fix user space calculation</li>
	<li>Fix Ampache authentication</li>
	<li>Remove delete tipsy if file is deleted</li>
	<li>Don't delete lot's of session files during DAV requests</li>
	<li>Fix error when no adressbook is created</li>
	<li>Check if php-ldap is installed</li>
	<li>Security: Check for Admin user in appconfig.php (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4752&type=Code">CVE-2012-4752</a>)</li>
	<li>Security: Several CSRF security fixes (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4393&type=Code">CVE-2012-4393</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.6.tar.bz2.md5</a>
<h3>Version 4.0.5 <small>July 20th 2012</small></h3>
<ul>
	<li>Fix remember the username and autologin</li>
	<li>Offer an option to allow sharing outside the group.</li>
	<li>Fix for birthday format</li>
	<li>Fixes for several encoding fixes for unicode characters</li>
	<li>Fix invalid filesystem cache in the sharing folder</li>
	<li>Several calendar and contacts fixes</li>
	<li>Fix sending of emails</li>
	<li>Several fixes in the system log</li>
	<li>Several fixes for the external filesystem feature</li>
	<li>Security: Fix a reflected XSS (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4394&type=Code">CVE-2012-4394</a>)</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.5.tar.bz2.md5</a>
<h3>Version 4.0.4 <small>June 28th 2012</small></h3>
<ul>
	<li>Fix assigning several groups to a user.</li>
	<li>Fix LDAP connector with AD servers</li>
	<li>Conserve some memory in Contacts App</li>
	<li>Fix a warning in Gallery when deleting files</li>
	<li>Fix a bug in the music scanner</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.4.tar.bz2.md5</a>
<h3>Version 4.0.3 <small>June 23rd 2012</small></h3>
<ul>
	<li>Added a check if the .htaccess file is working and the data directory is protected or not.</li>
	<li>Added a check if a user is allowed to edit a bookmark or not.</li>
	<li>Fix the bookmarklet</li>
	<li>Fix the timezone in the datepicker</li>
	<li>Fix mimetype detection for cdr files</li>
	<li>Fix the filecache for the /Shared folder</li>
	<li>Fix a potential data corruption bug in the encryption app</li>
	<li>Don't show other users filenames during filesystem cache rebuild</li>
	<li>Security: Fix several XSS bugs (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4395&type=Code">CVE-2012-4395</a>)</li>
	<li>Performance improvements for WebDAV and Desktop Syncing</li>
	<li>Fix quota calculation</li>
	<li>Improve the LDAP integration and group management</li>
	<li>Fix problems with the pdf viewer</li>
	<li>Fix user account migration</li>
	<li>Implement several CSRF security checks</li>
	<li>Fix a gallery bug where first picture is repeated in the last picture.</li>
	<li>Lot's of calendar fixes</li>
	<li>Fix problem with "/" in filenames</li>
	<li>Updated translations</li>
	<li>Several fixes in Contacts</li>
	<li>Lot's of fixes in the Tasks App</li>
	<li>Fix a bug in the filesystem cache with ghost entries</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.3.tar.bz2.md5</a>
<h3>Version 4.0.2 <small>June 11th 2012</small></h3>
<ul>
	<li>Lot's of gallery fixes</li>
	<li>More 3rd party apps visible</li>
	<li>Fixed update notifications</li>
	<li>Several calendar fixes</li>
	<li>Several XSS fixes in calendar (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4396&type=Code">CVE-2012-4396)</a></li>
	<li>Several improvements in contacts</li>
	<li>Fix infinite redirect during setup for windows hosts</li>
	<li>Several XSS fixes in contacts (<a href="https://github.com/owncloud/security-advisories/search?q=CVE-2012-4396&type=Code">CVE-2012-4396</a>)</li>
	<li>New user password salting</li>
	<li>Several LDAP fixes</li>
	<li>Fix duplicate emails in sharing</li>
	<li>Improved compatibility with Android browser</li>
	<li>Fixed calendar links</li>
	<li>Fixed logging</li>
	<li>Allow "/" in filenames</li>
	<li>Updated translations</li>
	<li>Fixed reverse proxy and custom hosts configuration</li>
	<li>Fix contact photo editing</li>
	<li>Don't allow renaming, deleting and resharing of shared folder</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.2.tar.bz2.md5</a>
<h3>Version 4.0.1 <small>June 4th 2012</small></h3>
<ul>
	<li>Verify if user exists when loggin (oc-863)</li>
	<li>More efficient log file handling</li>
	<li>PDO requirement check</li>
	<li>Check if apps folder is writable</li>
	<li>prevent division by zero problem during output of free space</li>
	<li>better mysql error message</li>
	<li>correctly configure ldap group backend (oc-887)</li>
	<li>sort users and groups (oc-779)</li>
	<li>LDAP. correctly handle group filter (oc-867)</li>
	<li>try to switch magic quotes of globally</li>
	<li>fix ategory error reporting (oc-874)</li>
	<li>correctly handle reverse proxy / load balancer httpss handling</li>
	<li>prevent session already started warning</li>
	<li>fix the files breadcrumb</li>
	<li>don't try to use smtp auth if config files says no</li>
	<li>fix versioning path</li>
	<li>security: fix a XSS problem in calendar</li>
	<li>make LDAP pqsql compatible</li>
	<li>fix pqsql database migration</li>
	<li>fix ldap config interface</li>
	<li>support for LDAP "member"</li>
	<li>don't hardcode /tmp</li>
	<li>fix potential security problem for requested apps parameter</li>
	<li>fix notes in contacts properly</li>
	<li>fix timezone detection</li>
	<li>fix interti_id in calendar</li>
	<li>set DB prefix for pqsql</li>
	<li>security: fix a XSS problem in contacts</li>
	<li>correctly encode caldav link</li>
	<li>allow longer path in gallery</li>
	<li>disable not compatible apps during upgrade</li>
	<li>fix HEAD request for downloads</li>
	<li>fix private link sharing via email</li>
	<li>use UTC as default timezone</li>
	<li>style fixes for tasks app</li>
</ul>
Download: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2">https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2</a><br />
MD5: <a href="https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2.md5">https://mirrors.owncloud.org/releases/owncloud-4.0.1.tar.bz2.md5</a>
<h3>Version 4.0.0 <small>May 22nd 2012</small></h3>
<ul>
	<li>File Encryption</li>
	<li>File Versioning</li>
	<li>Mounting of external Filesystems (experimental)</li>
	<li>TODOs App</li>
	<li>Drag &amp; Drop File Uploading</li>
	<li>Shared Calendars</li>
	<li>Calendar categories</li>
	<li>Hugely improved contacts app including groups</li>
	<li>Improved WebDAV, CalDAV, CardDAV compatibility</li>
	<li>Movable Apps</li>
	<li>Improved External App</li>
	<li>Improved Sharing of Files</li>
	<li>Overall Performance Improvements</li>
	<li>System/User Exporting/Importing</li>
	<li>User/Groups support via LDAP/AD</li>
	<li>Viewer for ODF Files</li>
	<li>Improved Photo Gallery</li>
	<li>Improved installation of 3rd Party Apps</li>
	<li>Logging via syslog</li>
	<li>New public API for App developers</li>
	<li>Lots of bug fixes, smaller enhancements and UX improvements.</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-4.0.0.tar.bz2">https://owncloud.org/releases/owncloud-4.0.0.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-4.0.0.tar.bz2.md5">https://owncloud.org/releases/owncloud-4.0.0.tar.bz2.md5</a>
<h3>Version 3.0.3 <small>April 27th 2012</small></h3>
<ul>
	<li>Security: Several CSRF fixes</li>
	<li>Security: .htaccess uploading blacklist</li>
	<li>Backport link in the Help center to the online documentatio</li>
	<li>Backport link in the Help center to the "Big Files" howto</li>
	<li>Check if JSon module is installed</li>
	<li>Check if GD module is installed</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.3.tar.bz2">https://owncloud.org/releases/owncloud-3.0.3.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.3.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.3.tar.bz2.md5</a>
<h3>Version 3.0.2 <small>April 11th 2012</small></h3>
<ul>
	<li>Drag and Drop fixed</li>
	<li>Fixed Sharing for LDAP Users</li>
	<li>Fix loading of LDAP Plugin</li>
	<li>Security: Make password hashes more random</li>
	<li>Security: Fix a XXS problem</li>
	<li>Multiple bugfixes</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.2.tar.bz2">https://owncloud.org/releases/owncloud-3.0.2.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.2.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.2.tar.bz2.md5</a>
<h3>Version 3.0.1 <small>April 3rd 2012</small></h3>
<ul>
	<li>Fixes for big file uploads</li>
	<li>Performance improvements for WebDAV</li>
	<li>IE8 fixes</li>
	<li>Several small bugfixes</li>
</ul>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.1.tar.bz2">https://owncloud.org/releases/owncloud-3.0.1.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.1.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.1.tar.bz2.md5</a>
<h3>Version 3.0 <small>January 31st 2012</small></h3>
<ul>
	<li>Text editor</li>
	<li>Improved photo gallery</li>
	<li>Improved calendar view</li>
	<li>PDF viewer</li>
</ua>
Download: <a href="https://owncloud.org/releases/owncloud-3.0.tar.bz2">https://owncloud.org/releases/owncloud-3.0.tar.bz2</a><br />
MD5: <a href="https://owncloud.org/releases/owncloud-3.0.tar.bz2.md5">https://owncloud.org/releases/owncloud-3.0.tar.bz2.md5</a>
