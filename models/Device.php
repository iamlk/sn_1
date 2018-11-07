<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property int $id
 * @property string $gsensor_no 传感器批次号
 * @property string $gsensor_name 传感器厂家
 * @property string $pcb_no PCB板批次号
 * @property string $mac MAC地址
 * @property string $version 版本类型
 * @property string $hospital 客户医院
 * @property string $office 应用科室
 * @property string $bed_no 床位号
 * @property string $sn 硬件序列号
 * @property string $sn_tip 标签序列号
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gsensor_no', 'gsensor_name', 'pcb_no', 'hospital', 'office', 'sn_tip'], 'string', 'max' => 20],
            [['mac', 'sn'], 'string', 'max' => 60],
            [['bed_no'], 'string', 'max' => 10],
            [['sn'], 'unique'],
            [['sn_tip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gsensor_no' => '传感器批次号',
            'gsensor_name' => '传感器厂家',
            'pcb_no' => 'PCB板批次号',
            'mac' => 'MAC地址',
            'version' => '版本类型',
            'hospital' => '客户医院',
            'office' => '应用科室',
            'bed_no' => '床位号',
            'sn' => '硬件序列号',
            'sn_tip' => '标签序列号',
        ];
    }
}
