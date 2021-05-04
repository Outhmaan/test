<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Enseignant;

/**
 * EnseignantSearch represents the model behind the search form of `app\models\Enseignant`.
 */
class EnseignantSearch extends Enseignant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Enseignant'], 'integer'],
            [['Nom_Enseignant', 'Prénom_Enseignant'], 'safe'],
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
        $query = Enseignant::find();

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
            'Num_Enseignant' => $this->Num_Enseignant,
        ]);

        $query->andFilterWhere(['like', 'Nom_Enseignant', $this->Nom_Enseignant])
            ->andFilterWhere(['like', 'Prénom_Enseignant', $this->Prénom_Enseignant]);

        return $dataProvider;
    }
}
