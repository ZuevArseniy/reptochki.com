<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model file class
 *
 * @author     Novichkov Sergey(Radik) <novichkovsergey@yandex.ru>
 * @copyright  Copyrights (c) 2012 Novichkov Sergey
 *
 * @property   integer    $id
 * @property   string     $file
 * @property   string     $type
 * @property   integer    $size
 * @property   string     $description
 */
class Model_Image extends ORM {

    protected $_has_many = array(
        'studios' => array(
            'through' => 'studios_images'
        )
    );
    /**
     * Table columns
     *
     * Field name => Label
     *
     * @var array
     */
    protected  $_table_columns = array(
        'id'            => 'id',
        'filename'      => 'filename',
        'type'          => 'type',
        'size'          => 'size',
       // 'name'   => 'name',
    );

    /**
     * Label definitions for validation
     *
     * @return array
     */
    public function labels()
    {
        return array(
            'filename'        => 'Имя файла',
           // 'name' => 'Description',
        );
    }

//    /**
//     * Filter definitions for validation
//     *
//     * @return array
//    */
//    public function filters()
//    {
//        return array(
//            TRUE => NULL,
//            'file', array(
//                array($this,'upload'),
//            ),
//        );
//    }

    /**
     * Rule definitions for validation
     *
     * @return array
     */
//    public function rules()
//    {
//        return array(
//            'file' => array(
//                array('Upload::valid'),
//                array('Upload::not_empty'),
//                array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif', 'zip', 'pdf', 'doc', 'docx', 'xls'))),
//                array(array($this, 'file_save'), array(':value'))
//            ),
//        );
//    }

    /**
     * Uploads directory
     *
     * @return string
     */
    private function uploads_dir()
    {
        return DOCROOT . 'upload' . DIRECTORY_SEPARATOR;
    }

    /**
     * Upload file in upload directory and setup valid filename
     *
     * @param array $file
     *
     * @return boolean
     */
    public function file_save($file)
    {
        // upload file
        $uploaded = Upload::save($file, $file['name'], $this->uploads_dir());

        // if uploaded set file name to save to database
        if ($uploaded)
        {
            // set file name
            $this->set('filename', $file['name']);

            // set file type
            $this->set('type', strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)));

            // set file size
            $this->set('size', $file['size']);
        }

        // return result
        return $uploaded;
    }

} // end Model File class