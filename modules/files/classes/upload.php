<?php
class Upload extends Kohana_Upload{
    /**
     * а wrapper class, used to save many images at the same time
     */
    public static function save_multiple(array $files, $directory = NULL, $chmod = 0644)
    {


        if ($directory === NULL)
        {
            // Use the pre-configured upload directory
            $directory = Upload::$default_directory;
        }

        if ( ! is_dir($directory) OR ! is_writable(realpath($directory)))
        {
            try{
              mkdir($directory,0777,true);
            }catch (Exception $e){
                //
            }
        }

        foreach($files  as $file){
            if ( ! isset($file['tmp_name']) OR ! is_uploaded_file($file['tmp_name']))
            {
                // Ignore corrupted uploads
                continue;
            }

            if (Upload::$remove_spaces === TRUE)
            {
                // Remove spaces from the filename
                $file['name'] = preg_replace('/\s+/u', '_', $file['name']);
            }

            // Make the filename into a complete path
            $filename = realpath($directory).DIRECTORY_SEPARATOR.$file['name'];
            if (move_uploaded_file($file['tmp_name'], $filename))
            {
                if ($chmod !== FALSE)
                {
                    // Set permissions on filename
                    chmod($filename, $chmod);
                }

                // Return new file path
                return $filename;
            }

             continue;
        }

    }

}