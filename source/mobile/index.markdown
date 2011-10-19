---
layout: page
title: "Mobile Development With HTML5"
date: 2011-10-18 23:28
comments: true
sharing: true
footer: true
---

# Book outline

## Overview
* what this book is not: focus on supporting older phones, WAP and older standards
* Focus on the future: the shift towards HTML5. making the case, showing the data, etc

## Thinking differently
* big differences on mobile: screen orientation, screen sizes, geolocation, accelerometer, usage, battery, hover states are awkward, etc.

## Mobile First?  More common: Mobile Last
* the unfortunate reality and practical development

## Approaches to building
* should we try to emulate native interfaces?
* responsive design
* separate sites
* hybrid (PhoneGap)
* to m. or not to m.: bad for search engines?

## Making it play nicely with your server
* the woes of mobile redirects, WURFL, feature detection

## Design considerations
* no more fixed-width websites.  All fluid.
* viewport: zoomable?  pinch and double tap to zoom
* http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/
* simple, one column, buttons, etc.  alert/confirm/prompt not such a huge sin?
* Supported features (a la Modernizr) != usable features (http://code.google.com/p/android/issues/detail?id=14152, etc)
* Just because you can do something doesn't mean you should do it.  Excess use of fancy CSS3 stuff (not just transitions/animations) is bad for performance.  See performance chapter for more info.
* mocks should be made in double resolution: 640x860 for iPhone retina, high resolution screens.

## Laying the groundwork
* viewport, touch icon, startup image, etc

## Offline web apps
* http://stackoverflow.com/questions/2898740/iphone-safari-web-app-opens-links-in-new-window

## HTML
* input types, validation, etc.

## CSS
* all relative units - avoid px measurements where possible.  One font-size:px on the body, everything else is font-size:em or rem (http://snook.ca/archives/html_and_css/font-size-with-rem).  Width/height/padding should all be in em/%
* use CSS Zoom when building mobile UI controls
* media queries, gradients, animations, advanced selectors, etc.
* HW-accelerated transitions/animations: use -webkit-backface-visibility: hidden; to eliminate flickering
* -webkit-background-clip: padding; /* prevent border-radius bleedthrough */
* translate3d z-index issues

## JavaScript
orientation changes, accelerometer, geolocation, etc.

## Performance
* https://github.com/filamentgroup/Responsive-Images
* CSS3, base64, appcache, localStorage, sessionStorage, etc, etc
* go easy on rgba, box shadows, etc
* http://www.slideshare.net/firt/mobile-web-html5-performance-optimization
* CSS keyframe animations are slow when the content contains images (https://twitter.com/#!/joehewitt/status/116643081532616705)

### HW acceleration
http://www.sencha.com/blog/understanding-hardware-acceleration-on-mobile-browsers/

#### Safari
http://mir.aculo.us/2011/02/08/visualizing-webkits-hardware-acceleration/

1. $ CA_COLOR_OPAQUE=1 /Applications/Safari.app/Contents/MacOS/Safari

OR

1. Open a terminal
1. $ defaults write com.apple.Safari IncludeInternalDebugMenu 1
1. Open (or restart) Safari
1. Debug -> Show Compositing Borders

#### Chrome
1. Type the following in the address bar: about:flags
1. "Composited render layer borders" -> Enable

#### Firefox
https://bugzilla.mozilla.org/show_bug.cgi?id=690064

### Onclick delay
http://code.google.com/mobile/articles/fast_buttons.html

### Symbols instead of images
1.  UTF-8
2.  Emoji

## Accessibility
* aria, VoiceOver, etc.
* links, checkboxes, any interactive elements hidden offscreen are text only: get announced by screen reader, but aren't interactive
* don't use negative text-indent: makes the element much larger.  Bigger memory footprint and CPU burden (cf. Netflix (http://dl.dropbox.com/u/5618867/mseeley-2011-09-27-html5devconf.pdf))

## Testing
* remote debuggers: JS Console, Socketbug, Weinre, Aardwolf, etc
* iOS Simulator: drag and drop files from your desktop
* Multitouch in simulator.  iOS: Option+Click.  Android: no (http://code.google.com/p/android/issues/detail?id=5977)
* normalizing touch/nontouch events (https://github.com/davidcalhoun/touche)

## Fallbacks
* making an experience for feature phones (dumb phones).  The evil world of carrier transcoders

## Appendix 1: Tools of the trade

## Appendix 2: Mobile JavaScript libraries and frameworks

## Appendix 3: Mobile HTML, CSS, and JavaScript

## Appendix 4: Other resources
* Windows Phone Developer Blog http://windowsteamblog.com/windows_phone/b/wpdev/
* PPK's mobile compatibility tables http://www.quirksmode.org/m/table.html
* http://www.slideshare.net/learnthemobileweb/standardsbased-mobile-web-development

## Appendix 5: Etc.
* For presentations: use videos, simulator, Elmo projector, or webcam