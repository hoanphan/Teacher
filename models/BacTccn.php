<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bac_tccn".
 *
 * @property integer $id
 * @property integer $id_gv
 * @property integer $id_lop
 * @property string $id_mon_hoc
 * @property string $hoc_ki
 * @property integer $so_dvht
 * @property integer $so_tiet_giang_day
 * @property integer $so_tiet
 * @property double $he_so_lop_dong
 * @property integer $Qc_de_nghi
 * @property integer $status
 */
class BacTccn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bac_tccn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'id_lop', 'id_mon_hoc', 'hoc_ki', 'so_dvht', 'so_tiet_giang_day', 'he_so_lop_dong'], 'required'],
            [['id_gv', 'id_lop', 'so_dvht', 'so_tiet_giang_day', 'status'], 'integer'],
            [['he_so_lop_dong'], 'number'],
            [['id_mon_hoc'], 'string', 'max' => 254],
            [['hoc_ki'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'id_gv' => 'Tên giáo viên',
            'id_lop' => 'Tên lớp',
            'id_mon_hoc' => 'Môn học',
            'hoc_ki' => 'Học kì',
            'so_dvht' => 'Số ĐVHT',
            'so_tiet_giang_day' => 'Số tiết dạy văn hóa PT',
            'so_tiet' => 'So Tiet',
            'he_so_lop_dong' => 'Hệ số lớp đông',
            'Qc_de_nghi' => 'Qc De Nghi',
            'status' => 'Trạng thái',
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
