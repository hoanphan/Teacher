<?php

namespace app\modules\admin\modelSeach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bangx;

/**
 * BangxSeach represents the model behind the search form about `app\models\Bangx`.
 */
class BangxSeach extends Bangx
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gv', 'status'], 'integer'],
            [['noi_dung_giam', 'thoi_gian_thuc_hien'], 'safe'],
            [['so_gio_giam'], 'number'],
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
        $query = Bangx::find();

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
            'so_gio_giam' => $this->so_gio_giam,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'noi_dung_giam', $this->noi_dung_giam])
            ->andFilterWhere(['like', 'thoi_gian_thuc_hien', $this->thoi_gian_thuc_hien]);

        return $dataProvider;
    }
}
