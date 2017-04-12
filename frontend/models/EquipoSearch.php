<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Equipo;

/**
 * EquipoSearch represents the model behind the search form about `app\models\Equipo`.
 */
class EquipoSearch extends Equipo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idEquipo',], 'integer'],
            [['serie','idEmpleado','idEstado','idTipoEquipo','idMarca','idModelo', 'fecCompra', 'fecMantemiento'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Equipo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idMarca0');
        $query->joinWith('idModelo0');
        $query->joinWith('idTipoEquipo0');
        $query->joinWith('idEstado0');
        $query->joinWith('idEmpleado0');
        
        // grid filtering conditions
        $query->andFilterWhere([
            'idEquipo' => $this->idEquipo,
            //'idMarca' => $this->idMarca,
            //'idModelo' => $this->idModelo,
            //'idTipoEquipo' => $this->idTipoEquipo,
            //'idEstado' => $this->idEstado,
            'fecCompra' => $this->fecCompra,
            'fecMantemiento' => $this->fecMantemiento,
            //'idEmpleado' => $this->idEmpleado,
        ]);

        $query->andFilterWhere(['like', 'serie', $this->serie])
              ->andFilterWhere(['like', 'marca.nombreMarca', $this->idMarca])
              ->andFilterWhere(['like', 'modelo.nombreModelo', $this->idModelo])
              ->andFilterWhere(['like', 'tipoequipo.nombreTipoEquipo', $this->idTipoEquipo])
              ->andFilterWhere(['like', 'estado.nombreEstado', $this->idEstado])
              ->andFilterWhere(['like', 'empleado.nombre', $this->idEmpleado]);

        return $dataProvider;
    }
}
