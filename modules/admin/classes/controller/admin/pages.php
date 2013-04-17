<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin_Admin{


    public function action_index(){
        $this->request->redirect('/admin/pages/list');
    }
    public function action_list(){

        $pages = new Model_Pages();
        $pages = $pages->fetch_pages();
        $content = View::factory('pages/list')->bind('pages',$pages);
        $this->template->content = $content;
        $this->template->menu = View::factory('menu')->set('uri','/admin/pages/list');

    }
    public function action_add(){
        $this->template->headstring = '<script type="text/javascript" src="/assets/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>';
        $pages = new Model_Pages();
        $pages = $pages->fetch_pages();
        $content = View::factory('pages/add')->set('title','Добавление новой страницы');
        $this->template->content = $content;
        $this->template->menu = View::factory('menu')->set('uri','/admin/pages/add');

    }
    public function action_delete(){

    }
    public function action_edit(){

    }


}