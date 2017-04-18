<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $idModelo
 * @property string $nombreModelo
 * @property integer $idEstado
 *
 * @property Equipo[] $equipos
 * @property Estado $idEstado0
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombreModelo', 'idEstado'], 'required'],
            [['idEstado'], 'integer'],
            [['nombreModelo'], 'string', 'max' => 50],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idModelo' => 'Id Modelo',
            'nombreModelo' => 'Modelo',
            'idEstado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipo::className(), ['idModelo' => 'idModelo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado0()
    {
        return $this->hasOne(Estado::className(), ['idEstado' => 'idEstado']);
    }
}
