# justsalad-com
Improvements and features I've implemented in the Just Salad WordPress site.

Regional Mobile View (7/14)
----------------------------
  * Note: These changes were made prior to having access to the wp-admin for the site. Thus, 
  some changes that could have been made in the dashboard were hard-coded instead.
  * Legacy: Region selection was not possible from the front page of the mobile view of the site,
  as it was included in the top-menu. Additionally, the Locations tab of the mobile menu did not
  uniformally appear for all regions.
  * I added and styled a region selection menu to the footer (for mobile view only). The region
  selection sub-menu already used in top-menu could not be recycled for inclusion in the footer
  as the theme did not gracefully accomodate footer sub-menus in a style we desired.
  * I added the Locations tab to the UAE regional mobile front page menu. (This is due to be
  reimplemented from the WordPress admin interface.)
  
Just Salad Promise (11/14)
--------------------------
  * Note: The expectation for this part of the site was that a user would be able to navigate
  among geographical regions as well as among the 3 information categories (local, organic,
  non-GMO) so one template would need to apply for multiple iterations of each category and some
  navigation-centric home page for the Promise.
  * I created a new page template for the interactive JS Promise page: http://justsalad.com/food/.
  New features include:
    - A graphical page navigation menu, not supported by the site's WP theme.
    - A text based page navigtion menu, not supported by the site's WP theme.
    - A Promise specific featured image format differing from that of the general site.
  * I updated the full site and mobile view stylesheets for the JSP pages.
    - Since page content (an image and plain text in predetermined HTML tags) is edited in the
    visual page editor by employees with little to no web design experience, every aspect of
    the formatting and layout of these pages was implemented in CSS and with as little use of 
    attributes beyond basic HTML tags as possible.
    - Each page begins with a left-aligned image, a header, and a descriptive paragraph.
    - Organic and Non-GMO pages are identical in format - dividing the page after the description
    with a brush stroke image, after which ingredients are listed in two columns under a single 
    header.
    - Local pages, alternatively, have a further bulleted list description, then the same brush
    stroke divider, then two distinct lists of ingredients and locations, each with their own 
    list header and font that must line up line by line.
