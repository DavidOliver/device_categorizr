Categorizr is a modern, [mobile-first](http://www.lukew.com/ff/entry.asp?933) device detection script that helps categorize different web-capable devices into four categories: mobile, tablet, tv and desktop.

By assuming devices are mobile unless detected as being otherwise, Categorizr is [future friendly](http://futurefriend.ly/): when new phones are released, you need not worry that their user agent may not exist in your device detection library.

Knowing into which category the visitor’s device falls allows you to use [Responsive Design + Server Side Components (RESS)](http://www.lukew.com/ff/entry.asp?1392) and [Hybrid Responsive Web Design (HRWD)](http://www.brettjankord.com/2012/02/29/hrwd-hybrid-responsive-web-design/) techniques whilst building your web site or application.

## Usage

Once installed and enabled, Device Categorizr will ensure all frontend pages have a parameter called `device-categorizr` added to the parameter pool with one of the following values:

 * mobile
 * tablet
 * tv
 * desktop

You are then able to change your XSLT template’s output based on your visitor’s device type.

### Examples

CSS, JavaScript, image sizes and HTML source order are all examples of things you may wish to alter based on the visitor’s device type.

#### Image-sizing via JIT

	<xsl:when test="$device-categorizr='desktop'">
		<img src="{$root}/image/1/1000/0/{image/@path}/{image/filename}"/>
	</xsl:when>
	<xsl:when test="$device-categorizr='tv' or $device-categorizr='tablet'">
		<img src="{$root}/image/1/800/0/{image/@path}/{image/filename}"/>
	</xsl:when>
	<xsl:otherwise>
		<img src="{$root}/image/1/500/0/{image/@path}/{image/filename}"/>
	</xsl:otherwise>

### Allowing visitors the option

If necessary, you can also provide links with a `view` URL query string parameter that enable visitors to manually choose their desired view. For example: `http://example.net/?view=desktop` This will save the desired view type in the PHP session for subsequent page loads. However, if your web site or application serves the same content to and responds in a suitable way to each type of device, this will likely be superfluous and an unnecessary complication for your visitors.

## Credit and thanks

[Categorizr](http://www.brettjankord.com/2012/01/16/categorizr-a-modern-device-detection-script/) was created by [Brett Jankord](http://www.brettjankord.com/about/).
