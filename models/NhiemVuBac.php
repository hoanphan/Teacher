<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nhiem_vu_bac".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property integer $id_lop
 * @property integer $id_mon_hoc
 * @property string $hoc_ki
 * @property integer $so_dvht
 * @property integer $so_tiet_giang_day
 * @property integer $so_tiet_thuc_hanh
 * @property integer $so_tiet_li_thuyet
 * @property integer $so_tiet_TH_ngoai_lop_hoc
 * @property integer $id_bac
 * @property integer $status
 */
class NhiemVuBac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nhiem_vu_bac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'id_lop', 'id_mon_hoc', 'hoc_ki', 'so_dvht', 'so_tiet_giang_day', 'so_tiet_thuc_hanh', 'so_tiet_li_thuyet', 'so_tiet_TH_ngoai_lop_hoc', 'id_bac'], 'required'],
            [['id_gv', 'id_lop', 'id_mon_hoc', 'so_dvht', 'so_tiet_giang_day', 'so_tiet_thuc_hanh', 'so_tiet_li_thuyet', 'so_tiet_TH_ngoai_lop_hoc', 'id_bac', 'status'], 'integer'],
            [['hoc_ki'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã nhiệm vụ bậc',
            'id_gv' => 'Tên giáo viên',
            'id_lop' => 'Lớp',
            'id_mon_hoc' => 'Tên môn học',
            'hoc_ki' => 'Học kì',
            'so_dvht' => 'Số ĐVHT',
            'so_tiet_giang_day' => 'Số tiết giảng dạy',
            'so_tiet_thuc_hanh' => 'Số tiết thực hành',
            'so_tiet_li_thuyet' => 'Số tiết lí thuyết',
            'so_tiet_TH_ngoai_lop_hoc' => 'Số tiết thực hành ngoài',
            'id_bac' => 'Bậc',
            'status' => 'Còn được tính',
        ];
    }
    public function LayDanhSachHocKi()
    {
        $arr=array('I'=>'Học kì I','II'=>'Học kì II','III'=>'Học kì III');
        return $arr;
    }
    public function LayDanhSachTrangThai()
    {
        $arr=array(1=>'Active',0=>'Inactive');
        return $arr;
    }
    public function getTenGv($key)
    {
      $teacher=Teacher::findOne($key);
        if(isset($teacher))
        {
            return $teacher->ho_ten;
        }
        else
            return "Unknown";
    }
    public function getTenLop($key)
    {

        $lop=Lop::findOne(["id_lop"=>$key]);
        if(isset($lop))
        {
            return $lop->ten_lop;
        }
        else
            return "Unknown";
    }
    public function getTenMonHoc($key)
    {
        $monhoc=MonHoc::findOne($key);
        if(isset($monhoc))
        {
            return $monhoc->te_mon;
        }
        else
            return "Unknown";
    }
    public function getTenHocKi($key)
    {
        $arr=array('I'=>'Học kì I','II'=>'Học kì II','III'=>'Học kì III');
        if(isset($arr[$key]))
        {
            return $arr[$key];
        }
        else

            return "Unknown";
    }
    public function getTenBac($key)
    {
        $bac=Bac::findOne($key);
        if(isset($bac))
        {
            return $bac->ten;
        }
        else
            return "Unknown";
    }
    public function getTextStatus($key)
    {
       $arr=array(1=>'Active',0=>'Inactive');
        if(isset($arr[$key]))
            return $arr[$key];
        else
            return "Unknown";
    }
}
