<?php

namespace app\modules\admin\modelSeach;

use app\models\Teacher;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BangIii;

/**
 * BangIiiSeach represents the model behind the search form about `app\models\BangIii`.
 */
class BangIiiSeach extends BangIii
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gv', 'status'], 'integer'],
            [['ten', 'nhiem_thu', 'so_gio_chuan'], 'safe'],
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
        $query = BangIii::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ten', $this->ten])
            ->andFilterWhere(['like', 'nhiem_thu', $this->nhiem_thu])
            ->andFilterWhere(['like', 'so_gio_chuan', $this->so_gio_chuan]);

        return $dataProvider;
    }

    /**
     * @return int
     */
    public function getNameTeacher($key)
    {
        $teacher=Teacher::findOne($key);
        if(isset($teacher))
            return $teacher->ho_ten;
        else
            return"Unknown";
    }
}
