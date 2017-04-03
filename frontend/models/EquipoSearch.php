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
            [['idEquipo', 'idMarca', 'idModelo', 'idTipoEquipo', 'idEstado', 'idEmpleado'], 'integer'],
            [['serie', 'fecCompra', 'fecMantemiento'], 'safe'],
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

        // grid filtering conditions
        $query->andFilterWhere([
            'idEquipo' => $this->idEquipo,
            'idMarca' => $this->idMarca,
            'idModelo' => $this->idModelo,
            'idTipoEquipo' => $this->idTipoEquipo,
            'idEstado' => $this->idEstado,
            'fecCompra' => $this->fecCompra,
            'fecMantemiento' => $this->fecMantemiento,
            'idEmpleado' => $this->idEmpleado,
        ]);

        $query->andFilterWhere(['like', 'serie', $this->serie]);

        return $dataProvider;
    }
}
