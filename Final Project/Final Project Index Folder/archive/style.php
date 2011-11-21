
/* Meyer Reset */
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}


/* Center Content */

.centered { 
  margin:0 auto;
  width:960px;
}


/* Clearfix */
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
 
.clearfix { display: inline-block; }
html[xmlns] .clearfix { display: block; }
* html .clearfix { height: 1%; }

/* End of reset */
body {
  background-image: url(bgimages/bg2.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
}

img {
    max-width:100%;
    text-indent:-9999px;
    position:absolute;
    top:0;
    left:0;
    z-index:-1;
    opacity:0.8;
    filter:alpha(opacity=80); /* For IE8 and earlier */
}

div#site-wrapper {
    width:96%;
    margin-left:2%;
    margin-top:2%;
}

/*size controls for all menu frames*/

div#menu-wrapper {
    float:left;
    width:20%;
}

h1#site-logo a {
    font-size:3.5em;
    text-decoration:none;
    font-family:eurostile, helvetica, arial, georgia;
    font-weight:bold;
    line-height:.85em;
    color:white;
}

header h1 {
    margin-bottom:1.5%;
    width:100%;
}

/*location and border controls for all menu frames*/

section.contact-info, nav#main-nav ul, section.nav-wrapper { 
    padding-top:4%;
    border-top:1px solid white;
    margin-bottom:4%;
}

section.contact-info {
    font-size:.7em;
    line-height:1.4em;
    font-family:helvetica, arial, georgia;
    font-weight:200;
    color:white;
}

nav#main-nav ul li a {
    font-size:1em;
    line-height:1.4em;
    font-family:helvetica, arial, georgia;
    font-weight:500;
    color:white;
    text-decoration:none;
}

section.nav-wrapper nav.project-list p{
    font-size:.8em;
    line-height:1.4em;
    margin-bottom:2%;
    font-family:helvetica, arial, georgia;
    font-weight:400;
    color:white;
}

section.nav-wrapper nav.project-list ul li a{
    font-size:.8em;
    line-height:1.4em;
    font-family:helvetica, arial, georgia;
    font-weight:200;
    color:white;
    text-decoration:none;
}

section#about-me {
    float:left;
    width:55%;
    margin-left:2%;
    font-size:1em;
    line-height:1.4em;
    font-family:helvetica, arial, georgia;
    /*font-style:italic;*/
    font-weight:200;
    color:white;
    text-decoration:none;
     /* padding-top:1%;
    border-top:1px solid white; */
}

section#about-me p {
    margin-bottom:.5em;
}

section#about-me p#resume {
    margin-top:2em;
    font-style:italic;
}

section#about-me p#resume a {
    color:white;
}

div#portfolio-nav {
    margin-left:4%;
    
}

/*Nav element selected*/

section.nav-wrapper nav.project-list ul li a.project-on {
    font-size:.8em;
    line-height:1.6em;
    font-family:helvetica, arial, georgia;
    font-weight:bold;
    color:white;
}

section#footer-info footer {
    font-size:.4em;
    line-height:1.2em;
    font-family:helvetica, arial, georgia;
    font-weight:200;
    color:lightgrey;
    text-decoration:none;
}

section#footer-info {
    float:left;
    width:100%;
    margin-top:9%;
    padding-top:.5%;
}

section#footer-info footer.copyright {
    float:right;
    padding-top:.5%;
}

section#footer-info footer.design {
    border-top:1px solid white; 
    padding-top:.5%;
    float:left;
    width:20%;
}