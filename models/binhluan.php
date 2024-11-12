<?php
function insert_binhluan($noi_dung, $id_user, $id_pro, $ngay_bl)
{
    $sql = "INSERT INTO binhluan(noi_dung, id_user, id_pro, ngay_bl) VALUES('$noi_dung', '$id_user', '$id_pro', '$ngay_bl')";
    pdo_execute($sql);
}

// danh sách bình luận:
function load_binhluan($id_pro)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if ($id_pro > 0) {
        $sql .= " AND id_pro = '" . $id_pro . "' ";
    } else {
        $sql .= " ORDER BY id DESC";
    }
    $listbl = pdo_query($sql);
    return $listbl;
}

// Xóa bình luận:
function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}
