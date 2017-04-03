<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $idEstado
 * @property string $nombreEstado
 *
 * @property Departamento[] $departamentos
 * @property Empleado[] $empleados
 * @property Empleado[] $empleados0
 * @property Equipo[] $equipos
 * @property Marca[] $marcas
 * @property Modelo[] $modelos
 * @property Tipoequipo[] $tipoequipos
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombreEstado'], 'required'],
            [['nombreEstado'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEstado' => 'Id Estado',
            'nombreEstado' => 'Nombre Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados0()
    {
        return $this->hasMany(Empleado::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipo::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcas()
    {
        return $this->hasMany(Marca::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModelos()
    {
        return $this->hasMany(Modelo::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoequipos()
    {
        return $this->hasMany(Tipoequipo::className(), ['idEstado' => 'idEstado']);
    }
}
