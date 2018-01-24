<?php
class Controller_Admin_Aboutmod extends Controller_Admin
{

	public function action_index()
	{
		$data['aboutmods'] = Model_Aboutmod::find('all');
		$this->template->title = "Aboutmods";
		$this->template->content = View::forge('admin/aboutmod/index', $data);

	}

	public function action_view($id = null)
	{
		$data['aboutmod'] = Model_Aboutmod::find($id);

		$this->template->title = "Aboutmod";
		$this->template->content = View::forge('admin/aboutmod/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Aboutmod::validate('create');

			if ($val->run())
			{
				$aboutmod = Model_Aboutmod::forge(array(
					'title' => Input::post('title'),
					'subtitle' => Input::post('subtitle'),
					'name' => Input::post('name'),
					'body' => Input::post('body'),
				));

				if ($aboutmod and $aboutmod->save())
				{
					Session::set_flash('success', e('Added aboutmod #'.$aboutmod->id.'.'));

					Response::redirect('admin/aboutmod');
				}

				else
				{
					Session::set_flash('error', e('Could not save aboutmod.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Aboutmods";
		$this->template->content = View::forge('admin/aboutmod/create');

	}

	public function action_edit($id = null)
	{
		$aboutmod = Model_Aboutmod::find($id);
		$val = Model_Aboutmod::validate('edit');

		if ($val->run())
		{
			$aboutmod->title = Input::post('title');
			$aboutmod->subtitle = Input::post('subtitle');
			$aboutmod->name = Input::post('name');
			$aboutmod->body = Input::post('body');

			if ($aboutmod->save())
			{
				Session::set_flash('success', e('Updated aboutmod #' . $id));

				Response::redirect('admin/aboutmod');
			}

			else
			{
				Session::set_flash('error', e('Could not update aboutmod #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$aboutmod->title = $val->validated('title');
				$aboutmod->subtitle = $val->validated('subtitle');
				$aboutmod->name = $val->validated('name');
				$aboutmod->body = $val->validated('body');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('aboutmod', $aboutmod, false);
		}

		$this->template->title = "Aboutmods";
		$this->template->content = View::forge('admin/aboutmod/edit');

	}

	public function action_delete($id = null)
	{
		if ($aboutmod = Model_Aboutmod::find($id))
		{
			$aboutmod->delete();

			Session::set_flash('success', e('Deleted aboutmod #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete aboutmod #'.$id));
		}

		Response::redirect('admin/aboutmod');

	}

}
