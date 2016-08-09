<?php
/**
 * @copyright Copyright &copy; Alexandr Kozhevnikov (onmotion)
 * @package yii2-telegram
 * Date: 02.08.2016
 */
namespace onmotion\telegram\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property integer $chat_id
 * @property string $action
 */
class Actions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tlgrm_actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chat_id'], 'required'],
            [['chat_id'], 'integer'],
            [['action'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chat_id' => 'User ID',
            'action' => 'Action',
        ];
    }
}