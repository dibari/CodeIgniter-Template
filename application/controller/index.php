<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Test Controller for Codeigniter-Template
	 */
	public function index()
	{
		$data['content'] = 'Display this content in the body of the page';

		$data['view_name'] = 'view_name';
		$data['title'] = 'Page Title';
		$data['heading'] = 'Page Heading';
		$data['keywords'] = 'These are the meta keywords';
		$data['description'] = 'This is the meta description';

		$this->template->build_view($data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */