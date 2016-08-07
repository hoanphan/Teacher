<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhongKhoa;

/**
 * PhongKhoaSeach represents the model behind the search form about `app\models\PhongKhoa`.
 */
class PhongKhoaSeach extends PhongKhoa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_khoa', 'ten'], 'integer'],
            [['ten'], 'string','max'=>255],
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
        $query = PhongKhoa::find();

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
            'id_khoa' => $this->id_khoa,
            'ten' => $this->ten,
        ]);

        return $dataProvider;
    }
}
