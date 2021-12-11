# Wordpress Alex
by @arazDev and @motcodes
A repo for a Wordpress Project

## tracked ToDo

[ ] add path to call to action btn in the index hero
[x] check space between sections
[ ] fix grid design and fonts at front-page in refrences
[x] add support for single pages
[x] add support for blog post design
[x] single pages content styling
[x] Use WP CLI to manage your wordpress site on your local machine starting with wp core download --locale=de_DE in the public folder.
[x] Include the complete public-folder in your repository but remember to add public/wp-config.php to your .gitignore-file.
[x] Keep only one pre-installed theme (2020), delete the rest.
[x] Use WP's menu feature for the main navigation and the footer navigation.
    [x] Main Menu - Dynamic
    [x] Footer Manu - Dynamic
[ ] Create the five pages.
[x] Each page has a hero image, which comes from the featured image (as an upload) in the backend.
[x] The hero text is a custom field and is different for each page
[ ] Apart from the home page ('Startseite'), only the 'Über mich'-Page and the Contact-page has to be filled with contents. Leave all other pages empty (but add a hero image and a hero text).
[x] Use the plugin 'Contact Form 7' for the contact form on the contact page. Download the plugin and include it to your codebase.
[x] Use multiple loops for the front page:
    [x] Leistungen consists of the three latest posts of the category 'leistungen'. The SVG is the featured image of the post. The background color is set in your CSS.
    [x] News consists of the three latest posts of the category 'news'. Use the WP function the_excerpt() to show an excerpt of the contents.
    [x] Referenzen consists of the three lastest posts of the category 'referenzen'. Use the WP plugin 'advanced custom fields' to generate input fields for quote, author and the photo.
[-] Footer Content - Dynamic
    [x] In the footer the year-number should be dynamically created (changing automatically). Remember to include a proper footer navigation. The rest of the contents can be hard-coded.
[x] Remember to update sreenshot.png.
[x] Remember to host fonts locally, use favicons and the og-meta info.