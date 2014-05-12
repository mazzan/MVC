#Rama, a PHP-based, MVC-inspired CMF
___   
 
##Introduction
The Rama framework is created by Mats Sandén during the course "Database driven web applications with PHP and MVC" at BTH (Blekinge Institute of Technology). The finalized
framework was the main goal of the course and was built from scratch.
___   

##License
Rama is based on the PHP-based, MVC-inspired CMF LYDIA written by Mikael Roos. The framework is licensed according to MIT-license. See license.txt
for details. The Rama framework uses external modules which are subject for own licensing rules.
___   


##Installation
The Rama framework is stored on the software revision control system GITHub. It can be installed in two ways. Either it's cloned from the GIT repository directly to the server of choice or it's downloaded as a Zip-file and extracted/ copied to the server. Both ways are explained in detail under the step-by-step instructions below.

###Requirements
The frameworks requires the following to be supported/configured on the server :
1. PHP
2. SQLite
3. The folder `site/data/` to have write permissions (chmod 777)


###Step by step instructions
Below follows detailed instructions how to install and configure the Rama framework.
####Cloning the framework
The framework can be cloned to a PC client or to a web servers with Git support.
1. Clone the framework to a directory of your choice using the following command:  
`git clone https://github.com/mazzan/MVC.git`  
2. Execute the "Common" actions below.

####Download the framework
An alternative way of installing the framework is to download all the files in a Zip-file from GitHub. 
1. Open the address `https://github.com/mazzan/MVC.git` in a web browser. This will open the repository for Rama framework on GitHub.
2. Locate and click the button `Download Zip` in the lower right side of the page.
3. Choose where to save the Zip-file on your local computer.
4. Extract the content in the Zip-file to a location of your choice.
5. execute the "Common" actions below.

####Common actions

1. Locate the folder `site/data` and make sure that write permissions are enabled (chmod 777).

2. Open a web browser and enter the address to point at your installation. The Rama Index Controller page should now be displayed in the browser. If not execute the actions in step 4. If the page is successfully displayed continue to step 5.
3. On some servers the installation directory has to be pointed out in the file `.htaccess`. If the page isn't displayed when pointed out try changing the "Rewritebase" entry in the .htaccess file :  
`RewriteBase /~masb13/phpmvc/MVC/`
4. Some of the modules has to be initiated for the framework to work properly. Locate and click on the link `module/install` at the bottom of the page. The page will automatically create:
* The database tables
* A common guestbook
* A common blog
* An administrator user account with UserID: root and Password: root
* A basic user account with UserID: doe and Password: doe
___   

##Site management
The look and feel of the page can be modified by altering some file variables or by editing the site CSS settings. It is also possible, as a logged in user, to create or edit the site content. 

###Change the appearance
To change the appearance of the site modifications has to be done to some files. 

####Page appearance (CSS)
The CSS (Cascading Style Sheet) file describes the look and formatting of the site. By altering the parameters most of the sites look and feel can be changed. It include settings for colors, measures, fonts and much more. The parent CSS file is located in `themes/grid/style.css`. This file is inherited into the used themes CSS file located in `site/themes/mytheme/style.css`. It is recommended to do all changes in the mytheme CSS file which overrides the settings in the parent CSS file. 

The original content of the file is:  

    ** 
     * Description: Sample theme for site which extends the Rama grid-theme.
     */
    @import url(../../../themes/grid/style.css);

    html{background-color:#FFE2B3;}
    body{background-color:#D0DCE1;}
    #outer-wrap-header{background-color:#FFE2B3;border-bottom:2px solid #FFCE80}
    #outer-wrap-footer{background-color:#FFE2B3}
    a{color:#436370}
    #navbar ul.menu li a.selected{background-color:#D0DCE1;border-bottom:none;}

####Header and Footer
The sites Header and Footer design can be changed to suite the purpose of the site. The following entries can be modified:'
* The main header text (Rama)
* The slogan text (A PHP-based MVC-inspired CMF)
* The favicon picture
* The logo picture
* The logo picture size
* The footer text (Rama by Mats Sandén (mazzan@masoft.se) | Based on CLydia by Mikael Roos (mos@dbwebb.se))

To change the entries open the file `site/config.php` in a text editor and modify the parameters. The part to change is located at lines 173 - 181 in the file:

The original content of the file is:

    'menu_to_region' => array('my-navbar'=>'navbar'),
    'data' => array(
    'header' => 'Rama',
    'slogan' => 'A PHP-based MVC-inspired CMF',
    'favicon' => 'logo_80x80.png',
    'logo' => 'logo_80x80.png',
    'logo_width'  => 80,
    'logo_height' => 80,
    'footer' => '<p>Rama by Mats Sandén (mazzan@masoft.se) | Based on CLydia by Mikael Roos (mos@dbwebb.se)</p>',

###Create/ Edit content
To be allowed to edit or create new content you have to be logged in. When logging in additional links will appear allowing Create and Edit.

####Modify an existing page or blog page.
1. When logged in open the "Content" page.
2. Click the `edit` link to the right of the post/ page you want to modify.
3. Make your changes in the form fields and click the `save` button.
4. If required the post/ page can be deleted by clicking the `delete` button.

####Create a new page or blog post
1. When logged in open the "Content" page.
2. Click the `Create new content` link under the header "Actions" at page bottom.
3. Fill in the desired information in the form fields. 
4. To create a page enter "page" as type. To create a blog post enter "post" as type.
5. If no filter is required enter "plain".

####Add/ modify page links
The existing links in the header can be modified and new links can be added. This is done by modifying the file `site/config.php`. The menu is defined under "Define menus" and the menu to show is set in the theme settings by the "menu_to_region" parameter. The example below describes how to create a link to a newly added page.
1. Create a new page as described in the section above.
2. Open the page "Content"
3. Locate your newly created page and note the number beginning the content row.
4. Open the file `site/config.php` in a text editor.
5. Locate the section "Define menus" and add a new entry at the end of the "'my-navbar'" part. Note that the number fetched in step 3 is the actual url.

Before:

    'my-navbar' => array(
    'home'      => array('label'=>'About Me', 'url'=>'my'),
    'blog'      => array('label'=>'My Blog', 'url'=>'my/blog'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
    ),
    
After:

    'my-navbar' => array(
    'home'      => array('label'=>'About Me', 'url'=>'my'),
    'blog'      => array('label'=>'My Blog', 'url'=>'my/blog'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
    'new page' => array('label'=>'New page', 'url'=>'page/view/9'),
    ),
    
6. The new link is now available in the navigation bar in the page header.

___   

