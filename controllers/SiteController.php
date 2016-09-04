<?php

namespace app\controllers;

use app\models\Teacher;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PhongKhoa;
use app\models\To_Bo_Mon;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $teacher=new Teacher();
        return $this->render('index',array('teacher'=>$teacher));
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionSearch($id)
    {
        $teacher=Teacher::findOne($id);

        return $this->render('search',array('teacher'=>$teacher));
    }
    public function actionAjax()
    {
        if (isset($_POST['Teacher'])) {
            $str = '
                <table class="table">
                    <thead style="font-weight: bold">
                        <tr>
                            <td>
                                Số thứ tự
                            </td>
                            <td>
                                Họ và tên
                            </td>
                            <td>
                                Phòng Khoa
                            </td>
                            <td>
                                Tổ
                            </td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>';


            $value =$_POST['Teacher']['ho_ten'] ;
            $datas = Teacher::find()->andFilterWhere(['like', 'ho_ten', $value])->all();
            if (count($datas) > 0) {
                for ($i = 0; $i < count($datas); $i++) {
                    $str .= '<tr>
                            <td>
                                ' . ($i + 1) . '
                            </td>
                            <td>
                                ' . $datas[$i]->ho_ten . '
                            </td>
                            <td>
                                ' . Teacher::getTo($datas[$i]->id_Khoa) . '
                            </td>
                            <td>
                                ' . Teacher::getTo($datas[$i]->id_to_bo_mon) . '
                            </td>
                            <td>
                                <a href="' . Url::toRoute(['search', 'id' => $datas[$i]->id_gv]) . '">Xem chi tiết</a>
                            </td>
                         </tr>';
                }
            } else
                $str = 'none';
            if ($str != 'none')
                $str .= '</tbody>
                </table>
            ';
            echo $str;
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionOut()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
