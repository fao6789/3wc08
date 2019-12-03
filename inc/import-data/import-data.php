<?php

// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

    //create new top-level menu
    add_menu_page('Import data', 'Import data', 'administrator', __FILE__, 'baw_settings_page', "dashicons-portfolio");
    //add_menu_page('Product', 'Product', 'administrator', __FILE__, 'baw_settings_product','dashicons-admin-post');
    add_submenu_page(__FILE__, 'Post', 'Post', 'edit_themes', 'baw_settings_post', 'baw_settings_post');
    add_submenu_page(__FILE__, __('Product'), __('Product'), 'edit_themes', 'baw_settings_product', 'baw_settings_product');

}

function baw_settings_page(){
    ?>
    <h2>Import data simple html dom</h2>
    <?php
}


function baw_settings_post() {
    ?>
    <div class="wrap">
        <form method="post" action="admin.php?page=baw_settings_post">
            <h2>Insert posts link</h2>

            <p><input type="text" name="import_link_post" class="import_link_post" placeholder="https://..." style="width: 300px !important;"></p>
            <p><input type="text" name="import_link_post2" class="import_link_post" placeholder="https://..." style="width: 300px !important;"></p>
            <button type="submit" name="sub_link_post" class="sub_link_post">Insert Data</button>

        </form>

        <?php

        if(isset($_POST['sub_link_post'])){
            include "PHPExcel/Classes/PHPExcel.php";
            $a = $_POST['import_link_post'];
            $b = $_POST['import_link_post2'];

            var_dump($a.'-'.$b) ;
            //Đường dẫn file
            $file = 'post.xlsx';
            $inputFileName = get_template_directory().'/inc/import-data/post.xlsx';

            //  Tiến hành đọc file excel
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

            //  Lấy thông tin cơ bản của file excel

            // Lấy sheet hiện tại
            $sheet = $objPHPExcel->getSheet(0);

            // Lấy tổng số dòng của file, trong trường hợp này là 6 dòng
            $highestRow = $sheet->getHighestRow();

            // Lấy tổng số cột của file, trong trường hợp này là 4 dòng
            $highestColumn = $sheet->getHighestColumn();

            // Khai báo mảng $rowData chứa dữ liệu

            //  Thực hiện việc lặp qua từng dòng của file, để lấy thông tin
            for ($row = 1; $row <= $highestRow; $row++){
                // Lấy dữ liệu từng dòng và đưa vào mảng $rowData
                $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
            }

            //In dữ liệu của mảng
            echo "<pre>";
            //var_dump($rowData);
            $count = 0;


            foreach ($rowData as $item){
                $count++;
                $title = $item[0][0];
                $content = $item[0][1];
                $url = $item[0][2];
                if($count >= $a and $count <= $b){

                    $title = $item[0][0];
                    $content = $item[0][1];
                    $url = $item[0][2];


                    $post_id = wp_insert_post(array (
                        'post_type' => 'post',
                        'post_title' => $title,
                        'post_content' => $content,
                        'post_status' => 'publish',
                    ));

                    $image_url = $url;
                    $upload_dir = wp_upload_dir();
                    $image_data = file_get_contents($image_url);
                    $filename = basename($image_url);
                    if(wp_mkdir_p($upload_dir['path']))     $file = $upload_dir['path'] . '/' . $filename;
                    else                                    $file = $upload_dir['basedir'] . '/' . $filename;
                    file_put_contents($file, $image_data);

                    $wp_filetype = wp_check_filetype($filename, null );
                    $attachment = array(
                        'post_mime_type' => $wp_filetype['type'],
                        'post_title' => sanitize_file_name($filename),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );
                    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
                    update_post_meta($attach_id, '_wp_attachment_image_alt', 'test');
                    require_once(ABSPATH . 'wp-admin/includes/image.php');
                    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
                    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
                    $res2= set_post_thumbnail( $post_id, $attach_id );
                }
            }
            echo "</pre>";

            /**/
        }
        ?>
    </div>
<?php
}


function baw_settings_product(){
?>
    <div class="wrap">
        <form method="post" action="">
            <h2>Insert products link</h2>

            <p><input type="text" name="import_link_products" class="import_link_products" placeholder="https://..." style="width: 300px !important;"></p>
            <button type="button" name="sub_link_products" class="sub_link_products">Insert Data</button>

        </form>
    </div>
    <?php
}
?>