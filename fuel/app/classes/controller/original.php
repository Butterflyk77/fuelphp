<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Original extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data = array();
		$data['title'] = "乳癌防治基金會";

		$view = array();
		$view['header'] = View::forge('original/header',$data);
		$view['navbar'] = View::forge('original/navbar');
		$view['footer'] = View::forge('original/footer');
		return (View::forge('index',$view));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_about()
	{
		$data = array();
		$data['title'] = "關於基金會";

		$view = array();
		$view['header'] = View::forge('original/header',$data);
		$view['navbar'] = View::forge('original/navbar');
		$view['footer'] = View::forge('original/footer');
		return (View::forge('about',$view));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('original/404'), 404);
	}
}
