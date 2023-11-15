---
layout: blog-post
username: ahmed-sharif-khan
author_name: Ahmed Sharif Khan
author_bio: Web Developer and Blogger
author_email: jane.doe@email.com
author_avatar: /assets/authors/jane_doe.jpg
author_social:
title:  "Don’t waste precious hours on self-praise"
date:   2023-10-12 17:35:09 +0600
categories: [Health,  Travel, Life Style]
keywords: Health  Travel Life Style
description: It is distressing to see the widening gulf between what people expect from parliament and what our parliamentarians actually deliver.
image: "https://tds-images.thedailystar.net/sites/default/files/styles/very_big_201/public/images/2023/10/04/threat_of_a_major_quake_in_bangladesh.png"
---

...It is distressing to see the widening gulf between what people expect from parliament and what our parliamentarians actually deliver. A recently unveiled report by the Transparency International Bangladesh (TIB) has painted a damning picture of how valuable work hours were spent in the 11th parliament. According to the study, the current parliament spent only 16.7 

###Resources
Jekyll’s growing community produces wide variety of themes, plugins, tutorials and other resources that can be helpful. Below is a collection of links to some of the most popular Jekyll resources.

####Themes
GitHub.com #jekyll-theme repos
jamstackthemes.dev
jekyllthemes.org
jekyllthemes.io
builtatlightspeed.com
See also: docs/themes.

####Plugins
jekyll-plugin topic on GitHub
Planet Jekyll

```
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
```

#### Basic template
##### Start with this basic HTML template, or modify these examples. We hope you'll customize our templates and examples, adapting them to suit your needs.

Copy the HTML below to begin working with a minimal Bootstrap document.

```
<script>
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})
</script>
```
Third party support
While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.

Box-sizing
Some third party software, including Google Maps and Google Custom Search Engine, conflict with Bootstrap due to * { box-sizing: border-box; }, a rule which makes it so padding does not affect the final computed width of an element. Learn more about box model and sizing at CSS Tricks.

Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).

```
/* Box-sizing resets
 *
 * Reset individual elements or override regions to avoid conflicts due to
 * global box model settings of Bootstrap. Two options, individual overrides and
 * region resets, are available as plain CSS and uncompiled Less formats.
 */

/* Option 1A: Override a single element's box model via CSS */
.element {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}

/* Option 1B: Override a single element's box model by using a Bootstrap Less mixin */
.element {
  .box-sizing(content-box);
}

/* Option 2A: Reset an entire region via CSS */
.reset-box-sizing,
.reset-box-sizing *,
.reset-box-sizing *:before,
.reset-box-sizing *:after {
  -webkit-box-sizing: content-box;
     -moz-box-sizing: content-box;
          box-sizing: content-box;
}

/* Option 2B: Reset an entire region with a custom Less mixin */
.reset-box-sizing {
  &,
  *,
  *:before,
  *:after {
    .box-sizing(content-box);
  }
}
.element {
  .reset-box-sizing();
}
```


```
ruby
puts "Hello, world!"
```

```
If the code is highlighted with inline styles, it confirms that the issue is related to missing external stylesheets.
```