<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tipoequipo;

/**
 * TipoequipoSearch represents the model behind the search form about `app\models\Tipoequipo`.
 */
class TipoequipoSearch extends Tipoequipo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTipoEquipo'], 'integer'],
            [['nombreTipoEquipo', 'idEstado'], 'safe'],
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
        $query = Tipoequipo::find();

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
        
        $query->joinWith('idEstado0');
        
        // grid filtering conditions
        $query->andFilterWhere([
            'idTipoEquipo' => $this->idTipoEquipo,
            //'idEstado' => $this->idEstado,
        ]);

        $query->andFilterWhere(['like', 'nombreTipoEquipo', $this->nombreTipoEquipo])
              ->andFilterWhere(['like', 'estado.nombreEstado', $this->idEstado]);

        return $dataProvider;
    }
}
