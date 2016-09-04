<?php
use  app\models\PhongKhoa;
use app\models\Ngach;
use app\models\To_Bo_Mon;
use app\models\Bac;
use app\models\NhiemVuBac;
use app\models\BangIii;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$phong = PhongKhoa::findOne($teacher->id_Khoa);
$ngach = Ngach::findOne($teacher->id_ngach);
$toBooMon = To_Bo_Mon::findOne($teacher->id_to_bo_mon);
$bac = Bac::find()->all();
$bac_tnccs = \app\models\BacTccn::findAll(['id_gv' => $teacher->id_gv, 'status' => 1]);
$bangII=\app\models\BangIi::findAll(['status'=>1]);
$bangIII=BangIii::findAll(['status'=>1]);
$bangV=\app\models\BangV::findAll(['status'=>1]);
$bangX=\app\models\Bangx::findAll(['status'=>1]);

$tong1 = 0;
$tong2 = 0;
$congbac = 0;
$bac1=0;
$tongII=0;
$tongIII=0;
$tongIV=0;
$tongV=0;
$i = 0;
?>
<style>
    th {
        text-align: center;
    }

    td {
        text-align: center;
        font-style: normal;
    }
</style>
<table style="width: 100%;text-align: center;font-weight: bold">
    <tr>
        <td>Họ và tên :</td>
        <td>
            <?php echo $teacher->ho_ten ?>
        </td>
        <td>Khoa phòng:</td>
        <td><?php echo $phong->ten ?></td>
        <td>Ngạch:</td>
        <td><?php echo $ngach->ten_ngach ?></td>
        <td><?php echo $ngach->quy_chuan ?></td>
    </tr>
    <tr>
        <td>Tổ bộ môn :</td>
        <td><?php echo $toBooMon->ten ?></td>
        <td>Định mức giảng dạy (1):</td>
        <td><?php echo $teacher->dinh_muc ?> Tiết</td>
    </tr>
    <tr>
        <td colspan="4">Hệ số lương: <?php echo $teacher->he_so_luong ?></td>
    </tr>
</table>
<div>
    <label class="" style="font-weight: bold">I. Nhiệm vụ giảng dạy đã hoàn thành trong năm học</label><br>
    <?php for ($i = 0; $i < count($bac); $i++): ?>
        <label><?php echo $bac[$i]->ten ?></label><br>
        <?php $nhiemVuBacs = NhiemVuBac::findAll(['id_bac' => $bac[$i]->id, 'id_gv' => $teacher->id_gv, 'status' => 1]) ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th rowspan="2">STT</th>
                <th rowspan="2">Lớp</th>
                <th rowspan="2">Sĩ số</th>
                <th rowspan="2">Học phần</th>
                <th rowspan="2">Học Kì</th>
                <th rowspan="2">Số ĐVHT</th>
                <th rowspan="2">Số tiết giảng dạy</th>
                <th colspan="5">Số tiết giảng dạy thực tế chia ra</th>
                <th rowspan="2">Cộng</th>
                <th rowspan="2">Hệ số lớp đông</th>
                <th rowspan="2">Tổng số tiết QC đề nghị TT</th>
                <td rowspan="2">Ghi chú</td>
            </tr>
            <tr>
                <th>Số tiết LT</th>
                <th>Số tiết TH trên lớp</th>
                <th>Hệ số TH trên lóp</th>
                <th>Số tiết TH ngoài lớp học</th>
                <th>Hệ số TH ngoài lớp học</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>G</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7=2+(3*4)+5*6)</td>
                <td>8</td>
                <td>9=7*8</td>
                <td>10</td>
            </tr>
            <?php $congbac=0?>
            <?php $stt = 1; ?>
            <?php foreach ($nhiemVuBacs as $nhiemVuBac): ?>
                <?php $lop = \app\models\Lop::findOne($nhiemVuBac->id_lop);
                $monHoc = \app\models\MonHoc::findOne($nhiemVuBac->id_mon_hoc) ?>
                <tr>
                    <td>
                        <?= $stt; ?>
                    </td>
                    <td>
                        <?= $lop->ten_lop ?>
                    </td>
                    <td>
                        <?= $lop->si_so ?>
                    </td>
                    <td>
                        <?= $monHoc->te_mon ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->hoc_ki ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->so_dvht ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->so_tiet_giang_day ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->so_tiet_li_thuyet ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->so_tiet_thuc_hanh ?>
                    </td>
                    <td>
                        <?= 0.75 ?>
                    </td>
                    <td>
                        <?= $nhiemVuBac->so_tiet_TH_ngoai_lop_hoc ?>
                    </td>
                    <td>
                        0.55
                    </td>
                    <td>
                        <?php $cong1 = $nhiemVuBac->so_tiet_li_thuyet + $nhiemVuBac->so_tiet_thuc_hanh * 0.75 + $nhiemVuBac->so_tiet_TH_ngoai_lop_hoc * 0.55;
                        $cong1 = round($cong1, 1);
                        echo $cong1;
                        ?>
                    </td>
                    <td>
                        <?php
                        $he_so_lop_dong = 0;
                        if ($lop->si_so > 0 && $lop->si_so <= 50) {
                            $he_so_lop_dong = 1;
                        } elseif ($lop->si_so > 50 && $lop->si_so <= 75)
                            $he_so_lop_dong = 1.2;
                        elseif ($lop->si_so > 75 && $lop->si_so <= 100)
                            $he_so_lop_dong = 1.4;
                        elseif ($lop->si_so > 100 && $lop->si_so <= 150)
                            $he_so_lop_dong = 1.6;
                        elseif ($lop->si_so > 150 && $lop->si_so <= 200)
                            $he_so_lop_dong = 1.8;
                        elseif ($lop->si_so > 200 && $lop->si_so <= 500)
                            $he_so_lop_dong = 2;
                        echo $he_so_lop_dong;
                        ?>
                    </td>
                    <td>
                        <?php echo $cong1 * $he_so_lop_dong;
                        $congbac += $cong1;
                        $tong1 += $cong1;
                        ?>
                    </td>
                    <td></td>
                </tr>

            <?php endforeach ?>
            <tr style="height: 30px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td rowspan="3">Quy chuẩn sang ngạch giáo viên
                </td>
            </tr>
            <tr style="height: 30px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr style="height: 30px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr style="height: 30px">
                <td></td>
                <td colspan="13">Tổng</td>
                <td><?php
                           $congbac= round($congbac * $ngach->quy_chuan, 1);
                    $bac1+=$congbac;
                    echo $congbac;?></td>
                <td></td>

            </tr>

            </tbody>
        </table>
    <?php endfor; ?>
</div>
<!--end nhiệm vụ bậc-->
<!--begin Bậc tncc-->
<label>
    <div>3. Dạy văn hóa bậc TCCN 9+3
        <div style="color: blue ;font-style: italic">(Mục này kê riêng các số tiết dạy HP văn hóa phổ thông của các lớp
            TC 9+3)
        </div>
        <div
</label>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>STT</th>
        <th>Lớp</th>
        <th>Sĩ số</th>
        <th>Học phần</th>
        <th>Học Kì</th>
        <th>Số ĐVHT</th>
        <th>Số tiết dạy văn hóa PT</th>
        <th>Hệ số QC</th>
        <th>Cộng</th>
        <th>Hệ số lớp đông</th>
        <th>Tổng số tiết QC đề nghị TT</th>
        <td>Ghi chú</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($bac_tnccs as $bac_tncc): ?>
        <?php $lop = \app\models\Lop::findOne($bac_tncc->id_lop);
        $monHoc = \app\models\MonHoc::findOne($bac_tncc->id_mon_hoc) ?>
        <tr>
            <td>

            </td>
            <td>
                <?= $lop->ten_lop ?>
            </td>
            <td>
                <?= $lop->si_so ?>
            </td>
            <td>
                <?= $monHoc->te_mon ?>
            </td>
            <td><?= $bac_tncc->hoc_ki ?></td>
            <td><?= $bac_tncc->so_dvht ?></td>
            <td><?= $bac_tncc->so_tiet ?></td>
            <td><?= 0.8 ?></td>
            <td><?php $tongt = round($bac_tncc->so_tiet * 0.8, 1);
                echo $tongt ?></td>
            <td>
                <?php
                $he_so_lop_dong = 0;
                if ($lop->si_so > 0 && $lop->si_so <= 50) {
                    $he_so_lop_dong = 1;
                } elseif ($lop->si_so > 50 && $lop->si_so <= 75)
                    $he_so_lop_dong = 1.2;
                elseif ($lop->si_so > 75 && $lop->si_so <= 100)
                    $he_so_lop_dong = 1.4;
                elseif ($lop->si_so > 100 && $lop->si_so <= 150)
                    $he_so_lop_dong = 1.6;
                elseif ($lop->si_so > 150 && $lop->si_so <= 200)
                    $he_so_lop_dong = 1.8;
                elseif ($lop->si_so > 200 && $lop->si_so <= 500)
                    $he_so_lop_dong = 2;
                echo $he_so_lop_dong;
                ?>
            </td>
            <td>
                <?php
                $tong2 += $tong_denghi = round($he_so_lop_dong * $tongt, 1);
                echo $tong_denghi;
                ?>
            </td>
            <td></td>
        </tr>
    <?php endforeach; ?>

    <tr style="height: 30px">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="2">Quy chuẩn sang ngạch Giảng viên/GVC
        </td>
    </tr>
    <tr style="height: 30px">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    <tr style="height: 30px">
        <td></td>


        <td colspan="9"></td>
        <td><?= $tong2 ?></td>
        <td><?= $tong2 * $ngach->quy_chuan ?></td>
    </tr>
    </tbody>
</table>
<!--Thực hành, thực tập sư phạm, TTTN	-->
<div>
    <label>II. Thực hành, thực tập sư phạm, TTTN</label>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>STT</th>
        <th>Nội dung thực hiện</th>
        <th>Thời gian thực hiện</th>
        <td>Số giờ chuẩn</td>
    </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($bangII);$i++):?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$bangII[$i]->noi_dung?></td>
            <td><?=$bangII[$i]->thoi_gian_th?></td>
            <td><?php $tongII+=$bangII[$i]->so_gio_chuan;
                echo $bangII[$i]->so_gio_chuan?></td>
        </tr>

    <?php endfor;?>
    <tr style="height: 30px">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr style="height: 30px">
        <td colspan="3">Tổng</td>
        <td><?=$tongII?></td>
    </tr>
    </tbody>
</table>
<!--III. Nhiệm vụ nghiên cứu khoa học đã hoàn thành (hoặc sản phẩm thay thế đề tài NCKH)   -->
<div>
    <label>III. Nhiệm vụ nghiên cứu khoa học đã hoàn thành (hoặc sản phẩm thay thế đề tài NCKH)</label>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên đề tài /Bài báo đăng trên tạp chí chuyên ngành</th>
        <th>Thời gian thực hiện</th>
        <td>Số giờ chuẩn</td>
    </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($bangIII);$i++):?>
        <tr>
            <td><?=$i+1?></td>
            <td><?=$bangIII[$i]->ten?></td>
            <td><?=$bangIII[$i]->nhiem_thu?></td>
            <td><?php $tongIII+=$bangIII[$i]->so_gio_chuan;
                echo $bangIII[$i]->so_gio_chuan?></td>
        </tr>

    <?php endfor;?>

    <tr style="height: 30px">
        <td colspan="3">Tổng</td>
        <td><?=$tongIII?></td>
    </tr>
    </tbody>
</table>
<div>
    <label>IV. Sinh hoạt chuyên môn, hội họp... (5)</label>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Nội dung thực hiện</th>
            <th>Thời gian thực hiện</th>
            <td>Số giờ chuẩn</td>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0;$i<count($bangV);$i++):?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$bangV[$i]->noi_dung?></td>
                <td><?=$bangV[$i]->thoi_gian_thuc_hien?></td>
                <td><?php $tongIV+=$bangV[$i]->so_gio_chuan;
                    echo $bangV[$i]->so_gio_chuan?></td>
            </tr>

        <?php endfor;?>

        <tr style="height: 30px">
            <td colspan="3">Tổng</td>
            <td><?=$tongIV?></td>
        </tr>
        </tbody>
    </table>
</div>
<!--V. Kiêm nhiệm, số giờ được giảm theo chế độ (GVCN, giáo vụ khoa, Đoàn, Công đoàn, nghỉ Ths…)-->
<div>
    <label>V. Kiêm nhiệm, số giờ được giảm theo chế độ (GVCN, giáo vụ khoa, Đoàn, Công đoàn, nghỉ Ths…)</label>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Nội dung được giảm</th>
            <th>Thời gian thực hiện</th>
            <td>Số giờ chuẩn</td>
        </tr>
        </thead>
        <tbody>
        <?php for($i=0;$i<count($bangX);$i++):?>
            <tr>
                <td><?=$i+1?></td>
                <td><?=$bangX[$i]->noi_dung_giam?></td>
                <td><?=$bangX[$i]->thoi_gian_thuc_hien?></td>
                <td><?php $tongV+=$bangX[$i]->so_gio_giam;
                    echo $bangX[$i]->so_gio_giam?></td>
            </tr>

        <?php endfor;?>

        <tr style="height: 30px">
            <td colspan="3">Tổng</td>
            <td><?=$tongV?></td>
        </tr>
        </tbody>
    </table>

</div>
<div>
    <label>VI. Tổng số giờ (tiết chuẩn) đề nghị được thanh toán:</label>
    <div class="col-xs-12">
        <div class="col-xs-4">
            VI = I + II + III + IV +V - (1)=
        </div>
        <div class="col-xs-4">
           <?=$bac1+$tongII+$tongIII+$tongV+$tongV-$teacher->dinh_muc?> giờ
        </div>
    </div>
</div>