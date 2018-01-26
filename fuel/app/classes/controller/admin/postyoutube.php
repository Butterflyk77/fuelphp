<?php
class Controller_Admin_Postyoutube extends Controller_Admin
{

	public function action_index()
	{
		$data['postyoutubes'] = Model_Postyoutube::find('all');
		$this->template->title = "Postyoutubes";
		$this->template->content = View::forge('admin/postyoutube/index', $data);

	}

	public function action_view($id = null)
	{
		$data['postyoutube'] = Model_Postyoutube::find($id);

		$this->template->title = "Postyoutube";
		$this->template->content = View::forge('admin/postyoutube/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Postyoutube::validate('create');

			if ($val->run())
			{
				$postyoutube = Model_Postyoutube::forge(array(
					'title' => Input::post('title'),
					'subtitle' => Input::post('subtitle'),
					'catalog' => Input::post('catalog'),
					'youtubeid' => Input::post('youtubeid'),
					'body' => Input::post('body'),
				));

				if ($postyoutube and $postyoutube->save())
				{
					Session::set_flash('success', e('Added postyoutube #'.$postyoutube->id.'.'));

					Response::redirect('admin/postyoutube');
				}

				else
				{
					Session::set_flash('error', e('Could not save postyoutube.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Postyoutubes";
		$this->template->content = View::forge('admin/postyoutube/create');

	}

	public function action_edit($id = null)
	{
		$postyoutube = Model_Postyoutube::find($id);
		$val = Model_Postyoutube::validate('edit');

		if ($val->run())
		{
			$postyoutube->title = Input::post('title');
			$postyoutube->subtitle = Input::post('subtitle');
			$postyoutube->catalog = Input::post('catalog');
			$postyoutube->youtubeid = Input::post('youtubeid');
			$postyoutube->body = Input::post('body');

			if ($postyoutube->save())
			{
				Session::set_flash('success', e('Updated postyoutube #' . $id));

				Response::redirect('admin/postyoutube');
			}

			else
			{
				Session::set_flash('error', e('Could not update postyoutube #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$postyoutube->title = $val->validated('title');
				$postyoutube->subtitle = $val->validated('subtitle');
				$postyoutube->catalog = $val->validated('catalog');
				$postyoutube->youtubeid = $val->validated('youtubeid');
				$postyoutube->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('postyoutube', $postyoutube, false);
		}

		$this->template->title = "Postyoutubes";
		$this->template->content = View::forge('admin/postyoutube/edit');

	}

	public function action_delete($id = null)
	{
		if ($postyoutube = Model_Postyoutube::find($id))
		{
			$postyoutube->delete();

			Session::set_flash('success', e('Deleted postyoutube #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete postyoutube #'.$id));
		}

		Response::redirect('admin/postyoutube');

	}

}
