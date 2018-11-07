<?php

namespace app\controllers;

use app\models\Device;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    private function check(){
        $session = Yii::$app->session;
        if($session->get('u'))
            return ;
        else
            return $this->redirect('/');
    }

    public function actionDelete(){
        $this->check();
        $ids = $_POST['chkItem'];
        foreach($ids as $id){
            $model = Device::findOne($id);
            $model->delete();
        }
        return $this->redirect('/');
    }

    public function actionLogin(){
        $this->layout = false;
        if(@$_POST['p']=='123456'){
            $session = Yii::$app->session;
            $session->set('u',1);
            return $this->redirect('/');
        }
        return $this->render('login');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->check();
        $where = '';
        $count = Device::find()->where($where)->count();
        $list = Device::find()->where($where)->all();
        return $this->render('index',['list'=>$list,'count'=>$count]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionEdit($id)
    {
        $this->check();
        $model = Device::findOne($id);
        if($_POST){
            $model->attributes = $_POST;
            $model->save();
            $save = true;
        }else{
            $save = false;
        }
        return $this->render('edit',['model'=>$model,'save'=>$save]);
    }

    public function actionUpload(){
        if(!file_exists('./uploads')){
            mkdir('./uploads',0777,true);
        }
        $fileName = "./uploads/".date("Y-m-d H_i_s").'.xls';
        move_uploaded_file($_FILES["file"]["tmp_name"],$fileName);
        $list = \moonland\phpexcel\Excel::import($fileName, ['setFirstRecordAsKeys'=>true]);
        $i = 0;
        foreach($list as $i => $data){
            if($i==0) continue;
            if(empty($data['gsensor_no'])) break;
            $model = new Device();
            $model->attributes = $data;
            $model->save();
            print_r($model->getFirstErrors());
        }
        echo $i;
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionImport()
    {
        $this->check();
        return $this->render('import');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionLogout()
    {
        $session = Yii::$app->session;
        $session->destroy();
        return $this->redirect('/site/login');
    }
}
