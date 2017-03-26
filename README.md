# Kompact - A Free Kirby CMS Theme

![](http://themes.yordanoff.net/kompact/kompact-00.gif)

Kompact is a **Free** [Kirby CMS](http://getkirby.com) theme, built with a minimalistic approach in mind, so you can focus on the content.

# Features
* Minimal design with focus on *typography* and *white space*
* Responsive typography
* Smooth page transitions
* CodeKit config file included
* No-JS fallbacks
* SCSS structure for easy customisation of:
	* Colours
	* Typography
	* Spacings

Feedback is appreciated!

# Demo & Download
👁 **[Live Demo](http://themes.yordanoff.net/kompact)**

👉 **[Free Download](https://github.com/yordanoff/kompact/archive/master.zip)**

🔥 [More Kirby CMS themes](http://themes.yordanoff.net)

# Feedback

If you have any suggestions, feel free to drop me a line. Your feedback is appreciated!

Follow me on [Twitter](http://twitter.com/yordanoff) or go and check out my [🔥 premium Kirby CMS themes](http://themes.yordanoff.net).

Have fun building a *k*ooler web!

# Changelog

### March 26, 2017
* Navigation Type Switcher is added. Go to Panel -> Site Options and choose if you'd like to keep the default Offcanvas navigation or to activate a Standard anchor navigation.

### March 12, 2017
* Added article.yml blueprint. This fixes [#1](/../../issues/1).
* Added avatars folder that makes it possible to upload avatars for your users in the panel. This fixes [#2](/../../issues/2).

### March 08, 2017
* Added no-js fallback: the content won't be blocked if client's JavaScript is disabled.
* The hamburger navigation will fallback to a regular horizontal menu without the offcanvas if the client's JavaScript is disabled.
* Improved consistency for SCSS variable names.

### March 05, 2017
* Improved default.php markup.
* Improved line-height.
* Improved horizontal rhythm for article listings.
* Improved blockquotes.

# Customisation
If you use CodeKit, feel free to import the theme’s folder to it and start making changes. CodeKit will handle the recompiling of SASS & JS thanks to the *config.codekit3* file in the root directory.

You can easily change the colors and overall styles of the theme by editing and recompiling its */assets/sass styles*. As you’ll see the main colors are separated in */assets/sass/_palette.scss*. From */assets/sass/components/_typography.scss* you can easily change the font faces used for Kompact.
