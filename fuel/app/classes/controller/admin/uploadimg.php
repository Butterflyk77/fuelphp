<?php
class Controller_Admin_Uploadimg extends Controller_Admin
{

	public function action_index()
	{
        $data['uploadimgs'] = Model_Uploadimg::find('all');      
        $this->template->title = "uploadimg";
        $this->template->content = View::forge('admin/uploadimg/index', $data);
    }
    public function action_add()
    {
 
    $this->template->title = '照片上傳';
    $this->template->content = View::forge('admin/uploadimg/add');

    if (Input::method() === 'POST')
    {
    // 設定（ファイル保存場所）
    $config = array(
    'path' => DOCROOT . '/uploads/img/', 
    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'), 
    );
 
    // アップロード実行
    Upload::process($config);
     // 検証
    if (Upload::is_valid())
    {
         // アップロードファイルを保存
        Upload::save();
         // データベース保存
        foreach (Upload::get_files() as $file)
        {
            // 成功したファイルの処理
            // データをセット
            $uploadimg = Model_Uploadimg::forge(array(
                'file_name' => $file['saved_as'],
                'type' => $file['type'],
                'size' => $file['size'],
                'mimetype' => $file['mimetype'],
                'save_to' => $file['saved_to'],
                'published' => '1',
                'updated_at' => 0,
            ));
 
            if ($uploadimg->save()) // 保存
            {
                // 登録成功
                Session::set_flash('success', e('圖片已經成功儲存'));
            }
            else
            {
                Session::set_flash('error', '發生錯誤，無法儲存');
            }
        }
    }
 
    // エラー有り
    foreach (Upload::get_errors() as $file)
    {
        $html_error = '';
        foreach ($file['errors'] as $error) {
            $html_error .= '<p>'. $error['message'] . '</p>';
        }
 
        $this->template->title = '發生錯誤，無法儲存';
        $this->template->content = View::forge('admin/uploadimg/error');
        $this->template->content->set_safe('html_error', $html_error);
        return;
    }
    
    		Response::redirect('admin/uploadimg');

    }
}

	public function action_delete($id = null)
	{
		if ($uploadimg = Model_Uploadimg::find($id))
		{
			$uploadimg->delete();

			Session::set_flash('success', e('刪除照片惹QQ #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete post #'.$id));
		}

		Response::redirect('admin/uploadimg');

	}

}