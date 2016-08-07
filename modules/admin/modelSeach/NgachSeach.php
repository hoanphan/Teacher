<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ngach;

/**
 * NgachSeach represents the model behind the search form about `app\models\Ngach`.
 */
class NgachSeach extends Ngach
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ngach', 'ten_ngach'], 'integer'],
            [['quy_chuan'], 'number'],
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
        $query = Ngach::find();

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
            'id_ngach' => $this->id_ngach,
            'ten_ngach' => $this->ten_ngach,
            'quy_chuan' => $this->quy_chuan,
        ]);

        return $dataProvider;
    }
}
