<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property integer $idMarca
 * @property string $nombreMarca
 * @property integer $idEstado
 *
 * @property Equipo[] $equipos
 * @property Estado $idEstado0
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombreMarca', 'idEstado'], 'required'],
            [['idEstado'], 'integer'],
            [['nombreMarca'], 'string', 'max' => 50],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMarca' => 'Id Marca',
            'nombreMarca' => 'Nombre Marca',
            'idEstado' => 'Id Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipo::className(), ['idMarca' => 'idMarca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado0()
    {
        return $this->hasOne(Estado::className(), ['idEstado' => 'idEstado']);
    }
}
