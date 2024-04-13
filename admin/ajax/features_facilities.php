<?php


require ("../inc/db_config.php");
require ("../inc/essentials.php");
adminLogin();



//***************************** FEATURE FUNCTION ********************************** */
//ajouter elemet
if (isset($_POST['add_feature'])) {

    $frm_data = filteration($_POST);

    $q = "INSERT INTO `features`(`name`) VALUES (?)";
    $vlaues = [$frm_data['name']];
    $res = insert($q, $vlaues, 's');
    echo $res;
}

//affiche elemet 
if (isset($_POST['get_features'])) {
    $res = selectAll('features');

    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr>
            <td>$i</td>
            <td>$row[name]</td>
            <td>
                 <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm shadow-none">
                 <i class="bi bi-trash"></i> Delete
                </button>
            </td>
        </tr>
       data;
        $i++;
    }

}

//delete elemet
if (isset($_POST['rem_feature'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_feature']];

    $q = "DELETE  FROM `features` WHERE `id`=?";
    $res = delete($q, $values, 'i');
    echo $res;
}


//***************************** FACILITY ********************************** */
//AJOUET element a la table faciliteys
if (isset($_POST['add_facility'])) {

    $frm_data = filteration($_POST);
    $img_r = uploadSVGImage($_FILES['icon'], FACILITIES_FOLDER);

    if ($img_r == 'inv_img') {
        echo $img_r;
    } else if ($img_r == 'inv_size') {
        echo $img_r;
    } else if ($img_r == 'upd_failed') {
        echo $img_r;
    } else {
        $q = "INSERT INTO `facilities`(`icon`, `name`, `description`) VALUES (?,?,?)";
        $vlaues = [$img_r, $frm_data['name'], $frm_data['desc']];
        $res = insert($q, $vlaues, 'sss');
        echo $res;
    }
}

//affiche elemet  facilities
if (isset($_POST['get_facility'])) {
    $res = selectAll('facilities');

    $i = 1;
    $path = FACILITIES_IMG_PATH;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr class= "align-middle">
            <td>$i</td>
            <td><img src="$path/$row[icon]"  width="100px"></td>
             <td>$row[name]</td>
              <td>$row[description]</td>
            <td>
                 <button type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm shadow-none">
                 <i class="bi bi-trash"></i> Delete
                </button>
            </td>
        </tr>
       data;
        $i++;
    }

}


//delete elemet facility
if (isset($_POST['rem_facility'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_facility']];



    $pre_q = "SELECT * FROM `facilities`  WHERE `id`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);

    if (deleteImage($img['icon'], FACILITIES_FOLDER)) {
        $q = "DELETE  FROM `facilities` WHERE `id`=?";
        $res = delete($q, $values, 'i');
        echo $res;
    } else {
        echo 0;
    }

}

?>