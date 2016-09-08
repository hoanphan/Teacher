<?php

namespace app\modules\admin\modelSeach;

use app\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BangV;

/**
 * BangVSeach represents the model behind the search form about `app\models\BangV`.
 */
class BangVSeach extends BangV
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gv', 'so_gio_chuan', 'status'], 'integer'],
            [['noi_dung', 'thoi_gian_thuc_hien'], 'safe'],
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
            $query = BangV::find();
        else
            $query= BangV::find()->where(['id_gv'=>User::getTecher()]);
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
            'so_gio_chuan' => $this->so_gio_chuan,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'noi_dung', $this->noi_dung])
            ->andFilterWhere(['like', 'thoi_gian_thuc_hien', $this->thoi_gian_thuc_hien]);

        return $dataProvider;
    }
}
