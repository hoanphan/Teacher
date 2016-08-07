<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\teacher;

/**
 * TeacherSeach represents the model behind the search form about `app\models\teacher`.
 */
class TeacherSeach extends teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gv', 'id_to_bo_mon', 'id_Khoa', 'dinh_muc', 'id_ngach'], 'integer'],
            [['ho_ten'], 'safe'],
            [['he_so_luong'], 'number'],
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
        $query = teacher::find();

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
            'id_gv' => $this->id_gv,
            'id_to_bo_mon' => $this->id_to_bo_mon,
            'id_Khoa' => $this->id_Khoa,
            'dinh_muc' => $this->dinh_muc,
            'he_so_luong' => $this->he_so_luong,
            'id_ngach' => $this->id_ngach,
        ]);

        $query->andFilterWhere(['like', 'ho_ten', $this->ho_ten]);

        return $dataProvider;
    }
}
