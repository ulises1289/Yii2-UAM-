<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property integer $idEmpleado
 * @property string $nombre
 * @property string $apellidos
 * @property string $cedula
 * @property integer $idEstado
 * @property integer $idDpto
 *
 * @property Departamento $idDpto0
 * @property Estado $idEstado0
 * @property Estado $idEstado1
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'cedula', 'idEstado', 'idDpto'], 'required'],
            [['idEstado', 'idDpto'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['apellidos'], 'string', 'max' => 100],
            [['cedula'], 'string', 'max' => 20],
            [['idDpto'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['idDpto' => 'idDpto']],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEmpleado' => 'Id Empleado',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'cedula' => 'Cedula',
            'idEstado' => 'Id Estado',
            'idDpto' => 'Id Dpto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDpto0()
    {
        return $this->hasOne(Departamento::className(), ['idDpto' => 'idDpto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado0()
    {
        return $this->hasOne(Estado::className(), ['idEstado' => 'idEstado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEstado1()
    {
        return $this->hasOne(Estado::className(), ['idEstado' => 'idEstado']);
    }
}
