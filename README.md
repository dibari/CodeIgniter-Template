#CodeIgniter-Template

An easy-to-use and simple CodeIgniter template library

## Installation
Drop the **application/config**, **application/libraries**, and **application/views** files into your application's directories respectively.  Each page is located in the order of header, menu, page template, and footer.

## Usage and Components
This library wraps the page content into a properly formatted page including the header, menu, and footer HTML.
**Customize Template** Customize the header, menu, and footer files appropriately.  This includes adding additional meta and header information to the header file, adding an HTML menu to the menu file, and adding an HTML footer menu to the footer file.
**Create View Files** Each view file must be located with the /views directory or a subdirectory within /views.  Custom variables can be loaded in each view file.
**Add Controller View Variables** The following variables must be included in each controller method that uses a view:
###### view_name
	Name of view file, without the php extension, located in the view directory
###### title
	Page title to display, used as meta title value
###### heading
	Page heading to display, used in the H1 HTML tag
###### keywords
	Meta keywords to use on page
###### description
	Meta description to use on page