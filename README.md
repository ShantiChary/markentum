"#markentum-project" 
"# markentum" 

Workflow:
-
Commits:
-
Create custom plugin file custom-mk-plugin to store code for registering Employee Custom Post Type and Location Taxonomy:
-
I registered a Custom Post Type called 'Employees' and a Taxonomy called 'Location' (for filtering/categorization). The code for this is stored in a separate .php file as a plugin (custom-mk-plugin.php) instead of in the functions.php, for better readability.

Custom Post Type is used to enable user ot easily add/update Employee and Location information and for easier content management.

On activation of plugin, the 'Employees' menu is displayed in WP-admin.

Create taxonomy templates to display content including custom field for each location
-
I created taxonomy templates for each taxonomy, so that I could display information for each location on separate pages. 
I updated the menu to include the taxonomies by enabling the 'Locations' taxonomy in the 'Screen Options', so that the user is able to navigate to the appropriate pages via the menu.

Add code to plugin file to enable ordering of Custom Post Type posts by custom taxonomy in admin area
-
To make it easier to view the list of employees in the 2 locations in wp-admin, I added code to plugin file to sort by taxonomy.

Create template part to consolidate taxonomy template code add front page to display taxonomy terms
-
Added code to include taxonomy terms to the front page as a way to access the taxonomy pages. Also, since the taxonomy templates have same code, I created a template part to store common code to avoid code repetition.

Repl taxonomy templates w Custom page templates
-
Replaced Taxonomy templates with custom page templates with code to filter based on taxonomy terms. I created pages for the taxonomy terms. I did this as the brief mentioned 'list two different groups of employees for two different fictional long term care facilities on two different WordPress pages'. This way, I am able to add banner image and then display employee information.
