<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->config->load('template');
	}

   /**
	*	Builds HTML view automatically with listed header, menu, and footer files
	*
	*	@param view_name (string)		name of view file
	*	@param title (string)			page title for title tag
	*	@param site_name (string)		site name, if not included, site_name from config file is used
	*	@param heading (string)			page header information used for h1 tag
	*	@param keywords (string)		keyword string placed directly into the meta keywords tag
	*	@param description (string)		description string placed directly into the meta description tag
	*	@param data (string)			array of other custom data used per page
	*
	*/
    public function build_view($data)
    {
		$data['site_name'] = $this->CI->config->item('template_site_name');

		/* Load template parts */
		$this->CI->load->view($this->CI->config->item('template_header'), $data);
		$this->CI->load->view($this->CI->config->item('template_menu'));
		$this->CI->load->view($data['view_name'], $data);
		$this->CI->load->view($this->CI->config->item('template_footer'));
    }

   /**
	*	Return JSON object
	*
	*	@param object (string)			Item to encode to JSON and print
	*
	*/
    public function build_view_json($data)
    {
		$data['object'] = json_encode($data['object']);
		$this->CI->load->view($this->CI->config->item('template_json'), $data);
    }

   /**
	*	If current request is of AJAX origin
	*
	*	@return BOOL
	*/
	public function ajax_request()
	{
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
			return TRUE;
		else
			return FALSE;
	}
}

/* End of file template.php */
/* Location: ./application/libraries/template.php */