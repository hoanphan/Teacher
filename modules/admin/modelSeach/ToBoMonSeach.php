<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\To_Bo_Mon;

/**
 * ToBoMonSeach represents the model behind the search form about `app\models\To_Bo_Mon`.
 */
class ToBoMonSeach extends To_Bo_Mon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_to_bo_mon', 'id_khoa'], 'integer'],
            [['ten'], 'safe'],
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
        $query = To_Bo_Mon::find();

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
            'id_to_bo_mon' => $this->id_to_bo_mon,
            'id_khoa' => $this->id_khoa,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten]);

        return $dataProvider;
    }
}
