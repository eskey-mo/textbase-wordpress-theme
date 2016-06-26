black
Site Name:
Author:

Stylesheet: Tablet & Small Desktop Stylesheet

Here's where you can start getting into the good stuff.
This size will work on iPads, other tablets, and desktops.
So you can start working with more styles, background images,
and other resources. You'll also notice the grid starts to
come into play. Have fun!

******************************************************************/


/*********************
GENERAL STYLES
*********************/

body {}

/*********************
LAYOUT & GRID STYLES
*********************/

.wrap {
	width: 760px;
}

/*********************
HEADER STYLES
*********************/

.header {}

	#logo {}

/*********************
NAVIGATION STYLES
*********************/

.nav {
  border-bottom: 1px solid $black;
	ul {
		background:$black;
		margin-top:0;
	}
	li {
		float: left;
		position: relative;

		a {
			/*
			you can use hover styles here even though this size
			has the possibility of being a mobile device.
			*/
			&:hover, &:focus {
				color: $black;
				text-decoration: none;
			}
		}

		&:first-child {}
		&:last-child {}

		/*
		plan your menus and drop-downs wisely.
		*/
		ul.sub-menu,
		ul.children {
			margin-top: 0;
			border: 1px solid #ccc;
			border-top: 0;
			position: absolute;
			visibility: hidden;
			z-index: 8999;

			li {

				a {
					padding-left: 10px;
					border-right: 0;
					display: block;
					width: 180px;
					border-bottom: 1px solid #ccc;

					&:hover,
					&:focus {}

					&:link {}
				}

				&:first-child {}

				&:last-child {

					a {
						border-bottom: 0;
					}
				}

				/*
				if you need to go deeper, go nuts
				just remember deeper menus suck
				for usability. k, bai.
				*/
				ul {
					top:0;
					left:100%;
				}
			}

			/* highlight sub-menu current page */
			li.current-menu-item,
			li.current_page_item,
			li.current_page_ancestor {
				a {}
			}
		}

		/* showing sub-menus */
		&:hover > ul {
			top: auto;
			visibility:visible;
		}

	} /* end .menu ul li */

	/* highlight current page */
	li.current-menu-item,
	li.current_page_item,
	li.current_page_ancestor {
		a {}
	}  /* end current highlighters */

} /* end .nav */

/*********************
SIDEBARS & ASIDES
*********************/

.sidebar {
	margin-top: 2.2em;
}

	.widgettitle {
		border-bottom: 2px solid #444;
		margin-bottom: 0.75em;
	}

	.widget {
		padding: 0 10px;
		margin: 2.2em 0;

		ul {
			li {
				margin-bottom: 0.75em;

				&:first-child {}
				&:last-child {}
				a {}
				/* deep nesting */

				ul {
					margin-top: 0.75em;
					padding-left: 1em;
				}
			}
		}
	}


	/* links widget */
	.widget_links {}
	.widget_links ul {}
	.widget_links ul li {}
	.widget_links ul li a {}

	/* meta widget */
	.widget_meta {}
	.widget_meta ul {}
	.widget_meta ul li {}
	.widget_meta ul li a {}

	/* pages widget */
	.widget_pages {}
	.widget_pages ul {}
	.widget_pages ul li {}
	.widget_pages ul li a {}

	/* recent-posts widget */
	.widget_recent_entries {}
	.widget_recent_entries ul {}
	.widget_recent_entries ul li {}
	.widget_recent_entries ul li a {}

	/* archives widget */
	.widget_archive {}
	.widget_archive ul {}
	.widget_archive ul li {}
	.widget_archive ul li a {}
	.widget_archive select {}
	.widget_archive option {}

	/* tag-cloud widget */
	.widget_links {}
	.widget_links li:after {}
	.widget_links li:before {}
	.widget_tag_cloud {}
	.widget_tag_cloud a {}
	.widget_tag_cloud a:after {}
	.widget_tag_cloud a:before {}

	/* calendar widget */
	.widget_calendar {}
	#calendar_wrap {}
	#calendar_wrap th {}
	#calendar_wrap td {}
	#wp-calendar tr td {}
	#wp-calendar caption {}
	#wp-calendar a {}
	#wp-calendar #today {}
	#wp-calendar #prev {}
	#wp-calendar #next {}
	#wp-calendar #next a {}
	#wp-calendar #prev a {}

	/* category widget */
	.widget_categories {}
	.widget_categories ul {}
	.widget_categories ul li {}
	.widget_categories ul ul.children {}
	.widget_categories a {}
	.widget_categories select{}
	.widget_categories select#cat {}
	.widget_categories select.postform {}
	.widget_categories option {}
	.widget_categories .level-0 {}
	.widget_categories .level-1 {}
	.widget_categories .level-2 {}
	.widget_categories .level-3 {}

	/* recent-comments widget */
	.recentcomments {}
	#recentcomments {}
	#recentcomments li {}
	#recentcomments li a {}
	.widget_recent_comments {}

	/* search widget */
	#searchform {}
	.widget_search {}
	.screen-reader-text {}

	/* text widget */
	.textwidget {}
	.widget_text {}
	.textwidget p {}


/*********************
FOOTER STYLES
*********************/

/*
you'll probably need to do quite a bit
of overriding here if you styled them for
mobile. Make sure to double check these!
*/
.footer-links {
	ul {
		li {
			a {
				&:hover {}
			}
			/*
			be careful with the depth of your menus.
			it's very rare to have multi-depth menus in
			the footer.
			*/
			ul {}
		}
	}
} /* end .footer-links */

