<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estoque;

/**
 * EstoqueSearch represents the model behind the search form of `app\models\Estoque`.
 */
class EstoqueSearch extends Estoque
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tipolanc', 'data'], 'safe'],
            [['qtde', 'produto_id'], 'integer'],
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
        $query = Estoque::find();

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
            'id' => $this->id,
            'produto_id' => $this->produto_id,
            'qtde' => $this->qtde,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'tipolanc', $this->tipolanc]);

        return $dataProvider;
    }
}
