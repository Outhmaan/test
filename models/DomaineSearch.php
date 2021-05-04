<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Domaine;

/**
 * DomaineSearch represents the model behind the search form of `app\models\Domaine`.
 */
class DomaineSearch extends Domaine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_domaine', 'Libellé_domaine', 'Num_sous_domaine'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Domaine::find();

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
            'Num_domaine' => $this->Num_domaine,
            'Libellé_domaine' => $this->Libellé_domaine,
            'Num_sous_domaine' => $this->Num_sous_domaine,
        ]);

        return $dataProvider;
    }
}
