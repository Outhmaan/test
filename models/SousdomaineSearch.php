<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sousdomaine;

/**
 * SousdomaineSearch represents the model behind the search form of `app\models\Sousdomaine`.
 */
class SousdomaineSearch extends Sousdomaine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_sous_domaine', 'Libellé_sous_domaine', 'Num_Competence'], 'integer'],
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
        $query = Sousdomaine::find();

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
            'Num_sous_domaine' => $this->Num_sous_domaine,
            'Libellé_sous_domaine' => $this->Libellé_sous_domaine,
            'Num_Competence' => $this->Num_Competence,
        ]);

        return $dataProvider;
    }
}
