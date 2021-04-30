"#markentum-project" 
"# markentum" 

Workflow:
-
Commits:
-
Create custom plugin file custom-mk-plugin to store code for registering Employee Custom Post Type and Location Taxonomy:
-
Register a Custom Post Type called 'Employees' and a Taxonomy called 'Location' (for filtering/categorization). The code for this is stored in a separate .php file as a plugin (custom-mk-plugin.php) instead of in the functions.php, for better readability.

Custom Post Type is used to enable user ot easily add/update Employee and Location information and for easier content management.

On activation of plugin, the 'Employees' menu is displayed in WP-admin.

Create taxonomy templates to display content including custom field for each location
-
Create taxonomy templates for each taxonomy, to display information for each location on separate pages. 
Update the menu to include the taxonomies by enabling the 'Locations' taxonomy in the 'Screen Options', so that the user is able to navigate to the appropriate pages via the menu.

Add code to plugin file to enable ordering of Custom Post Type posts by custom taxonomy in admin area
-
To make it easier to view the list of employees in the 2 locations in wp-admin, add code to plugin file to sort by taxonomy.

Create template part to consolidate taxonomy template code add front page to display taxonomy terms
-
Add code to include taxonomy terms to the front page as a way to access the taxonomy pages. Also, since the taxonomy templates have same code, I created a template part to store common code to avoid code repetition.

Replace taxonomy templates with Custom page templates
-
Replace Taxonomy templates with custom page templates with code to filter based on taxonomy terms. Create pages for the taxonomy terms in order to display employees in each location on separate WordPress pages. User is able to add banner image and display employee information easily. Update menu and front page links to point to the custom pages.

Add code to display custom template content and add css styles
-
Use WordPress loop and terms to filter and display employees by location. Add banner images to custom templates and some basic css styling.

Add css styles and grid for location pages
-
Use grid to display team members for larger screens

Notes
-
To set the order that the employees are displayed in, easily add a new employee at any point in the order without needing to adjust every other employee listed for a community and to easily rearrange the order of employees, I used the 'Post Types Order' plugin as it seemed to be the best option and easily allows user to drag and drop posts in any order. Other methods such as changing Published date of post or assigning menu_order to post and sorting are a bit more tedious.
