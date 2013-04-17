<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studio extends Controller_Admin_Admin
{

    public $template = 'layout';

    public function action_index()
    {
        $this->request->redirect('/admin/studio/list');
    }


    public function action_list(){
        $user_id = Auth::instance()->get_user()->id;
        $studios = new Model_Studio();
        $studios = $studios->get_list_for_admin($user_id);
        $content = View::factory('admin/studio/list')->bind('studios',$studios);
        $this->template->content = $content;

    }
    public function action_add(){

    }
    public function action_edit(){
        $id = $this->request->param('id');
        $studio = ORM::factory('studio',$id);
       if((!$this->superadmin) AND (!in_array($id,$this->studios))){
           throw new Kohana_HTTP_Exception_403('Не твоя точка');
       }

        $phone = ORM::factory('phone');
        $city = ORM::factory('city',CITY_ID);
        $this->template->headstring = '
<script src="'.MEDIA_SITE .'/js/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime,preview",

        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "bold,italic,underline,|,code,preview,|,insertdate,inserttime,|,bullist,numlist,|,link,unlink",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});
</script>
        ';
        if($post = $this->request->post()){
            $phones = $post['phones'];
            unset($post['phones']);
            $phone->set_phones($phones,$studio->pk());
            $studio->values($post);
            $studio->update();
            Cache::instance('sqlite')->delete('studio_list_' . CITY_ID);

            $this->request->redirect('/admin/studio/list');
        }
        $content = View::factory('admin/studio/edit')
            ->bind('city',$city)
            ->bind('studio',$studio);
        $this->template->content = $content;
    }
    public function action_photo(){

        $id = $this->request->param('id');
        $studio = ORM::factory('studio',$id);
        if((!$this->superadmin) AND (!in_array($id,$this->studios))){
            throw new Kohana_HTTP_Exception_403('Не твоя точка');
        }
        if($this->request->method() === Request::POST){
            $fields = $this->request->post();

            if (isset($fields['delete'])) {
                $studio->remove('images',$fields['delete']);
            }

            $files = $_FILES;
            if(!empty($files['images']['tmp_name'][0])){
            foreach($files['images']['tmp_name'] as $key=>$file){
                $name = $files['images']['name'][$key];
                $im = Image::factory($file);
                $ext= 'jpg';
                $directory = 'upload/studio' .  $id . '/';
                $mdir = 'medium/studio'  .  $id . '/';
                if(!file_exists($directory )){
                    mkdir($directory );
                }
                if(!file_exists($mdir )){
                    mkdir($mdir );
                }
                $filename = uniqid() . '.' . $ext;
                @$im->save("$directory/$filename");
                $im->resize(NULL,420)->save("$mdir/$filename");

                $values = array(
                    'filename' => "$filename",
                );
                $studio->add('images',ORM::factory('image')->values($values)->save());
                Cache::instance('sqlite')->delete('studio_list_' . CITY_ID);

            }
            }
        }
        $images = $studio->images->find_all();
        $count = $studio->images->count_all();
        $content = View::factory('admin/studio/images')
            ->bind('images',$images)
            ->bind('count',$count)
            ->bind('studio_id',$id);
        $this->template->content = $content;
    }


}