<?php
class Controller_Admin_Postarticle extends Controller_Admin
{
	public function action_index()
	{
		$data['postarticles'] = Model_Postarticle::find('all');
		$this->template->title = "Postarticles";
		$view = View::forge('admin/postarticle/index', $data);
		$view->set_global('pdffiles', Arr::assoc_to_keyval(Model_Uploadpdf::find('all'), 'id', 'file_name'));
		$this->template->content =$view;
		
	}

	public function action_view($id = null)
	{
		$data['postarticle'] = Model_Postarticle::find($id);
		$this->template->title = "Postarticle";
		$view = View::forge('admin/postarticle/view', $data);
		$view->set_global('pdffiles', Arr::assoc_to_keyval(Model_Uploadpdf::find('all'), 'id', 'file_name'));
		$this->template->content =$view;

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Postarticle::validate('create');

			if ($val->run())
			{
				$postarticle = Model_Postarticle::forge(array(
					'title' => Input::post('title'),
					'subtitle' => Input::post('subtitle'),
					'catalog' => Input::post('catalog'),
					'select_pdf' => Input::post('select_pdf'),
				));

				if ($postarticle and $postarticle->save())
				{
					Session::set_flash('success', e('Added postarticle #'.$postarticle->id.'.'));

					Response::redirect('admin/postarticle');
				}

				else
				{
					Session::set_flash('error', e('Could not save postarticle.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Postarticles";
		$view = View::forge('admin/postarticle/create');
		$view->set_global('pdffiles', Arr::assoc_to_keyval(Model_Uploadpdf::find('all'), 'id', 'file_name'));
		
		$this->template->content =$view;

	}

	public function action_edit($id = null)
	{
		$postarticle = Model_Postarticle::find($id);
		$val = Model_Postarticle::validate('edit');

		if ($val->run())
		{
			$postarticle->title = Input::post('title');
			$postarticle->subtitle = Input::post('subtitle');
			$postarticle->catalog = Input::post('catalog');
			$postarticle->select_pdf = Input::post('select_pdf');

			if ($postarticle->save())
			{
				Session::set_flash('success', e('Updated postarticle #' . $id));

				Response::redirect('admin/postarticle');
			}

			else
			{
				Session::set_flash('error', e('Could not update postarticle #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$postarticle->title = $val->validated('title');
				$postarticle->subtitle = $val->validated('subtitle');
				$postarticle->catalog = $val->validated('catalog');
				$postarticle->select_pdf = $val->validated('select_pdf');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('postarticle', $postarticle, false);
		}
		$this->template->title = "Postarticles";
		$view = View::forge('admin/postarticle/edit');
		$view->set_global('pdffiles', Arr::assoc_to_keyval(Model_Uploadpdf::find('all'), 'id', 'file_name'));
		
		$this->template->content =$view;

	}

	public function action_delete($id = null)
	{
		if ($postarticle = Model_Postarticle::find($id))
		{
			$postarticle->delete();

			Session::set_flash('success', e('Deleted postarticle #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete postarticle #'.$id));
		}

		Response::redirect('admin/postarticle');

	}

}
