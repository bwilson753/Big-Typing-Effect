Description:
The author of this WordPress plugin is Bob Wilson, however
most of the credit for this plugin belongs to Matt Boldt, JSDEliver, and WordPress.
All this plugin does is create a convenient way to manipulate html 
and possibly css for the sake of using Typed.js in a WordPress website.

Since this plugin relies so heavily on existing and well maintained 
infrastructure, it should have a high probability of remaining 
compatible for a long period of time without any need for an update.

Further, since you are manipulating the output with html and css, 
you should have a high level of control over how the text is expressed.

DEMOS:

https://bigbobnetwork.com/BigMedia/

https://bigbobnetwork.com/BigMedia/themes/

SET UP

Just unzip the file and add it to your plugins folder.  You can use the 
WordPress existing user interface to create typed output.

You can start with the following html boilerplate.  You can 
enter it with a Custom HTML block, or you can update some kind 
of text driven block that you can convert to HTML.

<p style="font-size: 36px">The Big series themes can be used to create a website for a <br class="bb-typeBreak">
<span class="bb-text-slider-items">blog., restaurant., nonprofit., band., bar., portfolio., business., gym., park.</span>
<strong class="bb-text-slider" style="font-weight:normal;"></strong></p>

Add the text that you want to be permanent into the first line,
then add each string of text that you want typed separated by commas into the second line.
The break (br) is optional and can be delted in many cases.  Using typed
inside a cover block is a good example of this.

However, there may be some cases where you would prefer
to keep the break.

The break is not difficult to use, but it can be tedious to set up.
It works best when some of the strings are typed starting on a first line then 
finish typing on a second line causing the text to change the height 
of collateral elements of the website.  The best way to determine when 
to display the break and when not to is to experiment with different 
screen widths until you have detected all of the problem areas.

You can turn the display of the breaks on and off by adding 
something like the following to the Additional CSS section of the 
customizer:

@media screen and (min-width: 423px) {
.bb-typeBreak {
	display: none;
}
}
@media screen and (min-width: 466px) {
.bb-typeBreak {
	display: block;
}
}
@media screen and (min-width: 530px) {
.bb-typeBreak {
	display: none;
}
}
@media screen and (min-width: 601px) {
.bb-typeBreak {
	display: block;
}
}
@media screen and (min-width: 800px) {
.bb-typeBreak {
	display: none;
}
}
@media screen and (min-width: 887px) {
.bb-typeBreak {
	display: block;
}
}
@media screen and (min-width: 1020px) {
.bb-typeBreak {
	display: none;
}
}
@media screen and (min-width: 1190px) {
.bb-typeBreak {
	display: block;
}
}
@media screen and (min-width: 1450px) {
.bb-typeBreak {
	display: none;
}
}

LICENSES and ASSURANCES

License: GNU General Public License v3
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

jsdeliver and typed.js are both under the MIT license which is GPL compatible:

 https://github.com/mattboldt/typed.js/blob/master/LICENSE.txt

 https://github.com/jsdelivr/jsdelivr/blob/master/LICENSE.md


 This is from the jsdeliver documentation:
  https://github.com/jsdelivr/jsdelivr/blob/master/README.md#:~:text=No%20maintenance%20is%20required.,breaking%20any%20websites%20using%20it.
  
  Ready for production
  --------------------

  Our public CDN is built to be used in production by even the largest websites. 
  Everything is optimized and being constantly improved to offer all users maximum speed and uptime. Performance is monitored at all times, 
  and we are always looking into new technologies and providers that may further improve our CDN. 
  Downtime, timeouts or slow responses are simply unacceptable. 

  We do everything possible to ensure our CDN will NEVER break any websites regardless of use-case. 
  If a file is available via our CDN we assume its used in production and make sure that file will continue to work no matter what.

  This includes dynamic endpoints such as `/npm/`, `/gh/` and `/combine/`. 
  When a file is first accessed it gets permanently stored in a reliable file system. 
  This means that even if a npm package gets deleted, or an existing file gets removed by a developer, 
  jsDelivr will  continue to serve the stored copy for ever, without breaking any websites or causing any issues.

  On top of that we also do version-fallback. 
  This means that if a file used in version 1.0.1 is no longer available in 1.0.2 and a user requests the non-existant file 
  we will fallback to the previous 1.0.1 version and serve it instead of failing with 404 error.
  