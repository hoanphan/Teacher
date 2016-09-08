<?php

namespace app\modules\admin\modelSeach;

use app\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NhiemVuBac;

/**
 * NhiemVuBacSeach represents the model behind the search form about `app\models\NhiemVuBac`.
 */
class NhiemVuBacSeach extends NhiemVuBac
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gv', 'id_lop', 'id_mon_hoc', 'so_dvht', 'so_tiet_giang_day', 'so_tiet_thuc_hanh', 'so_tiet_li_thuyet', 'so_tiet_TH_ngoai_lop_hoc', 'id_bac', 'status'], 'integer'],
            [['hoc_ki'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        if(User::isAdmin())
             $query = NhiemVuBac::find();
        else
            $query= NhiemVuBac::find()->where(['id_gv'=>User::getTecher()]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_gv' => $this->id_gv,
            'id_lop' => $this->id_lop,
            'id_mon_hoc' => $this->id_mon_hoc,
            'so_dvht' => $this->so_dvht,
            'so_tiet_giang_day' => $this->so_tiet_giang_day,
            'so_tiet_thuc_hanh' => $this->so_tiet_thuc_hanh,
            'so_tiet_li_thuyet' => $this->so_tiet_li_thuyet,
            'so_tiet_TH_ngoai_lop_hoc' => $this->so_tiet_TH_ngoai_lop_hoc,
            'id_bac' => $this->id_bac,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'hoc_ki', $this->hoc_ki]);

        return $dataProvider;
    }
}
