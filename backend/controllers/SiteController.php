<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
//-------------------------
use common\models\Kas;
use common\models\Santri;
use common\models\Syahriyah;
use yii\helpers\Html;
use yii\db\ActiveRecord;

/* @var $model common\models\Santri */
/**
 * Site controller
 */
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
				'only' => ['login', 'logout', 'error','index', 'beranda','tunggakan', 'data_santri', 'syahriyah', 'kas', 'formulir'],
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
						'roles' => ['?'],
                    ],
                    [
                        'actions' => [  'logout', 
                                        'index',
                                        'index_mod', 
                                        'create_mod_sy',
                                        'create_mod_kas',
                                        'update', 
                                        'beranda',
                                        'tunggakan', 
                                        'data_santri', 
                                        'syahriyah', 
                                        'kas', 
                                        'formulir'],
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
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
//---------------------------------------------------- I N D E X ----------------
    public function actionIndex()
    {
        return $this->render('index');

    }
//----------------------------------------------------------------------


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $this->layout = 'main-login';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
//------------------------------------------------------
	public function actionBeranda($pesan = 'selamat datang')
    {
		$db = Yii::$app->db;
		$kass = $db ->createCommand('SELECT * FROM kas WHERE id_transaksi=1')
                    ->queryOne();
		//-----------------------------------------
		//$query = Kas::find();
		//$kas = $query->orderBy('id_transaksi')
		//	->all();
			
		return $this->render('beranda', [
		//	'kas' => $kas,
			'kas' => $kass,
		]);
	//-------------------------------------------
    }
	
	public function actionTunggakan()
    {
       $tunggakan2 = Santri::find()
       ->where(['<', 'posisi', '0'])
       ->orderBy('posisi')
       ->all();
	
        return $this->render('tunggakan',[
            'tunggakan2' => $tunggakan2,
        ]);
		
    }
	
	public function actionData_santri()
    {
        $santri2 = Santri::find()->all();

        return $this->render('data_santri',[
            'santri2' => $santri2,
        ]);
    }
	
	public function actionSyahriyah()
    {
        $db = Yii::$app->db;
        $bayar = $db ->createCommand('SELECT sy.no_syahriyah, sy.banyak, sa.nama, sy.tgl, sa.tarif 
                                        FROM santri sa, syahriyah sy 
                                        WHERE sa.no_induk = sy.no_induk
                                        ORDER BY sy.tgl')
					->queryAll();

        return $this->render('syahriyah',[
            'bayar' => $bayar,
        ]);
    }
	
	public function actionKas()
    {
        $date = date('Y-m-d');

		$kas2 = Kas::find()
		      ->where(['like', 'tgl', '2016-06'])
		      ->orderBy('tgl')
		      ->all();

        return $this->render('kas',[
            'kas2' => $kas2,
            'date' => $date,
			
        ]);
    }
	
	public function actionFormulir()
    {
		//$model = new Santri();
		$this->render('create_mod', [
			'model' => $model,
		]);
    }
	//------------------------------------------------------
}
