<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property integer $idEquipo
 * @property integer $idMarca
 * @property integer $idModelo
 * @property integer $idTipoEquipo
 * @property integer $idEstado
 * @property string $serie
 * @property string $fecCompra
 * @property string $fecMantemiento
 * @property integer $idEmpleado
 *
 * @property Estado $idEstado0
 * @property Marca $idMarca0
 * @property Modelo $idModelo0
 * @property Tipoequipo $idTipoEquipo0
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMarca', 'idModelo', 'idTipoEquipo', 'idEstado', 'serie', 'fecCompra'], 'required'],
            [['idMarca', 'idModelo', 'idTipoEquipo', 'idEstado', 'idEmpleado'], 'integer'],
            [['fecCompra', 'fecMantemiento'], 'safe'],
            [['serie'], 'string', 'max' => 50],
            [['idEstado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['idEstado' => 'idEstado']],
            [['idMarca'], 'exist', 'skipOnError' => true, 'targetClass' => Marca::className(), 'targetAttribute' => ['idMarca' => 'idMarca']],
            [['idModelo'], 'exist', 'skipOnError' => true, 'targetClass' => Modelo::className(), 'targetAttribute' => ['idModelo' => 'idModelo']],
            [['idTipoEquipo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoequipo::className(), 'targetAttribute' => ['idTipoEquipo' => 'idTipoEquipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEquipo' => 'Id Equipo',
            'idMarca' => 'Marca',
            'idModelo' => 'Modelo',
            'idTipoEquipo' => 'Tipo Equipo',
            'idEstado' => 'Estado',
            'serie' => 'Serie',
            'fecCompra' => 'Fec Compra',
            'fecMantemiento' => 'Fec Mantemiento',
            'idEmpleado' => 'Nombre Empleado',
        ];
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
    public function getIdMarca0()
    {
        return $this->hasOne(Marca::className(), ['idMarca' => 'idMarca']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModelo0()
    {
        return $this->hasOne(Modelo::className(), ['idModelo' => 'idModelo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoEquipo0()
    {
        return $this->hasOne(Tipoequipo::className(), ['idTipoEquipo' => 'idTipoEquipo']);
    }
    public function getIdEmpleado0()
    {
        return $this->hasOne(Empleado::className(), ['idEmpleado' => 'idEmpleado']);
    }
}
