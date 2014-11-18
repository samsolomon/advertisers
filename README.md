Advertisers
=======

Wordpress child theme for a reddit style newsboard for people in the advertising industry.

- Upvote parent theme required.
- Footer menu must be named 'Footer.'

## Upvote Installation Instructions
1. Install Wordpress on your server.
2. Install and activate the official BuddyPress plugin
3. Unzip the theme files and upload them to /wp­content/themes/
4. Go to Appearance > Themes and activate Upvote
5. Go to Settings > General > Membership and check the “Anyone can register” box. Save your changes.
6. Go to Settings > BuddyPress, and deselect all Components by unchecking them and clicking “Save Settings”.
7. Go to Pages > Add New and name the new page “Forgot Password”. From the Template dropdown, choose the “Forgot Password” option. Click “Publish”.
8. Add another new page and call it “Leaderboard”. Click “Publish”. 9. Add another new page and call it “Login”. Click “Publish”.
10. Add another new page and call it “Submit”. From the Template dropdown, choose the “Submit News” option. Click “Publish”.
11. Go back to Pages > All Pages and click the “Activate” page. From the Parent dropdown, choose the “Login” option. Click “Update”.
12. Go back to Pages > All Pages. Hover over “Register” and click “Trash”. 13. Hover over “Members” and click “Trash”.
14. Go to Settings > BuddyPress > Pages. From the “Members” dropdown, select “Leaderboard”. Click “Save”.
15. For the “Register” dropdown, select “Login”. Click “Save”. Then click “Save Settings”.
16. Go to Appearance > Theme Options. For the “Forgot Password Page” dropdown, select “Forgot Password” and click “Save Changes”.
17. Go to Appearance > Menus. Remove all pages under “Menu Structure” except “Leaderboard” and “Submit”.
18. From the sidebar on the left, click the “Links” option. For the URL, enter your root URL (e.g. http://upvotetheme.com/) and append ?order=new to it so that the URL looks like http://upvotetheme.com/?order=new. For the Link Text, enter “New”. Click “Add to menu”.
19. Rearrange the menu order to your preference by dragging each menu item to the position you want (I prefer New, Submit, Leaderboard). Click “Create Menu”.
20. Under Menu Settings, for “Theme locations” check the “Main Navigation” option. Click “Save Menu”.
21. Go to your site’s public homepage. Click the “Submit” menu item. Enter a test post and submit it. You should now see your first post on the homepage!
22. To hide the Buddypress toolbar for logged out users, go to Settings > BuddyPress > Settings, and uncheck the box for “Show the Toolbar for logged out users”. (Note: If you are using WP Super Cache, you may need to turn off caching to see the changes.
23. To turn off comment moderation, go to Settings > Discussion > Before a comment appears, and uncheck the box for “Comment author must have a previously approved comment”. Click “Save Changes”.

