<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Comment extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin', 'admin');
	}

	public function index()
	{
		$this->var['title'] = 'View All Comment';
		$this->var['query'] = $this->admin->get_all_comment();
		$this->var['module'] = 'admin/all_comment';
		$this->load->view('admin/index', $this->var);
	}



	
	public function delete()
	{
		$id = $this->input->post('comment_id', true);
		if ($id && $id> 0) {
			$this->admin->delete_comment($id);
		}

		redirect('comment');
	}

	/*
	* @return array
	* save post on create and update action if validation passed
	*/

	public function save()
	{
		$id = (int) $this->uri->segment(4);
		
		if ($this->form_validate()) {
			$comment_data = [];
			$comment_data['comment_nama'] = $this->input->post('comment_nama');
			$comment_data['comment_email'] = $this->input->post('comment_email');
			$comment_data['comment_isi'] = $this->input->post('comment_isi');
			$comment_data['post_slug'] = url_title(strtolower($this->input->post('comment_nama')), '-');
			$comment_data['is_delete'] = 0;

			if ($id && $id > 0) {
				$update = $this->admin->update_post($comment_data, $id);
				if($update){
					$data['message'] = 'Berita berhasil diubah';
					$data['type'] = 'success';
				}
				else {
					$data['message'] = "Berita gagal diubah";
					$data['type'] = 'error';
				}
			}
			else {
				$news_data['created_at'] = date('Y-m-d H:i:s');
				$insert = $this->admin->insert_new_post($comment_data);
				if($insert){
					$data['message'] = 'Berita berhasil ditambahkan';
					$data['type'] = 'success';
				}
				else {
					$data['message'] = "Berita gagal ditambahkan";
					$data['type'] = 'error';
				}
			}	
		}
		else {
			$comment_data['comment_nama'] = $this->input->post('comment_nama');
			$comment_data['comment_email'] = $this->input->post('comment_email');
			$comment_data['comment_isi'] = $this->input->post('comment_isi');
			$comment_data['created_at'] = 'Now';
			$data['message'] = validation_errors();
			$data['type'] = 'error';
			$data['query'] = (object) $comment_data;
		}
		return $data;
	}

	/**
	* @return bool
	* @access public
	* form validation for create and update
	*/
	public function form_validate()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('comment_nama', 'comment nama', 'required');
		$this->form_validation->set_rules('comment_email', 'comment email', 'required');
		$this->form_validation->set_rules('comment_isi', 'comment isi', 'required');
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		return $this->form_validation->run();

	}
}
