<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lop;

/**
 * LopSeach represents the model behind the search form about `app\models\Lop`.
 */
class LopSeach extends Lop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lop', 'si_so', 'status'], 'integer'],
            [['ten_lop'], 'safe'],
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
        $query = Lop::find();

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
            'id_lop' => $this->id_lop,
            'si_so' => $this->si_so,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ten_lop', $this->ten_lop]);

        return $dataProvider;
    }
}
