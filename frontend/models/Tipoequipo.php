<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoequipo".
 *
 * @property integer $idTipoEquipo
 * @property string $nombreTipoEquipo
 * @property integer $idEstado
 *
 * @property Equipo[] $equipos
 * @property Estado $idEstado0
 */
class Tipoequipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoequipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombreTipoEquipo', 'idEstado'], 'required'],
            [['idEstado'], 'integer'],
            [['nombreTipoEquipo'], 'string', 'max' => 50],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoEquipo' => 'Id Tipo Equipo',
            'nombreTipoEquipo' => 'Nombre Tipo Equipo',
            'idEstado' => 'Id Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipo::className(), ['idTipoEquipo' => 'idTipoEquipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado0()
    {
        return $this->hasOne(Estado::className(), ['idEstado' => 'idEstado']);
    }
}
