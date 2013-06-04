#CodeIgniter-Template

An easy-to-use and simple CodeIgniter template library

## Installation
Drop the **application/config**, **application/libraries**, and **application/views** files into your application's directories respectively.  Each page is located in the order of header, menu, page template, and footer.

## Usage and Components
This library wraps the outputted view content inside of a header, menu, and footer.  The header, menu, and footer HTML are loaded from external view template files.  Additionally, meta data can be specifically defined in the controller for that page, such as description, page title, and keywords.

**Customize Template** Customize the header, menu, and footer files appropriately.  The files are by default to be located in /views/template.  This includes adding additional meta and header information to the header file, adding an HTML menu to the menu file, and adding an HTML footer menu to the footer file.

**Customize Config** In the config file, set the site name (to be included with each page title) and the location of each template (header, menu, footer) file.

**Create View Files** Each view file must be located with the /views directory or a subdirectory within /views.  Custom variables can be loaded in each view file.

**Add Controller View Variables** The following variables must be included in each controller method that uses a view:

###### Full Example
	$data['view_name'] = 'view_name';
	$data['title'] = 'Page Title';
	$data['heading'] = 'Page Heading';
	$data['keywords'] = 'These are the meta keywords';
	$data['description'] = 'This is the meta description';

	$this->template->build_view($data);
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

#### Sending Other Content to View
Using this plugin requires that all content sent to the view file be defined in the **$data[]** array.  To send additional data to the view, simply create additional **$data[]** declarations.
For example, **$data['content']** inside the controller method will be available as **$content** in the view file.