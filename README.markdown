## Status

This extension is deprecated as [Categorizr is no longer being developed/maintained](http://www.brettjankord.com/2013/01/10/active-development-on-categorizr-has-come-to-an-end/).

Brett Jankord:

> About a year ago I had this crazy idea to apply mobile first thinking to device detection. Yet I’ve awakened from the consensual hallucination that the web can be divided and grouped into simple categories like mobile, tablet, and desktop since then.

## Introduction

Categorizr was a [mobile-first](http://www.lukew.com/ff/entry.asp?933) device detection script that helped categorize different web-capable devices into four categories: mobile, tablet, tv and desktop.

Knowing into which category the visitor’s device falls helped in using [Responsive Design + Server Side Components (RESS)](http://www.lukew.com/ff/entry.asp?1392) and [Hybrid Responsive Web Design (HRWD)](http://www.brettjankord.com/2012/02/29/hrwd-hybrid-responsive-web-design/) techniques.

## Usage

Once installed and enabled, Device Categorizr will ensure all frontend pages have a parameter called `device-categorizr` added to the parameter pool with one of the following values:

 * mobile
 * tablet
 * tv
 * desktop

You are then able to change your XSLT templates’ output based on your visitor’s device type.

### Examples

CSS, JavaScript, image sizes and HTML source order are all examples of things you may wish to alter based on your visitor’s device type.

#### Image-sizing via JIT

	<xsl:choose>
		<xsl:when test="$device-categorizr='desktop'">
			<img src="{$root}/image/1/1000/0/{image/@path}/{image/filename}"/>
		</xsl:when>
		<xsl:when test="$device-categorizr='tv' or $device-categorizr='tablet'">
			<img src="{$root}/image/1/800/0/{image/@path}/{image/filename}"/>
		</xsl:when>
		<xsl:otherwise>
			<img src="{$root}/image/1/500/0/{image/@path}/{image/filename}"/>
		</xsl:otherwise>
	</xsl:choose>

### Allowing visitors the option

If necessary, you can also provide links with a `view` URL query string parameter that enable visitors to manually choose their desired view. For example: `http://example.net/?view=desktop` This will save the desired view type in the PHP session for subsequent page loads. However, if your website serves the same content to and responds in a suitable way to each type of device, this will likely be superfluous and an unnecessary complication for your visitors.

## Credit and thanks

[Categorizr](http://www.brettjankord.com/2012/01/16/categorizr-a-modern-device-detection-script/) was created by [Brett Jankord](http://www.brettjankord.com/about/).
