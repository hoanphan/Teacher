<?php

namespace app\modules\admin\modelSeach;

use app\models\Teacher;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DinhMucCuaGiaoVien;
use app\models\User;

/**
 * DinhMucCuaGiaoVienSeach represents the model behind the search form about `app\models\DinhMucCuaGiaoVien`.
 */
class DinhMucCuaGiaoVienSeach extends DinhMucCuaGiaoVien
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_teacher', 'number', 'status'], 'integer'],
            [['name_norms'], 'safe'],
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
        $query ='';
        if(User::isAdmin())
            $query = DinhMucCuaGiaoVien::find();
        else {
            $id_teacher=User::getIdTeacher(Yii::$app->user->id);
            $query = DinhMucCuaGiaoVien::find()->where(['id_teacher' =>$id_teacher]);
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
            'id_teacher' => $this->id_teacher,
            'number' => $this->number,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_norms', $this->name_norms]);

        return $dataProvider;
    }

}
