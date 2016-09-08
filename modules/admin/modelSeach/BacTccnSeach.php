<?php

namespace app\modules\admin\modelSeach;

use app\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BacTccn;

/**
 * BacTccnSeach represents the model behind the search form about `app\models\BacTccn`.
 */
class BacTccnSeach extends BacTccn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gv', 'id_lop', 'so_dvht', 'so_tiet_giang_day', 'so_tiet', 'Qc_de_nghi', 'status'], 'integer'],
            [['id_mon_hoc', 'hoc_ki'], 'safe'],
            [['he_so_lop_dong'], 'number'],
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
        $query='';
        if(User::isAdmin()) {
            $query = BacTccn::find();
        }
        else
        {
            $query=BacTccn::find()->where(['id_gv'=>User::getTecher()]);
        }
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
            'so_dvht' => $this->so_dvht,
            'so_tiet_giang_day' => $this->so_tiet_giang_day,
            'so_tiet' => $this->so_tiet,
            'he_so_lop_dong' => $this->he_so_lop_dong,
            'Qc_de_nghi' => $this->Qc_de_nghi,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'id_mon_hoc', $this->id_mon_hoc])
            ->andFilterWhere(['like', 'hoc_ki', $this->hoc_ki]);

        return $dataProvider;
    }
}
