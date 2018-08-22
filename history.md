

DB schema: utf8mb4_unicode_ci

* English installation

* example.gitignore file renamed -> .ignore

* In root folder launch: 

composer global require drush/drush

to install drush

* In root folder launch: 

composer require drupal/console:~1.0 --prefer-dist --optimize-autoloader --sort-packages

to install drupal console

* In the first commit sites folder are not included.


* Resources paragraphs:

https://bp.jimbir.ch/
https://paragraphs.site-showcase.com/

************** MODULES *********************************

1* Install module admin_toolbar module
https://www.drupal.org/project/admin_toolbar

	Admin Toolbar
	Admin Toolbar Extra Tools
	Admin Toolbar Links Access Filter

2* Install bootstrap Theme 
https://www.drupal.org/project/bootstrap

	From themes: https://ftp.drupal.org/files/projects/bootstrap-8.x-3.11.zip
 
	Install and set as default

3* Install entity_reference_revisions module
https://www.drupal.org/project/entity_reference_revisions

	Entity Reference Revisions

4* Install views reference module
https://www.drupal.org/project/viewsreference

	Views Reference Field

5* Install inline entity form module
https://ftp.drupal.org/files/projects/inline_entity_form-8.x-1.0-rc1.zip

	Inline Entity Form

6* Install entity browser module
https://ftp.drupal.org/files/projects/entity_browser-8.x-1.5.

	Entity Browser
	Entity Browser Example (NO!!)
	Entity Browser IEF

7* Install entity usage module
https://ftp.drupal.org/files/projects/entity_usage-8.x-2.0-alpha7.zip

	Entity Usage

8* Install search api module
https://ftp.drupal.org/files/projects/search_api-8.x-1.8.zip

	Database Search
	Database Search Defaults
	Search API

9* Install paragraphs module 
https://www.drupal.org/project/paragraphs

	Paragraphs 
	Paragraphs Demo (NO!!)
	Paragraphs Library
	Paragraphs Type Permissions

10* Contact formatter module
https://ftp.drupal.org/files/projects/contact_formatter-8.x-1.0.zip

	Contact Formatter

11* Webform module
https://ftp.drupal.org/files/projects/webform-8.x-5.0-rc16.zip

	Webform
	Webform Bootstrap
	Webform Devel (NO!!)
	Webform Examples Accessibility
	Webform Image Select
	Webform Node
	Webform Scheduled Email Handler
	Webform Templates
	Webform UI
	
	Not now:
		WEBFORM DEMO (2 modules)
		WEBFORM EXAMPLE (4 modules)

12* Token module
https://ftp.drupal.org/files/projects/token-8.x-1.3.zip

	Token

13* Ctools
https://ftp.drupal.org/files/projects/ctools-8.x-3.0.zip

	Chaos tools
	Chaos tools blocks (NO!!)
	Chaos tools Views (NO!!)


14* Pathauto module
https://ftp.drupal.org/files/projects/pathauto-8.x-1.2.zip

	Pathauto

15* Install paragraphs bootstrap module
https://ftp.drupal.org/files/projects/bootstrap_paragraphs-8.x-2.0-beta4.zip

	Bootstrap Paragraphs
	Bootstrap Paragraphs Contact Form
	Bootstrap Paragraphs Webform

16* Install xeno hero (another type of paragraphs)
https://github.com/xenomedia/xeno_hero

	Xeno Hero Paragraph Bundle

 Folder import created:
  - fix views for anonymus user
  - content type blog created (more info in the node needed)
  
 
BCK 20180715_15modules.sql created

* Create a new SUBTHEME

https://www.youtube.com/watch?v=xSEvkvLaVjw
https://www.webwash.net/getting-started-bootstrap-drupal-8/

https://sevaa.com/blog/2016/04/build-drupal-8-bootstrap-subtheme-sass/
https://sevaa.com/blog/2018/02/sass-starterkit-build-drupal-8-bootstrap-subtheme/

*************************************** 
1- If node not installed

* Install npm (node)

* npm init

* npm install laravel-mix

* First time create 

	webpack.mix.js file

* npm install --save-dev cross-env

2 - Update

npm install to install packages (node_modules)


- Use css:

	npm run watch
	
	or 
	
	npm run production
	
	
* ignore  ..\themes\juanonlabcute_sass\node_modules

* Created a sql dump 20180715_subthemeactive.sql

17* Install gdpr_compliance module
https://www.drupal.org/project/gdpr_compliance

GDPR Compliance


JuanonLab Cute Theme 

 Bootstrap Settings

 Inicio -> Administration ->  Apariencia ->  Opciones de apariencia

            General -> BUTTONS -> Default button size (Normal -> Small)
            General -> IMAGES  -> Default image shape (None Rounded)
            Componentes -> Barra de navegación  Posición el navgbar: Static Top
		
            Imagen del logotipo -> cargar logo personalizado
            FAVICON             -> cargar icono personalizado

	
18* Multilingual

MULTILINGUAL

	Configuration Translation
	Content Translation
	Interface Translation
	Language

* Chose Spanish	Language
	
	Add language http://localhost/blog/admin/config/regional/language 
	
	Configuracion -> (REGIONAL AND LANGUAGE) Select Languages
	
	 Select Spanish
	 
	 
* For the first install we need vendor folder


19* Social Media Links Block
https://www.drupal.org/project/social_media_links

    Social Media Links Block
    Social Media Links Field
	
	To configure: 	
	
	Estructura -> Diseño de bloques in Footer (Colocar Bloque) -> Search: Social Media Links
	
	
	PLATFORM		PLATFORM URL            DESCRIPCION
	Contact 		contact                 Contacto
	GitHub			juanonlab               Github juanonlab
	LinkedIn		in/juan-pardo-palazon/  Linkedin Juan Pardo Palazón
	Twitter			juanonlab               Twitter juanonlab
	
	
	ICON SETS 
		Icon Style fa-lg


Admin -> Estructura -> Diseño de bloques
 
 Navigation-> User account menu (Desactivar)


Admin -> Configuración de la cuenta -> CREACION Y CANCELACION DE CUENTAS

 ¿Quién puede crear cuentas?
	Solo los administradores

	
2o* Superfish menu
https://ftp.drupal.org/files/projects/superfish-8.x-1.2.zip

Drupal 8
Download the Superfish library and extract it somewhere like /libraries/superfish (so that the superfish.js will be located at http://example.com/libraries/superfish/superfish.js)
Download and extract the Superfish module in /modules or /modules.
Go to the Extend section of your Drupal administration back-end and enable "Superfish".
Go to the "Block layout" page (under Structure) and use any of the "Place block" buttons to create a Superfish block. Use the "Configure" link of the block to configure it accordingly to your needs.


Set the footer menu (superfish)

Desactivar Tools (Structure)

Change css colours superfish menu (blue theme)
   

npm run watch

npm run production


// Hacer un módulo que ponga los place holder
https://drupal.stackexchange.com/questions/44323/adding-form-placeholders-to-text-input-fields


21* https://ftp.drupal.org/files/projects/addtoany-8.x-1.10.zip
Module


https://fontawesome.com/license


nginx #36964f

22* Metatag
https://www.drupal.org/project/metatag

http://ogp.me/
https://www.linkedin.com/help/linkedin/answer/46687/making-your-website-shareable-on-linkedin?lang=en


23* fontawesome
https://www.drupal.org/project/fontawesome
