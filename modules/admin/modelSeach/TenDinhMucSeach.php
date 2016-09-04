<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TenDinhMuc;

/**
 * TenDinhMucSeach represents the model behind the search form about `app\models\TenDinhMuc`.
 */
class TenDinhMucSeach extends TenDinhMuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bang_duoc_dinh_muc'], 'integer'],
            [['ten_loai_dinh_muc'], 'safe'],
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
        $query = TenDinhMuc::find();

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
            'bang_duoc_dinh_muc' => $this->bang_duoc_dinh_muc,
        ]);

        $query->andFilterWhere(['like', 'ten_loai_dinh_muc', $this->ten_loai_dinh_muc]);

        return $dataProvider;
    }
}
