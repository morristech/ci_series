<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct()
	{
		parent:: __construct();

		$this->load->library('parser');
		
	}

	public function index()
	{
		
		
		$a = array(
					array('article_title' => 'The first article', 'article_blurb' => 'First article goes here'),
					array('article_title' => 'The second article', 'article_blurb' => 'Second article goes here'),
					array('article_title' => 'The third article', 'article_blurb' => 'Third article goes here'),
				);

		$data['title'] 			= 'Working with Templates';
		$data['page_heading'] 	= date('l jS \of F Y h:i:s A');
		$data['intro']			= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
									labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
									velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$data['articles']		= $a;
		if(!$this->uri->segment(1))
		{
			$data['content'] = "partials/home";
		}
		
		$this->parser->parse('templates/main_template', $data);
		
	}
	
	public function view_article()
	{
		$data['title'] 		= 'CodeIgniter Partials';
		$data['heading'] 	= "This is the article title";
		$data['article'] 	= "article content here";
		$data['content'] 	= "partials/_article_viewer";
		$this->parser->parse('templates/main_template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

